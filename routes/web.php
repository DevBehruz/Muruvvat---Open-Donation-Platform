<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\NewsController;
// use App\Http\Controllers\CommentController;
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

Route::get('/',[MainController::class,'home']);
Route::get('/application',[ApplicationController::class,'application']);
Route::get('/charity',[ApplicationController::class,'charity']);
Route::get('/charity-details',[ApplicationController::class,'charityDetails']);
Route::get('/register',[RegisterController::class,'register']);
Route::get('/login',[RegisterController::class,'login']);
Route::get('/account',[RegisterController::class,'account']);

Route::view('/contact', 'contact');


// Route::get('/services',[ContentController::class,'service']);
// Route::get('/blog',[NewsController::class,'newsList']);
// Route::get('/about',[ContentController::class,'about']);
// Route::get('/contact',[CommentController::class,'contact']);
