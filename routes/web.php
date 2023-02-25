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

//     Route::get('/dashbaord/blog/data')->name('products.data');
//     Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
// });


Route::view('/', 'index')->name('index');
Route::view('/services', 'services')->name('services');
Route::view('/products', 'products')->name('products');
Route::view('/blog', 'blog')->name('blog');
Route::view('/dcg', 'dcg')->name('dcg');
Route::view('/contact', 'contact')->name('contact');

// Route::get('/apply/yproducts', [App\Http\Controllers\HomeController::class, 'products'])->name('products');
// Route::post('/apply/save_product/{product}', [App\Http\Controllers\HomeController::class, 'save'])->name('form.save');
Route::get('/apply/form', [App\Http\Controllers\HomeController::class, 'form'])->name('form');
