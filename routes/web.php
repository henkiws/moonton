<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::redirect('/','/login');

Route::middleware('auth', 'role:user')->prefix('dashboard')->name('user.dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});

// Route::get('/dashboard', function () {
//     return Inertia::render('User/Dashboard/Index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('prototype')->group(function() {
    route::get('/login', function() {
        return Inertia::render('Prototype/Login');
    })->name('prototype.login');

    route::get('/register', function() {
        return Inertia::render('Prototype/Register');
    })->name('prototype.register');

    route::get('/dashboard', function() {
        return Inertia::render('Prototype/Dashboard');
    })->name('prototype.dashboard');

    route::get('/subscriptionPlan', function() {
        return Inertia::render('Prototype/SubscriptionPlan');
    })->name('prototype.subscriptionPlan');

    route::get('/movie/{slug}', function() {
        return Inertia::render('Prototype/Movie/Show');
    })->name('prototype.movie.show');
});

require __DIR__.'/auth.php';
