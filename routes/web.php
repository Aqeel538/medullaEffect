<?php

use App\Http\Controllers\freelancer\FreelancerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\SingleUserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\individual\Auth\RegistrationControllerInd;
use App\Http\Controllers\freelancer\Auth\FreelancerRegistrationController;
use App\Http\Controllers\company\Auth\CompanyRegistrationController;
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
    //--------------- Admin Dashboard Routes Start ---------------\\

    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('adminDashboard');

    // Individuals
    Route::get('admin/user/index', [AdminController::class, 'users_index'])->name('users_index');
    Route::get('admin/user/detail/{id}', [AdminController::class, 'users_detail'])->name('users_detail');
    Route::get('admin/user/status/{status}/{id}', [AdminController::class, 'changeStatus']);

    // Freelancers
    Route::get('admin/freelancer/index', [AdminController::class, 'freelancer_index'])->name('admin.freelancer.index');
    Route::get('admin/freelancer/detail/{id}', [AdminController::class, 'freelancer_detail'])->name('admin.freelancer.detail');
    Route::get('admin/freelancer/status/{status}/{id}', [AdminController::class, 'freelancerChangeStatus']);

    // Companies
    Route::get('admin/companies/index', [AdminController::class, 'companies_index'])->name('admin.companies.index');
    Route::get('admin/companies/detail/{id}', [AdminController::class, 'companies_detail'])->name('admin.companies.detail');
    Route::get('admin/companies/status/{status}/{id}', [AdminController::class, 'companiesChangeStatus']);

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

    //User Seeing
    Route::get('individual/user', [AdminController::class, 'individual_user'])->name('individual_user');

    //--------------- Admin Dashboard Routes End ---------------\\
});


// Auth Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/questinare', [SingleUserController::class, 'questinare'])->name('questinare');
    Route::post('/submit/questionair', [RegistrationControllerInd::class, 'submit_questionair'])->name('submit.questionair');
    Route::post('individual/update/profileImage', [RegistrationControllerInd::class, 'edit_image']);
});

// Individual Auth routes
Route::middleware(['auth', 'isIndividual'])->group(function () {
    Route::get('/profile', [SingleUserController::class, 'profile'])->name('profile');
    Route::post('/update/profile', [RegistrationControllerInd::class, 'update_user_profile'])->name('update.user.profile');

});
//Freelancer Routes
Route::middleware(['auth', 'isFreelancer'])->group(function () {
    Route::get('/freelancer/profile', [FreelancerController::class, 'freelancer_profile'])->name('freelancer.profile');
    Route::get('control/panel', [FreelancerController::class, 'control_panel'])->name('control.panel');
    Route::get('/all/businesses', [FreelancerController::class, 'businesses_list'])->name('businesses.list');
    Route::get('/business/details', [FreelancerController::class, 'business_details'])->name('business.details');
    Route::get('/chatbot', [FreelancerController::class, 'chatBot_page'])->name('chatbot');
    Route::get('/freelancer/listing', [FreelancerController::class, 'freelancers_listing'])->name('freelancer.listing.frontend');
    Route::get('/freelancer/details', [FreelancerController::class, 'freelancer_details'])->name('freelancer.details');
    Route::get('/about/service', [FreelancerController::class, 'about_service'])->name('about.service');
    Route::get('/add/service', [FreelancerController::class, 'add_a_service'])->name('add.service');
    Route::get('/edit/service/{id}', [FreelancerController::class, 'edit_a_service'])->name('edit.service');
    Route::post('/update/service', [FreelancerController::class, 'update_a_service'])->name('update.service');
    Route::get('/pouse/service/{id}', [FreelancerController::class, 'pouse_a_service'])->name('pouse.service');
    Route::post('/add/new/service', [FreelancerController::class, 'add_new_service'])->name('add.new.service');
    Route::get('/notifications', [FreelancerController::class, 'see_notifications'])->name('see.notifications');
});

//--------------- Unauthenticated Routes Start ---------------\\
Route::get('/advance/fillter', [SingleUserController::class, 'advance_fillter'])->name('advance.fillter');
Route::get('/applied', [SingleUserController::class, 'applied'])->name('applied');
Route::get('/companay', [SingleUserController::class, 'companay'])->name('companay');
Route::get('/freelancer', [SingleUserController::class, 'freelancer'])->name('freelancer');
Route::get('/tagline', [SingleUserController::class, 'tagline'])->name('tagline');
Route::get('/', [SingleUserController::class, 'index'])->name('index');
Route::get('/profile2', [SingleUserController::class, 'profile2'])->name('profile2');
Route::get('/viewJob', [SingleUserController::class, 'viewJob'])->name('viewJob');
Route::get('/viewJobs', [SingleUserController::class, 'viewJobs'])->name('viewJobs');
Route::post('/individual/create', [RegistrationControllerInd::class, 'create'])->name('individual.create');
Route::post('/freelancer/create', [FreelancerRegistrationController::class, 'create'])->name('freelancer.create');
Route::post('/company/create', [CompanyRegistrationController::class, 'create'])->name('company.create');
Route::middleware(['guest'])->group(function () {
    Route::get('/individual', [SingleUserController::class, 'individual'])->name('individual');
});
//--------------- Unauthenticated Routes End ---------------\\