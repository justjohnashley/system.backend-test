<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>LU - DigiLibMS | Digital Logbook</title>

</head>

<style>
    <?php include 'style.css' ?>
</style>

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