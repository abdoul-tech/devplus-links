<?php

use App\Http\Controllers\LinksController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [LinksController::class, 'index'])->name('home');
Route::get('/links/create', [LinksController::class, 'create'])->name('links.create');
Route::post('/links/store', [LinksController::class, 'store'])->name('links.store');

Route::delete('/links/delete/{link_key}', [LinksController::class, 'destroy'])->name('links.delete');

Route::resource('users', UsersController::class);