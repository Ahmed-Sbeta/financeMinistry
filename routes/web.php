<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\MinistrieController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\LoginController;
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
//Auth

Route::post('/logout',[LoginController::class, 'logout'])->name('logout'); //logout button
Route::post('/login',[LoginController::class, 'login'])->name('login'); //login button
Route::get('/login',[HomeController::class, 'login']); //login view

//
// Route::middleware('auth')->group(function () {

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('ministries/create/{id}', [ItemController::class, 'create'])->name('ministries.create');
Route::resource('ministries', MinistrieController::class)->except(['create']);
Route::resource('reports', ReportController::class);
Route::get('items/create/{id}', [ItemController::class, 'create'])->name('items.create');
Route::post('items/store/{id}', [ItemController::class, 'store'])->name('items.store');
Route::resource('items', ItemController::class)->except(['create','store']);
Route::resource('decisions', DecisionController::class);
Route::resource('notifications', NotificationController::class);
Route::resource('users', UserController::class);

// });
