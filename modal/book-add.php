<!-- MODAL FOR ADD BUTTON -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form name="add" action="b_add.php" method="POST">

                <div class="modal-header">
                    <h4 class="modal-title">Add</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- modal body -->
                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">

                            <div class="col-12">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" name="slocation">
                                    <option selected>Select a sublocation...</option>
                                    <?php
                                    $sql = "SELECT * FROM book_category";
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
                                <label for="copyrightdate" class="form-label">Copyright
                                    Date</label>
                                <input type="text" class="form-control" id="copyrightdate" name="cdate">
                            </div>

                            <div class="col-12">
                                <label for="booktitle" class="form-label">Book Title</label>
                                <input type="text" class="form-control" id="booktitle" name="btitle">
                            </div>

                            <div class="col-12">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" name="bauthor">
                            </div>

                            <div class="col-12">
                                <label for="ppublication" class="form-label">Place of
                                    Publication</label>
                                <input type="text" class="form-control" id="ppublication" name="plpub">
                            </div>

                            <div class="col-12">
                                <label for="publisher" class="form-label">Publisher</label>
                                <input type="text" class="form-control" id="publisher" name="pub">
                            </div>

                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="desc">
                            </div>

                            <div class="col-12">
                                <label for="isbnumber" class="form-label">ISBN</label>
                                <input type="text" class="form-control" id="isbnumber" name="isbn">
                            </div>

                            <label for="col-12" class="label">Cover</label>
                            <div class="input-group mb-3">

                                <input type="file" class="form-control border-success" id="cover" name="cover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="book-add">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>