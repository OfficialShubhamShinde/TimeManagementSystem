<?php
include '_dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png"/>

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <title>Welcome! | Reset Password</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <center><img src="./src/img/ASDR LOGO 2.png" width="200" height="80" alt=""></center>
                        <div class="text-center mt-4">
                            <!-- <h1 class="h2">Welcome to ASDR Infotech</h1> -->
                            <p class="lead">
                                Reset Your Password Here...
                            </p>
                        </div>

                        <script type="text/javascript">
                            function togglePassword() {
                                var passwordField = document.getElementById("password");
                                var toggleBtn = document.getElementById("toggleBtn");
                                if (passwordField.type === "password") {
                                    passwordField.type = "text";
                                    toggleBtn.innerHTML = "Hide";
                                } else {
                                    passwordField.type = "password";
                                    toggleBtn.innerHTML = "Show";
                                }

                                var passwordField = document.getElementById("confirmPassword");
                                var toggleBtn = document.getElementById("toggleBtn");
                                if (passwordField.type === "password") {
                                    passwordField.type = "text";
                                    toggleBtn.innerHTML = "Hide";
                                } else {
                                    passwordField.type = "password";
                                    toggleBtn.innerHTML = "Show";
                                }
                            }

                            function validateForm() {
                                var passwordField = document.getElementById("password");
                                var confirmPasswordField = document.getElementById("confirmPassword");
                                var password = passwordField.value;
                                var confirmPassword = confirmPasswordField.value;
                                if (password == "") {
                                    alert("Please enter a password.");
                                    passwordField.focus();
                                    return false;
                                }
                                if (password.length < 8 || password.length > 18) {
                                    alert("Password must be between 8 and 18 characters.");
                                    passwordField.focus();
                                    return false;
                                }
                                if (!password.match(/[0-9]/)) {
                                    alert("Password must contain at least one number.");
                                    passwordField.focus();
                                    return false;
                                }
                                if (!password.match(/[a-z]/)) {
                                    alert("Password must contain at least one lowercase letter.");
                                    passwordField.focus();
                                    return false;
                                }
                                if (!password.match(/[A-Z]/)) {
                                    alert("Password must contain at least one uppercase letter.");
                                    passwordField.focus();
                                    return false;
                                }
                                if (!password.match(/[!@#$%^&*]/)) {
                                    alert("Password must contain at least one special character from [!@#$%^&*].");
                                    passwordField.focus();
                                    return false;
                                }
                                if (password !== confirmPassword) {
                                    alert("Passwords do not match.");
                                    confirmPasswordField.focus();
                                    return false;
                                }
                                return true;
                            }
                        </script>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="" onsubmit="return validateForm()">
                                        <div class="mb-3">
                                            <label class="form-label">Employee ID </label>
                                            <input class="form-control form-control" type="number" name="empid"
                                                id="empid" placeholder="Enter Your Employee ID" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <input class="form-control form-control" type="password" name="password"
                                                id="password" placeholder="Enter your password" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input class="form-control form-control" type="password"
                                                name="confirmPassword" id="confirmPassword"
                                                placeholder="Confirm your password" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="checkbox" onclick="togglePassword()" id="toggleBtn"> Show
                                            Password
                                        </div>
                                        <p style="font-size:10px;padding: 10px 0 0px;">
                                            &#x2022; Must have a minimum of 8 characters<br>
                                            &#x2022; Must include at least 1 number, 1 uppercase letter, 1 lowercase
                                            letter, and 1 special character [!@#$%^&*]<br>
                                            &#x2022; Password length must be less than 18 characters
                                        </p>
                                        <button type="submit" class="btn btn-primary btn-block">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
                        // Include database connection file
                        include '_dbconnect.php';

                        // Initialize variables
                        $id = "";
                        $new_password = "";

                        // Check if form data was submitted
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Retrieve form data
                            if (isset($_POST['empid'])) {
                                $id = $_POST['empid'];
                            }
                            if (isset($_POST['confirmPassword'])) {
                                $new_password = $_POST['confirmPassword'];
                            }

                            // Update employee record in database
                            $sql = "UPDATE employees SET emppassword='$new_password' WHERE empid=$id";
                            $result = mysqli_query($conn, $sql);

                            // Check if update was successful
                            if ($result) {
                                echo "<script>alert('updated successfully.')</script>";
                                echo "<script>window.location.href = 'index.php';</script>";
                            } else {
                                echo "Error updating employee information: " . mysqli_error($conn);
                            }
                        }

                        // Close database connection
                        mysqli_close($conn);
                        ?>


    </main>

    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>