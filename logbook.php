<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, ">
    <link rel="icon" href="assets/img/buffalo.ico" type="image/x-icon">
    <title>LU - DigiLibMS | Digital Logbook</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fonts and icons -->
    <script src="assets/js/webfont/webfont.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<style><?php include 'style.css'?></style>

<body>
    <div class="wrapper">

        
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn me-3" id="sidebar-toggle" type="button" disabled>
                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="sidebar-logo bg-success rounded-3">
                    <a href="#"><i class="fas fa-book-reader pe-2"></i>
                        LU - Digital Library</a>
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