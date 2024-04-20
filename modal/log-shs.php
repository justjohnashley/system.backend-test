<!-- MODAL FOR SHS LOGIN -->
<div class="modal fade" id="shsModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">SHS</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="col-md-6 mt-5 mb-5">

                    <!-- login -->
                    <div class="row align-items-center">
                        <form action="logbook.php" method="POST">
                            <input type="hidden" name="status" value="shs">

                            <div class="input-group mb-3">
                                <input type="text" name="shs_studentID"
                                    class="form-control form-control-lg bg-light fs-6" placeholder="Student ID"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="shs_password"
                                    class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                            </div>


                            <div class="col-12">
                                <select class="form-select" name="shs_purpose">
                                    <option selected>Select purpose</option>
                                    <option value="1">Borrow Books</option>
                                    <option value="2">Research</option>
                                    <option value="3">Return Books</option>
                                    <option value="4">Other/s</option>
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