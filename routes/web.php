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
    return view('shop.index');
});

Route::get('/about', function (){
    return view('shop.about');
})->name('about');
Route::get('/service', function (){
    return view('shop.service');
})->name('service');
Route::get('/contact', function (){
    return view('shop.contact');
})->name('contact');
Route::get('/admin-dashboard', function (){
    return view('admin.index');
})->name('admin');



