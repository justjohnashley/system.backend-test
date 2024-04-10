<!-- MODAL FOR EDIT BUTTON -->
<div class="modal fade" id="bmedit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form name="edit" action="b_edit.php" method="POST">
            <input type="hidden" class="bookid" name="id">

                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">
                            <div class="col-12">
                                <label for="category" class="form-label">Sublocation</label>
                                <select class="form-select" name="slocation" required>
                                    <option value="" selected id="catselect"></option>
                                    <?php
                                    $sql = "SELECT * FROM book_category";
                                    $query = $con->query($sql);
                                    while ($crow = $query->fetch_assoc()) {
                                        echo "
                                      <option value='" . $crow['id'] . "'>" . $crow['name'] . "</option>
                                    ";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="bookcode" class="form-label">Book Code</label>
                                <input type="text" class="form-control" id="edit_code" name="bcode" required>
                            </div>

                            <div class="col-12">
                                <label for="copyrightdate" class="form-label">Copyright Date</label>
                                <input type="text" class="form-control" id="edit_year" name="cdate" required>
                            </div>

                            <div class="col-12">
                                <label for="booktitle" class="form-label">Book Title</label>
                                <input type="text" class="form-control" id="edit_title" name="btitle" required>
                            </div>

                            <div class="col-12">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="edit_author" name="bauthor" required>
                            </div>

                            <div class="col-12">
                                <label for="ppublication" class="form-label">Place of
                                    Publication</label>
                                <input type="text" class="form-control" id="edit_place" name="plpub" required>
                            </div>

                            <div class="col-12">
                                <label for="publisher" class="form-label">Publisher</label>
                                <input type="text" class="form-control" id="edit_publisher" name="pub" required>
                            </div>

                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="edit_desc" name="desc" required>
                            </div>

                            <div class="col-12">
                                <label for="isbnumber" class="form-label">ISBN</label>
                                <input type="text" class="form-control" id="edit_isbn" name="isbn" required>
                            </div>

                            <label for="col-12" class="label">Cover</label>
                            <div class="input-group mb-3">

                                <input type="file" class="form-control border-success" id="cover" name="cover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="book-edit">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>