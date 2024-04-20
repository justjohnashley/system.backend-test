<?php
include 'db2.php';

$sql_college = "SELECT col_studentID, col_lastName, col_firstName, col_program, col_dateTime, col_purpose FROM logbook_college ORDER BY col_dateTime DESC";
$stmt_college = $pdo->prepare($sql_college);
$stmt_college->execute();
$college_users = $stmt_college->fetchAll();

$sql_personnel = "SELECT per_ID, per_lastName, per_firstName, per_department, per_dateTime, per_purpose FROM logbook_personnel ORDER BY per_dateTime DESC";
$stmt_personnel = $pdo->prepare($sql_personnel);
$stmt_personnel->execute();
$personnel_users = $stmt_personnel->fetchAll();

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>LU - DigilibMS | Logbook Records</title>

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
                        <h3>Logbook Records</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-0 d-flex">
                            <div class="card border-warning flex-fill border-3 illustration">
                                <div class="card-body text-light p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-4 m-1">
                                                <h4>Digital Logbook</h4>
                                            </div>
                                        </div>


                                        <div class="col-6 align-self-center text-center">
                                            <a href="logbook.php" class="btn btn-secondary">
                                                <span class="btn-label">
                                                    <i class="fas fa-angle-double-right">
                                                    </i>
                                                </span>
                                                Sign-in
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-0 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-content-center flex-wrap">
                                        <div class="row g-0 w-100">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="college-tab"
                                                        data-bs-toggle="tab" data-bs-target="#college-tab-pane"
                                                        type="button" role="tab" aria-controls="college-tab-pane"
                                                        aria-selected="true">College</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="shs-tab" data-bs-toggle="tab"
                                                        data-bs-target="#shs-tab-pane" type="button" role="tab"
                                                        aria-controls="shs-tab-pane" aria-selected="false">SHS</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="personnel-tab" data-bs-toggle="tab"
                                                        data-bs-target="#personnel-tab-pane" type="button" role="tab"
                                                        aria-controls="personnel-tab-pane"
                                                        aria-selected="false">Personnel</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="visitor-tab" data-bs-toggle="tab"
                                                        data-bs-target="#visitor-tab-pane" type="button" role="tab"
                                                        aria-controls="visitor-tab-pane"
                                                        aria-selected="false">Visitor</button>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="college-tab-pane"
                                                    role="tabpanel" aria-labelledby="college-tab" tabindex="0">
                                                    <div class="table-responsive-lg">
                                                        <table id="libtable" class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Student No.</th>
                                                                    <th scope="col">Last Name</th>
                                                                    <th scope="col">First Name</th>
                                                                    <th scope="col">Program</th>
                                                                    <th scope="col">Purpose</th>
                                                                    <th scope="col">Date & Time</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($college_users as $col_users): ?>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <?= htmlspecialchars($col_users['col_studentID']) ?>
                                                                            </td>
                                                                        <td><?= htmlspecialchars($col_users['col_lastName']) ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($col_users['col_firstName']) ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($col_users['col_program']) ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($col_users['col_purpose']) ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($col_users['col_dateTime']) ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="shs-tab-pane" role="tabpanel"
                                                    aria-labelledby="shs-tab" tabindex="1">
                                                    <div class="card border-1 border-danger">

                                                        <div class="card-body">
                                                            <h1 class="mt-5 mb-5 text-center">
                                                                Data Unavailable
                                                            </h1>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="personnel-tab-pane" role="tabpanel"
                                                    aria-labelledby="personnel-tab" tabindex="2">
                                                    <div class="table-responsive-lg">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Personnel ID</th>
                                                                    <th scope="col">Last Name</th>
                                                                    <th scope="col">First Name</th>
                                                                    <th scope="col">Department</th>
                                                                    <th scope="col">Purpose</th>
                                                                    <th scope="col">Date & Time</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($personnel_users as $per_users): ?>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <?= htmlspecialchars($per_users['per_ID']) ?>
                                                                            </td>
                                                                        <td><?= htmlspecialchars($per_users['per_lastName']) ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($per_users['per_firstName']) ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($per_users['per_department']) ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($per_users['per_purpose']) ?>
                                                                        </td>
                                                                        <td><?= htmlspecialchars($per_users['per_dateTime']) ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="visitor-tab-pane" role="tabpanel"
                                                    aria-labelledby="visitor-tab" tabindex="3">
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