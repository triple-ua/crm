<?php

class AuthController
{
    public function actionIndex() 
    {
        if($_SESSION['authorized_user'])
        {
            header('Location: http://localhost/employee');
            die();
        }

        View::render('auth');
    }

    public function actionSignin()
    {
        $auth = new Auth();

        $login = $_POST['login'];
        $password = $_POST['password'];

        $is_verified = $auth->verify($login, $password);

        if($is_verified)
        {
            header('Location: http://localhost/employee');
        }
        else
        {
            $_SESSION['message'] = 'Incorrect login and/or password';
            header('Location: /');
        }
    }

    public function actionLogout()
    {
        unset($_SESSION['authorized_user']);
        header('Location: /');
    }
}