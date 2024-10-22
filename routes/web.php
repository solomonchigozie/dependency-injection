<?php

use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('test', SampleController::class);

//service provider
Route::get('/service', function(){
    dd(app('first_class'));
});

//custom service provider
Route::get('/testservice', function(){
    app()->make('test_service');
});
