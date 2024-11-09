<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(["as"=>"login.", "prefix"=>"login"], function(){
    Route::get("/", "LoginController@index")->name("index");
    Route::post("/", "LoginController@post")->name("post");
});

Route::group(["as"=>"register.", "prefix"=>"register"], function(){
    Route::get("/", "RegisterController@index")->name("index");
    Route::post("/", "RegisterController@post")->name("post");
});
Route::get("/logout", "LogoutController@post")->name("logout");
