<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function() {
    return view('welcome');
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pages', 'PageController'); //7 rutas


Route::resource('pages', PageController::class);

Route::resource('users', 'UserController')->middleware('auth');