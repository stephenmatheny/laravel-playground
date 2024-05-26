<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function (){
    // paginate
    // $jobs = Job::with('employer')->paginate(10);
    // simple paginate
    $jobs = Job::with('employer')->simplePaginate(10);
    // cursor paginate
    // $jobs = Job::with('employer')->cursorPaginate(10);

    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id){
    $job = Job::find(($id));
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});