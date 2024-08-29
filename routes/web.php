<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\OpinionsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PaymentsController;

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/cursos',[CoursesController::class,'index'])->name('courses.index');
Route::get('/sobre-nosotros',[AboutController::class,'index'])->name('about.index');
Route::get('/opiniones',[OpinionsController::class,'index'])->name('opinions.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::get('/register',[RegisterController::class,'index'])->name('register.index');
Route::get('/pagos',[PaymentsController::class,'index'])->name('payments.index');
