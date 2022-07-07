<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;

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






Route::get('/', [AuthController::class, 'index'])->name('landingpage');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('mainpage', [SubjectController::class, 'mainpage'])->name('mainpage');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('new', [AuthController::class,'subject'])->name('new');


Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');


Route::post('/createSubject', [SubjectController::class, 'createSubject'])->name('createSubject');

















