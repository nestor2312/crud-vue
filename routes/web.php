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
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\PersonController::class, 'index'])->name('person.home');
Route::group(['prefix' => 'person'],function(){
  
    Route::post('/store', [App\Http\Controllers\PersonController::class, 'store'])->name('person.store');
    Route::get('/delete/{persons}', [App\Http\Controllers\PersonController::class, 'delete'])->name('person.delete');
    Route::get('/edit/{persons}', [App\Http\Controllers\PersonController::class, 'edit'])->name('person.edit');
    Route::post('/update/{persons}', [App\Http\Controllers\PersonController::class, 'update'])->name('person.update');
});
Route::get('city', [App\Http\Controllers\CityController::class, 'index']);
Route::group(['prefix' => 'city'],function(){
    Route::post('/store', [App\Http\Controllers\CityController::class, 'store'])->name('city.store');
    Route::get('/delete/{cities}', [App\Http\Controllers\CityController::class, 'delete'])->name('city.delete');
    Route::get('/edit/{cities}', [App\Http\Controllers\CityController::class, 'edit'])->name('city.edit');
    Route::post('/update/{cities}', [App\Http\Controllers\CityController::class, 'update'])->name('city.update');
});
Route::get('son', [App\Http\Controllers\SonController::class, 'index']);
Route::group(['prefix' => 'son'],function(){
    Route::post('/store', [App\Http\Controllers\SonController::class, 'store'])->name('son.store');
    Route::get('/delete/{sons}', [App\Http\Controllers\SonController::class, 'delete'])->name('son.delete');
    Route::get('/edit/{sons}', [App\Http\Controllers\SonController::class, 'edit'])->name('son.edit');
    Route::post('/update/{sons}', [App\Http\Controllers\SonController::class, 'update'])->name('son.update');
});




