<?php
$query = "SELECT MAX(CAST(SUBSTRING(bcode, 5) AS UNSIGNED)) AS max_code FROM book";
$result = mysqli_query($con, $query);
$max_code_row = mysqli_fetch_assoc($result);
$next_code = $max_code_row['max_code'] ? 'LUL-' . ($max_code_row['max_code'] + 1) : 'LUL-2000';
?>

<!-- MODAL FOR ADD BUTTON -->
<div class="modal fade" id="bmadd">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="validation" name="add" action="b_add.php" method="POST" enctype="multipart/form-data">

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
                                <label for="bookcode" class="form-label">Accession No.</label>
                                <input type="text" class="form-control" id="code" name="code" required
                                    value="<?php echo $next_code; ?>">
                            </div>

                            <div class="col-12">
                                <label for="yearpub" class="form-label">Year Published</label>
                                <input type="number" class="form-control" id="yearpub" name="cdate" min="1900"
                                    max="2100" required placeholder="YYYY">
                            </div>

                            <div class="col-12">
                                <label for="booktitle" class="form-label">Book Title</label>
                                <input type="text" class="form-control" id="booktitle" name="title" required>
                                <div class="invalid-feedback">
                                    Please enter a valid book title.
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
                                <input type="text" class="form-control" id="description" name="desc" required>
                                <div class="invalid-feedback">
                                    Please enter a valid description.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="isbnumber" class="form-label">ISBN</label>
                                <input type="number" class="form-control" id="isbnumber" name="isbn" maxlength="13"
                                    minlength="10" required placeholder="10-13 digits">
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
                    <button type="submit" class="btn btn-success" name="book-add">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById('validation'); 

    form.setAttribute('novalidate', true);

    form.addEventListener('submit', function(event) {
        var isValid = true;
        var inputs = form.querySelectorAll('input[type=text]'); 

        inputs.forEach(function(input) {
            if (input.value.trim() === '') {
                input.classList.add('is-invalid');
                isValid = false; 
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (!isValid) {
            event.preventDefault(); 
            event.stopPropagation(); 
            alert('Please fill out the following fields correctly.');
        }
    });
    form.querySelectorAll('input').forEach(function(input) {
        input.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            } else {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            }
        });
    });
});
</script>