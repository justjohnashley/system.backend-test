<div class="modal fade" id="creturn">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Return?</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                This action cannot be undone.
            </div>

            <form name="return" method="POST" action="cr_return.php">
                <input type="hidden" class="itemid" name="id">
                <input type="hidden" class="bookid" name="bid">

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="return">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>