<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\auth;
use App\Http\Controllers\router_controller;




Route::get('/'  , [router_controller::class , 'home'])->name('home');

Route::get('/signin'  , [router_controller::class , 'login_route'])->name('signin');

Route::get('/signup'  , [router_controller::class , 'register_route'])->name('signin');

Route::get('/auth/github/redirect' , [auth::class , 'github_auth'])->name('github_auth');

Route::get('/auth/google/redirect' , [auth::class , 'google_auth'])->name('google_auth');

Route::get('/profile', [auth::class , 'to_db_github']);

Route::get('/done', [auth::class , 'to_db_google']);

Route::get('/out', function () {
    session_start() ;
    session_unset() ;
    session_destroy() ;
    return redirect() -> route('home') ;

});
