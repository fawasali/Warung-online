<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/homes', function () {
    return view('dosen/web');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/contact', function () {
    return view('contact');
});

route::get('/newdosen','DosenController@indexi');

Route::resource('/CRUD', 'DosenController' );

Route::get('/dosens/{id}','DosenController@show');

route::get('/profiledosen', 'DosenController@profile');

route::get('/matkul','DosenController@matkul');

route::get('/karya','DosenController@karya');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
