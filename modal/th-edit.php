<!-- MODAL FOR EDIT BUTTON -->
<div class="modal fade" id="thedit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form name="edit" action="t_edit.php" method="POST">
                <input type="hidden" class="thid" name="id">

                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">
                            <div class="col-12">
                                <label for="category" class="form-label">Program</label>
                                <select class="form-select" name="type" required>
                                    <option value="" selected id="catselect"></option>
                                    <?php
                                    $sql = "SELECT * FROM th_category";
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
                                <label for="edit_uploadyr" class="form-label">Year</label>
                                <input type="number" class="form-control" id="edit_uploadyr" name="upyr" min="1800" max="2100" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_title" class="form-label">Thesis Title</label>
                                <input type="text" class="form-control" id="edit_title" name="title" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_code" class="form-label">Call Number</label>
                                <input type="text" class="form-control" id="edit_code" name="code" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_author" class="form-label">Author/s</label>
                                <input type="text" class="form-control" id="edit_author" name="author" required>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="th-edit">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>