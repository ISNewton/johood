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

// Route::get('/', function () {
//     return view('admin.index');
// });

// Route::group(['prefix' => 'dashboard' , 'as' => 'dashboard.'], function () {

//     Route::get('/dashbaord/products/data')->name('products.data');
//     Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'products'])->name('products');
Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('form');
Route::post('/form', [App\Http\Controllers\HomeController::class, 'save'])->name('form.save');