<!-- MODAL FOR DELETE BUTTON -->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>

            <form name="delete" method="POST" action="b_delete.php">
                <input type="hidden" name="id" value='<?php echo $row['bookid'];?>'>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="book-delete">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>