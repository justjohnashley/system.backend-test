<?php

require_once ('db.php');
$query = "SELECT * FROM book";
$result = mysqli_query($con, $query);

?>
<?php
$catid = 0;
$where = '';
if (isset($_GET['category'])) {
    $catid = $_GET['category'];
    $where = 'WHERE book.category_id = ' . $catid;
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>Library Holdings | Published Materials - Books</title>

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
                        <h3>Published Materials</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-success flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-4">
                                            <div class="p-4 m-1">
                                                <h4>List of Books</h4>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-center text-end">
                                            <form class="d-flex">
                                                <input class="form-control me-2" type="search" placeholder="Search">
                                                <button class="btn btn-success" type="send">
                                                    <i class="fas fa-search fa-lg"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-3 align-self-center text-center">
                                            <a href="bmadd" class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#bmadd">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus">
                                                    </i>
                                                </span>
                                                Add
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php include 'modal/book-add.php' ?>


                        <!-- TABLE CONTENTS -->
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-content-center flex-wrap">
                                        <div class="row g-0 w-100">
                                            <div class="table-responsive-xl">
                                                <table id="libtable" class="table table-hover table-striped"
                                                    style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Item No.</th>
                                                            <th scope="col">Accession No.</th>
                                                            <th scope="col">Sublocation</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Author</th>
                                                            <th scope="col">Copyright Date</th>
                                                            <th scope="col">Cover</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>

                                                    <?php include 'books-content.php' ?>

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
                $('#bmedit').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                $('#bmdelete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });
        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'b_row.php',
                data: { id: id },
                dataType: 'json',
                success: function (response) {
                    $('.bookid').val(response.bookid);
                    $('#catselect').val(response.category_id).html(response.name);
                    $('#edit_code').val(response.code);
                    $('#edit_year').val(response.cryear);
                    $('#edit_title').val(response.title);
                    $('#edit_author').val(response.author);
                    $('#edit_publisher').val(response.publisher);
                    $('#edit_place').val(response.placepub);
                    $('#edit_desc').val(response.descr);
                    $('#edit_isbn').val(response.isbn);
                    $('#edit_cover').val(response.cover);

                }
            });
        }
    </script>

</body>

</html>