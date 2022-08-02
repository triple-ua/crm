<div class="modal fade" id="add-employee-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add new employee:</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="employee/insert" method="post" id="add-employee">
                <input type="text" class="form-control mb-2" name="name" placeholder="Name:">
                <input type="text" class="form-control mb-2" name="phone" placeholder="Phone:">
                <input type="text" class="form-control mb-2" name="status" placeholder="Status:">
                <input type="text" class="form-control mb-2" name="login" placeholder="Login:">
                <input type="text" class="form-control mb-2" name="password" placeholder="Password:">
                <input type="text" class="form-control mb-2" name="task" placeholder="Task:">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="add-employee">Add employee</button>
        </div>
        </div>
    </div>
</div>