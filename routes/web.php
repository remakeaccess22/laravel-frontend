<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('inventory', function () {
    return view('inventory.show');
})->name('inventory.show');

Route::get('sales', function () {
    return view('sales.show');
})->name('sales.show');

Route::get('employees', function () {
    return view('personnel.employees');
})->name('personnel.employees');

Route::get('applicants', function () {
    return view('personnel.applicants');
})->name('personnel.applicants');

Route::get('forgot-password', function () {
    return view('auth.forgot-password');

});

Route::get('register', [RegisteredUserController::class, 'create']);
Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store']);
Route::post('logout', [SessionController::class, 'destroy']);

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('dashboard');
});
