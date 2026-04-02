<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('welcome');

Route::get('/msfs', [PageController::class, 'msfs'])->name('msfs');
Route::get('/mission', [PageController::class, 'mission'])->name('mission');
Route::get('/vision', [PageController::class, 'vision'])->name('vision');
Route::get('/admission', [PageController::class, 'admission'])->name('admission');
Route::get('/apply', [ApplicationController::class, 'create'])->name('apply');
Route::post('/apply', [ApplicationController::class, 'store'])->name('apply.store');
Route::get('/fees', [PageController::class, 'fees'])->name('fees');
Route::get('/portal', [PageController::class, 'portal'])->name('portal');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/feedback', [PageController::class, 'feedback'])->name('feedback');
Route::post('/feedback', [PageController::class, 'storeFeedback'])->name('feedback.store');
Route::get('/help-desk', [PageController::class, 'helpDesk'])->name('help-desk');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('home')->group(function () {
    Route::get('/applications', [HomeController::class, 'applications'])->name('home.applications');
    Route::get('/results', [HomeController::class, 'results'])->name('home.results');
    Route::get('/behaviour', [HomeController::class, 'behaviour'])->name('home.behaviour');
    Route::get('/profile', [HomeController::class, 'profile'])->name('home.profile');
});
