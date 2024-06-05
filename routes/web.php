<?php

use App\Livewire\LoginPage;
use App\Livewire\UsersPage;
use App\Livewire\MajorsPage;
use App\Livewire\JournalsPage;
use App\Livewire\RequestsPage;
use App\Livewire\SettingsPage;
use App\Livewire\StudentsPage;
use App\Livewire\TeachersPage;
use App\Livewire\DashboardPage;
use App\Livewire\IndustriesPage;
use App\Livewire\AttendancesPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;

Route::get('/', DashboardPage::class)->name('home')->middleware('auth');
Route::group(['middleware' => ['role:admin|superadmin']], function () {
    Route::get('/users', UsersPage::class)->middleware('auth');
    Route::get('/students', StudentsPage::class)->middleware('auth');
    Route::get('/teachers', TeachersPage::class)->middleware('auth');
    Route::get('/majors', MajorsPage::class)->middleware('auth');
    Route::get('/industries', IndustriesPage::class)->middleware('auth');

});


Route::get('/requests', RequestsPage::class)->middleware('auth');
Route::get('/settings', SettingsPage::class)->middleware('auth');
Route::get('/attendances', AttendancesPage::class)->middleware('auth');
Route::get('/journals', JournalsPage::class)->middleware('auth');
Route::get('/login', LoginPage::class)->name('login')->middleware('guest');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
