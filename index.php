<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, ">
    <link rel="icon" href="assets/img/buffalo.ico" type="image/x-icon">
    <title>LU - DigiLibMS</title>

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
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <h3>Admin Dashboard</h3>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 d-flex">
                                    <div class="card flex-fill border-0 illustration">
                                        <div class="card-body p-0 d-flex flex-fill">
                                            <div class="row g-0 w-100">
                                                <div class="col-6">
                                                    <div class="p-3 m-1">
                                                        <h4>Welcome back, Library Director!</h4>
                                                        <p class="mb-0">Laguna University - Digital Library Management
                                                            System
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6 align-self-center text-center">
                                                    <img src="image/lubuffalo1.png" class="img-fluid illustration-img"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex">
                                    <div class="card flex-fill border-0">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h4 class="mb-2">Borrow Requests</h4>
                                                    <p class="text-warning m-2">5 pending request/s</p>
                                                    <div class="mb-0">
                                                        <span class="text-success ms-3 me-2">
                                                            +9 request/s approved today
                                                        </span>
                                                    </div>
                                                    <div class="mb-0">
                                                        <span class="text-danger ms-3 me-2">
                                                            -2 request/s denied today
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Table Elements -->
                                    <div class="card border-0">
                                        <div class="card-header">
                                            <h5 class="card-title mt-2">
                                                Logbook Records
                                            </h5>
                                            <h6 class="card-subtitle text-muted">
                                                Real-time view of digital records of the Library Logbook
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive-lg">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Student No.</th>
                                                            <th scope="col">Surname</th>
                                                            <th scope="col">Program</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>221-5896</td>
                                                            <td>Mercado</td>
                                                            <td>BSIT</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>198-1475</td>
                                                            <td>Protacio</td>
                                                            <td>BSCS</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>111-444</td>
                                                            <td>Rizal</td>
                                                            <td>BSCE</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="inventory.html" class="">
                                    <div class="col-md-12">
                                        <div class="card border-0">
                                            <div class="card-header">
                                                <h5 class="card-title mt-2">
                                                    Borrowed books
                                                </h5>
                                                <h6 class="card-subtitle text-muted">
                                                    Daily view of books borrowed from the University Library.
                                                </h6>
                                            </div>
                                            <div class="card-body d-flex flex-fill">
                                                <canvas id="chLine"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 py-3">
                            <div class="card h-100 border-1 border-success">
                                <a href="circulation.html" class="card-click">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-10">
                                                <h5 class="card-title mt-2">
                                                    Circulation History
                                                </h5>
                                            </div>
                                            <div class="col-2 align-self-center">
                                                <i class="fas fa-history fa-md"></i>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="table-responsive-xl">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S#</th>
                                                    <th scope="col">BC#</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">221-****</th>
                                                    <td>B0001</td>
                                                    <td>Returned</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">221-****</th>
                                                    <td>B0001</td>
                                                    <td>Borrowed</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">221-****</th>
                                                    <td>B0001</td>
                                                    <td>Returned</td>
                                                </tr>
                                            </tbody>
                                        </table>
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

</body>

</html>