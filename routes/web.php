<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;




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
// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', [FrontController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function() {
    Route::resource('/admin/gambar', GambarController::class);
    Route::resource('/admin/roles', RoleController::class);
    Route::resource('/admin/users', UserController::class);

    Route::post('carigambar', [FrontController::class, 'carigambar'])->name('carigambar');


});