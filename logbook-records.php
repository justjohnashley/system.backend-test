<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, ">
    <link rel="icon" href="assets/img/buffalo.ico" type="image/x-icon">
    <title>LU - DigilibMS | Logbook Records</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fonts and icons -->
    <script src="assets/js/webfont/webfont.min.js"></script>

    <link rel="stylesheet" href="style.css">
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
                        <h3>Logbook Records</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-warning flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-4 m-1">
                                                <h4>Digital Logbook</h4>
                                            </div>
                                        </div>


                                        <div class="col-6 align-self-center text-center">
                                            <a href="logbook.php" class="btn btn-secondary">
                                                <span class="btn-label">
                                                    <i class="fas fa-angle-double-right">
                                                    </i>
                                                </span>
                                                Sign-in
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TABLE CONTENTS -->
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-content-center flex-wrap">
                                        <div class="row g-0 w-100">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="college-tab" data-bs-toggle="tab"
                                                        data-bs-target="#college-tab-pane" type="button" role="tab"
                                                        aria-controls="college-tab-pane"
                                                        aria-selected="true">College</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="shs-tab" data-bs-toggle="tab"
                                                        data-bs-target="#shs-tab-pane" type="button" role="tab"
                                                        aria-controls="shs-tab-pane" aria-selected="false">SHS</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="personnel-tab" data-bs-toggle="tab"
                                                        data-bs-target="#personnel-tab-pane" type="button" role="tab"
                                                        aria-controls="personnel-tab-pane"
                                                        aria-selected="false">Personnel</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="visitor-tab" data-bs-toggle="tab"
                                                        data-bs-target="#visitor-tab-pane" type="button" role="tab"
                                                        aria-controls="visitor-tab-pane"
                                                        aria-selected="false">Visitor</button>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="college-tab-pane"
                                                    role="tabpanel" aria-labelledby="college-tab" tabindex="0">
                                                    <div class="table-responsive-lg">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Student No.</th>
                                                                    <th scope="col">Last Name</th>
                                                                    <th scope="col">First Name</th>
                                                                    <th scope="col">Program</th>
                                                                    <th scope="col">Purpose</th>
                                                                    <th scope="col">Date & Time</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">221-0000</td>
                                                                    <td>Surname</td>
                                                                    <td>Given Name</td>
                                                                    <td>BSIT</td>
                                                                    <td>Other/s</td>
                                                                    <td>2024/04/01 15:30</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="shs-tab-pane" role="tabpanel"
                                                    aria-labelledby="shs-tab" tabindex="1">
                                                        <div class="card border-1 border-danger">
                                                        
                                                            <div class="card-body">
                                                                <h1 class="mt-5 mb-5 text-center">
                                                                    Data Unavailable
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                                <div class="tab-pane fade" id="personnel-tab-pane" role="tabpanel"
                                                    aria-labelledby="personnel-tab" tabindex="2">
                                                    <div class="card border-1 border-danger">
                                                        
                                                        <div class="card-body">
                                                            <h1 class="mt-5 mb-5 text-center">
                                                                Data Unavailable
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="visitor-tab-pane" role="tabpanel"
                                                    aria-labelledby="visitor-tab" tabindex="3">
                                                    <div class="card border-1 border-danger">
                                                        
                                                        <div class="card-body">
                                                            <h1 class="mt-5 mb-5 text-center">
                                                                Data Unavailable
                                                            </h1>
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