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
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('blog', function () {
    return view('blog');
});
Route::get('post', function () {
    return view('post');
})->name('post') ;
Route::get('contact', function () {
    return view('contact');
});
Route::get('services', function () {
    return view('services');
});
Route::get('popularplace', function () {
    return view('popularplace');
});
Route::get('historical', function () {
    return view('historical');
});
Route::get('beach', function () {
    return view('beach');
});
Route::get('nairobi', function () {
    return view('nairobi');
});
Route::get('more', function () {
    return view('more');
});
Route::get('mombasa', function () {
    return view('mombasa');
});
Route::get('culture', function () {
    return view('culture');
});
Route::get('greatfood', function () {
    return view('greatfood');
});

Route::get('admin/home', function () {
    return view('admin.home');
});
Route::resource('admin/post','App\Http\Controllers\Admin\PostController');
Route::resource('admin/tag','App\Http\Controllers\Admin\TagController');
Route::resource('admin/category','App\Http\Controllers\Admin\CategoryController');
Route::resource('admin/service','App\Http\Controllers\Admin\serviceController');
Route::resource('admin/popular','App\Http\Controllers\Admin\PopularController');
Route::resource('admin/historical','App\Http\Controllers\Admin\HistoricalController');


