<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    public function form(Request $req){
      switch ($req->input('gender')) {
        case 'm':
          $gender='Mężczyzna';
          break;
        case 'w':
          $gender='Kobieta';
          break;
        default:
          $gender='-';
          break;
      }
      $tab=[
        'name'=>$req->input('name'),
        'email'=>$req->input('email'),
        'pass'=>$req->input('pass'),
        'gender'=>$gender
      ];
      return view('form', $tab);
    }
}
