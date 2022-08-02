<?php

class Employee
{
    public function selectAll()
    {
        // should i catch an error in the end of the method ?
        $pdo = new PDO('mysql:host=localhost;dbname=crm', 'root', 'root');

        $stmt = $pdo->prepare(
            'SELECT * FROM employee'
        );

        $stmt->execute();

        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($response as $key => $value)
        {
            $_SESSION['employees'][$key] = $value;
        }
    }

    public function insert($name, $phone, $status, $login, $password, $task)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=crm', 'root', 'root');

        $stmt = $pdo->prepare(
            'INSERT INTO employee (name, phone, status, login, password, task)
                VALUES (:name, :phone, :status, :login, :password, :task)'
        );

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':task', $task);

        try
        {
            $stmt->execute();
        } 
        catch (\Throwable $th) 
        {
            return;
        }
    }

    public function update($id, $name, $phone, $status, $login, $password, $task)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=crm', 'root', 'root');

        $stmt = $pdo->prepare(
            'UPDATE employee SET
                name = :name,
                phone = :phone,
                status = :status,
                login = :login,
                password = :password,
                task = :task
                WHERE id = :id'
        );

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':task', $task);

        $stmt->execute();
    }

    public function delete($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=crm', 'root', 'root');
        
        $stmt = $pdo->prepare(
            'DELETE FROM employee WHERE id = :id'
        );

        $stmt->bindParam(':id', $id);

        $stmt->execute();
    }
}