<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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


Route::view('/', 'welcome')->name('welcome');
Route::view('/contacto', 'contacto')->name('contact');

Route::get('/blog',[BlogController::class,'index'])->name('posts.index');
Route::get('/blog/add',[BlogController::class,'addPost'])->name('posts.add');
Route::get('/blog/{post}',[BlogController::class, 'show'])->name("posts.show");



Route::view('/about', 'about')->name('about');