<!-- MODAL FOR DELETE BUTTON -->
<div class="modal fade" id="jm_delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>

            <form name="delete" method="POST" action="jm_delete.php">
                <input type="hidden" class="jmid" name="id">

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger m-2" name="jour_mag-delete">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>