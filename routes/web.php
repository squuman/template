<?php

use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SolutionController;
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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/description', [SiteController::class, 'description'])->name('description');
Route::get('/support', [SiteController::class, 'support'])->name('support');
Route::get('/settings', [SettingController::class, 'index'])->name('settings');
Route::post('/setting/save', [SettingController::class, 'settingsSave'])->name('settingsSave');
Route::post('/setting/shop/save',[ShopController::class,'create'])->name('shopSave');
Route::post('/setting/shop/delete',[ShopController::class,'destroy'])->name('shopDelete');
Route::post('/solution/create',[SolutionController::class,'create'])->name('solutionCreate');
