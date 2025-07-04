<!-- MODAL FOR ADD BUTTON -->
<div class="modal fade" id="wbadd">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="validation" name="add" action="wb_add.php" method="POST" enctype="multipart/form-data">

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
                                    $sql = "SELECT * FROM wb_category";
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
                                <label for="captitle" class="form-label">Worbook Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                                <div class="invalid-feedback">
                                    Please enter a valid workbook title.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="author" class="form-label">Author/s</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                                <div class="invalid-feedback">
                                    Please enter a valid author/s.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="imageUpload" class="form-label">Cover</label>
                                <div>
                                    <img id="previewCover"
                                        style="width: auto; height: 200px; padding: 5%; object-fit: cover; display: none;">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control is-invalid" id="imageUpload"
                                        name="wb_cover" accept=".jpg, .jpeg, .png" data-bs-toggle="tooltip"
                                        data-bs-title="Double check before submitting." data-bs-placement="left"
                                        data-bs-custom-class="custom-tooltip">
                                    <div id="imageUpload" class="invalid-feedback">
                                        This cannot be edited once uploaded.
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">
                                <label for="contentUpload" class="label">Content</label>
                                <div class="mb-2" id="preview" style="width: auto; height: auto;">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control is-invalid" id="contentUpload"
                                        name="content[]" accept=".jpg, .jpeg, .png, .pdf" multiple
                                        onchange="showSelectedFile(this)" data-bs-toggle="tooltip"
                                        data-bs-title="Double check before submitting." data-bs-placement="left"
                                        data-bs-custom-class="custom-tooltip">
                                    <div id="contentUpload" class="invalid-feedback">
                                        This cannot be edited once uploaded.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="wb-add">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>