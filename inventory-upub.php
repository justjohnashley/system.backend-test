<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>Inventory - Unpublished Materials</title>

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
                            <li class="breadcrumb-item active" aria-current="page">Unpublished Materials</li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-warning flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-4 m-1">
                                                <h4>Unpublished Materials</h4>
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
                                                    <button class="nav-link" id="Workbooks-tab" data-bs-toggle="tab"
                                                        data-bs-target="#Workbooks-tab-pane" type="button" role="tab"
                                                        aria-controls="Workbooks-tab-pane"
                                                        aria-selected="false">Workbooks</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="Thesis-tab" data-bs-toggle="tab"
                                                        data-bs-target="#Thesis-tab-pane" type="button" role="tab"
                                                        aria-controls="Thesis-tab-pane"
                                                        aria-selected="true">Thesis</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="Capstone-tab"
                                                        data-bs-toggle="tab" data-bs-target="#Capstone-tab-pane"
                                                        type="button" role="tab" aria-controls="Capstone-tab-pane"
                                                        aria-selected="false">Capstone</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="Feasiblity-tab" data-bs-toggle="tab"
                                                        data-bs-target="#Feasiblity-tab-pane" type="button" role="tab"
                                                        aria-controls="Feasiblity-tab-pane"
                                                        aria-selected="false">Feasibility Studies</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="NarrativeRep-tab" data-bs-toggle="tab"
                                                        data-bs-target="#NarrativeRep-tab-pane" type="button" role="tab"
                                                        aria-controls="NarrativeRep-tab-pane"
                                                        aria-selected="false">Narrative Reports</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade" id="Workbooks-tab-pane" role="tabpanel"
                                                    aria-labelledby="Workbooks-tab" tabindex="0">
                                                    <?php include 'includes/!avail.php' ?>
                                                </div>

                                                <div class="tab-pane fade" id="Thesis-tab-pane" role="tabpanel"
                                                    aria-labelledby="Thesis-tab" tabindex="1">
                                                    <?php include 'includes/!avail.php' ?>
                                                </div>
                                                <div class="tab-pane fade show active" id="Capstone-tab-pane"
                                                    role="tabpanel" aria-labelledby="Capstone-tab" tabindex="2">
                                                    <div class="table-responsive-lg">
                                                        <div class="card-body d-flex flex-fill">
                                                            <?php include 'inv-caps.php' ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="Feasiblity-tab-pane" role="tabpanel"
                                                    aria-labelledby="Feasiblity-tab" tabindex="3">

                                                    <?php include 'includes/!avail.php' ?>
                                                </div>
                                                <div class="tab-pane fade" id="NarrativeRep-tab-pane" role="tabpanel"
                                                    aria-labelledby="NarrativeRep-tab" tabindex="4">

                                                    <?php include 'includes/!avail.php' ?>
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