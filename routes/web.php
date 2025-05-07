<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Carbon\Language;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/change', [LanguageController::class, 'change'])->name('lang.change');

    Route::get('lang/{locale}', function ($locale) {
        if (in_array($locale, ['en', 'bn', 'fr'])) {
            session()->put('locale', $locale);
        }
        dd("Hello World");
        return redirect()->back();
    });

    // web.php or a route file
    Route::get('/lang/change/{lang}', [LanguageController::class, 'change'])->name('lang.change');
});

require __DIR__ . '/auth.php';
