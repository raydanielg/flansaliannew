<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
Route::get('/news/{slug}', [PageController::class, 'newsDetail'])->name('news.show');
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

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Applications
    Route::get('/applications', [AdminController::class, 'applications'])->name('admin.applications');
    Route::put('/applications/{application}/status', [AdminController::class, 'updateApplicationStatus'])->name('admin.applications.status');

    // Users
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::delete('/users/{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');

    // Fees
    Route::get('/fees', [AdminController::class, 'fees'])->name('admin.fees');
    Route::post('/fees', [AdminController::class, 'storeFee'])->name('admin.fees.store');
    Route::put('/fees/{fee}', [AdminController::class, 'updateFee'])->name('admin.fees.update');
    Route::delete('/fees/{fee}', [AdminController::class, 'deleteFee'])->name('admin.fees.delete');

    // News
    Route::get('/news', [AdminController::class, 'news'])->name('admin.news');
    Route::post('/news', [AdminController::class, 'storeNews'])->name('admin.news.store');
    Route::put('/news/{news}', [AdminController::class, 'updateNews'])->name('admin.news.update');
    Route::delete('/news/{news}', [AdminController::class, 'deleteNews'])->name('admin.news.delete');

    // Help Desk
    Route::get('/help-desk', [AdminController::class, 'helpDesk'])->name('admin.helpdesk');
    Route::post('/help-desk', [AdminController::class, 'storeFaq'])->name('admin.helpdesk.store');
    Route::put('/help-desk/{faq}', [AdminController::class, 'updateFaq'])->name('admin.helpdesk.update');
    Route::delete('/help-desk/{faq}', [AdminController::class, 'deleteFaq'])->name('admin.helpdesk.delete');

    // Feedback / Contact
    Route::get('/feedback', [AdminController::class, 'feedback'])->name('admin.feedback');
    Route::delete('/feedback/{feedback}', [AdminController::class, 'deleteFeedback'])->name('admin.feedback.delete');

    // Gallery
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('admin.gallery');
    Route::post('/gallery', [AdminController::class, 'storeGallery'])->name('admin.gallery.store');
    Route::put('/gallery/{gallery}', [AdminController::class, 'updateGallery'])->name('admin.gallery.update');
    Route::delete('/gallery/{gallery}', [AdminController::class, 'deleteGallery'])->name('admin.gallery.delete');

    // Team
    Route::get('/team', [AdminController::class, 'team'])->name('admin.team');
    Route::post('/team', [AdminController::class, 'storeTeam'])->name('admin.team.store');
    Route::put('/team/{team}', [AdminController::class, 'updateTeam'])->name('admin.team.update');
    Route::delete('/team/{team}', [AdminController::class, 'deleteTeam'])->name('admin.team.delete');

    // Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('admin.settings.update');
});

Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
