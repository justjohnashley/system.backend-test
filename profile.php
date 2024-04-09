<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>LU - DigiLibMS | My Profile</title>

</head>

<body>
    <div class="wrapper">

        <?php include 'includes/sidebar.php'; ?>

        <!-- MAIN -->
        <div class="main">
            <?php include 'includes/navbar.php'; ?>


            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card border-success flex-fill border-3 illustration">
                            <div class="card-body text-light p-0 d-flex flex-fill">
                                <div class="row g-0 w-100">
                                    <div class="p-3 m-1">
                                        <h3 class="m-2"> Account Setting </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active text-bg-success" aria-current="page" href="profile.php"> Profile </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="profile-about.php"> About </a>
                    </li>
                </ul>

                <div class="container">
                    <div class="row">
                        <div class="card mt-4" style="width: 100%;">
                            <div class="row g-0 m-3">
                                <div class="col-md-3">
                                    <img src="image/profile.jpg" class="img-thumbnail mt-3 mb-3" alt="profile">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body mx-3">
                                        <h1 class="name fw-bold"> Jenina Gianai </h1>
                                        <p class="card-text text-success"> Library Director </p>
                                        <i class="fas fa-map-marker-alt me-3"></i> B1 L17 Libra Street, Perpetual
                                        Village 10,
                                        Taguig City, Metro Manila</i>

                                        <ul class="list-group mt-4">
                                            <h6 class="mt-3 fw-bold"> Contact Information </h6>
                                            <li class="list-group-item"><i class="fas fa-phone me-3"></i> +639 173 831
                                                609 </li>
                                            <li class="list-group-item"><i class="fas fa-envelope me-3"></i>
                                                Jenina@gmail.com </li>
                                            <li class="list-group-item"><i class="fab fa-telegram-plane me-3"></i>
                                                @jenainoca </li>
                                            <li class="list-group-item"><i class="fab fa-facebook me-3"></i> Jenina Rio
                                                Gianai </li>
                                        </ul>

                                        <ul class="list-group mt-4">
                                            <h6 class="mt-3 fw-bold"> Basic Information </h6>
                                            <li class="list-group-item"><i class="fas fa-venus me-3"></i> Female </li>
                                            <li class="list-group-item"><i class="fas fa-birthday-cake me-3"></i> August
                                                21, 1996 </li>
                                        </ul>

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