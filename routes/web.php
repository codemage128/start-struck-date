<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;



Route::prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/users', [IndexController::class, 'users'])->name('users');
    Route::get('/add-user', [IndexController::class, 'addUser'])->name('add-user');
    Route::get('/edit-user', [IndexController::class, 'editUser'])->name('edit-user');
    Route::get('/membership', [IndexController::class, 'membership'])->name('membership');
});
