<?php

switch ($_SESSION['authorized_user'][0]['status']) {
    case 1:
        require __DIR__.'/../employee_add.php';
        require __DIR__.'/../employee_delete.php';
        require __DIR__.'/../task_add.php';
        require __DIR__.'/../task_delete.php';
        break;
}

