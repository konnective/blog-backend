<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;

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


Route::get('getView', [ProductController::class, 'getView']);

//nlogs route
Route::get('blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('blog/{id}', [BlogController::class, 'edit'])->name('edit.blog');
Route::post('blog/update', [BlogController::class, 'update'])->name('blog.update');


//for intro section
Route::get('intro', [SectionController::class, 'intro'])->name('intro');
Route::post('intro/update', [SectionController::class, 'introUpdate'])->name('intro.update');
