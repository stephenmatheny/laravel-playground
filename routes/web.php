<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::resource('jobs', JobController::class);
Route::view('/contact', 'contact');

// NOTES:
// helpful command: php artisan route:list --except-vendor

// EXAMPLE: for ONLY specific routes
// Route::resource('jobs', JobController::class, [
//     'only' => ['edit']
// ]);

// EXAMPLE: for EXCEPT specific routes
// Route::resource('jobs', JobController::class, [
//     'except' => ['edit']
// ]);

// Essentially the same thing as above ^^^
// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs',  'store');
//     Route::get('/jobs/{job}/edit',  'edit');
//     Route::patch('/jobs/{job}',  'update');
//     Route::delete('/jobs/{job}',  'destroy');
// });