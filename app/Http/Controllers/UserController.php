<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

  public function passwordGenerate ($user_id) {
    $str_password = Str::random(8);
    $hash_password = Hash::make($str_password);
    $user = User::find($user_id);
    $user->password = $hash_password;
    $user->save();
    dump($str_password);
    dump($hash_password);
    dump($user_id);
  }

  public function recovery (Request $request) {
    $recovery = 'N';
    if (isset($request['email'])) {
      $user = User::where('email', trim($request['email']))->get();
      if ($user->count()) {
        if ($user[0]->email) {
          $recovery = $user[0]->email;
          $this->passwordGenerate($user[0]->id);
        }
      } else {
        $recovery = 'Y';
      }
    }
    return view('login/recovery', [
      'recovery' => $recovery,
    ]);
  }

  public function registration (Request $request) {
    $reg_error = false;
    $check = false;
    if (trim($request->password) != trim($request->confirm_password)) {
      $reg_error = 'Пароли не совпадают!';
    } else {
      if ($request->email) {
        $check = User::where('email', trim($request->email))->count();
        if ($check !=0) {
          $reg_error = 'Пользователь с таким email уже существует!';
        } else {
          $user = new User;
          $user->email = $request->email;
          $user->name = $request->name;
          $user->password = $request->password;
          $user->role = 'contractor';
          $user->save();
          Auth()->login($user);
          $reg_error = 'Регистрация прошла успешно!';
          return redirect('/');
        }
      }
    }
    return view('login/reg', [
      'reg_error' => $reg_error,
      'check' => $check,
    ]);
  }

  public function login (Request $request)
  {

    if ($request->logout) {
      auth()->logout();
    }

    $login_error = false;
    if (isset($request->user_login) ) {
      $login_error = $this->userLogin($request);
      if (!$login_error) {
        return redirect()->intended('/');
      }
    }
    return view('login/auth', [
      'tab' => $this->tabSelector($request),
      'login_error' => $login_error,
    ]);
  }

  public function userLogin (Request $request)
  {
    if (auth()->attempt([
      'email' => $request->email,
      'password' => $request->password,
    ])) {
      return false;
    } else {
      return true;
    }
  }

  public function tabSelector(Request $request)
  { 
    if (!$request->tab) {
      $request->tab = 'login';
    }
    return $request->tab;
  }

}
