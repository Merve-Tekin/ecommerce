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

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Admin Dashboard
Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
    Route::get('/',[\App\Http\Controllers\AdminController::class,'admin'])->name('admin');

//Banner Section
    Route::resource('/banner',App\Http\Controllers\BannerController::class);
//Category Section
    Route::resource('/category',App\Http\Controllers\CategoryController::class);
    Route::post('category_status',[App\Http\Controllers\CategoryController::class,'categoryStatus'])->name('category.status');


});
