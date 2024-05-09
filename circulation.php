<?php
session_start();
require_once ('db.php');
$query = "SELECT * FROM borrow";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>LU - DigiLibMS | Circulation</title>

</head>

<body onload="initClock()">
    <div class="wrapper">

        <?php include 'includes/sidebar.php'; ?>

        <!-- MAIN -->
        <div class="main">
            <?php include 'includes/navbar.php'; ?>


            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3>Circulation</h3>
                        

                        <?php
                        if (isset($_SESSION['error'])) {
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <h4 class="m-1"><i class="fas fa-exclamation-circle m-2"></i> <strong>Error!</strong></h4>
                                <ul class="fs-6 mt-2"> 
                                    <?php
                                    foreach ($_SESSION['error'] as $error) {
                                        echo "
                                            <li>" . $error . "</li>
                                        ";
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
                                                <h4>Circulation Records</h4>
                                            </div>
                                        </div>
                                        <div class="col-4 align-self-center text-center p-2">
                                            <div class="d-grid gap-2 d-md-block">
                                                <button type="button" class="btn btn-secondary px-5"
                                                    data-bs-toggle="collapse" data-bs-target="#librecs"
                                                    aria-controls="librecs"><i class="fa fa-plus"></i>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <!-- TABLE CONTENTS -->
                        <div class="col-lg-8">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-content-center flex-wrap">
                                        <div class="row g-0 w-100">
                                            <div class="table-responsive">
                                                <table id="libtable" class="table table-striped table-hover"
                                                    style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Identification</th>
                                                            <th>Name</th>
                                                            <th>Code</th>
                                                            <th>Title</th>
                                                            <th>Date & Time Borrowed</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>

                                                    <?php include 'circ-content.php' ?>

                                                    <tfoot class="table-group-divider">
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Identification</th>
                                                            <th>Name</th>
                                                            <th>Code</th>
                                                            <th>Title</th>
                                                            <th>Date & Time Borrowed</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <?php include 'circ-add.php' ?>

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
            $(document).on('click', '.return', function (e) {
                e.preventDefault();
                $('#creturn').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });
        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'cr_row.php',
                data: { id: id },
                dataType: 'json',
                success: function (response) {
                    $('.itemid').val(response.itemid);
                    $('.bookid').val(response.bookid);



                }
            });
        }
    </script>

</body>

</html>