<!-- MODAL FOR EDIT BUTTON -->
<div class="modal fade" id="clip_edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form name="edit" action="clp_edit.php" method="POST">
                <input type="hidden" class="clipid" name="id">

                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">
                            <div class="col-12">
                                <label for="category" class="form-label">Subject</label>
                                <select class="form-select" name="subject" required>
                                    <option value="" selected id="catselect"></option>
                                    <?php
                                    $sql = "SELECT * FROM clippings_category";
                                    $query = $con->query($sql);
                                    while ($crow = $query->fetch_assoc()) {
                                        echo "
                                        <option value='" . $crow['id'] . "'>" . $crow['name'] . "</option>
                                    ";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="edit_datepub" class="form-label">Date Published</label>
                                <input type="date" class="form-control" id="edit_datepub" name="datepub" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_title" class="form-label">Clipping Title</label>
                                <input type="text" class="form-control" id="edit_title" name="title" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_newspaper" class="form-label">Newspaper</label>
                                <input type="text" class="form-control" id="edit_newspaper" name="newspaper" required>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="clip-edit">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>