<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin;
use App\Http\Controllers\admin\CategoriesController;

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


Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');

Route::get('/home', function (){
    return view('home');
})->middleware('auth');

Route::get('/admin/categories', [App\Http\Controllers\admin\CategoriesController::class, 'index'])->name('admin.categories');
Route::get('/admin/categories/store', [App\Http\Controllers\admin\CategoriesController::class, 'store'])->name('admin.categories.store');


Auth::routes();
