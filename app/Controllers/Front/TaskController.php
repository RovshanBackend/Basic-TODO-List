<?php

namespace App\Controllers\Front;
use App\Core\BaseController;
use App\Models\Task;

class TaskController extends BaseController {

    public function index() {

        $taskModel = new Task();
        $tasks = $taskModel->getAll();

        $this->render("front/tasks", ['tasks' => $tasks]);
    }
}