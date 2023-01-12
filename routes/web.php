<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\SingleUserController;
use App\Http\Controllers\Auth\RegisterController;
use Faker\Guesser\Name;
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

Route::get('/index', function () {
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

    // User Tags
    Route::get('user/tag', [AdminController::class, 'users_tag'])->name('users_tag');
    Route::get('user/tag/form', [AdminController::class, 'users_tag_form'])->name('users_tag_form');
    Route::post('user/tag/store', [AdminController::class, 'users_tag_store'])->name('users_tag_store');
    Route::get('user/tag/edit/{id}', [AdminController::class, 'users_tag_edit'])->name('users_tag_edit');
    Route::post('user/tag/editstore', [AdminController::class, 'users_tag_editstore'])->name('users_tag_editstore');
    Route::any('user/tag/delete/{id}', [AdminController::class, 'users_tag_delete'])->name('users_tag_delete');

    // User Category
    Route::get('user/category', [AdminController::class, 'users_category'])->name('users_category');
    Route::get('user/category/form', [AdminController::class, 'users_category_form'])->name('users_category_form');
    Route::post('user/category/store', [AdminController::class, 'users_category_store'])->name('users_category_store');
    Route::get('user/category/edit/{id}', [AdminController::class, 'users_category_edit'])->name('users_category_edit');
    Route::post('user/category/editstore', [AdminController::class, 'users_category_editstore'])->name('users_category_editstore');
    Route::any('user/category/delete/{id}', [AdminController::class, 'users_category_delete'])->name('users_category_delete');

    // Services
    Route::get('services', [AdminController::class, 'services'])->name('services');
    Route::get('service/form', [AdminController::class, 'service_form'])->name('service_form');
    Route::post('service/store', [AdminController::class, 'service_store'])->name('service_store');
    Route::get('service/edit/{id}', [AdminController::class, 'service_edit'])->name('service_edit');
    Route::post('service/editstore', [AdminController::class, 'service_editstore'])->name('service_editstore');
    Route::any('service/delete/{id}', [AdminController::class, 'service_delete'])->name('service_delete');

    // Jobs
    Route::get('jobs', [AdminController::class, 'jobs'])->name('jobs');
    Route::get('jobs/form', [AdminController::class, 'jobs_form'])->name('jobs_form');
    Route::post('jobs/store', [AdminController::class, 'jobs_store'])->name('jobs_store');
    Route::get('jobs/edit/{id}', [AdminController::class, 'jobs_edit'])->name('jobs_edit');
    Route::post('jobs/editstore', [AdminController::class, 'jobs_editstore'])->name('jobs_editstore');
    Route::any('job/delete/{id}', [AdminController::class, 'job_delete'])->name('job_delete');










});

Route::get('/advance/fillter', [SingleUserController::class, 'advance_fillter'])->name('advance.fillter');
Route::get('/applied', [SingleUserController::class, 'applied'])->name('applied');
Route::get('/companay', [SingleUserController::class, 'companay'])->name('companay');
Route::get('/freelancer', [SingleUserController::class, 'freelancer'])->name('freelancer');
Route::get('/individual', [SingleUserController::class, 'individual'])->name('individual');
Route::get('/tagline', [SingleUserController::class, 'tagline'])->name('tagline');

Route::get('/', [SingleUserController::class, 'index'])->name('index');
Route::get('/profile', [SingleUserController::class, 'profile'])->name('profile');
Route::get('/profile2', [SingleUserController::class, 'profile2'])->name('profile2');
Route::get('/questinare', [SingleUserController::class, 'questinare'])->name('questinare');
Route::get('/viewJob', [SingleUserController::class, 'viewJob'])->name('viewJob');
Route::get('/viewJobs', [SingleUserController::class, 'viewJobs'])->name('viewJobs');

Route::post('/individual/create', [RegisterController::class, 'create'])->name('individual.store');


