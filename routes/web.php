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

//Route::get('/', function () {
//    return view('welcome', ['name' => 'Dev']);
//});
//Route::get('/', function () {
//    return view('welcome')->with('name', 'World');
//});
//Route::get('/', function () {
//    $name = 'Dev';
//    return view('welcome', [ 'name' => $name]);
//});
Route::get('/', function () {
    $name = 'Dev';
    $age = 31;
    $tasks = [
        '11111111',
        '22222222',
        '33333333'
    ];
    return view('welcome', compact('name', 'age', 'tasks'));
});