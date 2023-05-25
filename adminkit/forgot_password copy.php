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

           <br>
            <?php

            // Connect to the database
            include '_dbconnect.php';

            // Check if the form was submitted
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              // Get the form data
              $email = $_POST['email'] ?? '';
              $dob = $_POST['dob'] ?? '';
              $jobRole = $_POST['position'] ?? '';

              // Extract year from date of birth
              $birthYear = date('Y', strtotime($dob));

              // Prepare the SQL query
              $query = "SELECT * FROM employees WHERE emailid = '$email' AND YEAR(dob) = '$birthYear' AND position = '$jobRole'";

              // Execute the query
              $result = mysqli_query($conn, $query);

              // Check if a matching record was found
              if (mysqli_num_rows($result) == 1) {
                // Matching record found, send email


                echo '<div class="text-center mt-4"><p class="lead"> Password recovery email will be sent to your email address: ' . $email . '</p></div>';
              } else {
                // No matching record found
                echo '<div class="alert alert-danger">Invalid email or security question answer.</div>';
              }

              // Close the database connection
              mysqli_close($conn);
            }
            ?>

            <div class="card">
              <div class="card-body">
                <div class="m-sm-4">
                  <form method="post" action="">
                    <div class="form-group">
                      <h4>Security Questions</h4>
                      <div class="mb-3">
                        <label class="form-label">What is your year of birth?</label>
                        <input class="form-control form-control-lg" type="year" name="dob"
                          placeholder="Enter your date of birth" required>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">What is your job role?</label>
                        <input class="form-control form-control-lg" type="text" name="position"
                          placeholder="Enter your job role" required>
                      </div>
                      <h4>Password Recovery</h4>
                      <label for="email">Enter Your Registered Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your register email" required>

                    </div>
                    <br>
                    <center>
                      <button type="submit" class="btn btn-primary" onclick="sendEmail()" value="Send an Email" >Submit</button>
                    </center>
                  </form>
                </div>
              </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function sendEmail() {
            var email = $("#email");

            if (isNotEmpty(email)) {
                $.ajax({
                    url: 'subscribe.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        email: email.val(),
                    },
                    success: function(response) {
                        $('#myForm')[0].reset();
                        $('.send-notification').text("Massage send successfully.");
                    }
                })
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else {
                caller.css('border', '')
                return true;
            }
        }
    </script>

  </main>

  <script src="js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</body>

</html>