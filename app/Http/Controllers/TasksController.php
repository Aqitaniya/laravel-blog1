<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
   public function index(){
       $tasks = Task::all();
       return view('tasks.index', compact('tasks'));
   }
    public function show($id){
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
    //automatically find in the table
    public function show2(Task $task){
        return view('tasks.show', compact('task'));
    }
}
