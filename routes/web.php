<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->name('admin.')->group(function(){
	Route::view('/login','dashboard.admin.login')->name('login');

});


Route::prefix('user')->name('user.')->group(function(){
	Route::view('register','dashboard.user.register')->name('register');
	Route::view('login','dashboard.user.login')->name('login');
	Route::post('store',[UserController::class,'add'])->name('store');
	Route::post('check',[UserController::class,'index'])->name('check');
	Route::view('home','dashboard.user.home')->name('home');
});


