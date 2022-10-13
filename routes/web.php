<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Users;

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
Route::middleware(['Users'])->group(function () {
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    
Route::post("/logout",[App\Http\Controllers\HomeController::class,"store"])->name("logout");
Route::get("/register", [App\Http\Controllers\UsersController::class, "register"])->name("register");
Route::post("/store", [App\Http\Controllers\UsersController::class, "store"])->name("store");




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
