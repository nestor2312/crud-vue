<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/person', [App\Http\Controllers\PersonController::class, 'index'])->name('person.home');
Route::group(['prefix' => '/person'],function(){
    Route::post('/store', [App\Http\Controllers\PersonController::class, 'store'])->name('person.store');
    Route::delete('/delete/{person}', [App\Http\Controllers\PersonController::class, 'delete'])->name('person.delete');
    Route::get('/edit/{person}', [App\Http\Controllers\PersonController::class, 'edit'])->name('person.edit');
    Route::post('/update/{person}', [App\Http\Controllers\PersonController::class, 'update'])->name('person.update');
});
Route::get('city', [App\Http\Controllers\CityController::class, 'index']);
Route::group(['prefix' => 'city'],function(){
    Route::post('/store', [App\Http\Controllers\CityController::class, 'store'])->name('city.store');
    Route::delete('/delete/{city}', [App\Http\Controllers\CityController::class, 'delete'])->name('city.delete');
    Route::get('/edit/{city}', [App\Http\Controllers\CityController::class, 'edit'])->name('city.edit');
    Route::post('/update/{city}', [App\Http\Controllers\CityController::class, 'update'])->name('city.update');
});
Route::get('son', [App\Http\Controllers\SonController::class, 'index']);
    Route::group(['prefix' => 'son'],function(){
    Route::post('/store', [App\Http\Controllers\SonController::class, 'store'])->name('son.store');
    Route::delete('/delete/{son}', [App\Http\Controllers\SonController::class, 'delete'])->name('son.delete');
    Route::get('/edit/{son}', [App\Http\Controllers\SonController::class, 'edit'])->name('son.edit');
    Route::post('/update/{son}', [App\Http\Controllers\SonController::class, 'update'])->name('son.update');
});

Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);
    Route::group(['prefix' => 'post'],function(){
    Route::post('/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::delete('/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');
    Route::get('/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::post('/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
});

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::group(['prefix' => 'category'],function(){
    Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::delete('/delete/{category}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/edit/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
});

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);
    Route::group(['prefix' => 'product'],function(){
    Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::delete('/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');
    Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
});

Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);

Route::get('cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
