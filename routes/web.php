<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostConttroller;

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

Route::get('/',[PostConttroller::class, 'index'])->name('app_home');
Route::get('/posts/create',[PostConttroller::class, 'create'])->name('app_create');
Route::post('/posts/strore',[PostConttroller::class, 'store'])->name('app_store');
Route::get('/posts/{id}/show',[PostConttroller::class, 'show'])->name('app_show');
Route::get('/contact',[PostConttroller::class, 'contact'])->name('app_contact');
Route::get('/posts/{id}/delete',[PostConttroller::class, 'delete'])->name('app_delete');
