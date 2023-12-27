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

Route::get('/', function () { return view('home.index'); })->name('home');
Route::get('/activities', function () { return view('home.activities'); })->name('activities');
Route::get('/farmfood', function () { return view('home.farmfood'); })->name('farmfood');
Route::get('/shop', function () { return view('shop.index'); })->name('shop');
Route::get('/references', function () { return view('home.references'); })->name('references');
Route::get('/contact-us', function () { return view('home.contact'); })->name('contact');
Route::get('/about-us', function () { return view('home.about'); })->name('about');
Route::get('/frequently-asked-questions', function () { return view('home.faq'); })->name('faq');
Route::get('/blog', function () { return view('blog.index'); })->name('blog');
