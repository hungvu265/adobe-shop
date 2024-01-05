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

Route::get('/', [\App\Http\Controllers\Store\StoreController::class, 'index']);
Route::get('info', [\App\Http\Controllers\Store\StoreController::class, 'info']);

//Auth
Route::get('admin-login',function (){
    return view('admin.auth.login');
});

Route::post('admin-login',[\App\Http\Controllers\Admin\AdminController::class, 'login'])->name(ADMIN_LOGIN);

//Admin Dashboard
Route::get('/admin',[\App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name(ADMIN_DASHBOARD);


