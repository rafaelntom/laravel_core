<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", function () {
    return view('jobs', [
        'jobs' => [
            ['id' => '1', 'title' => 'Director', 'salary' => '$100,000'],
            ['id' => '2', 'title' => 'Manager', 'salary' => '$80,000'],
            ['id' => '3', 'title' => 'Employee', 'salary' => '$50,000'],
        ]
    ]);
});

Route::get("/jobs/{id}", function ($id) {
    $jobs = [
        ['id' => '1', 'title' => 'Director', 'salary' => '$100,000'],
        ['id' => '2', 'title' => 'Manager', 'salary' => '$80,000'],
        ['id' => '3', 'title' => 'Employee', 'salary' => '$50,000'],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    // Check if the job exists
    if (!$job) {
        abort(404, 'Job not found');
    }

    return view('job', ['job' => $job]);
});

Route::get("/contact", function () {
    return view('contact', ['name' => 'user']);
});
