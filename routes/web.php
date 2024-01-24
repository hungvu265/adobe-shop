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

Route::get('/', [\App\Http\Controllers\Store\StoreController::class, 'index'])->name('store.index');
Route::get('info', [\App\Http\Controllers\Store\StoreController::class, 'info'])->name('store.info');
Route::get('shop', [\App\Http\Controllers\Store\StoreController::class, 'shop'])->name('store.shop');

//Auth
Route::get('admin-login',function (){
    return view('admin.auth.login');
});
Route::get('admin-logout',[\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name(ADMIN_LOGOUT);
Route::post('admin-login',[\App\Http\Controllers\Admin\AdminController::class, 'login'])->name(ADMIN_LOGIN);

//Admin Dashboard

//Admin Management
Route::prefix('admin')->middleware('admin')->group(function (){
    Route::prefix('product')->group(function (){

        Route::get('dashboard',[\App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name(ADMIN_DASHBOARD);
        Route::get('index',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name(ADMIN_PRODUCT_INDEX);
        Route::get('', [\App\Http\Controllers\Admin\AdminController::class, 'create'])->name(ADMIN_PRODUCT_CREATE);
        Route::get('{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit'])->name(ADMIN_PRODUCT_EDIT);
        Route::post('', [\App\Http\Controllers\Admin\AdminController::class, 'store'])->name(ADMIN_PRODUCT_STORE);
        Route::post('{id}', [\App\Http\Controllers\Admin\AdminController::class, 'update'])->name(ADMIN_PRODUCT_UPDATE);
    });
});
