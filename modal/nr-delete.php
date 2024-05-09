<!-- MODAL FOR DELETE BUTTON -->
<div class="modal fade" id="nrdelete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>

            <form name="delete" method="POST" action="n_delete.php">
                <input type="hidden" class="nrid" name="id">

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="nr-delete">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>