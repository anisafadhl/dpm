<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/organization', [PageController::class, 'organization'])->name('organization');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');

Route::post('/login', [PageController::class, 'login'])->name('login');
Route::post('/logout', [PageController::class, 'logout'])->name('logout');