<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function login (Request $request)
  {
    $login_error = false;
    if (isset($request->user_login) ) {
      $login_error = $this->userLogin($request);
      if (!$login_error) {
        return redirect()->intended('/');
      }
    }
    return view('login', [
      'tab' => $this->tabSelector($request),
      'login_error' => $login_error,
    ]);
  }

  public function userLogin (Request $request)
  {
    if (Auth::attempt([
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
