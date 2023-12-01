<?php

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
    return redirect()->route('login');
});

Auth::routes();

Route::post('/login_user', [App\Http\Controllers\WebController::class, 'login_user'])->name('login_user');

Route::post('/user_register', [App\Http\Controllers\WebController::class, 'user_register'])->name('user_register');

Route::post('/user_register', [App\Http\Controllers\WebController::class, 'user_register'])->name('user_register');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/warehouse', [App\Http\Controllers\HomeController::class, 'warehouse'])->name('warehouse');
Route::get('/fetch-sub-category-id2', [App\Http\Controllers\HomeController::class, 'searchCategroyListByid2'])->name('searchCategroyListByid2');
Route::get('/fetch-subchild-category-id', [App\Http\Controllers\HomeController::class, 'searchSubCategroyListByid'])->name('searchSubCategroyListByid');
