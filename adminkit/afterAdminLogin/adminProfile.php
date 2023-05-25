<?php
session_start();
if (!isset($_SESSION['loggedinAdmin']) || $_SESSION['loggedinAdmin'] != true) {
    header("Location: ../index.php");
    exit;
}
?>
<?php
include '../_dbconnect.php';
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

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

    <title>Manager portal | Profile</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <center> <img loading="lazy" class="colorize" src="../src/img/ASDR LOGO 2.png" alt="..."
                            width="150px" height="55px">

                    </center>
                    <!-- <span class="align-middle">AdminKit</span> -->
                </a>
                <center>
                <p class="text-light">Welcome
                <?php echo $_SESSION['loginAdminName'] ?>
                    </p>
                </center>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="adminDashbord.php">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="adminEmployees.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-people-fill align-middle" viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                            <span class="align-middle">Employees</span>
                        </a>
                    </li>

                    <li class="sidebar-item dropdown">
                        <a href="adminAttendanceIn.php" class="sidebar-link" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-check" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                <path
                                    d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                            </svg>
                            <!-- <i class="fa fa-file mr-3 text-primary fa-fw"></i> -->
                            Attendance
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="adminAttendanceIn.php">In Time</a></li>
                            <li><a class="dropdown-item" href="adminAttendanceOut.php">Out Time</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="adminLeaves.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-bar-right align-middle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8Zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5Z" />
                            </svg>
                            <span class="align-middle">Leaves</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="adminReports.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-files align-middle" viewBox="0 0 16 16">
                                <path
                                    d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
                            </svg>
                            <span class="align-middle">Reports</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="adminActivity.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-activity align-middle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
                            </svg>
                            <span class="align-middle">Activity</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="adminForecast.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-currency-rupee align-middle" viewBox="0 0 16 16">
                                <path
                                    d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                            </svg>
                            <span class="align-middle">Forecast</span>
                        </a>
                    </li>
                </ul>                
                    

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <h1 class="h3 mb-3"><strong>  Manager Portal </strong> </h1>
                
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.
                                                </div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        

                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <img src="img/avatars/user1.png" class="avatar img-fluid rounded me-1"
                                    alt="Charles Hall" /> <span class="text-dark">
                                    <?php echo $_SESSION['loginAdminName'] ?>
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="adminProfile.php"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings & Privacy</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../_logout.php">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Profile</h1>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Profile</h5>
                                </div>
                                <div class="card-body text-center">
                                    <img src="img/avatars/user1.png" alt="Christina Mason"
                                        class="img-fluid rounded-circle mb-2" width="128" height="128" />
                                    <h5 class="card-title mb-0"><?php echo $_SESSION['loginAdminName'] ?></h5>
                                    <div class="text-muted mb-2">Software Engineer</div>


                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <h5 class="h6 card-title">Skills</h5>
                                    <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
                                    <a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
                                    <a href="#" class="badge bg-primary me-1 my-1">CSS</a>
                                    <a href="#" class="badge bg-primary me-1 my-1">Angular</a>
                                    <a href="#" class="badge bg-primary me-1 my-1">Php</a>
                                    <a href="#" class="badge bg-primary me-1 my-1">React</a>
                                    <a href="#" class="badge bg-primary me-1 my-1">MySql</a>
                                    <a href="#" class="badge bg-primary me-1 my-1">UI</a>
                                    <a href="#" class="badge bg-primary me-1 my-1">UX</a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <h5 class="h6 card-title">About</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives
                                            in <a href="#">Pune </a></li>

                                        <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span>
                                            Works at <a href="#"> ASDR </a></li>
                                        <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span>
                                            From <a href="#"> Baner </a></li>
                                    </ul>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <h5 class="h6 card-title">Contact</h5>
                                    <ul class="list-unstyled mb-0">

                                        <li class="mb-1"><a href="#">Email</a></li>
                                        <li class="mb-1"><a href="#">LinkedIn</a></li>
                                        <li class="mb-1"><a href="#">gethub</a></li>
                                        <li class="mb-1"><a href="#">Twitter</a></li>
                                        <li class="mb-1"><a href="#">Facebook</a></li>
                                        <li class="mb-1"><a href="#">Instagram</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-xl-9">
                            <div class="card">
                                <div class="card-header">
                                    <br>
                                    <h5 class="card-title mb-0">  Personal Details</h5>
                                </div>

                                <?php
                                include '../_dbconnect.php';
                                ?>

                                <form action="" method="post">
                                    <?php
                                    $user = $_SESSION['empAdminId'];
                                    $query = "SELECT * FROM `employees` WHERE empid ='$user'";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                        <div class="card-body h-100">

                                            <div class="row mb-3">
                                                <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="My Full Name" required
                                                        value="<?php echo $row['empname']; ?>" readonly>
                                                </div>
                                                <label for="email" class="col-sm-2 col-form-label">Personal Email ID</label>
                                                <div class="col-sm-4">
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="My Email ID" required
                                                        value="<?php echo $row['emailid']; ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="contactno" class="col-sm-2 col-form-label">Contact No</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control" id="contactno"
                                                        name="contactno" placeholder="My Contact Number"
                                                        value="<?php echo $row['contactno']; ?>" readonly>
                                                </div>
                                                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="products_item"
                                                        id="products_item" value="<?php echo $row['gender']; ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="dob" class="col-sm-2 col-form-label">Date Of Birth</label>
                                                <div class="col-sm-4">
                                                    <input type="date" class="form-control" id="dob" name="dob"
                                                        placeholder="Date-Of-Birth" value="<?php echo $row['dob']; ?>"
                                                        readonly>
                                                </div>
                                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control"
                                                        placeholder="Leave a comment here" name="detail" id="detail"
                                                        style="height: 100px" value="<?php echo $row['address']; ?>"
                                                        readonly>
                                                </div>
                                            </div>

                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Employment Details:</h5>
                                            </div>
                                            <br>
                                            <div class="row mb-3">
                                            <label for="email" class="col-sm-2 col-form-label">Employee Id:</label>
                                                <div class="col-sm-4">
                                                <input type="number" class="form-control" id="email" name="email"
                                                        placeholder="My Employee ID" required
                                                        value="<?php echo $row['empid']; ?>" readonly>
                                                </div>
                                                <label for="department" class="col-sm-2 col-form-label">Department:</label>
                                                <div class="col-sm-4">
                                                <input type="text" class="form-control" id="department"
                                                        name="department" placeholder="My Department" required
                                                        value="<?php echo $row['department']; ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                            <label for="position" class="col-sm-2 col-form-label">Position:</label>
                                                <div class="col-sm-4">
                                                <input type="text" class="form-control" id="position" name="position"
                                                        placeholder="My Position" required
                                                        value="<?php echo $row['position']; ?>" readonly>
                                                </div>
                                                <label for="companyemailid" class="col-sm-2 col-form-label">C Email
                                                    ID:</label>
                                                <div class="col-sm-4">
                                                <input type="email" class="form-control" id="companyemailid"
                                                        name="companyemailid" placeholder="My Email ID (Company)" required
                                                        value="<?php echo $row['companyemailid']; ?>" readonly>
                                                </div>
                                            </div>
                                           
                                            <div class="row mb-3">
                                            <label for="emptype" class="col-sm-2 col-form-label">Employee Type:</label>
                                                <div class="col-sm-4">
                                                <input class="form-control" id="emptype" name="products_item"
                                                        aria-label="" required
                                                        value="<?php echo $row['emptype']; ?>" readonly>
                                                </div>
                                                <label for="doj" class="col-sm-2 col-form-label">Date Of Joining:</label>
                                                <div class="col-sm-4">
                                                <input type="date" class="form-control" id="doj" name="Date-Of-Birth"
                                                        placeholder="My Date-Of-Joining" value="<?php echo $row['doj']; ?>"
                                                        readonly>
                                                </div>
                                            </div>
                                
                                            <div class="row mb-3">
                                            <label for="status" class="col-sm-2 col-form-label">Status:</label>
                                                <div class="col-sm-4">
                                                <input class="form-control" id="status" name="products_item"
                                                        aria-label="" required
                                                        value="<?php echo $row['status']; ?>" readonly>
                                                </div>
                                            </div>
                                 
                                            <br>

                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Login Details:</h5>
                                            </div>
                                            <br>
                                            <div class="row mb-3">
                                            <label for="email" class="col-sm-2 col-form-label">User Name</label>
                                                <div class="col-sm-4">
                                                <input type="text" class="form-control" id="contactno"
                                                        name="Date-Of-Birth" placeholder="My Date-Of-Joining"
                                                        value="<?php echo $row['empusername']; ?>" readonly>
                                                </div>
                                                <label for="department" class="col-sm-2 col-form-label">Password:</label>
                                                <div class="col-sm-4">
                                                <input class="form-control" name="products_item"
                                                        id="products_item" aria-label="" required
                                                        value="<?php echo $row['emppassword']; ?>" readonly>
                                                </div>
                                            </div>
                                            
                                            </div>    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
               </div>
            </main>
    

    <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-start">
                    <p class="mb-0">
                        <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>ASDR Infotech</strong></a>
                        &copy;
                    </p>
                </div>
                <div class="col-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>