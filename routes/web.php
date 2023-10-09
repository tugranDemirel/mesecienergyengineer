<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AContactController;

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\FPorjectController;
use App\Http\Controllers\Front\FServiceController;
use App\Http\Controllers\Front\ContactController;
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
Route::middleware('viewShare')->group(function (){
    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::get('/projelerimiz', [FPorjectController::class, 'index'])->name('projects');
    Route::get('/projelerimiz/{slug}', [FPorjectController::class, 'detail'])->name('project.detail');

    Route::get('/hizmetlerimiz', [FServiceController::class, 'index'])->name('services');
    Route::get('/hizmetlerimiz/{slug}', [FServiceController::class, 'detail'])->name('service.detail');
    Route::get('iletisim', [ContactController::class, 'index'])->name('contact');
    Route::post('iletisim', [ContactController::class, 'store'])->name('contact.store');
});


Auth::routes();

Route::middleware('auth')->prefix('admin')->as('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::post('upload', [AdminController::class, 'upload'])->name('upload');
    Route::resource('site-ayarlari', SiteSettingController::class)
        ->only(['index', 'store', 'update']);
    Route::resource('markalarimiz', ClientController::class)
        ->parameter('markalarimiz', 'client');
    Route::resource('proje-kategorisi', CategoryController::class)
        ->parameter('proje-kategorisi', 'category');
    Route::resource('projelerimiz', ProjectController::class)
        ->parameter('projelerimiz', 'project');
    Route::resource('hizmetlerimiz', ServiceController::class)
        ->parameter('hizmetlerimiz', 'service');
    Route::resource('slider', SliderController::class)
        ->parameter('slider', 'slider');
    Route::resource('iletisim', AContactController::class)
        ->parameter('iletisim', 'contact')
        ->only('index', 'show');

});
