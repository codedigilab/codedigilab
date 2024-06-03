<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/ecommerce', function () {
    return view('ecommerce');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/casestudy', function () {
    return view('casestudy');
});

Route::get('/workwithus', function () {
    return view('workwithus');
});

Route::get('/workwithuss', function () {
    return view('workwithuss');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/projectdetails', function () {
    return view('projectdetails');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::post('contact',[App\Admin\Controllers\ContactController::class,'contact']);
Route::post('ecommerce',[App\Admin\Controllers\ContactController::class,'contact']);
Route::post('workwithus',[App\Admin\Controllers\ContactController::class,'contact']);
