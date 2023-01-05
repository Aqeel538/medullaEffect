<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('adminDashboard');

    // Users
    Route::get('user/index', [AdminController::class, 'users_index'])->name('users_index');
    Route::get('user/detail/{id}', [AdminController::class, 'users_detail'])->name('users_detail');
    Route::get('user/detail/{status}/{id}', [AdminController::class, 'changeStatus']);
});
