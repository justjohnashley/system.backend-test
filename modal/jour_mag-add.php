<!-- MODAL FOR ADD BUTTON -->
<div class="modal fade" id="jm_add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="validation" name="add" action="jm_add.php" method="POST" enctype="multipart/form-data">

                <div class="modal-header">
                    <h4 class="modal-title">Add</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">

                            <div class="col-12">
                                <label for="year" class="form-label">Year Published</label>
                                <input type="number" class="form-control" id="year" name="year" min="1900" max="2100"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter a valid value.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="jmtitle" class="form-label">eJournal / eMagazine Title</label>
                                <input type="text" class="form-control" id="jmtitle" name="title" required>
                                <div class="invalid-feedback">
                                    Please enter a valid title.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="volumeno" class="form-label">Volume No.</label>
                                <input type="number" class="form-control" id="volumeno" name="volumeno" required>
                                <div class="invalid-feedback">
                                    Please enter a valid input.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="link" class="form-label">Link</label>
                                <input type="url" class="form-control" id="link" name="link" required>
                            </div>

                            <div class="col-12">
                                <label for="imageUpload" class="form-label">Cover</label>
                                <div>
                                    <img id="previewCover"
                                        style="width: auto; height: 200px; padding: 5%; object-fit: cover; display: none;">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control is-invalid" id="imageUpload"
                                        name="jm_cover" accept=".jpg, .jpeg, .png" data-bs-toggle="tooltip"
                                        data-bs-title="Double check before submitting." data-bs-placement="left"
                                        data-bs-custom-class="custom-tooltip">
                                    <div id="imageUpload" class="invalid-feedback">
                                        This cannot be edited once uploaded.
                                    </div>
                                </div>

                            </div>

                           

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="jour_mag-add">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>

