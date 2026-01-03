<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,"index"])->name("home");
Route::get('/about',[homeController::class,"about"])->name("about");
Route::get('/contact',[homeController::class,"contact"])->name("contact");
Route::get('/brand', [homeController::class,"brand"])->name("brand");
Route::get('/login', [homeController::class,"login"])->name("login");
Route::post('/loginCheck', [homeController::class,"loginCheck"])->name("loginCheck");
Route::post('/registerCheck', [homeController::class,"registerCheck"])->name("registerCheck");

Route::get('/product', [productController::class,"index"])->name("product");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
