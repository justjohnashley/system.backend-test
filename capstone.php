<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, ">
    <link rel="icon" href="assets/img/buffalo.ico" type="image/x-icon">
    <title>Unpublished Materials - Capstone Projects</title>

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
                        <h3>Unpublished Materials</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-success flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-4">
                                            <div class="p-3 m-1">
                                                <h4>List of Capstone Projects</h4>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-center text-end">
                                            <form class="d-flex">
                                                <input class="form-control me-2" type="search" placeholder="Search">
                                                <button class="btn btn-success" type="send">
                                                    <i class="fas fa-search fa-lg"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-3 align-self-center text-center">
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#myModal">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus">
                                                    </i>
                                                </span>
                                                Add
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php include 'modal/caps-add.php' ?>
                        
                        <?php include 'modal/caps-delete.php' ?>
                        
                        <?php include 'modal/caps-edit.php' ?>
                        
                        <?php include 'modal/caps-view.php' ?>

                        <div class="col-12 col-md-0 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-content-center flex-wrap">
                                        <div class="row g-0 w-100">
                                            <div class="table-responsive-xl">
                                                <table class="table table-hover rounded-3">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Accession No.</th>
                                                            <th scope="col">Capstone Code</th>
                                                            <th scope="col">Author</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Year Uploaded</th>
                                                            <th scope="col">Cover</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">00001</td>
                                                            <td>CAP0001</td>
                                                            <td>Berdali Eugenia</td>
                                                            <td>The Reflective/Dialogical
                                                                ESL/EFL Teacher A
                                                                Co-authorship in the
                                                                Naming of the World</td>
                                                            <td>2012</td>
                                                            <td> <button class="btn btn-outline-success">
                                                                    <span class="btn-label">
                                                                        <i class="fas fa-file-upload"></i>
                                                                    </span>
                                                                    Upload
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <div class="row g-1 w-100">
                                                                <button class="btn btn-primary" data-bs-toggle="modal"
                                                                    data-bs-target="#myModal4">
                                                                    <span class="btn-label">
                                                                        <i class="far fa-eye"></i>
                                                                    </span>
                                                                    View
                                                                </button>
                                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                                    data-bs-target="#myModal3">
                                                                    <span class="btn-label">
                                                                        <i class="fas fa-pen"></i>
                                                                    </span>
                                                                    Edit
                                                                </button>
                                                                <button class="btn btn-danger" data-bs-toggle="modal"
                                                                    data-bs-target="#myModal2">
                                                                    <span class="btn-label">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </span>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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