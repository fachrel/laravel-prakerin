<?php

use App\Livewire\DashboardPage;
use App\Livewire\LoginPage;
use App\Livewire\UsersPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.login');
// });

// Route::get('/', function () {
//     return view('pages.dashboard');
// })->name('admin')->middleware('auth');

Route::get('/', DashboardPage::class)->name('home')->middleware('auth');
Route::get('/users', UsersPage::class)->middleware('auth');
Route::get('/login', LoginPage::class)->name('login')->middleware('guest');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
