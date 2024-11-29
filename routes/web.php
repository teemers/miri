<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});



Route::get('migrate', function () {
    Artisan::call('migrate');
    return 'Migrations have been refreshed.';
});

Route::get('migratefresh', function () {
    Artisan::call('migrate:fresh');
    return 'Migrations have been refreshed.';
});


Route::get('clear-config', function () {
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    return 'Config cache cleared!';
});
