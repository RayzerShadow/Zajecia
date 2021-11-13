<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function drives($drive){
    $drives = [
      'ssd' => 'Dysk SSD',
      'hdd' => 'Dysk HDD',
      'fdd' => 'Dyskietka'
    ];
    // return $drives[$drive];
    dd($drives);
  }
}
