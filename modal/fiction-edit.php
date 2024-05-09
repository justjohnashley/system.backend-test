<!-- MODAL FOR EDIT BUTTON -->
<div class="modal fade" id="fic_edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form name="edit" action="fic_edit.php" method="POST">
                <input type="hidden" class="ficid" name="id">

                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">
                            <div class="col-12">
                                <label for="category" class="form-label">Sublocation</label>
                                <select class="form-select" name="slocation" required>
                                    <option value="" selected id="catselect"></option>
                                    <?php
                                    $sql = "SELECT * FROM fiction_category";
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
                                <label for="edit_year" class="form-label">Year Published</label>
                                <input type="number" class="form-control" id="edit_year" name="year" min="1500" max="2100" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_title" class="form-label">Fiction Title</label>
                                <input type="text" class="form-control" id="edit_title" name="title" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_author" class="form-label">Author/s</label>
                                <input type="text" class="form-control" id="edit_author" name="author" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_code" class="form-label">Call Number</label>
                                <input type="text" class="form-control" id="edit_code" name="code" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_place" class="form-label">Publication Place</label>
                                <input type="text" class="form-control" id="edit_place" name="plpub" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_publisher" class="form-label">Publisher</label>
                                <input type="text" class="form-control" id="edit_publisher" name="pub" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_descr" class="form-label">Physical Description</label>
                                <input type="text" class="form-control" id="edit_descr" name="descr" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_isbn" class="form-label">ISBN</label>
                                <input type="text" class="form-control" id="edit_isbn" name="isbn" maxlength="13" minlength="10" required>
                            </div>

                            <!--<label for="col-12" class="label">Cover</label>
                            <div class="input-group mb-3">

                                <input type="file" class="form-control border-success" id="cover" name="cover">
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="fiction-edit">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>