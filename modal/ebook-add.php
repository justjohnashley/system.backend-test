<!-- MODAL FOR ADD BUTTON -->
<div class="modal fade" id="eb_add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="validation" name="add" action="eb_add.php" method="POST" enctype="multipart/form-data">

                <div class="modal-header">
                    <h4 class="modal-title">Add</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">

                            <div class="col-12">
                                <label for="category" class="form-label">Sublocation</label>
                                <select class="form-select" name="slocation" required>
                                    <option selected></option>
                                    <?php
                                    $sql = "SELECT * FROM ebook_category";
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
                                <label for="yearpub" class="form-label">Year Published</label>
                                <input type="number" class="form-control" id="year" name="cdate" min="1800" max="2100"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter a valid value.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="ebooktitle" class="form-label">eBook Title</label>
                                <input type="text" class="form-control" id="ebooktitle" name="title" required>
                                <div class="invalid-feedback">
                                    Please enter a valid ebook title.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="capcode" class="form-label">Call Number</label>
                                <input type="text" class="form-control" id="ebcode" name="code" required>
                                <div class="invalid-feedback">
                                    Please enter a valid call number.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                                <div class="invalid-feedback">
                                    Please enter a valid subject.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="author" class="form-label">Author/s</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                                <div class="invalid-feedback">
                                    Please enter a valid author.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="ppublication" class="form-label">Publication Place</label>
                                <input type="text" class="form-control" id="ppublication" name="plpub" required>
                                <div class="invalid-feedback">
                                    Please enter a valid publication place.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="publisher" class="form-label">Publisher</label>
                                <input type="text" class="form-control" id="publisher" name="pub" required>
                                <div class="invalid-feedback">
                                    Please enter a valid publisher.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="description" class="form-label">Physical Description</label>
                                <input type="text" class="form-control" id="description" name="descr" required>
                                <div class="invalid-feedback">
                                    Please enter a valid description.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="isbnumber" class="form-label">ISBN</label>
                                <input type="number" class="form-control" id="isbnumber" name="isbn" maxlength="13"
                                    minlength="10" required>
                            </div>

                            <div class="col-12">
                                <label for="imageUpload" class="form-label">Cover</label>
                                <div>
                                    <img id="previewCover"
                                        style="width: auto; height: 200px; padding: 5%; object-fit: cover; display: none;">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control is-invalid" id="imageUpload"
                                        name="book_cover" accept=".jpg, .jpeg, .png" data-bs-toggle="tooltip"
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
                    <button type="submit" class="btn btn-success" name="ebook-add">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>