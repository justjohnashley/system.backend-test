<!-- MODAL FOR ADD BUTTON -->
<div class="modal fade" id="bmadd">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form name="add" action="b_add.php" method="POST" enctype="multipart/form-data">

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
                                <label for="bookcode" class="form-label">Book Code</label>
                                <input type="text" class="form-control" id="code" name="bcode" required placeholder="LUL-****">
                            </div>
                            <!--
                            <div class="col-12">
                                <label for="copyrightdate" class="form-label">Copyright Date</label>
                                <input type="date" class="form-control" id="copyrightdate" name="cdate" required>
                            </div> 
                                    -->
                            <div class="col-12">
                                <label for="booktitle" class="form-label">Book Title</label>
                                <input type="text" class="form-control" id="booktitle" name="btitle" required>
                            </div>

                            <div class="col-12">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" name="bauthor" required>
                            </div>

                            <div class="col-12">
                                <label for="ppublication" class="form-label">Publication Info</label>
                                <input type="text" class="form-control" id="ppublication" name="plpub" required>
                            </div>

                            <div class="col-12">
                                <label for="publisher" class="form-label">Publisher</label>
                                <input type="text" class="form-control" id="publisher" name="pub" required>
                            </div>

                            <div class="col-12">
                                <label for="description" class="form-label">Physical Description</label>
                                <input type="text" class="form-control" id="description" name="desc" required>
                            </div>

                            <div class="col-12">
                                <label for="isbnumber" class="form-label">ISBN</label>
                                <input type="number" class="form-control" id="isbnumber" name="isbn" required>
                            </div>

                            <!--<label for="col-12" class="label">Cover</label>
                            <div class="input-group mb-3">

                                <input type="file" class="form-control border-success" id="cover" name="cover"
                                    accept=".jpg, .png" value="">
                                    
                            </div>-->
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