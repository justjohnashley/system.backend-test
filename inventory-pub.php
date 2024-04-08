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
                        <h3>Inventory</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-warning flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Published Materials</h4>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-center text-end pe-5">
                                            <form class="d-flex">
                                                <input class="form-control me-2" type="search" placeholder="Search">
                                                <button class="btn btn-warning" type="send">
                                                    <i class="fas fa-search fa-lg"></i>
                                                </button>
                                            </form>
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
                                                  <button class="nav-link" id="ebooks-tab" data-bs-toggle="tab" data-bs-target="#ebooks-tab-pane" type="button" role="tab" aria-controls="ebooks-tab-pane" aria-selected="false">eBooks</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="books-tab" data-bs-toggle="tab" data-bs-target="#books-tab-pane" type="button" role="tab" aria-controls="books-tab-pane" aria-selected="true">Books</button>
                                                  </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="clippings-tab" data-bs-toggle="tab" data-bs-target="#clippings-tab-pane" type="button" role="tab" aria-controls="clippings-tab-pane" aria-selected="false" disabled>Clippings</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="eJourn/eMag-tab" data-bs-toggle="tab" data-bs-target="#eJourn/eMag-tab-pane" type="button" role="tab" aria-controls="eJourn/eMag-tab-pane" aria-selected="false" disabled>eJournals and eMagazines</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="fiction-tab" data-bs-toggle="tab" data-bs-target="#fiction-tab-pane" type="button" role="tab" aria-controls="fiction-tab-pane" aria-selected="false" disabled>Fiction</button>
                                                </li>
                                              </ul>
                                              <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade" id="ebooks-tab-pane" role="tabpanel" aria-labelledby="ebooks-tab" tabindex="0">
                                                    <div class="table-responsive-lg">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Accession No.</th>
                                                                    <th scope="col">Book Code</th>
                                                                    <th scope="col">Author</th>
                                                                    <th scope="col">Title</th>
                                                                    <th scope="col">Copyright Date</th>
                                                                    <th scope="col">Cover</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">00001</td>
                                                                    <td>E0001</td>
                                                                    <td>Surname, Firstname</td>
                                                                    <td>Title</td>
                                                                    <td>0000</td>
                                                                    <td> <button class="btn btn-primary" data-bs-toggle="modal"
                                                                        data-bs-target="#myModal4" disabled>
                                                                        <span class="btn-label">
                                                                            <i class="far fa-eye"></i>
                                                                        </span>
                                                                        View
                                                                    </button>
                                                                    </td>
                                                                    <td>
                                                                        <div class="row g-1 w-100">
                                                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                                                            data-bs-target="#myModal3" disabled>
                                                                            <span class="btn-label">
                                                                                <i class="fas fa-pen"></i>
                                                                            </span>
                                                                            Edit
                                                                        </button>
                                                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                                                            data-bs-target="#myModal2" disabled>
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
                                                <div class="tab-pane fade show active" id="books-tab-pane" role="tabpanel" aria-labelledby="books-tab" tabindex="0">
                                                    <div class="table-responsive-lg">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Accession No.</th>
                                                                    <th scope="col">Book Code</th>
                                                                    <th scope="col">Author</th>
                                                                    <th scope="col">Title</th>
                                                                    <th scope="col">Copyright Date</th>
                                                                    <th scope="col">Cover</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">00001</td>
                                                                    <td>B0001</td>
                                                                    <td>Osamu, Dazai</td>
                                                                    <td>No Longer Human</td>
                                                                    <td>1941</td>
                                                                    <td> <button class="btn btn-primary" data-bs-toggle="modal"
                                                                        data-bs-target="#myModal4">
                                                                        <span class="btn-label">
                                                                            <i class="far fa-eye"></i>
                                                                        </span>
                                                                        View
                                                                    </button>
                                                                    </td>
                                                                    <td>
                                                                        <div class="row g-1 w-100">
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
                                                <div class="tab-pane fade" id="clippings-tab-pane" role="tabpanel" aria-labelledby="clippings-tab" tabindex="0">
    
                                                </div>
                                                <div class="tab-pane fade" id="eJourn/eMag-tab-pane" role="tabpanel" aria-labelledby="eJourn/eMag-tab" tabindex="0">
                                                    
                                                </div>
                                                <div class="tab-pane fade" id="fiction-tab-pane" role="tabpanel" aria-labelledby="fiction-tab" tabindex="0">
                                                    
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