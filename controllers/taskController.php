<?php

class TaskController
{
    public function actionIndex()
    {
        $this->denyUnauthorizedUser();
        
        $task = new Task();

        $task->selectAll();

        View::render("task");
    }

    public function actionInsert()
    {
        $this->denyUnauthorizedUser();

        $task = new Task();

        $name = $_POST['name'];
        $description = $_POST['description'];
        $deadline = $_POST['deadline'];
        $status = $_POST['status'];
        $executor = $_POST['executor'];
        $creator = $_POST['creator'];

        $task->insert($name, $description, $deadline, $status, $executor, $creator);

        header('Location: http://localhost/task');
    }

    public function actionDelete()
    {
        $this->denyUnauthorizedUser();

        $task = new Task();

        $id = $_POST['id'];

        $task->delete($id);

        header('Location: http://localhost/task');
    }

    private function denyUnauthorizedUser()
    {
        if(!$_SESSION['authorized_user'])
        {
            $_SESSION['message'] = 'Access denied. You should authorize first to see tasks.';
            header('Location: /');
        }
    }
}