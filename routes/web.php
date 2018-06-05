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
//    $tasks = DB::table('tasks')->get();
    $tasks = DB::table('tasks')->latest()->get();
//    $tasks = DB::table('tasks')->where('created_at', '>='get();

    return view('welcome', compact('name','tasks'));
});

Route::get('/tasks', function (){
//    $tasks = Task::all();
    $tasks = DB::table('tasks')->latest()->get();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id){
    $name = 'Dev';
    $tasks = DB::table('tasks')->find($id);
    dd($tasks);

    return view('welcome', compact('name','tasks'));
});

Route::get('/tasks1/{task}', function ($id){
    $name = 'Dev';
    $task = DB::table('tasks')->find($id);

    return view('tasks.show', compact('name','task'));
});