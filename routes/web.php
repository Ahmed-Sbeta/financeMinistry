<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\MinistrieController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MonthPayedController;
use App\Http\Controllers\NotificationController;
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
Route::get('GetNewCodes/{id}', [HomeController::class, 'GetNewCodes']);

Route::middleware('auth')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/notificationsCheck', [App\Http\Controllers\HomeController::class, 'notifications'])->name('notificationsCheck');
    Route::get('/changeShowNotification', [HomeController::class, 'changeShowNotification'])->name('changeShowNotification');
    Route::get('/yearFilter', [HomeController::class, 'yearFilter'])->name('yearFilter');

    Route::get('ministries/create/{id}', [MinistrieController::class, 'create'])->name('ministries.create');
    Route::post('ministries/store/{id}', [MinistrieController::class, 'store'])->name('ministries.store');
    Route::resource('ministries', MinistrieController::class)->except(['create','store']);
    Route::get('/searchMinistry/{id}', [MinistrieController::class, 'search'])->name('searchministry');
    Route::get('/Dicission_report',[MinistrieController::class,'Dis_report'])->name('DisissionReport');

    Route::resource('reports', ReportController::class)->except(['store']);
    Route::get('search/reports', [ReportController::class, 'store'])->name('searchReports');
    Route::get('search/Decisions', [ReportController::class, 'DecisionsReports'])->name('DecisionsReports');

    Route::get('items/create/{id}', [ItemController::class, 'create'])->name('items.create');
    Route::post('items/store/{id}', [ItemController::class, 'store'])->name('items.store');
    Route::resource('items', ItemController::class)->except(['create','store']);
    Route::resource('decisions', DecisionController::class)->except(['show']);
    Route::get('/download/{id}',[DecisionController::class, 'show'])->name('downloadFile');
    Route::get('/searchDecisions',[DecisionController::class, 'search'])->name('search');

    Route::resource('notifications', NotificationController::class);
    Route::resource('users', UserController::class);
    Route::get('monthPayeds/create/{id}', [MonthPayedController::class, 'create'])->name('monthPayeds.create');
    Route::post('monthPayeds/store/{id}', [MonthPayedController::class, 'store'])->name('monthPayeds.store');
    Route::post('monthPayeds/edit/{id}', [MonthPayedController::class, 'edit'])->name('monthPayeds.edit');
    Route::get('monthPayeds/backTo/{date}/{id}/{num}', [MonthPayedController::class, 'backTo'])->name('monthPayeds.backTo');
    Route::resource('monthPayeds', MonthPayedController::class)->except(['create','store','edit']);

    Route::get('GivenVsspentReport',[ReportController::class,'givenVSspent'])->name('GivenVSspentReport');
    Route::get('moreDetails/{id}',[ReportController::class,'moreDetails'])->name('moreDetailsReport');
    Route::get('searchspentvsgiven',[ReportController::class,'searchspentvsgiven'])->name('searchspentvsgiven');
});
