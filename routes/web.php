<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, 'welcomeView'])->name('welcomeView');
Route::get('/category-view', [ViewController::class, 'categoryView'])->name('categoryView');
Route::get('/trending-view', [ViewController::class, 'trendingView'])->name('trendingView');
Route::get('/contact-view', [ViewController::class, 'contactView'])->name('contactView');
Route::get('/login-view', [ViewController::class, 'loginView'])->name('loginView');
Route::get('/signup-view', [ViewController::class, 'signupView'])->name('signupView');
Route::get('/dashboard-view', [ViewController::class, 'dashboardView'])->name('dashboardView')->middleware(['auth']);

Route::post('/signup-user',[UserController::class, 'signupUser'])->name('signupUser');
Route::post('/login-user',[UserController::class, 'loginUser'])->name('loginUser');