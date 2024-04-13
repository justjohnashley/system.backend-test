<!-- MODAL FOR ADD BUTTON -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- modal body -->
            <div class="modal-body">
                <div class="container overflow-hidden">
                    <div class="row gy-2">

                        <div class="col-12">
                            <label for="category" class="form-label">Program</label>
                            <select class="form-select" name="type">
                            <option selected></option>
                                    <?php
                                    $sql = "SELECT * FROM cap_category";
                                    $query = $con->query($sql);
                                    while ($catrow = $query->fetch_assoc()) {
                                        $selected = ($catid == $catrow['id']) ? " selected" : "";
                                        echo "
                                                <option value='" . $catrow['id'] . "' " . $selected . ">" . $catrow['name'] . "</option>
                                                                    ";
                                    }
                                    ?>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="copyrightdate" class="form-label">Year</label>
                            <input type="text" class="form-control" id="copyrightdate" placeholder="e.g. 2023">
                        </div>

                        <div class="col-12">
                            <label for="booktitle" class="form-label">Capstone Title</label>
                            <input type="text" class="form-control" id="booktitle" placeholder="e.g. Placeholder">
                        </div>

                        <div class="col-12">
                            <label for="bookcode" class="form-label">Capstone Code</label>
                            <input type="text" class="form-control" id="bookcode" placeholder="e.g. CAP0001">
                        </div>

                        <div class="col-12">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" id="author" placeholder="e.g. Bench Laxa">
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description"
                                placeholder="Tell something about it...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
            </div>


        </div>
    </div>
</div>