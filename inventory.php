<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, ">
    <link rel="icon" href="assets/img/buffalo.ico" type="image/x-icon">
    <title>LU - DigiLibMS | Inventory</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fonts and icons -->
    <script src="assets/js/webfont/webfont.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">

        <?php include 'includes/sidebar.php'; ?>

        <div class="main">
            <?php include 'includes/navbar.php'; ?>


            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3>Inventory</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <a href="inventory-pub.php" class="card-click">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row gx-3 w-100">
                                        <div class="col-12">
                                            <div class="p-3 m-1 ms-3">
                                                <h4 class="mb-2">Published Materials</h4>
                                                <h1 class="text-end display-3 mb-0">
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
                                <a href="#" class="card-click">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row gx-3 w-100">
                                        <div class="col-12">
                                            <div class="p-3 m-1 ms-3">
                                                <h4 class="mb-2">Unpublished Materials</h4>
                                                <h1 class="text-end display-3 mb-0">
                                                    <i class="fas fa-user-alt-slash"></i>
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
                                <a href="#" class="card-click">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row gx-3 w-100">
                                        <div class="col-12">
                                            <div class="p-3 m-1 ms-3">
                                                <h4 class="mb-2">Borrowed</h4>
                                                <h1 class="text-end display-3 mb-0">
                                                    <i class="fas fa-upload"></i>
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
                                <a href="#" class="card-click">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row gx-3 w-100">
                                        <div class="col-12">
                                            <div class="p-3 m-1 ms-3">
                                                <h4 class="mb-2">Returned</h4>
                                                <h1 class="text-end display-3 mb-0">
                                                    <i class="fas fa-download"></i>
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
                    <div class="row my-2">
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
                    </div>
                </div>
            </main>

            <?php include 'includes/theme-toggler.php'; ?>

            <?php include 'includes/footer.php'; ?>

        </div>
    </div>





    <?php include 'includes/scripts.php'; ?>

</body>

</html>