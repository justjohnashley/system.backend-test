<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>Inventory - Published Materials</title>

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
                                                    <div class="card-body d-flex flex-fill" id="ebooks">
                                                            <?php include 'inv-ebook.php' ?>
                                                        </div>
                                                        <button class="btn btn-success" onclick="printDiv('ebooks')">
                                                            <span class="btn-label">
                                                                <i class="fas fa-print">
                                                                </i> Print
                                                            </span>
                                                        </button>
                                                </div>

                                                <div class="tab-pane fade show active" id="books-tab-pane"
                                                    role="tabpanel" aria-labelledby="books-tab" tabindex="1">
                                                    <div class="table-responsive-lg">
                                                        <div class="card-body d-flex flex-fill" id="books">
                                                            <?php include 'inv-book.php' ?>
                                                        </div>
                                                        <button class="btn btn-success" onclick="printDiv('books')">
                                                            <span class="btn-label">
                                                                <i class="fas fa-print">
                                                                </i> Print
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="clippings-tab-pane" role="tabpanel"
                                                    aria-labelledby="clippings-tab" tabindex="2">
                                                    <div class="card-body d-flex flex-fill" id="clips">
                                                            <?php include 'inv-clips.php' ?>
                                                        </div>
                                                        <button class="btn btn-success" onclick="printDiv('clips')">
                                                            <span class="btn-label">
                                                                <i class="fas fa-print">
                                                                </i> Print
                                                            </span>
                                                        </button>
                                                </div>
                                                <div class="tab-pane fade" id="eJourn/eMag-tab-pane" role="tabpanel"
                                                    aria-labelledby="eJourn/eMag-tab" tabindex="3">
                                                    <div class="card-body d-flex flex-fill" id="eMagJourn">
                                                            <?php include 'inv-ejm.php' ?>
                                                        </div>
                                                        <button class="btn btn-success" onclick="printDiv('eMagJourn')">
                                                            <span class="btn-label">
                                                                <i class="fas fa-print">
                                                                </i> Print
                                                            </span>
                                                        </button>
                                                </div>
                                                <div class="tab-pane fade" id="fiction-tab-pane" role="tabpanel"
                                                    aria-labelledby="fiction-tab" tabindex="4">
                                                    <div class="card-body d-flex flex-fill" id="fiction">
                                                            <?php include 'inv-fiction.php' ?>
                                                        </div>
                                                        <button class="btn btn-success" onclick="printDiv('fiction')">
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
            doc.write('<html><head><title>LU -  Inventory > Published Materials </title>');
            doc.write('<link rel="stylesheet" href="assets/css/style.css">');
            doc.write('<link rel="stylesheet" href="assets/css/bootstrap.min.css">');
            doc.write('</head><body>');
            doc.write(printContents);
            doc.write('</body></html>');
            doc.close();

            iframe.contentWindow.print();

            document.body.removeChild(iframe);

            window.location.reload();
        }
    </script>

</body>

</html>