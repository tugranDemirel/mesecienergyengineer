<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\ClientController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->prefix('admin')->as('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::resource('site-ayarlari', SiteSettingController::class)->only(['index', 'store', 'update']);
    Route::resource('markalarimiz', ClientController::class)->parameter('markalarimiz', 'client');
});
