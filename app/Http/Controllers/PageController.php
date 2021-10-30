<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function drives($x){
      $drives = [
        'ssd' => 'Dysk SSD',
        'hdd' => 'Dysk HDD',
        'fdd' => 'Dyskietka'
      ];
      return $drives[$x];
    }
}
