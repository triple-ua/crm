<?php switch ($_SESSION['authorized_user'][0]['status']) :
case 1: ?>
    <a href="#add-employee-modal" data-bs-toggle="modal" class="h6 dropdown-item py-2">Add employee</a>
    <a href="#edit-employee-modal" data-bs-toggle="modal" class="h6 dropdown-item py-2 disabled">Edit employee</a>
    <a href="#delete-employee-modal" data-bs-toggle="modal" class="h6 dropdown-item py-2">Delete employee</a>
    <hr class="dropdown-divider">
    <a href="#add-task-modal" data-bs-toggle="modal" class="h6 dropdown-item py-2">Add task</a>
    <a href="#edit-task-modal" data-bs-toggle="modal" class="h6 dropdown-item py-2 disabled">Edit task</a>
    <a href="#delete-task-modal" data-bs-toggle="modal" class="h6 dropdown-item py-2">Delete task</a>
<?php break; ?>
        
<?php endswitch?>