<!-- MODAL FOR PERSONNEL LOGIN -->
<div class="modal fade" id="personnelModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Personnel</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="col-md-6 mt-5 mb-5">

                    <!-- login -->
                    <div class="row align-items-center">
                        <form action="logbook.php" method="POST">
                            <input type="hidden" name="status" value="personnel">

                            <div class="input-group mb-3">
                                <input type="text" name="per_ID" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Personnel ID" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="per_password"
                                    class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                            </div>

                            <div class="col-12">
                                <select class="form-select" name="per_purpose" required>
                                    <option selected value="">Select a purpose</option>
                                    <option value="Borrow Books">Borrow Books</option>
                                    <option value="Research">Research</option>
                                    <option value="Return Books">Return Books</option>
                                    <option value="Online Class">Online Class</option>
                                    <option value="Meeting">Meeting</option>
                                    <option value="Other/s">Other/s</option>
                                </select>
                            </div>

                            <div class="input-group mb-3 mt-3">
                                <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>