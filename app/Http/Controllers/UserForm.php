<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{
    public function user(Request $req){
      // return $req;
      // return $req->input();
      // return $req['pass'];
      return $req->input('pass');
    }
}
