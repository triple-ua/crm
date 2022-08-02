<div class="modal fade" id="add-task-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add new task:</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="task/insert" method="post" id="add-task">
                <input type="text" class="form-control mb-2" name="name" placeholder="Name:">
                <input type="text" class="form-control mb-2" name="description" placeholder="Description:">
                <input type="text" class="form-control mb-2" name="deadline" placeholder="Deadline:">
                <input type="text" class="form-control mb-2" name="status" placeholder="Status:">
                <input type="text" class="form-control mb-2" name="executor" placeholder="Executor:">
                <input type="text" class="form-control mb-2" name="creator" placeholder="Creator:">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="add-task">Add task</button>
        </div>
        </div>
    </div>
</div>