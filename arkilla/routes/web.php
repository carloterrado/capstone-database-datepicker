<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\UserLoginController;
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

Route::get('/', [DateController::class,'index']);
// Route::get('/admin', [AdminController::class,'index']);
// Route::get('/renterLogin', [UserLoginController::class, 'index']);

// Route::get('/',function(){ 
//     return view('pages.admindashboard');
// });
