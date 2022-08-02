<div class="modal fade" id="delete-task-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Delete task:</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="task/delete" method="post" id="delete-task">
                <input type="text" class="form-control mb-2" name="id" placeholder="Task's id:">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="delete-task">Delete task</button>
        </div>
        </div>
    </div>
</div>