<?php
use App\Http\Middleware\isadmin;



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

Route::middleware(['isadmin'])->group(function () {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminController@index');
    Route::any('/users', [Modules\Admin\Http\Controllers\UserController ::class, 'users']);
    Route::get('/search', [Modules\Admin\Http\Controllers\UserController ::class, 'users']);
    Route::get('/users/views/{slug}', [Modules\Admin\Http\Controllers\UserController ::class, 'view']);
    Route::get('/users/create', [Modules\Admin\Http\Controllers\UserController ::class, 'create']);
    Route::post('store', [Modules\Admin\Http\Controllers\UserController ::class, 'store']);
    Route::get('/users/edit/{slug}', [Modules\Admin\Http\Controllers\UserController ::class, 'edit']);
    Route::post('update', [Modules\Admin\Http\Controllers\UserController ::class, 'update']);
    Route::get('delete/{slug}', [Modules\Admin\Http\Controllers\UserController ::class, 'destroy']);
    });
    });
