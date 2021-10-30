<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WsbSite extends Controller
{
  public function index($x){
    // return 'WSB Kontroler';
    // return ['name' => 'Janusz', 'surname' => 'Nowak'];
    $tab = ['name' => 'Janusz', 'surname' => 'Nowak'];
    return $tab[$x];
  }
}
