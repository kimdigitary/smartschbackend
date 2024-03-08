<?php

use App\Http\Controllers\Role\PermissionController;
use App\Http\Controllers\Role\RoleController;
use App\Livewire\Roles\Permissions;
use App\Livewire\Roles\Roles;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'dashboard')
    ->middleware(['auth', 'verified']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// roles and permissions
Route::get('roles', [RoleController::class, 'index'])
->middleware(['auth'])
->name('roles');

Route::get('permissions', [PermissionController::class, 'index'])
->middleware(['auth'])
->name('permissions');

require __DIR__.'/auth.php';
