<?php

declare(strict_types = 1);

session_start();

require "config/enable_errors.php";
require "config/autoload.php";

$router = new Router();
$router->start();