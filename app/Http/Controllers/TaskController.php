<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\TaskRepository;

class TaskController extends Controller
{
    public $taskRepo;

    public function __construct(TaskRepository $taskRepo)
    {
        $this->taskRepo = $taskRepo;
    }

    public function getTask($taskId){
        $task = $this->taskRepo->getTask($taskId);
        return $task;
    }

    public function getAllTasks(){
        $task = $this->taskRepo->getAllTasks();
        return $task;
    }

    public function createTask($task)
    {
        $result = $this->createTasktaskRepo->createTask($task);
        return $result;
    }

}
