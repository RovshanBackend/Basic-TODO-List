<?php

namespace App\Controllers\Front;
use App\Core\BaseController;
use App\Models\Task;

class TaskController extends BaseController {

    private $taskModel;

    public function __construct(){
        $this->taskModel = new Task();
    }
    public function index() {

        $tasks = $this->taskModel->getAll();

        $this->render("front/tasks", ['tasks' => $tasks]);
    }

    // Create a new task
    public function create(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $title = trim($_POST['title'] ?? '');
        $description = trim($_POST['description'] ?? '');

        if (empty($title) || empty($description)) {
            return $this->render("front/create-task", ['error' => 'Title and description are required']);
            
        }

        try {
            $this->taskModel->create($title, $description);
            return $this->render("front/tasks", [
                'success' => 'Task created successfully',
                'tasks' => $this->taskModel->getAll()
            ]);
        } catch (\Exception $e) {
            return $this->render("front/create-task", ['error' => 'Failed to create task: ']);
        }
    } else {
        return $this->render("front/create-task");
    }

    
}

    // Update an existing task
public function update($id){

        $task = $this->taskModel->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $title = trim($_POST['title'] ?? '');
        $description = trim($_POST['description'] ?? '');


        if (empty($title) || empty($description)) {
            return $this->render("front/update-task", [
                'error' => 'Title and description are required',
                'id' => $id
            ]);
            
        }

        try {
            $this->taskModel->update($id,$title, $description);
            $task = $this->taskModel->getById($id);
            return $this->render("front/update-task", [
                'success' => 'Task updated successfully',
                'task' => $task
            ]);

        } catch (\Exception $e) { 
            return $this->render("front/update-task", [
                'error' => 'Failed to update task: ',
                'id' => $id
            ]);
        }
    }else {
        if (!$task) {
            return $this->render("front/update-task", ['error' => 'Task not found']);
        }
        return $this->render("front/update-task", [
            'task' => $task
        ]);
    }
}

// Delete a task

public function delete($id) {

    $task = $this->taskModel->getById($id);

    if($this->taskModel->delete($id)) {

    return $this->render('front/tasks',[
        'success' => 'Task deleted successfully',
        'tasks' => $this->taskModel->getAll()
    ]);

    }else {
        return $this->render('front/tasks',[
            'error' => 'Failed to delete task'
        ]);

    }

}

}