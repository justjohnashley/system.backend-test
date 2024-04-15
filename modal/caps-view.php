<!-- MODAL FOR VIEW BUTTON -->
<div class="modal fade" id="cpview">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">View</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form name="view-upload" method="POST" action="c_view.php">
                <input type="hidden" class="capid" name="id">

                <div class="modal-body">
                    <div class="container overflow-hidden text-start">
                        <div class="row gx-3">
                            <?php include 'includes/!avail.php' ?>

                            <div class="col-12">
                                <label for="cover" class="label">Upload abstract as cover:</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control border-success" id="cover" name="cover"
                                        accept=".jpg, .png" value="" required>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="cover-up">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>