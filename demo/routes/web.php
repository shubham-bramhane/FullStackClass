<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
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

// get,post,put,patch,delete,

Route::get('/',function(){


    return view('welcome');
});

Route::get('/contact',[ContactController::class,'contact']);
Route::get('/show',[ContactController::class,'show']);
Route::get('/index',[ContactController::class,'index']);


Route::get('/home',[HomeController::class,'index']);
Route::get('/create',[HomeController::class,'create']);


Route::get('/category',[CategoryController::class,'index']);
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/create',[CategoryController::class,'store'])->name('category.store');






Route::get('/about',AboutController::class);

Route::get('/service',ServiceController::class);

Route::get('/course',[CourseController::class,'index']);
Route::get('/course/create',[CourseController::class,'create']);
Route::post('/course/create',[CourseController::class,'store'])->name('course.store');

