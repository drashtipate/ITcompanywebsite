<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [AboutController::class,'about'])->name('about');
Route::get('/services', [ServiceController::class,'service'])->name('service');
// Route::get('/service/details', [ServiceController::class,'servicedetails'])->name('servicedetails');
// Route::get('/service/details/{id}', [ServiceController::class,'servicedetails'])->name('servicedetails');
Route::get('/service/details/webapp', [ServiceController::class,'web_app'])->name('webapp');
Route::get('/service/details/mobileapp', [ServiceController::class,'mobile_app'])->name('mobileapp');
Route::get('/service/details/design', [ServiceController::class,'ui_ux_design'])->name('design');
// Route::get('/blog', [BlogController::class,'blog'])->name('blog');
Route::get('/blog', [BlogController::class,'blog'])->name('blog');

Route::get('/blogdetail/{id}', [BlogController::class,'blogdetails'])->name('blogDetail');

Route::get('/contactus', [ContactController::class,'contact'])->name('contact');
Route::post('/contactus', [ContactController::class, 'addcontact'])->name('send.email');


