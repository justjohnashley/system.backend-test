<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, ">
    <link rel="icon" href="assets/img/buffalo.ico" type="image/x-icon">
    <title>Inventory - Published Materials</title>

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

        <!-- MAIN -->
        <div class="main">
            <?php include 'includes/navbar.php'; ?>

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mt-2">
                        <h3>Inventory</h3>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-3">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="inventory.php">Inventory</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Published Materials</li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-warning flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-4 m-1">
                                                <h4>Published Materials</h4>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-center text-end pe-5">

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
                                                    <button class="nav-link" id="ebooks-tab" data-bs-toggle="tab"
                                                        data-bs-target="#ebooks-tab-pane" type="button" role="tab"
                                                        aria-controls="ebooks-tab-pane"
                                                        aria-selected="false">eBooks</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="books-tab" data-bs-toggle="tab"
                                                        data-bs-target="#books-tab-pane" type="button" role="tab"
                                                        aria-controls="books-tab-pane"
                                                        aria-selected="true">Books</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="clippings-tab" data-bs-toggle="tab"
                                                        data-bs-target="#clippings-tab-pane" type="button" role="tab"
                                                        aria-controls="clippings-tab-pane"
                                                        aria-selected="false">Clippings</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="eJourn/eMag-tab" data-bs-toggle="tab"
                                                        data-bs-target="#eJourn/eMag-tab-pane" type="button" role="tab"
                                                        aria-controls="eJourn/eMag-tab-pane"
                                                        aria-selected="false">eJournals and eMagazines</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="fiction-tab" data-bs-toggle="tab"
                                                        data-bs-target="#fiction-tab-pane" type="button" role="tab"
                                                        aria-controls="fiction-tab-pane"
                                                        aria-selected="false">Fiction</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade" id="ebooks-tab-pane" role="tabpanel"
                                                    aria-labelledby="ebooks-tab" tabindex="0">

                                                    <div class="card border-1 border-danger">

                                                        <div class="card-body">
                                                            <h1 class="mt-5 mb-5 text-center">
                                                                Data Unavailable
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade show active" id="books-tab-pane"
                                                    role="tabpanel" aria-labelledby="books-tab" tabindex="1">
                                                    <div class="table-responsive-lg">
                                                        <div class="card-body d-flex flex-fill">
                                                            <canvas id="chLine"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="clippings-tab-pane" role="tabpanel"
                                                    aria-labelledby="clippings-tab" tabindex="2">
                                                    <div class="card border-1 border-danger">

                                                        <div class="card-body">
                                                            <h1 class="mt-5 mb-5 text-center">
                                                                Data Unavailable
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="eJourn/eMag-tab-pane" role="tabpanel"
                                                    aria-labelledby="eJourn/eMag-tab" tabindex="3">
                                                    <div class="card border-1 border-danger">

                                                        <div class="card-body">
                                                            <h1 class="mt-5 mb-5 text-center">
                                                                Data Unavailable
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="fiction-tab-pane" role="tabpanel"
                                                    aria-labelledby="fiction-tab" tabindex="0">
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