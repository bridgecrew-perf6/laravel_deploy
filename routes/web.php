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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// マルチユーザー認証のため追加
Route::get('/login/admin',[App\Http\Controllers\Auth\LoginController::class,'showAdminLoginForm']);
Route::get('/register/admin',[App\Http\Controllers\Auth\RegisterController::class,'showAdminRegisterForm']);

Route::post('/login/admin',[App\Http\Controllers\Auth\LoginController::class,'adminLogin']);
Route::post('/register/admin',[App\Http\Controllers\Auth\RegisterController::class,'registerAdmin'])->name('admin-register');
Route::get('/insert', [App\Http\Controllers\ShopController::class, 'insert'])->middleware('auth:admin')->name('insert');
Route::post('/create', [App\Http\Controllers\ShopController::class, 'create'])->middleware('auth:admin')->name('create');
Route::get('/list', [App\Http\Controllers\ShopController::class, 'list'])->middleware('auth:admin')->name('list');
Route::get('/edit/{id}', [App\Http\Controllers\ShopController::class, 'edit'])->middleware('auth:admin')->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\ShopController::class, 'update'])->middleware('auth:admin')->name('update');
Route::post('/delete/{id}', [App\Http\Controllers\ShopController::class, 'delete'])->middleware('auth:admin')->name('delete');
Route::post('/search', [App\Http\Controllers\ShopController::class, 'search'])->name('search');
Route::get('/result', [App\Http\Controllers\ShopController::class, 'result'])->name('result');
Route::get('/detail/{id}', [App\Http\Controllers\ShopController::class, 'detail'])->name('detail');

Route::view('/admin','admin')->middleware('auth:admin')->name('admin-home');



