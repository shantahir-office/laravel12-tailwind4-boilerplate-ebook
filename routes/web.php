<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Artisan;
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
// Default Routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('thankyou', [FrontendController::class, 'thankYou'])->name('thankyou');
Route::get('privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('terms-and-conditions', [FrontendController::class, 'termsAndConditions'])->name('terms-and-conditions');




// LP Routes








// Invoice Route
Route::get('react-invoice-payment', [FrontendController::class, 'reactInvoicePayment'])->name('react-invoice-payment');

// Book Sequence Route
Route::get('seq-step1', [FrontendController::class, 'seq_step1'])->name('seq-step1');



// Clear Caches Routes
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return "Caches cleared successfully!";
});
