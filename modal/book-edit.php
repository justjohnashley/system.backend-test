<!-- MODAL FOR EDIT BUTTON -->
<div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- modal body -->
            <div class="modal-body">
                <div class="container overflow-hidden">
                    <div class="row gy-2">
                        <div class="col-12">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select">
                                <option selected>Select a category...</option>
                                <option value="1">Literature</option>
                                <option value="2">Mathematics</option>
                                <option value="3">History</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="copyrightdate" class="form-label">Copyright Date</label>
                            <input type="text" class="form-control" id="copyrightdate" placeholder="e.g. 1978">
                        </div>

                        <div class="col-12">
                            <label for="booktitle" class="form-label">Book Title</label>
                            <input type="text" class="form-control" id="booktitle" placeholder="e.g. No Longer Human">
                        </div>

                        <div class="col-12">
                            <label for="bookcode" class="form-label">Book Code</label>
                            <input type="text" class="form-control" id="bookcode" placeholder="e.g. EB0001">
                        </div>

                        <div class="col-12">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" id="author" placeholder="e.g. Osamu, Dazai">
                        </div>

                        <div class="col-12">
                            <label for="ppublication" class="form-label">Place of
                                Publication</label>
                            <input type="text" class="form-control" id="ppublication"
                                placeholder="e.g. Norfolk, Connecticut">
                        </div>

                        <div class="col-12">
                            <label for="publisher" class="form-label">Publisher</label>
                            <input type="text" class="form-control" id="publisher" placeholder="e.g. New Directions">
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description"
                                placeholder="Tell something about it...">
                        </div>

                        <div class="col-12">
                            <label for="isbnumber" class="form-label">ISBN</label>
                            <input type="text" class="form-control" id="isbnumber" placeholder="e.g. 9780811204811">
                        </div>

                        <label for="col-12" class="label">Link</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-paperclip"></i></span>
                            <input type="text" class="form-control" id="url" placeholder="e.g. https://example.com">
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