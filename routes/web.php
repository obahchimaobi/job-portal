<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'login_page'])->name('login.page')->middleware('redirect.if.authenticated');
Route::get('/register', [AuthController::class, 'register_page'])->name('register.page')->middleware('redirect.if.authenticated');

// Auth Routes
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login-candidate', [CandidateController::class, 'candidate_login'])->name('login.candidate');
Route::post('/login-employer', [EmployerController::class, 'employer_login'])->name('login.employer');

// Jobs Routes
Route::get('/jobs', [JobController::class, 'jobs'])->name('find.job');

// Candidates Routes
Route::get('/candidates', [PageController::class, 'candidates'])->name('candidates');

// Pages Routes
Route::get('/about-us', [PageController::class, 'about_us'])->name('about-us');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::middleware(['candidate'])->group(function () {
    Route::get('/candidate-dashboard', [CandidateController::class, 'candidate_dashboard'])->name('candidate.dashboard');
    Route::get('/candidate-logout', [CandidateController::class, 'candidate_logout'])->name('candidate.logout');
    Route::get('/candidate-profile', [CandidateController::class, 'candidate_profile'])->name('candidate.profile');
});

Route::middleware(['employer'])->group(function () {
    Route::get('/dashboard', [EmployerController::class, 'employer_dashboard'])->name('employer.dashboard');
    Route::get('/logout', [EmployerController::class, 'employer_logout'])->name('employer.logout');
});
