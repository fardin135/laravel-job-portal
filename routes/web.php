<?php


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminUserRole;
use App\Http\Middleware\CompanyUserRole;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\JobsPageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\BlogsPageController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CompanyDashboardController;
use App\Http\Controllers\CandidateDashboardController;
use App\Http\Controllers\CandidateUserController;

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

Route::get('/welcome', function () {
    return view('1_forms.');
});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

//---------------------------------------------------
//Main Pages
Route::get('/', [HomePageController::class, 'home'])->name('home');
Route::get('/about', [AboutPageController::class, 'about'])->name('about');
Route::get('/jobs/{category?}', [JobsPageController::class, 'jobs'])->name('jobs');
Route::get('/blogs', [BlogsPageController::class, 'blogs'])->name('blogs');
Route::get('/contact', [ContactPageController::class, 'contact'])->name('contact');
//====================================================
Route::get('/jobs_form', [JobPostingController::class, 'form_view'])->name('jobs_form');
Route::post('/insert_jobs', [JobPostingController::class, 'insert_jobs'])->name('insert_jobs');
Route::post('/contact_us', [ContactPageController::class, 'contact_us'])->name('contact_us');

// ----------------
Route::post('/jobs/apply', [JobsPageController::class, 'storeJobsApplication'])->name('jobs.storeJobsApplication');
Route::post('/home/apply', [HomePageController::class, 'storeHomeApplication'])->name('home.storeHomeApplication');
Route::post('/candidate/save-basic-info', [CandidateDashboardController::class, 'save_basic_info'])->name('candidate.save_basic_info');
Route::post('/candidate/save-edu-info', [CandidateDashboardController::class, 'save_education_info'])->name('candidate.save_edu_info');
Route::post('/candidate/save-pro-and-exp-info', [CandidateDashboardController::class, 'save_professional_and_experiences_form'])->name('candidate.save_pro_and_exp_info');
Route::get('/candidate/basic-info', [CandidateDashboardController::class, 'candidate_basic_info_form'])->name('candidate.basic_info_form');
Route::get('/candidate/edu-info', [CandidateDashboardController::class, 'candidate_edu_info_form'])->name('candidate.edu_info_form');
Route::get('/candidate/pro-and-exp-info', [CandidateDashboardController::class, 'candidate_professional_and_experiences_form'])->name('candidate.pro_and_exp_info_form');
Route::post('/company/profile-completation', [CompanyDashboardController::class, 'profile_completation'])->name('company.profile-completation');
// Candidate Dashboard
Route::middleware(['auth', 'verified'])->group(function () {

    Route::middleware(['CandidateRoleCheck'])->group(function () {
        Route::get('/candidate/dashboard', [CandidateDashboardController::class, 'candidate_dashboard'])->name('candidate.dashboard');
        Route::get('/candidate/jobs', [CandidateDashboardController::class, 'candidate_jobs'])->name('candidate.jobs');
        Route::get('/candidate/profile', [CandidateDashboardController::class, 'candidate_profile'])->name('candidate.profile');
    });

    Route::middleware(['CompanyRoleCheck'])->group(function () {
        Route::get('/company/dashboard', [CompanyDashboardController::class, 'company_dashboard'])->name('company.dashboard');
        Route::get('/company/jobs', [CompanyDashboardController::class, 'company_jobs'])->name('company.jobs');
        Route::get('/company/profile', [CompanyDashboardController::class, 'company_profile'])->name('company.profile');
        Route::get('/company/plugin', [CompanyDashboardController::class, 'company_plugin'])->name('company.plugin');
    });

    Route::middleware(['AdminRoleCheck'])->group(function () {
        Route::get('/admin/dashboard', [AdminDashboardController::class, 'admin_dashboard'])->name('admin.dashboard');
        Route::get('/admin/companies', [AdminDashboardController::class, 'admin_companies'])->name('admin.companies');
        Route::get('/admin/jobs', [AdminDashboardController::class, 'admin_jobs'])->name('admin.jobs');
        Route::get('/admin/employees', [AdminDashboardController::class, 'admin_employee'])->name('admin.employee');
        Route::get('/admin/blogs', [AdminDashboardController::class, 'admin_blogs'])->name('admin.blogs');
        Route::get('/admin/pages', [AdminDashboardController::class, 'admin_pages'])->name('admin.pages');
        Route::get('/admin/plugins', [AdminDashboardController::class, 'admin_plugins'])->name('admin.plugins');
    });
});



require __DIR__ . '/auth.php';
