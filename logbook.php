<?php
include 'includes/sessions.php';

include 'db2.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['status']) && $_POST['status'] == 'college') {
        $studentID = $_POST['col_studentID'];
        $password = $_POST['col_password'];
        $purpose = $_POST['col_purpose'];

        $sql = "SELECT * FROM college_users WHERE col_studentID = :studentID AND col_password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':studentID', $studentID);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['studentID'] = $user['col_studentID'];
            $_SESSION['correct_input'] = 'Login successfully!';

            $logbookSql = "INSERT INTO logbook_college (col_studentID, col_dateTime, col_lastName, col_firstName, col_program, col_purpose) 
            VALUES (:studentID, NOW(), :lastName, :firstName, :program, :purpose)";
            $logStmt = $pdo->prepare($logbookSql);
            $logStmt->bindParam(':studentID', $user['col_studentID'], PDO::PARAM_INT);
            $logStmt->bindParam(':lastName', $user['col_lastName'], PDO::PARAM_STR);
            $logStmt->bindParam(':firstName', $user['col_firstName'], PDO::PARAM_STR);
            $logStmt->bindParam(':program', $user['col_program'], PDO::PARAM_STR);
            $logStmt->bindParam(':purpose', $purpose, PDO::PARAM_STR);
            $logStmt->execute();

            header("Location: logbook.php");
        } else {
            $_SESSION['wrong_input'] = 'Incorrect student ID or password.';
            header("Location: logbook.php");
        }
        exit();
    } elseif (isset($_POST['status']) && $_POST['status'] == 'shs') {
        $studentID = $_POST['shs_studentID'];
        $password = $_POST['shs_password'];

        $sql = "SELECT * FROM shs_users WHERE shs_studentID = :studentID AND shs_password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':studentID', $studentID);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['studentID'] = $user['shs_studentID'];
            $_SESSION['correct_input'] = 'Login successfully!';
            header("Location: logbook.php");
        } else {
            $_SESSION['wrong_input'] = 'Incorrect student ID or password.';
            header("Location: logbook.php");
        }
        exit();
    } elseif (isset($_POST['status']) && $_POST['status'] == 'personnel') {
        $personnelID = $_POST['per_ID'];
        $password = $_POST['per_password'];
        $purpose = $_POST['per_purpose'];

        $sql = "SELECT * FROM personnel_users WHERE per_ID = :personnelID AND per_password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':personnelID', $personnelID);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['personnelID'] = $user['per_ID'];
            $_SESSION['correct_input'] = 'Login successfully!';

            $logbookSql = "INSERT INTO logbook_personnel (per_ID, per_dateTime, per_lastName, per_firstName, per_department, per_purpose)
            VALUES (:personnelID, NOW(), :lastName, :firstName, :department, :purpose)";
            $logStmt = $pdo->prepare($logbookSql);
            $logStmt->bindParam(':personnelID', $user['per_ID'], PDO::PARAM_INT);
            $logStmt->bindParam(':lastName', $user['per_lastName'], PDO::PARAM_STR);
            $logStmt->bindParam(':firstName', $user['per_firstName'], PDO::PARAM_STR);
            $logStmt->bindParam(':department', $user['per_department'], PDO::PARAM_STR);
            $logStmt->bindParam(':purpose', $purpose, PDO::PARAM_STR);
            $logStmt->execute();

            header("Location: logbook.php");
        } else {
            $_SESSION['wrong_input'] = 'Incorrect ID or password.';
            header("Location: logbook.php");
        }
        exit();
    } elseif (isset($_POST['status']) && $_POST['status'] == 'visitor') {
        $visitorID = $_POST['vis_ID'];
        $password = $_POST['vis_password'];

        $sql = "SELECT * FROM visitor_users WHERE vis_ID = :visitorID AND vis_password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':visitorID', $visitorID);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['visitorID'] = $user['vis_ID'];
            $_SESSION['correct_input'] = 'Login successfully!';
            header("Location: logbook.php");
        } else {
            $_SESSION['wrong_input'] = 'Incorrect ID or password.';
            header("Location: logbook.php");
        }
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <?php include 'includes/header.php'; ?>

    <title>LU - DigiLibMS | Digital Logbook</title>

</head>

<style>
    <?php include 'assets/css/style.css' ?>
</style>

<body onload="initClock()">
    <div class="wrapper">


        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom border-success justify-content-between ">
                <div class="container-fluid">
                    <div class="col-3">
                        <button class="btn me-3" id="sidebar-toggle" type="button" disabled>
                            <span class="navbar-toggler-icon"></span>

                        </button>
                    </div>

                    <div class="col-6">
                        <div class="sidebar-logo bg-success rounded-3 text-center mx-3">
                            <a href="#"><i class="fas fa-book-reader pe-2"></i>
                                LU - Digital Library</a>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="datetime m-0">
                            <div class="date text-end fs-6 text-muted">
                                <span id="today">Today</span>,
                                <span id="month">Month</span>
                                <span id="day">00</span>,
                                <span id="year">Year</span>
                            </div>
                            <div class="time text-end fs-1 text-emphasis mb-0">
                                <strong> <span id="hour">00</span> :
                                    <span id="minutes">00</span> :
                                    <span id="seconds">00</span>
                                    <span id="period" class="bg-secondary px-2 rounded-3 text-emphasis">AM</span>
                                </strong>
                            </div>
                        </div>
                    </div>

                </div>

            </nav>

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <h3>Digital Logbook</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-0 illustration">
                                        <div class="card-body p-0">
                                            <div class="row g-2">

                                                <div class="col-md-6 d-flex justify-content-evenly">
                                                    <div class="p-3 m-1">
                                                        <button class="btn btn-lg btn-size btn-glow-student"
                                                            data-bs-toggle="modal" data-bs-target="#collegeModal">
                                                            <h2 class="ms-3 mt-3 text-start">College</h2>
                                                            <h1 class="text-end display-3 me-2">
                                                                <i class="fas fa-user-alt-slash"></i>
                                                            </h1>
                                                        </button>
                                                    </div>
                                                </div>

                                                <?php include 'modal/log-college.php'; ?>

                                                <div class="col-md-6 d-flex justify-content-evenly">
                                                    <div class="p-3 m-1">
                                                        <button class="btn btn-lg btn-size btn-glow-personnel"
                                                            data-bs-toggle="modal" data-bs-target="#personnelModal">
                                                            <h2 class="ms-3 mt-3 text-start">Personnel</h2>
                                                            <h1 class="text-end display-3 me-2">
                                                                <i class="fas fa-user-alt-slash"></i>
                                                            </h1>
                                                        </button>
                                                    </div>
                                                </div>

                                                <?php include 'modal/log-personnel.php'; ?>

                                            </div>

                                            <?php
                                            if (isset($_SESSION['correct_input']) && !empty($_SESSION['correct_input'])) {
                                                $message = htmlspecialchars($_SESSION['correct_input']);
                                                echo "<div class='alert alert-success alert-fixed'>" . $message . "</div>";
                                                unset($_SESSION['correct_input']);
                                            }

                                            if (isset($_SESSION['wrong_input']) && !empty($_SESSION['wrong_input'])) {
                                                $message = htmlspecialchars($_SESSION['wrong_input']);
                                                echo "<div class='alert alert-danger alert-fixed'>" . $message . "</div>";
                                                unset($_SESSION['wrong_input']);
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </main>

            <?php include 'includes/theme-toggler.php'; ?>

            
<footer class="footer pt-3 border-top">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p class="mb-2">
                    <a href="https://lu.edu.ph" class="text-muted">
                        <strong>Laguna University 2024</strong>
                    </a>
                    | DigiLibMS 1.0.0
                </p>
            </div>
            <div class="col-6 text-end">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://elibrary.lu.edu.ph" class="text-success"><strong>Digital
                                Library</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
        </div>
    </div>





    <?php include 'includes/scripts.php'; ?>


</body>

</html>