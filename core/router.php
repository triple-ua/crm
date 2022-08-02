<?php

class Router
{
    public function start()
    {
        $params = trim($_SERVER['REQUEST_URI'], '/?');
        $params = explode('/', $params);

        $controller = ($params[0] == '') ? 'auth' : $params[0];
        $action = ($params[1] == '') ? 'index' : $params[1];

        $controller_name = $controller.'Controller';
        $action_name = 'action'.ucfirst($action);

        if(!class_exists($controller_name))
        {
            $controller_name = 'errorController';
        }

        $controller = new $controller_name();

        if(!method_exists($controller, $action_name))
        {
            $controller = new ErrorController();
            $action_name = 'actionError';
        }

        $controller->$action_name();
    }
}