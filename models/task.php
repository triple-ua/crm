<?php

class Task
{
    public function selectAll()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=crm', 'root', 'root');

        $stmt = $pdo->prepare(
            'SELECT * FROM task'
        );

        $stmt->execute();

        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($response as $key => $value)
        {
            $_SESSION['tasks'][$key] = $value;
        }
    }

    public function insert($name, $description, $deadline, $status, $executor, $creator)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=crm', 'root', 'root');

        $stmt = $pdo->prepare(
            'INSERT INTO task (name, description, deadline, status, executor, creator)
                VALUES (:name, :description, :deadline, :status, :executor, :creator)'
        );

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':deadline', $deadline);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':executor', $executor);
        $stmt->bindParam(':creator', $creator);

        try 
        {
            $stmt->execute();
        }
        catch (\Throwable $th)
        {
            return;
        }
    }

    public function delete($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=crm', 'root', 'root');
        
        $stmt = $pdo->prepare(
            'DELETE FROM task WHERE id = :id'
        );

        $stmt->bindParam(':id', $id);

        $stmt->execute();
    }
}