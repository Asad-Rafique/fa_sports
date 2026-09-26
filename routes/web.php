<?php

use App\Http\Controllers\Admin\AdminEnquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CraftController;
use App\Http\Controllers\DisciplinesController;
use App\Http\Controllers\GearIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegacyController;
use App\Http\Controllers\PerformanceGearController;
use App\Http\Controllers\PlaybookController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\TeamLabController;
use App\Http\Controllers\PartnershipRequestController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CustomizeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/performance-gear', [PerformanceGearController::class, 'index'])->name('performance-gear');
Route::get('/disciplines', [DisciplinesController::class, 'index'])->name('disciplines');
Route::get('/team-lab', [TeamLabController::class, 'index'])->name('team-lab');
Route::get('/gear-index', [GearIndexController::class, 'index'])->name('gear-index');
Route::get('/legacy', [LegacyController::class, 'index'])->name('legacy');
Route::get('/playbook', [PlaybookController::class, 'index'])->name('playbook');
Route::get('/craft', [CraftController::class, 'index'])->name('craft');

Route::get('/connect', [ContactController::class, 'index'])->name('connect');
Route::post('/connect', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('connect.store');

Route::get('/request-a-quote', [QuoteController::class, 'index'])->name('quote');
Route::post('/request-a-quote', [QuoteController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('quote.store');

// Protect this group with 'auth' (e.g. Laravel Breeze) once admin login is set up.
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/enquiries', [AdminEnquiryController::class, 'index'])->name('enquiries.index');
    Route::get('/enquiries/{inquiry}', [AdminEnquiryController::class, 'show'])->name('enquiries.show');
    Route::patch('/enquiries/{inquiry}', [AdminEnquiryController::class, 'update'])->name('enquiries.update');
    Route::get('/enquiries/{inquiry}/attachment', [AdminEnquiryController::class, 'downloadAttachment'])->name('enquiries.attachment');
});
Route::get('/partnership', [PartnershipRequestController::class, 'index'])->name('partnership');

Route::post('/partnership', [PartnershipRequestController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('partnership.store');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

Route::get('/customize', [CustomizeController::class, 'index'])
    ->name('customize');

Route::post('/customize', [CustomizeController::class, 'store'])
    ->name('customize.store');


