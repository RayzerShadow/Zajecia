<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WsbSite extends Controller
{
    public function index($key){
      // return ['name' => 'Janusz', 'surname' => 'Nowak'];
      $data = ['name' => 'Janusz', 'surname' => 'Nowak'];
      return $data[$key];
    }
}
