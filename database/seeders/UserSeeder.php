<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Иванов И. И.',
        'email' => 'ivanov@mail.ru',
        'password' => Hash::make('ivanov@mail.ru'),
        'role' => 'admin',
      ]);
      DB::table('users')->insert([
        'name' => 'Петров П. П.',
        'email' => 'petrov@mail.ru',
        'password' => Hash::make('petrov@mail.ru'),
        'role' => 'manager',
      ]);
      DB::table('users')->insert([
        'name' => 'Сидоров С. С.',
        'email' => 'sidorov@mail.ru',
        'password' => Hash::make('sidorov@mail.ru'),
        'role' => 'manager',
      ]);
      DB::table('users')->insert([
        'name' => 'Сергеев С. С.',
        'email' => 'sergeev@mail.ru',
        'password' => Hash::make('sergeev@mail.ru'),
        'role' => 'contractor',
      ]);
      DB::table('users')->insert([
        'name' => 'Андреев А. А.',
        'email' => 'andreev@mail.ru',
        'password' => Hash::make('andreev@mail.ru'),
        'role' => 'contractor',
      ]);

    }
  }
