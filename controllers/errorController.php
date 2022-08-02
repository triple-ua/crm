<?php

class ErrorController
{
    public function actionError() 
    {
        View::render("404");
    }
}