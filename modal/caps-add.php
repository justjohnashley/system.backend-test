<!-- MODAL FOR ADD BUTTON -->
<div class="modal fade" id="cpadd">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form name="add" action="c_add.php" method="POST" enctype="multipart/form-data">

                <div class="modal-header">
                    <h4 class="modal-title">Add</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">

                            <div class="col-12">
                                <label for="category" class="form-label">Program</label>
                                <select class="form-select" name="type" required>
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
                                <label for="uploadyr" class="form-label">Year</label>
                                <input type="number" class="form-control" id="uploadyr" name="upyr" min="1900" max="2100" required>
                            </div>

                            <div class="col-12">
                                <label for="captitle" class="form-label">Capstone Title</label>
                                <input type="text" class="form-control" id="captitle" name="cptitle" required>
                            </div>

                            <div class="col-12">
                                <label for="capcode" class="form-label">Call Number</label>
                                <input type="text" class="form-control" id="capcode" name="cpcode" required>
                            </div>

                            <div class="col-12">
                                <label for="author" class="form-label">Author/s</label>
                                <input type="text" class="form-control" id="author" name="cauthor" required>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="cap-add">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>