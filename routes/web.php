<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/display', [App\Http\Controllers\postcontroller::class,'display'])->name('display')

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'display'])->name('display');

Route::get('/morelistings/{id}', [App\Http\Controllers\postcontroller::class, 'show'])->name('morelistings');

Route::get('/create', [App\Http\Controllers\postcontroller::class, 'create'])->name('create');

Route::post('/post', [App\Http\Controllers\postcontroller::class, 'store']);

Route::get('/display', [App\Http\Controllers\HomeController::class, 'display'])->name('display');

Route::delete('/delete/{id}', [App\Http\Controllers\postcontroller::class, 'destroy']);

Route::delete('/deletecover/{id}', [App\Http\Controllers\postcontroller::class, 'destroy']);

Route::delete('/deleteimage/{id}', [App\Http\Controllers\postcontroller::class, 'deleteimage']);

Route::get('/edit/{id}',[App\Http\Controllers\postcontroller::class,'edit']);

Route::put('/update/{id}',[App\Http\Controllers\postcontroller::class,'update']);