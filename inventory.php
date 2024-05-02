<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>LU - DigiLibMS | Inventory</title>

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
                        <h3>Inventory</h3>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-md-4 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-header">
                                    <h5 class="card-title mt-2 text-center">
                                        Total of Uploaded Materials
                                    </h5>
                                </div>
                                <div class="card-body text-center">
                                    <?php include 'inv-summary.php'; ?>
                                </div>
                            </div>

                        </div>

                        <div class="col-4 col-md-4 d-flex">
                            <div class="card flex-fill border-1 border-success illustration">
                                <div class="card-header">
                                    <h5 class="card-title mt-2 text-center">
                                        Circulation Summary
                                    </h5>
                                </div>
                                <div class="card-body text-center">
                                    <?php include 'inv-circ.php'; ?>

                                    <canvas id="CircDonut"></canvas>
                                </div>
                            </div>

                        </div>

                        <div class="col-4 col-md-4 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <a href="inventory-circ.php" class="card-click">
                                    <div class="card-body p-0 d-flex flex-fill">
                                        <div class="row gx-3 w-100">
                                            <div class="col-12">
                                                <div class="p-3 m-1 ms-3">
                                                    <h4 class="mt-3">Circulation Records</h4>
                                                    <h1 class="text-end display-3 mt-5">
                                                        <i class="fas fa-history"></i>
                                                    </h1>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="row justify-content-center">

                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <a href="inventory-pub.php" class="card-click">
                                    <div class="card-body p-0 d-flex flex-fill">
                                        <div class="row gx-3 w-100">
                                            <div class="col-12">
                                                <div class="p-3 m-1 ms-3">
                                                    <h4 class="mt-3">Published Materials</h4>
                                                    <h1 class="text-end display-3 mt-3">
                                                        <i class="fas fa-user-check"></i>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <a href="inventory-upub.php" class="card-click">
                                    <div class="card-body p-0 d-flex flex-fill">
                                        <div class="row gx-3 w-100">
                                            <div class="col-12">
                                                <div class="p-3 m-1 ms-3">
                                                    <h4 class="mt-3">Unpublished Materials</h4>
                                                    <h1 class="text-end display-3 mt-3">
                                                        <i class="fas fa-user-alt-slash"></i>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>



                    </div>
                    <!-- Chart Elements -->
                    <!--    <div class="row my-2">
                        <div class="col-md-12 py-1">
                            <div class="card border-0">
                                <div class="card-header">
                                    <h5 class="card-title mt-2">
                                        Books borrowed this year
                                    </h5>
                                    <h6 class="card-subtitle text-muted">
                                        Monthly view of books borrowed. 
                                    </h6>
                                </div>   
                                <div class="card-body d-flex flex-fill">
                                    <canvas id="chLine"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 py-1">
                            <div class="card border-0">
                                <div class="card-header">
                                    <h5 class="card-title mt-2">
                                        Student Logs
                                    </h5>
                                    <h6 class="card-subtitle text-muted">
                                        Monthly view of student who logged into the University Library. 
                                    </h6>
                                </div>   
                                <div class="card-body d-flex flex-fill">
                                    <canvas id="chBar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </main>

            <?php include 'includes/theme-toggler.php'; ?>

            <?php include 'includes/footer.php'; ?>

        </div>
    </div>





    <?php include 'includes/scripts.php'; ?>

</body>

</html>