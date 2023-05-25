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
    <link rel="shortcut icon" href="../src/img/ASDR LOGO 2.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Manager portal | Notification</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<style>
    .bi-check {
        fill: green;
        /* replace with desired color */
    }
</style>

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

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="adminDashbord.php">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="adminEmployees.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-people-fill align-middle" viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                            <span class="align-middle">Employees</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="EmployeeAttendance.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-check" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                <path
                                    d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                            </svg>

                            <span class="align-middle">Attendance</span>
                        </a>
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

                <h1 class="h3 mb-3"><strong> Manager Portal </strong> </h1>

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
                                <div class="dropdown-divider"></div>
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
                <?php $id = $_GET['id']; ?>
                <div class="container border border-dark-subtle p-3" style="border-radius: 10px">
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </svg> Its a Weekly Activity Record for EmployeeID:
                        <?php echo $id ?>, Please check and <b>Accept</b> as wel <b>Reject</b> the record.
                    </div>
                    <?php
                    include '../_dbconnect.php';
                    $id = $_GET['id'];

                    $sql = "SELECT * FROM `activity` where id ='$id'";
                    $tableResult = mysqli_query($conn, $sql);
                    $rowCount = mysqli_num_rows($tableResult);
                    // echo $rowCount;
                    $row = mysqli_fetch_assoc($tableResult);



                    ?>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="2">Monday <br> 20/02/2023</th>
                                    <th class="text-center" colspan="2">Tuesday <br> 21/02/2023</th>
                                    <th class="text-center" colspan="2">Wednesday <br> 22/02/2023</th>
                                    <th class="text-center" colspan="2">Thursday <br> 23/02/2023</th>
                                    <th class="text-center" colspan="2">Friday <br> 24/02/2023</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b style="padding: 0 20px;">Activity </b></td>
                                    <td><b style="padding: 0 20px;">Hours</b></td>
                                    <td><b style="padding: 0 20px;">Activity</b></td>
                                    <td><b style="padding: 0 20px;">Hours</b></td>
                                    <td><b style="padding: 0 20px;">Activity</b></td>
                                    <td><b style="padding: 0 20px;">Hours</b></td>
                                    <td><b style="padding: 0 20px;">Activity</b></td>
                                    <td><b style="padding: 0 20px;">Hours</b></td>
                                    <td><b style="padding: 0 20px;">Activity</b></td>
                                    <td><b style="padding: 0 20px;">Hours</b></td>
                                </tr>
                                <form action="" method="post">
                                    <tr>
                                        <td>
                                            <select class="form-select" aria-label="Default select example" name="a1">
                                                <option selected>
                                                    <?php echo $row['monday'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control" name="t1"
                                                id="x" value="<?php echo $row['mondathours'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a2">
                                                <option selected>
                                                    <?php echo $row['tuesday'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control" name="t2"
                                                id="x" value="<?php echo $row['tuesdayhourse'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a3">
                                                <option selected>
                                                    <?php echo $row['wednesday'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control" name="t3"
                                                id="x" value="<?php echo $row['wednesdayhourse'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a4">
                                                <option selected>
                                                    <?php echo $row['thursday'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control" name="t4"
                                                id="x" value="<?php echo $row['thursdaytourse'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a5">
                                                <option selected>
                                                    <?php echo $row['friday'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control" name="t5"
                                                id="x" value="<?php echo $row['fridayhourse'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select" aria-label="Default select example" name="a6">
                                                <option selected>
                                                    <?php echo $row['ma2'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control" name="t6"
                                                id="x" value="<?php echo $row['mh2'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a7">
                                                <option selected>
                                                    <?php echo $row['ta2'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control" name="t7"
                                                id="x" value="<?php echo $row['tah2'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a8">
                                                <option selected>
                                                    <?php echo $row['w2'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control" name="t8"
                                                id="x" value="<?php echo $row['wh2'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a9">
                                                <option selected>
                                                    <?php echo $row['th2'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control" name="t9"
                                                id="x" value="<?php echo $row['thh2'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a10">
                                                <option selected>
                                                    <?php echo $row['f2'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t10" id="x" value="<?php echo $row['fh2'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select" aria-label="Default select example" name="a11">
                                                <option selected>
                                                    <?php echo $row['ma3'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t11" id="x" value="<?php echo $row['mh3'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a12">
                                                <option selected>
                                                    <?php echo $row['ta3'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t12" id="x" value="<?php echo $row['tah3'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a13">
                                                <option selected>
                                                    <?php echo $row['w3'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t13" id="x" value="<?php echo $row['wh3'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a14">
                                                <option selected>
                                                    <?php echo $row['th3'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t14" id="x" value="<?php echo $row['thh3'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a15">
                                                <option selected>
                                                    <?php echo $row['f3'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t15" id="x" value="<?php echo $row['fh3'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select" aria-label="Default select example" name="a16">
                                                <option selected>
                                                    <?php echo $row['ma4'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t16" id="x" value="<?php echo $row['mh4'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a17">
                                                <option selected>
                                                    <?php echo $row['ta4'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t17" id="x" value="<?php echo $row['tah4'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a18">
                                                <option selected>
                                                    <?php echo $row['w4'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t18" id="x" value="<?php echo $row['wh4'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a19">
                                                <option selected>
                                                    <?php echo $row['th4'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t19" id="x" value="<?php echo $row['thh4'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a20">
                                                <option selected>
                                                    <?php echo $row['f4'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t20" id="x" value="<?php echo $row['fh4'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select" aria-label="Default select example" name="a21">
                                                <option selected>
                                                    <?php echo $row['ma5'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t21" id="x" value="<?php echo $row['mh5'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a22">
                                                <option selected>
                                                    <?php echo $row['ta5'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t22" id="x" value="<?php echo $row['tah5'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a23">
                                                <option selected>
                                                    <?php echo $row['w5'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t23" id="x" value="<?php echo $row['wh5'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a24">
                                                <option selected>
                                                    <?php echo $row['th5'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t24" id="x" value="<?php echo $row['thh5'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a25">
                                                <option selected>
                                                    <?php echo $row['f5'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t25" id="x" value="<?php echo $row['fh5'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select" aria-label="Default select example" name="a26">
                                                <option selected>
                                                    <?php echo $row['ma6'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t26" id="x" value="<?php echo $row['mh6'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a27">
                                                <option selected>
                                                    <?php echo $row['ta6'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t27" id="x" value="<?php echo $row['tah6'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a28">
                                                <option selected>
                                                    <?php echo $row['w6'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t28" id="x" value="<?php echo $row['wh6'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a29">
                                                <option selected>
                                                    <?php echo $row['th6'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t29" id="x" value="<?php echo $row['thh6'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a30">
                                                <option selected>
                                                    <?php echo $row['f6'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t30" id="x" value="<?php echo $row['fh6'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select" aria-label="Default select example" name="a31">
                                                <option selected>
                                                    <?php echo $row['ma7'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t31" id="x" value="<?php echo $row['mh7'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a32">
                                                <option selected>
                                                    <?php echo $row['ta7'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t32" id="x" value="<?php echo $row['tah7'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a33">
                                                <option selected>
                                                    <?php echo $row['w7'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t33" id="x" value="<?php echo $row['wh7'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a34">
                                                <option selected>
                                                    <?php echo $row['th7'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t34" id="x" value="<?php echo $row['thh7'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a35">
                                                <option selected>
                                                    <?php echo $row['f7'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t35" id="x" value="<?php echo $row['fh7'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-select" aria-label="Default select example" name="a36">
                                                <option selected>
                                                    <?php echo $row['ma8'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t36" id="x" value="<?php echo $row['mh8'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a37">
                                                <option selected>
                                                    <?php echo $row['ta8'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t37" id="x" value="<?php echo $row['tah8'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a38">
                                                <option selected>
                                                    <?php echo $row['w8'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t38" id="x" value="<?php echo $row['wh8'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a39">
                                                <option selected>
                                                    <?php echo $row['th8'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t39" id="x" value="<?php echo $row['thh8'] ?>">
                                        </td>
                                        <td> <select class="form-select" aria-label="Default select example" name="a40">
                                                <option selected>
                                                    <?php echo $row['f8'] ?>
                                                </option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="A3">A3</option>
                                                <option value="A4">A4</option>
                                            </select></td>
                                        <td>
                                            <input type="number" step="0.01" class="without_ampm form-control"
                                                name="t40" id="x" value="<?php echo $row['fh8'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><b>Total: <br>
                                                <?php
                                                $float1 = floatval($row['mondathours']);
                                                $float2 = floatval($row['mh2']);
                                                $float3 = floatval($row['mh3']);
                                                $float4 = floatval($row['mh4']);
                                                $float5 = floatval($row['mh5']);
                                                $float6 = floatval($row['mh6']);
                                                $float7 = floatval($row['mh7']);
                                                $float8 = floatval($row['mh8']);
                                                $floats = [$float1, $float2, $float3, $float4, $float5, $float6, $float7, $float8];

                                                $total = 0.0;
                                                foreach ($floats as $float) {
                                                    $total += $float;
                                                }
                                                echo $total;
                                                
                                                ?>
                                            </b></td>
                                        <td></td>
                                        <td><b>Total: <br>
                                                <?php
                                                $float9 = floatval($row['tuesdayhourse']);
                                                $float10 = floatval($row['tah2']);
                                                $float11 = floatval($row['tah3']);
                                                $float12 = floatval($row['tah4']);
                                                $float13 = floatval($row['tah5']);
                                                $float14 = floatval($row['tah6']);
                                                $float15 = floatval($row['tah7']);
                                                $float16 = floatval($row['tah8']);
                                                $floats2 = [$float9, $float10, $float11, $float12, $float13, $float14, $float15, $float16];

                                                $total2 = 0.0;
                                                foreach ($floats2 as $float) {
                                                    $total2 += $float;
                                                }
                                                echo $total2;
                                                ?>
                                            </b></td>
                                        <td></td>
                                        <td><b>Total: <br>
                                                <?php
                                                $time17 = floatval($row['wednesdayhourse']);
                                                $time18 = floatval($row['wh2']);
                                                $time19 = floatval($row['wh3']);
                                                $time20 = floatval($row['wh4']);
                                                $time21 = floatval($row['wh5']);
                                                $time22 = floatval($row['wh6']);
                                                $time23 = floatval($row['wh7']);
                                                $time24 = floatval($row['wh8']);
                                                $floats3 = [
                                                    $time17,
                                                    $time18,
                                                    $time19,
                                                    $time20,
                                                    $time21,
                                                    $time22,
                                                    $time23,
                                                    $time24
                                                ];
                                                $total3 = 0.0;
                                                foreach ($floats3 as $float) {
                                                    $total3 += $float;
                                                }
                                                echo $total3;
                                                ?>
                                            </b></td>
                                        <td></td>
                                        <td><b>Total: <br>
                                                <?php
                                                $time25 = floatval($row['thursdaytourse']);
                                                $time26 = floatval($row['thh2']);
                                                $time27 = floatval($row['thh3']);
                                                $time28 = floatval($row['thh4']);
                                                $time29 = floatval($row['thh5']);
                                                $time30 = floatval($row['thh6']);
                                                $time31 = floatval($row['thh7']);
                                                $time32 = floatval($row['thh8']);
                                                $floats4 = [
                                                    $time25,
                                                    $time26,
                                                    $time27,
                                                    $time28,
                                                    $time29,
                                                    $time30,
                                                    $time31,
                                                    $time32
                                                ];

                                                $total4 = 0.0;
                                                foreach ($floats4 as $float) {
                                                    $total4 += $float;
                                                }
                                                echo $total4;
                                                ?>
                                            </b></td>
                                        <td></td>
                                        <td><b>Total: <br>
                                                <?php
                                                $time33 = floatval($row['fridayhourse']);
                                                $time34 = floatval($row['fh2']);
                                                $time35 = floatval($row['fh3']);
                                                $time35 = floatval($row['fh4']);
                                                $time36 = floatval($row['fh5']);
                                                $time37 = floatval($row['fh6']);
                                                $time38 = floatval($row['fh7']);
                                                $time39 = floatval($row['fh8']);
                                                $floats5 = [
                                                    $time33,
                                                    $time34,
                                                    $time35,
                                                    $time36,
                                                    $time37,
                                                    $time38,
                                                    $time39
                                                ];
                                                $total5 = 0.0;
                                                foreach ($floats5 as $float) {
                                                    $total5 += $float;
                                                }
                                                echo $total5;
                                                ?>
                                            </b></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <br>
                    <center>
                        <?php
                        $id = $_GET['id'];

                        ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <?php
                                echo '<a class="btn btn-success" href="acceptNotification.php?id=' . $row['id'] . '" role="button">Accept</a>'
                                    ?>
                            </div>
                            <div class="col-sm-6">
                                <?php
                                echo '<a class="btn btn-danger" href="deletActivityNotification.php?id=' . $row['id'] . '" role="button">Reject</a> '
                                    ?>
                            </div>
                        </div>
                    </center>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://asdrinfotech.com/" target="_blank"><strong>ASDR
                                        Infotech</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://asdrinfotech.com/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://asdrinfotech.com/" target="_blank">Help
                                        Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://asdrinfotech.com/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://asdrinfotech.com/" target="_blank">Terms</a>
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