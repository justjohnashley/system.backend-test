<?php
include 'includes/sessions.php';

require_once ('db.php');
$query = "SELECT * FROM thesis";
$result = mysqli_query($con, $query);

?>
<?php
$catid = 0;
$where = '';
if (isset($_GET['category'])) {
    $catid = $_GET['category'];
    $where = 'WHERE thesis.th_type = ' . $catid;
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>Library Holdings | Unpublished Materials - Thesis</title>

</head>

<body>
    <div class="wrapper">

        <?php include 'includes/sidebar.php'; ?>

        <!-- MAIN -->
        <div class="main">
            <?php include 'includes/navbar.php'; ?>


            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3>Unpublished Materials</h3>
                        <?php
                        if (isset($_SESSION['error'])) {
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <h4 class="m-1"><i class="fas fa-exclamation-circle m-2"></i> <strong>Error!</strong></h4>
                                <ul class="fs-6 mt-2">
                                <?php
                                    if (is_array($_SESSION['error'])) {
                                        echo "<ul class='fs-6 mt-2'>";
                                        foreach ($_SESSION['error'] as $error) {
                                            echo "<li>$error</li>";
                                        }
                                        echo "</ul>";
                                    } else {
                                        echo "<p class='fs-6 mt-2'>" . $_SESSION['error'] . "</p>";
                                    }
                                    ?>
                                </ul>
                            </div>
                            <?php
                            unset($_SESSION['error']);
                        }

                        if (isset($_SESSION['success'])) {
                            echo "
                                <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                <h4 class='m-1'><i class='fas fa-check-circle m-2'></i> <strong>Success!</strong></h4>
                                    <ul class='fs-6 mt-2'>" . $_SESSION['success'] . "</ul>
                                </div>
                            ";
                            unset($_SESSION['success']);
                        }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-success flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-8">
                                            <div class="p-4 m-1">
                                                <h4>List of Thesis</h4>
                                            </div>
                                        </div>
                                        <div class="col-4 align-self-center text-center">
                                            <button type="button" class="btn btn-secondary px-5" data-bs-toggle="modal"
                                                data-bs-target="#thadd">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus">
                                                    </i>
                                                </span>
                                                
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php include 'modal/th-add.php' ?>

                        <div class="col-12 col-md-0 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-content-center flex-wrap">
                                        <div class="row g-0 w-100">
                                            <div class="table-responsive-xl">
                                                <table id="libtable" class="table table-hover table-striped rounded-3" style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Item No.</th>
                                                            <th scope="col">Call Number</th>
                                                            <th scope="col">Program</th>
                                                            <th scope="col">Author/s</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Year</th>
                                                            <th scope="col">Cover</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>

                                                    <?php include 'th-content.php' ?>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </main>

            <?php include 'includes/theme-toggler.php'; ?>

            <?php include 'includes/footer.php'; ?>

        </div>
    </div>





    <?php include 'includes/scripts.php'; ?>

    <script>
        $(function () {
            $(document).on('click', '.edit', function (e) {
                e.preventDefault();
                $('#thedit').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                $('#thdelete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });
        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 't_row.php',
                data: { id: id },
                dataType: 'json',
                success: function (response) {
                    $('.thid').val(response.thid);
                    $('#catselect').val(response.th_type).html(response.name);
                    $('#edit_code').val(response.code);
                    $('#edit_uploadyr').val(response.upyear);
                    $('#edit_title').val(response.title);
                    $('#edit_author').val(response.author);

                }
            });
        }
    </script>

<script>
        document.getElementById("uploadyr").addEventListener("input", function () {
            let input = this.value.trim();
            input = input.slice(0, 4);
            this.value = input;
        });

        document.getElementById("edit_uploadyr").addEventListener("input", function () {
            let input = this.value.trim();
            input = input.slice(0, 4);
            this.value = input;
        });

    </script>

    <script>
        document.getElementById('imageUpload').addEventListener('change', function (event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const previewCover = document.getElementById('previewCover');
                previewCover.src = e.target.result;
                previewCover.style.display = 'block';
            };

            reader.readAsDataURL(file);
        });
    </script>

    <script>
        function showSelectedFile(input) {
            var preview = document.getElementById('preview');

            Array.from(input.files).forEach(file => {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var fileContent = e.target.result;
                    var filePreview = document.createElement('div');
                    filePreview.className = 'file-preview';

                    if (file.type.match('image.*')) {
                        var img = document.createElement('img');
                        img.src = fileContent;
                        img.style.width = '100%';
                        img.style.height = 'auto';
                        filePreview.appendChild(img);
                    } else if (file.type.match('application/pdf')) {
                        var embed = document.createElement('embed');
                        embed.src = fileContent;
                        embed.type = 'application/pdf';
                        embed.style.width = '100%';
                        embed.style.height = '300px';
                        filePreview.appendChild(embed);
                    } else {
                        var unsupported = document.createElement('p');
                        unsupported.textContent = 'File format not supported for preview.';
                        filePreview.appendChild(unsupported);
                    }

                    var deleteBtn = document.createElement('button');
                    deleteBtn.className = 'btn btn-danger btn-sm';
                    deleteBtn.innerHTML = '<i class="fa fa-trash"></i>';
                    deleteBtn.onclick = function () {
                        preview.removeChild(filePreview);
                    };
                    filePreview.appendChild(deleteBtn);


                    preview.appendChild(filePreview);
                };

                reader.readAsDataURL(file);
            });
        }

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var cpCoverModal = document.getElementById('thcover');
            cpCoverModal.addEventListener('show.bs.modal', function (event) {
                var triggerElement = event.relatedTarget;
                var capCover = triggerElement.getAttribute('data-thesis-cover');
                var modalImage = document.getElementById('modalCoverImage');
                modalImage.src = capCover;
            });
        });
    </script>

</body>

</html>