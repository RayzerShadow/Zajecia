<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function db(){
      // return DB::table('users')->get('name');

      // return DB::table('users')
      // ->where('surname', 'nowak')
      // ->get();

      // return DB::table('users')->count();

      // return DB::table('users')->first();

      // return DB::table('users')->find(2);

      // return DB::table('users')
      // ->where('surname', 'nowak')
      // ->delete();

      // return DB::table('users')
      // ->insert(
      //   [
      //     'name'=>'Anna1',
      //     'surname'=>'Paweł1',
      //     'birthday'=>'1981-01-09'
      //   ]
      // );

      // return DB::table('users')
      // ->where('name', 'Anna1')
      // ->update(
      //   [
      //     'name'=>'Krystyna',
      //     'surname'=>'Kowalska',
      //     'birthday'=>'1999-05-01'
      //   ]
      // );

      // return DB::table('users')->max('weight');

      // return DB::table('users')->min('weight');

      // return DB::table('users')->sum('weight');

      // return number_format(DB::table('users')->avg('weight'), 2);

      // return DB::table('users')->count();

      // return DB::table('users')->count('weight');

      return DB::table('users')
      ->select('users.name', 'users.surname', 'cities.city', 'states.state')
      ->join('cities', 'users.city_id', 'cities.id')
      ->join('states', 'cities.state_id', 'states.id')
      ->get();


    }
}
