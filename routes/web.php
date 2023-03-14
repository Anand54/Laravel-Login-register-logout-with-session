<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {return view('home');});
Route::get('/home', function () {return view('home');});
Route::get('/about', function () {return view('about');});
Route::get('/portfolio', function () {return view('portfolio');});
Route::get('/contact', function () {return view('contact');});
// Route::get('/login', function () {return view('login');});
// Route::get('/register', function () {return view('register');});

//these are route throw controller
Route::get ('/login',[UserController::class,'login']);
Route::get ('/register',[UserController::class,'register']);
Route::post ('/register-user',[UserController::class,'registerUser'])->name('register-user');
Route::post ('/login-user',[UserController::class,'loginUser'])->name('login-user');
//to route dashboard page
Route::get ('/dashboard',[UserController::class,'dashboard'])->middleware('isLoggedIn');
//to route logout page
Route::get ('/logout',[UserController::class,'logout']);
