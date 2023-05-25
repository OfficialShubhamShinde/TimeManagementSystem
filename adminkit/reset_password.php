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
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <title>Welcome! | Sign In</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <center><img src="./src/img/ASDR LOGO 2.png" width="200" height="80" alt=""></center>

                        <div class="text-center mt-4">
                            <p class="lead"> Reset Your New Password....</p>
                        </div>

                        <?php
                        // Check if form is submitted
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            // Retrieve user input from form
                            $emp_id = $_POST['emp_id'];
                            $new_password = $_POST['new_password'];
                            $confirm_password = $_POST['confirm_password'];

                            // Password validation rules
                            $uppercase = preg_match('@[A-Z]@', $new_password);
                            $lowercase = preg_match('@[a-z]@', $new_password);
                            $number = preg_match('@[0-9]@', $new_password);
                            $specialChars = preg_match('@[^\w]@', $new_password);

                            // Connect to database
                            include '_dbconnect.php';

                            // Check if connection was successful
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // Check if emp_id exists in employee table
                            $sql = "SELECT * FROM employees WHERE empid = '$emp_id'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // Update password if record is found
                                if ($new_password == $confirm_password) {
                                    // Check if new password meets validation rules
                                    if (strlen($new_password) < 8 || !$uppercase || !$lowercase || !$number || !$specialChars) {
                                        echo "New password does not meet the password policy requirements.";
                                    } else {
                                        $sql = "UPDATE employees SET emppassword='$confirm_password' WHERE empid='$emp_id'";
                                        mysqli_query($conn, $sql);
                                        echo "Password updated successfully.";
                                    }
                                } else {
                                    echo "New password and confirm password do not match.";
                                }
                            } else {
                                echo "Record not found.";
                            }

                            // Close connection
                            mysqli_close($conn);
                        }
                        ?>


                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Employee ID:</label>
                                            <input class="form-control form-control-lg" type="text" name="emp_id"
                                                placeholder="Enter Your Employee ID" required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">New Password:</label>
                                            <input class="form-control form-control-lg" type="password"
                                                name="new_password" placeholder="Enter your password" required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password:</label>
                                            <input class="form-control form-control-lg" type="password"
                                                name="confirm_password" placeholder="Confirm your password" required />
                                        </div>
                                        <div class="mb-3">
                                            <input type="checkbox" onclick="togglePassword()" id="toggleBtn"> Show
                                            Password
                                        </div>
                                        <p style="font-size:15px;padding: 10px 0 0px;">
                                            &#x2022; Must have a minimum of 8 characters<br>
                                            &#x2022; Must include at least 1 number, 1 uppercase letter, 1 lowercase
                                            letter, and 1 special character [!@#$%^&*]<br>
                                            &#x2022; Password length must be less than 18 characters
                                        </p>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Reset Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <script>
                            function togglePassword() {
                                var passwordInputs = document.querySelectorAll('[type="password"]');
                                passwordInputs.forEach(function (input) {
                                    if (input.type === "password") {
                                        input.type = "text";
                                    } else {
                                        input.type = "password";
                                    }
                                });
                            }
                        </script>



                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>