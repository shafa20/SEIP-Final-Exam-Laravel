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
    return view('frontend.home');
})->name('home');


Route::get('/admin', function () {
    return view('backend.dashboard');
})->name('backenddashboard');

Route::group(['prefix' =>'/product'],function(){
    Route::get('/add','App\Http\Controllers\BackEnd\ProductController@create')->name('addproduct');
    Route::post('/insert','App\Http\Controllers\BackEnd\ProductController@store')->name('insertproduct');
    
    Route::get('/manageproduct','App\Http\Controllers\BackEnd\ProductController@index')->name('manageproduct');

    Route::get('/edit/{id}','App\Http\Controllers\BackEnd\ProductController@edit')->name('editproduct');
    Route::post('/update/{id}','App\Http\Controllers\BackEnd\ProductController@update')->name('updateproduct');
     Route::get('/delete/{id}','App\Http\Controllers\BackEnd\ProductController@delete')->name('delete');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth','safa'])->name('dashboard');

require __DIR__.'/auth.php';
