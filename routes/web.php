<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Service Quatations
Route::group(['prefix' => 'quotations'], function () {
    Route::post('create', [QuotationController::class, 'create'])->name('quotations.create');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Resource
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('subscribers', SubscriberController::class);

    // News letters
    Route::group(['prefix' => 'newsletters'], function () {
        Route::get('/', [NewsletterController::class, 'index'])->name('newsletters.index');
        Route::post('/store', [NewsletterController::class, 'store'])->name('newsletters.store');
        Route::get('/show/{newsletter}', [NewsletterController::class, 'show'])->name('newsletters.show');
        Route::post('/send/{newsletter}', [NewsletterController::class, 'send'])->name('newsletters.send');
        Route::delete('/delete/{newsletter}', [NewsletterController::class, 'destroy'])->name('newsletters.destroy');
    });

    // Contuct us query
    Route::group(['prefix' => 'quaries'], function () {
        Route::get('allquaries', [QueryController::class, 'allquaries'])->name('quaries.all');
        Route::get('readed', [QueryController::class, 'readed'])->name('quaries.readed');
        Route::get('unreaded', [QueryController::class, 'unreaded'])->name('quaries.unreaded');
        Route::get('read/{query}', [QueryController::class, 'read'])->name('quaries.read');
        Route::post('replay', [QueryController::class, 'replay'])->name('quaries.replay');
        Route::patch('toggle/{query}', [QueryController::class, 'toggle'])->name('toggleQuery');
        Route::delete('delete/{query}', [QueryController::class, 'destroy'])->name('deleteQuery');
    });

    // Service Quatations
    Route::group(['prefix' => 'quotations'], function () {
        Route::get('/', [QuotationController::class, 'index'])->name('quotations.all');
        Route::get('/show/{quotation}', [QuotationController::class, 'show'])->name('quotations.show');
        Route::delete('/delete/{quotation}', [QuotationController::class, 'destroy'])->name('quotations.destroy');
    });

});

require __DIR__.'/auth.php';
