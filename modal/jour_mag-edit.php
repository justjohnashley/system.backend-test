<!-- MODAL FOR EDIT BUTTON -->
<div class="modal fade" id="jm_edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form name="edit" action="jm_edit.php" method="POST">
                <input type="hidden" class="jmid" name="id">

                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">

                            <div class="col-12">
                                <label for="edit_year" class="form-label">Year Published</label>
                                <input type="number" class="form-control" id="edit_year" name="year" min="1900" max="2100" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_title" class="form-label">eJournal / eMagazine Title</label>
                                <input type="text" class="form-control" id="edit_title" name="title" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_volumeno" class="form-label">Volume No. </label>
                                <input type="text" class="form-control" id="edit_volumeno" name="volumeno" required>
                            </div>

                            <div class="col-12">
                                <label for="edit_link" class="form-label">Link</label>
                                <input type="url" class="form-control" id="edit_link" name="link" pattern="https?://.+" required>
                            </div>

                            <!-- <label for="col-12" class="label">Cover</label>
                            <div class="input-group mb-3">

                                <input type="file" class="form-control border-success" id="cover" name="cover">
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="jour_mag-edit">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>