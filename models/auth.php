<?php

class Auth
{
    public function verify($login, $password)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=crm', 'root', 'root');

        $stmt = $pdo->prepare(
            'SELECT * FROM employee WHERE login = :login AND password = :password'
        );

        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($response !== array())
        {
            $_SESSION['authorized_user'] = $response;
            return true;
        }
        else
        {
            return false;
        }
    }
}