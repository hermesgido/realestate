<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;




Route::get('/', [HomeControler::class, 'index']);
Route::get('listing-view', [HomeControler::class, 'listingView'])->name('listingView');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/dashboard/home', [AdminController::class, 'index'])->name('admindashboard');

require __DIR__.'/auth.php';
