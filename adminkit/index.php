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
							<p class="lead">Please sign in to continue</p>
						</div>

						<?php
						if ($_SERVER['REQUEST_METHOD'] == 'POST') {
							$loginUsername = $_POST['loginUsername'];
							$loginPassword = $_POST['loginPassword'];
							$userType = $_POST['userType'];

							$select = "SELECT empid, empname, usertype, position FROM employees WHERE empusername = '$loginUsername' AND emppassword = '$loginPassword' AND usertype = '$userType'";
							$result = mysqli_query($conn, $select);

							if (mysqli_num_rows($result) > 0) {
								// User is authenticated, redirect based on user type
								$row = mysqli_fetch_assoc($result);
								$userType = $row['usertype'];

								if ($userType == 'Manager') {
									session_start();
									$_SESSION['loggedinAdmin'] = true;
									$_SESSION['loginAdminName'] = $row['empname'];
									$_SESSION['empAdminId'] = $row['empid'];
									$_SESSION['position'] = $row['position'];
									header('location:./afterAdminLogin/adminDashbord.php');
									exit;
								} elseif ($userType == 'Employee') {
									session_start();
									$_SESSION['loggedinUser'] = true;
									$_SESSION['loginUserName'] = $row['empname'];
									$_SESSION['empUserId'] = $row['empid'];
									$_SESSION['position'] = $row['position'];
									header('location:./afterEmployeeLogin/EmployeeDashbord.php');
									exit;
								}
							} else {
								// Authentication failed, show error message
								echo '<div class="alert alert-danger">Invalid username or password</div>';
							}
						}
						?>

						<div class=" card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="index.php" method="post">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="loginUsername"
												placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password"
												name="loginPassword" placeholder="Enter your password" />
										</div>

										<div class="mb-3">
											<label class="form-label">User Type</label>
											<select class="form-control form-control-lg" name="userType">
												<option value="Manager">Manager</option>
												<option value="Employee">Employee</option>
											</select>
										</div>

										<div>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="remember-me"
													name="remember-me" checked>
												<span class="form-check-label">
													Remember
												</span>
											</label>
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign
												in</button>
											<br>
											<a href="forgot_password.php" class="btn btn-lg btn-link">Forgot
												Password?</a>
										</div>
									</form>
								</div>
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