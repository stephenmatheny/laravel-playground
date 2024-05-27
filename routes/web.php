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
    $jobs = Job::with('employer')->latest()->simplePaginate(10);
    // cursor paginate
    // $jobs = Job::with('employer')->cursorPaginate(10);

    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function (){
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id){
    $job = Job::find(($id));
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function (){
    // ... TODO: validation
    // get all of the inputs
    // dd(request()->all());
    // get specific imput
    // dd(request('title'));
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});