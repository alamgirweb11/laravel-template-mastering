<?php

use App\Http\Controllers\HomePageController;
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
// declare route for frontend template 
Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/login', [HomePageController::class, 'login'])->name('login');
Route::get('/register', [HomePageController::class, 'register'])->name('register');
Route::get('/category', [HomePageController::class, 'category'])->name('category');
Route::get('/blog', [HomePageController::class, 'blog'])->name('blog');
Route::get('/about', [HomePageController::class, 'about'])->name('about');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');

// declare route for backend template
Route::get('/admin',[HomePageController::class, 'dashboard'])->name('dashboard');
Route::get('/setting',[HomePageController::class, 'setting'])->name('setting');
Route::get('/profile',[HomePageController::class, 'profile'])->name('profile');
Route::get('/adminlogin',[HomePageController::class, 'adminlogin'])->name('adminlogin');
Route::get('/charts',[HomePageController::class, 'charts'])->name('charts');
Route::get('/table',[HomePageController::class, 'table'])->name('table');