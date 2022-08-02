<?php

function core_folder($class_name)
{
    $file_name = strtolower($class_name).".php";
    $file_name = str_replace("\\", "/", $file_name);
    $file_name = "core/".$file_name;

    include $file_name;
}

function controllers_folder($class_name)
{
    $file_name = lcfirst($class_name).".php";
    $file_name = str_replace("\\", "/", $file_name);
    $file_name = "controllers/".$file_name;

    include $file_name;
}

function models_folder($class_name)
{
    $file_name = strtolower($class_name).".php";
    $file_name = str_replace("\\", "/", $file_name);
    $file_name = "models/".$file_name;

    include $file_name;
}

spl_autoload_register("core_folder");
spl_autoload_register("controllers_folder");
spl_autoload_register("models_folder");