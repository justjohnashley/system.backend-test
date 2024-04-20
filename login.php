<?php
session_start();
include 'db2.php';

if (isset($_SESSION['ID'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID = $_POST['ID'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE ID = :ID AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ID', $ID);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['ID'] = $user['ID']; 
        header("Location: index.php"); 
    } else {
        $_SESSION['error'] = 'Incorrect ID or password.';
        header("Location: login.php");
    }
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/buffalo.ico" type="image/x-icon">
    <title>LU - DigiLib | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="assets/js/webfont/webfont.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">



        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">



            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #61adf9;">
                <div class="featured-image mt-2">
                    <img src="image/loginhead1.png" alt="" class="img-fluid" style="width:500px;">
                    <p class="text-black text-center fs-3">LU - Digital Library</p>
                </div>
                
                <small class="text-black text-wrap text-center mb-2" style="width: 17rem">Admin Login Page</small>
            </div>

            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mt-2 mb-4">
                        <h2>Admin Login</h2>
                        <hr class="my-1">
                        <p>This is the Library Management System of Laguna University.</p>
                    </div>

                <form action="login.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="ID" class="form-control form-control-lg bg-light fs-6" placeholder="ID" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                    </div>

                    <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])): ?>
                        <div class="alert alert-danger" role="alert">
                    <?php 
                        echo htmlspecialchars($_SESSION['error']); 
                        unset($_SESSION['error']);
                    ?>
                        </div>
                    <?php endif; ?>

                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                </form>

                    <div class="row">
                        <small>Laguna University 2024 | <a href="https://elibrary.lu.edu.ph">Digital Library</a></small>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>