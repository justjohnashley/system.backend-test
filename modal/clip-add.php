<!-- MODAL FOR ADD BUTTON -->
<div class="modal fade" id="clip_add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="validation" name="add" action="clp_add.php" method="POST" enctype="multipart/form-data">

                <div class="modal-header">
                    <h4 class="modal-title">Add</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="container overflow-hidden">
                        <div class="row gy-2">

                            <div class="col-12">
                                <label for="category" class="form-label">Subject</label>
                                <select class="form-select" name="subject" required>
                                    <option selected></option>
                                    <?php
                                    $sql = "SELECT * FROM clippings_category";
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

                            <!-- [accession num part] -->

                            <div class="col-12">
                                <label for="datepub" class="form-label">Date Published</label>
                                <input type="date" class="form-control" id="datepub" name="datepub" required>
                            </div>

                            <div class="col-12">
                                <label for="cliptitle" class="form-label">Clipping Title</label>
                                <input type="text" class="form-control" id="cliptitle" name="title" required>
                                <div class="invalid-feedback">
                                    Please enter a valid clipping title.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="newspaper" class="form-label">Newspaper</label>
                                <input type="text" class="form-control" id="newspaper" name="newspaper" required>
                                <div class="invalid-feedback">
                                    Please enter a valid input.
                                </div>
                            </div>

                            <!-- [publication place part] -->

                            <!-- [publisher part] -->

                            <!-- [description part] -->

                            <!-- [ISBN part] -->

                            <!-- cover part -->

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
                    <button type="submit" class="btn btn-success" name="clip-add">Submit</button>
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







