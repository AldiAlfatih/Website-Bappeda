<?php
<<<<<<< HEAD

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dashboardsuperadmin', function () {
    return Inertia::render('DashboardSuperAdmin');
})->middleware(['auth', 'verified'])->name('dashboardsuperadmin');

Route::get('dashboardadmin', function () {
    return Inertia::render('DashboardAdmin');
})->middleware(['auth', 'verified'])->name('dashboardadmin');

Route::get('dashboardpd', function () {
    return Inertia::render('DashboardPD');
})->middleware(['auth', 'verified'])->name('dashboardpd');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
>>>>>>> aead866 (update day 3 aldi)
