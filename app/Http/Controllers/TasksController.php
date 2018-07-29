<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::all(); //Eloquent
        return view('welcome', compact('tasks'));
    }
    public function show($id) {
        $task = Task::find($id);  //Eloquent

        return view('show', compact('task'));
    }
    
}
