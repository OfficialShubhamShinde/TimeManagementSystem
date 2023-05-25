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


    <title>Welcome! | Reset Password</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Style for form container */
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style for form title */
        .form-title {
            margin-top: 0;
        }

        /* Style for form label */
        label {
            flex: 1;
            
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style for form input */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* Style for form input group */
        .input-group {
            position: relative;
        }

        /* Style for form input toggle button */
        .toggleBtn {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
        }

        /* Style for form button */
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        /* Style for form button on hover */
        button[type="submit"]:hover {
            background-color: #0069d9;
        }
    </style>




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



                                <?php
                                // Check if form is submitted
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                    // Retrieve user input from form
                                    $emp_id = $_POST['emp_id'];
                                    $new_password = $_POST['new_password'];
                                    $confirm_password = $_POST['confirm_password'];

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
                                            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                                            $sql = "UPDATE employees SET emppassword='$hashed_password' WHERE empid='$emp_id'";
                                            mysqli_query($conn, $sql);
                                            echo "Password updated successfully.";
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

                                <!-- HTML form to accept input from user -->

                            <div class="form-container">
                                <form method="post">
                                    <h2 class="form-title">Reset Password</h2>
                                    <div class="form-group">
                                        <label for="empid">Employee ID:</label>
                                        <input type="text" name="emp_id" id="empid" placeholder="Enter Your Employee ID"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">New Password:</label>
                                        <div class="input-group">
                                            <input type="password" name="new_password" id="password"
                                                placeholder="Enter your password" required>
                                            <button type="button" class="toggleBtn" id="toggleBtn1"><i
                                                    class="bi bi-eye-slash"></i></button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirm Password:</label>
                                        <div class="input-group">
                                            <input type="password" name="confirm_password" id="confirmPassword"
                                                placeholder="Confirm your password" required>
                                            <button type="button" class="toggleBtn" id="toggleBtn2"><i
                                                    class="bi bi-eye-slash"></i></button>
                                        </div>
                                    </div>
                                    <button type="submit">Reset Password</button>
                                </form>
                            </div>


                        </div>
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