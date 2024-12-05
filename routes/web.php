<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/admissions', function(){
    return view('admissions');
});

Route::get('/programs', function(){
    return view('programs');
});

Route::get('/linkages', function(){
    return view('linkages');
});


Route::get('/login', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});
