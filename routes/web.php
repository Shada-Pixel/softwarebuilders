<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\HomeController;
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


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/cource', 'cource')->name('cource');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/subscribe','subscribe')->name('subscribe');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Service Quatations
Route::group(['prefix' => 'quotations'], function () {
    Route::post('create', [QuotationController::class, 'create'])->name('quotations.create');
});

// User Query
Route::post('/contactUs/send', [QueryController::class, 'store'])->name('contsend');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class,  'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class,  'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class,  'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class,  'destroy'])->name('profile.destroy');

        Route::get('/dashboard', [ProfileController::class,  'dashboard'])->name('profile.dashboard');
        Route::get('/ecources', [ProfileController::class,  'ecources'])->name('profile.ecources');
        Route::get('/mycource', [ProfileController::class,  'mycource'])->name('profile.mycource');
    });



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
