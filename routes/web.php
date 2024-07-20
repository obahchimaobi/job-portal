<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
Route::get('/register', [AuthController::class, 'register_page'])->name('register.page');

// Auth Routes
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login-candidate', [CandidateController::class, 'candidate_login'])->name('login.candidate');

// Jobs Routes
Route::get('/jobs', [JobController::class, 'jobs'])->name('find.job');

// Candidates Routes
Route::get('/candidates', [PageController::class, 'candidates'])->name('candidates');

// Pages Routes
Route::get('/about-us', [PageController::class, 'about_us'])->name('about-us');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::middleware(['candidate'])->group(function () {
    Route::get('/candidate-dashboard', [CandidateController::class, 'candidate_dashboard'])->name('candidate.dashboard');
});
