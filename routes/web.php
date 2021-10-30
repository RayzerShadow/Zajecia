<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Form;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wsb', function(){
  // return view('wsb');
  // return 'test';
  // return ['name' => 'Janusz', 'surname' => 'Nowak'];
  return view('wsb', ['name' => 'Janusz', 'surname' => 'Nowak']);
});

Route::get('/pages/{x}', function ($x) {
  $pages = [
    'about' => 'Informacje o stronie',
    'home' => 'Strona domowa',
    'contact' => 'jan@o2.pl'
  ];

  return $pages[$x];
});

Route::get('/address/{city?}/{street?}/{zipCode?}', function (string $city="brak danych", string $street="-", int $zipCode=null) {
  $zipCode=substr($zipCode, 0, 2)."-".substr($zipCode, 2, 3);
  echo <<< L
    Kod pocztowy: $zipCode miasto: $city<br>
    Ulica: $street<br>
    <hr>
L;
})->name('address');

Route::redirect('adres', '/address');
Route::redirect('/adres/{city?}/{street?}/{zipCode?}', '/address/{city?}/{street?}/{zipCode?}');

Route::prefix('admin')->group(function(){
  Route::get('/home/{name}', function($name){
    echo "Witaj $name na stronie administracyjnej";
  })->where(['name' => '[A-Za-z]+']);

  Route::get('/users', function(){
    echo "<h3>Strona z użytkownikami</h3>";
  });
});

Route::get('/site/{x}', [App\Http\Controllers\WsbSite::class, 'index']);
Route::get('/drives/{drive}', [PageController::class, 'drives']);
Route::view('/userform', 'userform');
// Route::get('UserController', [UserController::class, 'form']);
Route::get('Form', [Form::class, 'form']);
// test
