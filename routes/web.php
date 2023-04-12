<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\VerticalController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FromController;
use App\Http\Controllers\CreativeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TeamController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::resource('offer', OfferController::class);
    Route::post('/offer/update-status', [OfferController::class, 'updateStatus'])->name('offer.update-status');
    Route::post('/offer/get-offer', [OfferController::class, 'getOffer'])->name('offer.get-offer');
    Route::resource('network', NetworkController::class);
    Route::resource('vertical', VerticalController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('from', FromController::class);
    Route::resource('link', LinkController::class);
    Route::resource('creative', CreativeController::class);
    Route::resource('team', TeamController::class);
});

require __DIR__.'/auth.php';
