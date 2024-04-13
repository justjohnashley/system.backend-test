<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>LU - DigiLibMS | Digital Logbook</title>

</head>

<style>
    <?php include 'style.css' ?>
</style>

<body onload="initClock()">
    <div class="wrapper">


        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom border-success justify-content-between ">
                <div class="container-fluid">
                    <div class="col-3">
                        <button class="btn me-3" id="sidebar-toggle" type="button" disabled>
                            <span class="navbar-toggler-icon"></span>

                        </button>
                    </div>

                    <div class="col-6">
                        <div class="sidebar-logo bg-success rounded-3 text-center mx-3">
                            <a href="#"><i class="fas fa-book-reader pe-2"></i>
                                LU - Digital Library</a>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="datetime m-0">
                            <div class="date text-end fs-6 text-muted">
                                <span id="today">Today</span>,
                                <span id="month">Month</span>
                                <span id="day">00</span>,
                                <span id="year">Year</span>
                            </div>
                            <div class="time text-end fs-1 text-emphasis mb-0">
                                <strong> <span id="hour">00</span> :
                                    <span id="minutes">00</span> :
                                    <span id="seconds">00</span>
                                    <span id="period" class="bg-secondary px-2 rounded-3 text-emphasis">AM</span> </strong>
                            </div>
                        </div>
                    </div>

                </div>




            </nav>

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <h3>Digital Logbook</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-0 illustration">
                                        <div class="card-body p-0">
                                            <div class="row g-2">
                                                <div class="col-md-6 d-flex justify-content-evenly">
                                                    <div class="p-3 m-1">
                                                        <button class="btn btn-lg btn-size btn-glow-student">
                                                            <h2 class="ms-3 mt-3 text-start">College</h2>
                                                            <h1 class="text-end display-3 me-2">
                                                                <i class="fas fa-user-alt-slash"></i>
                                                            </h1>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-content-evenly">
                                                    <div class="p-3 m-1">
                                                        <button class="btn btn-lg btn-size btn-glow-shs">
                                                            <h2 class="ms-3 mt-3 text-start">SHS</h2>
                                                            <h1 class="text-end display-3 me-2">
                                                                <i class="fas fa-user-alt-slash"></i>
                                                            </h1>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 d-flex justify-content-evenly">
                                                    <div class="p-3 m-1">
                                                        <button class="btn btn-lg btn-size btn-glow-personnel">
                                                            <h2 class="ms-3 mt-3 text-start">Personnel</h2>
                                                            <h1 class="text-end display-3 me-2">
                                                                <i class="fas fa-user-alt-slash"></i>
                                                            </h1>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-content-evenly">
                                                    <div class="p-3 m-1">
                                                        <button class="btn btn-lg btn-size btn-glow-visitor">
                                                            <h2 class="ms-3 mt-3 text-start">Visitor</h2>
                                                            <h1 class="text-end display-3 me-2">
                                                                <i class="fas fa-user-alt-slash"></i>
                                                            </h1>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
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