<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;

class HomeControllerWeb extends Controller
{
    public function loadHomePage(){
        $taskController = new TaskController();
        $tasks = $taskController->getAllTasks();
        return view('home',['tasks' => $tasks]);
    }
}
