<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>LU - DigiLibMS</title>

</head>

<body onload="initClock()">
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
                                    <div class="card flex-fill border-1 border-danger">
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="datetime p-3">
                                                    <div class="date text-center fs-6">
                                                        <span id="today">Today</span>,
                                                        <span id="month">Month</span>
                                                        <span id="day">00</span>,
                                                        <span id="year">Year</span>
                                                    </div>
                                                    <div class="time text-center fs-1">
                                                        <strong> <span id="hour">00</span> :
                                                            <span id="minutes">00</span> :
                                                            <span id="seconds">00</span>
                                                            <span id="period"
                                                                class="bg-danger px-2 rounded-3 text-emphasis fs-3">AM</span>
                                                        </strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="inventory.php" class="">
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
                                                <canvas id="chBar"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="logbook-records.php" class="">
                                        <?php include 'index-logbook.php'; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 py-3">
                            <div class="row">
                                <div class="col-12 pb-2">
                                    <div class="card h-100 border-1 border-success">
                                        <a href="circulation.php" class="card-click">
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
                                                            <th scope="col">ID#</th>
                                                            <th scope="col">BC</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php include 'index-circ.php'; ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card h-100 border-1 border-success">
                                        <a href="circulation.php" class="card-click">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col-10">
                                                        <h5 class="card-title mt-2">
                                                            Summary
                                                        </h5>
                                                    </div>
                                                    <div class="col-2 align-self-center">
                                                        <i class="fas fa-chart-pie fa-md"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                        <div class="card-body d-flex flex-fill">
                                            <canvas id="chDonut1"></canvas>
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

</body>

</html>