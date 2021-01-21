<?php

use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('/description', [SiteController::class, 'description'])->name('description');
Route::get('/support', [SiteController::class, 'support'])->name('support');
Route::get('/settings', [SettingController::class, 'index'])->name('settings');
Route::post('/setting/store', [SettingController::class, 'store']);
