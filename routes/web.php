<?php
# @Date:   2019-10-29T13:13:30+00:00
# @Last modified time: 2019-10-29T14:06:32+00:00




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


Route::get('helloworld', function () {
    return '<h1>Hello World</h1>';
});

Route::get('marcus', function () {
    return view('greeting');
});

Route::get('about', function (){
    return view('about');
});
