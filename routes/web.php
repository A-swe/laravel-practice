<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('home',function(){
    // dd('this is testing');
    // return "this is return";
    return view('home');
});
Route::get('about',function(){
    return view('layout.about');
});
Route::get('result/{name}/{age}',function($name,$age){
    return "Name is ".$name. "<br>"."Age is ".$age. " years";
});