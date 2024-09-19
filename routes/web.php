<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OpinionsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/cursos', [CoursesController::class, 'index'])->name('courses.index');
Route::get('/sobre-nosotros', [AboutController::class, 'index'])->name('about.index');
Route::get('/opiniones', [OpinionsController::class, 'index'])->name('opinions.index');
Route::get('/pagos', [PaymentsController::class, 'index'])->name('payments.index');


Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login.index');
Route::post('/login', [LoginController::class, 'validate'])->name('validate');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('validarRegistro');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index')->middleware([\App\Http\Middleware\AdminMiddleware::class]);
