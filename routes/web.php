<?php

use App\Task;
use App\Http\Controllers;

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');
