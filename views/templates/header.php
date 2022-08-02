<div class="container rounded bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="http://localhost/employee" class="nav-link h5 text-light my-0">Employees</a>
        <a href="http://localhost/task" class="nav-link h5 text-light my-0">Tasks</a>

        <div class="dropdown">
            <div class="dropdown-toggle text-light text-decoration-none h5 px-3 mt-2" data-bs-toggle="dropdown">
                Actions
            </div>
            <div class="dropdown-menu p-3">
                <?php require 'modals/config/dropdown_options.php'; ?>
            </div>
        </div>

        <a href="http://localhost/auth/logout" class="nav-link h5 text-light my-0 ms-auto">Logout</a>
    </nav>
</div>

<?php require 'modals/config/load_modals.php'; ?>