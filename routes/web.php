<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('dashboard', function () {
    return view('dashboard')->with([
        'userType'=>"doctor"
    ]);
});

Route::get('appointments',function(){
    return view('appointments.index');
});
Route::get('patients',function(){
    return view('patients.index');
});
Route::get('phamarcy',function(){
    return view('phamarcy.index');
});
Route::get('laboratory',function(){
    return view('laboratory.index');
});
Route::get('schedule',function(){
    return view('schedule');
});
/**
 * Authetication routes
 */

Route::get('login',function(){
    return view('auth.login');
});

Route::get('account',function(){
    return view('account');
});