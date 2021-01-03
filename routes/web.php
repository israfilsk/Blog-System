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




Route::group(['middleware'=>'web'],function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/signup', function () {
        return view('signup');
    });
    Route::get('/login', function () {
        return view('login');
    });
    Route::post('log','Users@logs');

    Route::post('register','Users@register');

    Route::get('/success', function () {
        return view('success');
    });
    Route::get('/home','Users@index');
    Route::get('/post{id}','ShowPost@details')->name('post.details');
   

   
    Route::get('/allpost','AllPost@index')->name('allpost.index');
   

    Route::get('logout', function () {
        session()->forget('user');
        return redirect('home');
    });
    Route::get('/log', function () {
        if(!session()->has('user')){
            return redirect('login');
        }
    });
    
    Route::get('profile', function () {
        if(!session()->has('user')){
            return redirect('home');
        }else{
            return view('profile');
        }
    });
    Route::get('dashboard', function () {
        return view('dashboard');
    });

    Route::resource('post','PostController');

});


