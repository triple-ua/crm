<?php

class View
{
    public static function render($view_name)
    {
        $view_path = "views/".$view_name.".php";
        
        require $view_path;
    }
}