<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\SingleUserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\individual\Auth\RegistrationControllerInd;
use App\Http\Controllers\Auth\VerificationController;
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

Route::post('/email/verification', [VerificationController::class, 'userEmailActivation'])->name('verify.otp');
Route::get('/verifyAccount', [VerificationController::class, 'verifyAccount'])->name('verify.account');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('adminDashboard');

    // Users
    Route::get('user/index', [AdminController::class, 'users_index'])->name('users_index');
    Route::get('user/detail/{id}', [AdminController::class, 'users_detail'])->name('users_detail');
    Route::get('user/detail/{status}/{id}', [AdminController::class, 'changeStatus']);
});

Route::get('/advance/fillter', [SingleUserController::class, 'advance_fillter'])->name('advance.fillter');
Route::get('/applied', [SingleUserController::class, 'applied'])->name('applied');
Route::get('/companay', [SingleUserController::class, 'companay'])->name('companay');
Route::get('/freelancer', [SingleUserController::class, 'freelancer'])->name('freelancer');
Route::get('/individual', [SingleUserController::class, 'individual'])->name('individual');
Route::get('/tagline', [SingleUserController::class, 'tagline'])->name('tagline');

Route::get('/', [SingleUserController::class, 'index'])->name('index');
Route::get('/profile/{id}', [SingleUserController::class, 'profile'])->name('profile');
// Route::get('/profile_view', [SingleUserController::class, 'profile'])->name('profile.view');
Route::get('/profile2', [SingleUserController::class, 'profile2'])->name('profile2');
Route::get('/questinare/{id}', [SingleUserController::class, 'questinare'])->name('questinare');
Route::get('/viewJob', [SingleUserController::class, 'viewJob'])->name('viewJob');
Route::get('/viewJobs', [SingleUserController::class, 'viewJobs'])->name('viewJobs');

// Individual Routes
Route::post('/individual/create', [RegistrationControllerInd::class, 'create'])->name('individual.create');
Route::post('/submit/questionair/{id}', [RegistrationControllerInd::class, 'submit_questionair'])->name('submit.questionair');
Route::post('/update/profile/{id}', [RegistrationControllerInd::class, 'update_user_profile'])->name('update.user.profile');

// Freelancer Routes
// Route::post('freelancer/create', [])