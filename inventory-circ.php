<?php
session_start();
require_once ('db.php');
$query = "SELECT * FROM borrow";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>Inventory - Circulation Records</title>

</head>

<body>
    <div class="wrapper">

        <?php include 'includes/sidebar.php'; ?>

        <!-- MAIN -->
        <div class="main">
            <?php include 'includes/navbar.php'; ?>

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-2">
                        <h3>Inventory</h3>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-3">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="inventory.php">Inventory</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Circulation Records</li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-warning flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-4 m-1">
                                                <h4>Circulation Records</h4>
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
                                                    <button class="nav-link active" id="borrowed-tab"
                                                        data-bs-toggle="tab" data-bs-target="#borrowed-tab-pane"
                                                        type="button" role="tab" aria-controls="borrowed-tab-pane"
                                                        aria-selected="false">Borrowed</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="returned-tab" data-bs-toggle="tab"
                                                        data-bs-target="#returned-tab-pane" type="button" role="tab"
                                                        aria-controls="returned-tab-pane"
                                                        aria-selected="true">Returned</button>
                                                </li>

                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="borrowed-tab-pane"
                                                    role="tabpanel" aria-labelledby="borrowed-tab" tabindex="0">

                                                    <div class="table-responsive-lg" id="CircB">
                                                        <div class="card-body">

                                                            <table id="libtable" class="table table-striped table-hover"
                                                                style="width: 100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="col-p">Date & Time</th>
                                                                        <th class="col-p">Type</th>
                                                                        <th class="col-p">Identification
                                                                        </th>
                                                                        <th class="col-p">Name</th>
                                                                        <th class="col-p">Code</th>
                                                                        <th class="col-p">Title</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody class="table-group-divider">
                                                                    <?php include 'inv_circB.php' ?>

                                                                </tbody>

                                                                <tfoot class="table-group-divider">
                                                                    <tr>
                                                                        <th class="col-p">Date & Time</th>
                                                                        <th class="col-p">Type</th>
                                                                        <th class="col-p">Identification
                                                                        </th>
                                                                        <th class="col-p">Name</th>
                                                                        <th class="col-p">Code</th>
                                                                        <th class="col-p">Title</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-success" onclick="printDiv('CircB')">
                                                        <span class="btn-label">
                                                            <i class="fas fa-print">
                                                            </i> Print
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="tab-pane fade" id="returned-tab-pane" role="tabpanel"
                                                    aria-labelledby="returned-tab" tabindex="1">
                                                    <div class="table-responsive-lg" id="CircR">
                                                        <div class="card-body">

                                                            <table id="libtable2"
                                                                class="table table-striped table-hover"
                                                                style="width: 100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="col-p">Date & Time</th>
                                                                        <th class="col-p">Type</th>
                                                                        <th class="col-p">
                                                                            Identification
                                                                        </th>
                                                                        <th class="col-p">Name</th>
                                                                        <th class="col-p">Code</th>
                                                                        <th class="col-p">Title</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody class="table-group-divider">
                                                                    <?php include 'inv_circR.php' ?>

                                                                </tbody>

                                                                <tfoot class="table-group-divider">
                                                                    <tr>
                                                                        <th class="col-p">Date & Time</th>
                                                                        <th class="col-p">Type</th>
                                                                        <th class="col-p">
                                                                            Identification
                                                                        </th>
                                                                        <th class="col-p">Name</th>
                                                                        <th class="col-p">Code</th>
                                                                        <th class="col-p">Title</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-success" onclick="printDiv('CircR')">
                                                        <span class="btn-label">
                                                            <i class="fas fa-print">
                                                            </i> Print
                                                        </span>
                                                    </button>
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
    <script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;

        var iframe = document.createElement('iframe');
        iframe.setAttribute('style', 'position:absolute;width:0;height:0;border:none;');
        document.body.appendChild(iframe);

        var doc = iframe.contentDocument || iframe.contentWindow.document;
        doc.write('<html><head><title>LU -  Inventory > Circulation Records </title>');
        doc.write('<link rel="stylesheet" href="assets/css/style.css">'); 
        doc.write('<link rel="stylesheet" href="assets/css/bootstrap.min.css">'); 
        doc.write('</head><body>');
        doc.write(printContents);
        doc.write('</body></html>');
        doc.close();

        iframe.contentWindow.print();

        document.body.removeChild(iframe);

        window.location.reload();    }
</script>

</body>

</html>