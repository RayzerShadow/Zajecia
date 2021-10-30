<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    public function form(Request $req){
      switch ($req->input('gender')) {
        case 'm':
          $gender='mężczyzna';
          break;
        case 'w':
          $gender='kobieta';
          break;
        default:
          $gender='-';
          break;
      }
      $email = $req->input('email');
      $pass = $req->input('pass');
      return form('form', [
            'name' => $req->input('name'),
            'gender' => $gender,
            'email' => $email,
            'pass' => $pass
        ]);
    }
}
