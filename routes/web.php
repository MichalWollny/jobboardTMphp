<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, CompanyController, CategoryController, ApplicationController, JobController};


Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/recruiters', [UserController::class, 'indexRecruiters']);
// JSON API for developers or debugging
Route::get('/jobs/json', [JobController::class, 'json']);
Route::get('/users/json', [UserController::class, 'json']);
Route::get('/companies/json', [CompanyController::class, 'json']);
Route::get('/categories/json', [CategoryController::class, 'json']);
Route::get('/applications/json', [ApplicationController::class, 'json']);
// HTML page for users
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/applications', [ApplicationController::class, 'index']);
