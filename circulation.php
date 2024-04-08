<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, ">
    <link rel="icon" href="assets/img/buffalo.ico" type="image/x-icon">
    <title>LU - DigiLibMS | Circulation</title>

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
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-success flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-4">
                                            <div class="p-4 m-1">
                                                <h4>Circulation Records</h4>
                                            </div>
                                        </div>
                                        <div class="col-4 align-self-center text-end">
                                            <form class="d-flex">
                                                <input class="form-control me-2" type="search" placeholder="Search">
                                                <button class="btn btn-success" type="submit">
                                                    <i class="fas fa-search fa-lg"></i>
                                                </button>
                                            </form>
                                        </div>

                                        <div class="col-4 align-self-center text-center p-2">
                                            <div class="d-grid gap-2 d-md-block">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-toggle="collapse" data-bs-target="#librecs"
                                                    aria-controls="librecs">
                                                    College
                                                </button>

                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-toggle="collapse" data-bs-target="#librecs"
                                                    aria-controls="librecs">
                                                    SHS
                                                </button>

                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-toggle="collapse" data-bs-target="#librecs"
                                                    aria-controls="librecs">
                                                    Personnel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <!-- TABLE CONTENTS -->
                        <div class="col">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-content-center flex-wrap">
                                        <div class="row g-0 w-100">
                                            <div class="table-responsive">
                                                <table id="example" class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Identification</th>
                                                            <th>Name</th>
                                                            <th>Category</th>
                                                            <th>Code</th>
                                                            <th>Title</th>
                                                            <th>Date Borrowed</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        <tr>
                                                            <td>Student</td>
                                                            <td>221-0000</td>
                                                            <td>Yor, Wysiwyg</td>
                                                            <td>Literature</td>
                                                            <td>B0001</td>
                                                            <td>The Woman Who Had Two Navels</td>
                                                            <td>2024/02/20</td>
                                                            <td>
                                                                <div class="row g-0 w-100">
                                                                    <button class="btn btn-danger"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#myModal">
                                                                        <span class="btn-label">
                                                                            <i class="fas fa-undo-alt"></i>
                                                                        </span>
                                                                        Return
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Student</td>
                                                            <td>221-0000</td>
                                                            <td>Yor, Wysiwyg</td>
                                                            <td>Literature</td>
                                                            <td>B0001</td>
                                                            <td>The Woman Who Had Two Navels</td>
                                                            <td>2024/02/20</td>
                                                            <td>
                                                                <div class="row g-1 w-100">
                                                                    <button class="btn btn-danger"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#myModal">
                                                                        <span class="btn-label">
                                                                            <i class="fas fa-undo-alt"></i>
                                                                        </span>
                                                                        Return
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Student</td>
                                                            <td>221-0000</td>
                                                            <td>Yor, Wysiwyg</td>
                                                            <td>Literature</td>
                                                            <td>B0001</td>
                                                            <td>The Woman Who Had Two Navels</td>
                                                            <td>2024/02/20</td>
                                                            <td>
                                                                <div class="row g-1 w-100">
                                                                    <button class="btn btn-danger"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#myModal">
                                                                        <span class="btn-label">
                                                                            <i class="fas fa-undo-alt"></i>
                                                                        </span>
                                                                        Return
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Student</td>
                                                            <td>221-0000</td>
                                                            <td>Yor, Wysiwyg</td>
                                                            <td>Literature</td>
                                                            <td>B0001</td>
                                                            <td>The Woman Who Had Two Navels</td>
                                                            <td>2024/02/20</td>
                                                            <td>
                                                                <div class="row g-1 w-100">
                                                                    <button class="btn btn-danger"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#myModal">
                                                                        <span class="btn-label">
                                                                            <i class="fas fa-undo-alt"></i>
                                                                        </span>
                                                                        Return
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot class="table-group-divider">
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Identification</th>
                                                            <th>Name</th>
                                                            <th>Category</th>
                                                            <th>Code</th>
                                                            <th>Title</th>
                                                            <th>Date Borrowed</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col">
                            <div class="collapse" id="librecs" style>
                                <div class="card border-0">
                                    <div class="card-header border-success border-3">
                                        <h5 class="card-title mt-2 text-center">
                                            Student / Personnel
                                        </h5>

                                    </div>
                                    <div class="card-body">
                                        <form id="searchForm" class="d-flex">
                                            <input class="form-control me-2" type="search" placeholder="Search ID">
                                            <button class="btn btn-success" type="submit">
                                                <i class="fas fa-search fa-lg"></i>
                                            </button>
                                        </form>
                                        <div class="search-result-box">
                                            <div class="collapse" id="result">
                                                <h4>THIS IS THE RESULT BOX</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="collapse show" id="librecs" style>
                                <div class="card border-1 border-success">
                                    <div class="card-header">
                                        <h5 class="card-title mt-2 text-center">
                                            Recently Borrowed Books
                                        </h5>
                                        <h6 class="card-subtitle text-muted text-center">
                                            mm/dd/yyyy 
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="mt-5 mb-5 text-center">
                                            15
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="librecs" style>
                                <div class="card border-1 border-success">
                                    <div class="card-header">
                                        <h5 class="card-title mt-2 text-center">
                                            Recently Returned Books
                                        </h5>
                                        <h6 class="card-subtitle text-muted text-center">
                                            mm/dd/yyyy 
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="mt-5 mb-5 text-center">
                                            10
                                        </h1>
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