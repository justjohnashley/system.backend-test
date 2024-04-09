<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>LU - DigiLibMS | Circulation</title>

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
                                                <table id="libtable" class="table table-striped table-hover" style="width: 100%">
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
                                                            <td>Book</td>
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
                                                            <td>Book</td>
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
                                                            <td>Book</td>
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
                                                            <td>Book</td>
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
                                        <div class="row">
                                            <div class="col-12 p-3">
                                                <form id="searchForm" class="d-flex">
                                                    <input class="form-control me-2" type="search"
                                                        placeholder="Identification No.">

                                                </form>
                                            </div>
                                            <div class="col-12 p-3">
                                                <form id="searchForm" class="d-flex">
                                                    <input class="form-control me-2" type="search"
                                                        placeholder="Accession No.">

                                                </form>
                                            </div>
                                            <div class="col-12 text-end">
                                                <button class="btn btn-success w-50 " type="submit">
                                                    <i class="fas fa-plus fa-lg"></i>
                                                </button>
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