<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    // Route::get('/profile/{userId}', [RegisterController::class, 'showProfile'])->name('profile');
});

// Auth middleware is used to ensure only authenticated users can access these routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
    //passwords
    Route::get('/change-password', [PasswordController::class, 'changePassword'])->name('password.change');
    Route::post('/change-password', [PasswordController::class, 'updatePassword'])->name('password.update');

    //products
    Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class,'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class,'edit']);
    Route::put('/products/{id}/update', [ProductController::class,'update']);
    Route::delete('/products/{id}/delete', [ProductController::class,'destroy']);
    Route::get('/products/{id}/show', [ProductController::class,'show']);

    //profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    

});

// Route::get('/export-products', [ProductController::class, 'export'])->name('export.products');

Route::get('/users', [UserController::class, 'index'])->name('users.index');





