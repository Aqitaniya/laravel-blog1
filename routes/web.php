<?php
//use App\Task;
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

//Route::get('/tasks', function (){
//    $tasks = Task::all();
//    //$tasks = App\Task::all();
////    $tasks = DB::table('tasks')->latest()->get();
//    return view('tasks.index', compact('tasks'));
//});

//Route::get('/tasks/{task}', function ($id){
//    $name = 'Dev';
//    $tasks = DB::table('tasks')->find($id);
//    dd($tasks);
////    Task::incomplate()->get();
//    return view('welcome', compact('name','tasks'));
//});
//
//Route::get('/tasks1/{task}', function ($id){
//    $name = 'Dev';
//    $task = Task::find($id); //For this form need create model
//    //$task = App\Task::find($id); //For this form need create model
//    //$task = DB::table('tasks')->find($id);
//
//    return view('tasks.show', compact('name','task'));
//});



Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/tasks2/{task}', 'TasksController@show2');


//php artisan make:controller PostsController
//php artisan make:model Post
//php artisan make:migration create_posts_table --create=posts
//php artisan help make:model
// or
//php artisan make:model Post -mc
//php artisan migrate
//Route::get('/posts', 'PostsController@index');

Route::get('posts', 'PostController@index');
Route::get('posts/{post}', 'PostController@show');

