<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantManager\TableController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/users', [AuthController::class,'index'])->name('users.index');
Route::post('/users', [AuthController::class,'store'])->name('users.store');
Route::put('/users{id}' ,[AuthController::class,'update'])->name('users.update');
Route::delete('/users{id}' ,[AuthController::class,'destroy'])->name('users.destroy');
Route::get('/dining-table', [TableController::class, 'indexView'])->name('dining-table.index');
Route::post('/dining-table', [TableController::class, 'store'])->name('dining-table.store');
Route::put('/dining-table/{id}', [TableController::class, 'update'])->name('dining-table.update');
Route::delete('/dining-table/{id}', [TableController::class, 'destroy'])->name('dining-table.destroy');
