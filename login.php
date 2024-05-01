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
    <?php include 'includes/header.php'; ?>

    <title>LU - DigiLib | Login</title>
</head>

<body>
    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">



        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">



            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #61adf9;">
                <div class="featured-image mt-2">
                    <img src="image/loginhead1.png" alt="" class="img-fluid" style="width:500px;">
                    <p class="text-black text-center fs-3">LU - DigiLibMS</p>
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
                            <span class="input-group-text" id="uidicon"><i class="fas fa-user"></i></span>
                            <input type="text" name="ID" id="uid" class="form-control form-control-lg bg-light fs-6"
                                placeholder="ID" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="pwicon"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password" id="password"
                                class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                            <span class="input-group-text password-toggle-icon"><i class="fas fa-eye"></i></span>
                        </div>

                        <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])): ?>
                            <div class="alert alert-danger alert-fixed" role="alert">
                                <?php
                                echo htmlspecialchars($_SESSION['error']);
                                unset($_SESSION['error']);
                                ?>
                            </div>
                        <?php endif; ?>

                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="save" value="lsRememberMe">
                                <label for="save" class="form-check-label text-secondary"><small>Remember
                                        Me</small></label>
                            </div>
                            
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6"
                                onclick="lsRememberMe()">Login</button>
                        </div>
                    </form>

                    <div class="row">
                        <small>Laguna University 2024 | <a href="https://elibrary.lu.edu.ph">Digital Library</a></small>
                    </div>

                    

                </div>
            </div>

        </div>

    </div>
    <?php include 'includes/scripts.php'; ?>

    <script>
        const passwordField = document.getElementById("password");
        const togglePassword = document.querySelector(".password-toggle-icon i");

        togglePassword.addEventListener("click", function () {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                togglePassword.classList.remove("fa-eye");
                togglePassword.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                togglePassword.classList.remove("fa-eye-slash");
                togglePassword.classList.add("fa-eye");
            }
        });
    </script>

    <script>
        const rmCheck = document.getElementById("save"),
            uidInput = document.getElementById("uid");

        if (localStorage.checkbox && localStorage.checkbox !== "") {
            rmCheck.setAttribute("checked", "checked");
            uidInput.value = localStorage.username;
        } else {
            rmCheck.removeAttribute("checked");
            uidInput.value = "";
        }

        function lsRememberMe() {
            if (rmCheck.checked && uidInput.value !== "") {
                localStorage.username = uidInput.value;
                localStorage.checkbox = rmCheck.value;
            } else {
                localStorage.username = "";
                localStorage.checkbox = "";
            }
        }
    </script>

</body>

</html>