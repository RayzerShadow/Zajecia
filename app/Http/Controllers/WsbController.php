<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WsbController extends Controller
{
    public function db(){
      // return DB::select('SELECT * FROM `users`');

      return DB::table('users')->get();
    }
}
