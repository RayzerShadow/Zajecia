<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WsbSite;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserForm;
use App\Http\Controllers\Form;
use App\Http\Controllers\WsbController;
use App\Http\Controllers\UserController;

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
  // return 'wsb';
  // return ['name' => 'Janusz', 'surname' => 'Nowak'];

  return view('wsb', ['name' => 'Janusz', 'surname' => 'Nowak']);
});

Route::get('/pages/{x}', function($x){
  $pages= [
    'about' => 'Informacje o stronie',
    'contact' => 'janusz@wp.pl',
    'home' => 'Strona domowa'
  ];
  return $pages[$x];
});

Route::get('/address/{city?}/{street?}/{zipCode?}', function (string  $city="brak danych", string $street="-", int $zipCode=null) {
    $zipCode=substr($zipCode, 0, 2)."-".substr($zipCode, 2, 3);
    echo <<< RESULT
      Miasto: $city<br>
      Ulica: $street<br>
      Kod pocztowy: $zipCode
RESULT;
})->name('address');

Route::redirect('adres', 'address');
Route::redirect('adres/{city?}/{street?}/{zipCode?}', '/address/{city?}/{street?}/{zipCode?}');

Route::prefix('admin')->group(function(){
  Route::get('/home/{name}', function($name){
    echo "Witaj $name na stronie administracyjnej";
  })->where(['name' => '[A-Za-z]+']);

  Route::get('/users', function(){
    echo "Użytkownicy";
  });
});

Route::redirect('/admin/{name}', '/admin/home/{name}');
// Route::get('/site', [App\Http\Controllers\WsbSite::class, 'index']);
Route::get('/site/{data}', [WsbSite::class, 'index']);
Route::get('/drives/{drive}', [PageController::class, 'drives']);
Route::post('UserForm', [UserForm::class, 'user']);
Route::view('/userform', 'userform');
Route::post('Form', [Form::class, 'form']);

// db
Route::get('db', [WsbController::class, 'db']);
Route::get('users', [UserController::class, 'db']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
