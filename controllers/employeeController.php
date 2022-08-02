<?php

class EmployeeController
{
    public function actionIndex()
    {
        $this->denyUnauthorizedUser();

        $employee = new Employee();

        $employee->selectAll();

        View::render("employee");
    }

    public function actionInsert()
    {
        $this->denyUnauthorizedUser();

        $employee = new Employee();

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $status = $_POST['status'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $task = $_POST['task'];

        $employee->insert($name, $phone, $status, $login, $password, $task);

        header('Location: http://localhost/employee');
    }

    public function actionUpdate()
    {
        $this->denyUnauthorizedUser();

        $employee = new Employee();

        // $employee->update(7, 'Alex Alexeev', null, 3, 'aalex', '123', 2);

        header('Location: http://localhost/employee');
    }

    public function actionDelete()
    {
        $this->denyUnauthorizedUser();

        $employee = new Employee();

        $id = $_POST['id'];

        $employee->delete($id);

        header('Location: http://localhost/employee');
    }

    private function denyUnauthorizedUser()
    {
        if(!$_SESSION['authorized_user'])
        {
            $_SESSION['message'] = 'Access denied. You should authorize first to see employees.';
            header('Location: /');
        }
    }
}