<?php

use Illuminate\Support\Facades\Route;


Route::get('', function(){
    return view('welcome');
});

Auth::routes(['virify' => true]);
Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


Route::get('', function(){
    return view('home');
});



// Route::get('/second', 'Admin\SecondController@showString');


Route::get('dashboard', function(){
    return 'dashboard';
});