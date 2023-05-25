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
<?php
$id = $_GET['empid'];
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    $a5 = $_POST['a5'];
    $a6 = $_POST['a6'];



    $a7 = $_POST['a7'];
    $a8 = $_POST['a8'];
    $a9 = $_POST['a9'];
    $a10 = $_POST['a10'];
    $a11 = $_POST['a11'];
    $a12 = $_POST['a12'];
    $a13 = $_POST['a13'];
    $a14 = $_POST['a14'];
    $a15 = $_POST['a15'];
    $a16 = $_POST['a16'];
    $a17 = $_POST['a17'];
    $a18 = $_POST['a18'];
    $a19 = $_POST['a19'];
    $a20 = $_POST['a20'];
    $a21 = $_POST['a21'];
    $a22 = $_POST['a22'];
    $a23 = $_POST['a23'];
    $a24 = $_POST['a24'];
    $a25 = $_POST['a25'];
    $a26 = $_POST['a26'];
    $a27 = $_POST['a27'];
    $a28 = $_POST['a28'];
    $a29 = $_POST['a29'];
    $a30 = $_POST['a30'];
    $a31 = $_POST['a31'];
    $a32 = $_POST['a32'];
    $a33 = $_POST['a33'];
    $a34 = $_POST['a34'];
    $a35 = $_POST['a35'];
    $a36 = $_POST['a36'];
    $a37 = $_POST['a37'];
    $a38 = $_POST['a38'];
    $a39 = $_POST['a39'];
    $a40 = $_POST['a40'];


    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $t3 = $_POST['t3'];
    $t4 = $_POST['t4'];
    $t5 = $_POST['t5'];
    $t6 = $_POST['t6'];
    $t7 = $_POST['t7'];
    $t8 = $_POST['t8'];
    $t9 = $_POST['t9'];
    $t10 = $_POST['t10'];
    $t11 = $_POST['t11'];
    $t12 = $_POST['t12'];
    $t13 = $_POST['t13'];
    $t14 = $_POST['t14'];
    $t15 = $_POST['t15'];
    $t16 = $_POST['t16'];
    $t17 = $_POST['t17'];
    $t18 = $_POST['t18'];
    $t19 = $_POST['t19'];
    $t20 = $_POST['t20'];
    $t21 = $_POST['t21'];
    $t22 = $_POST['t22'];
    $t23 = $_POST['t23'];
    $t24 = $_POST['t24'];
    $t25 = $_POST['t25'];
    $t26 = $_POST['t26'];
    $t27 = $_POST['t27'];
    $t28 = $_POST['t28'];
    $t29 = $_POST['t29'];
    $t30 = $_POST['t30'];
    $t31 = $_POST['t31'];
    $t32 = $_POST['t32'];
    $t33 = $_POST['t33'];
    $t34 = $_POST['t34'];
    $t35 = $_POST['t35'];
    $t36 = $_POST['t36'];
    $t37 = $_POST['t37'];
    $t38 = $_POST['t38'];
    $t39 = $_POST['t39'];
    $t40 = $_POST['t40'];

    include '../_dbconnect.php';
    $insertData1 = "UPDATE activity SET monday = '$a1', mondathours = '$t1', ma2 = '$a6', mh2 = '$t6', ma3= '$a11', mh3 = '$t11', ma4 = '$a16', mh4 = '$t16', ma5 = '$a21', mh5= '$t21', ma6 = '$a26', mh6 = '$t26', ma7 = '$a31', mh7 = '$t31', ma8= '$a36', mh8 = '$t36', tuesday = '$a2', tuesdayhourse = '$t2', ta2 = '$a7', tah2= '$t7', ta3 = '$a12', tah3 = '$t12', ta4 = '$a17', tah4 = '$t17', ta5= '$a22', tah5 = '$t22', ta6 = '$a27', tah6 = '$t27', ta7 = '$a32', tah7= '$t32', ta8 = '$a37', tah8 = '$t37', wednesday = '$a3', wednesdayhourse = '$t3', w2= '$a8', wh2 = '$t8', w3 = '$a13', wh3 = '$t13', w4 = '$a18', wh4= '$t18', w5 = '$a23', wh5 = '$t23', w6 = '$a28', wh6 = '$t28', w7= '$a33', wh7 = '$t33', w8 = '$a38', wh8 = '$t38', thursday = '$a4', thursdaytourse= '$t4', th2 = '$a9', thh2 ='$t9', th3 = '$a14', thh3 = '$t14', th4= '$a19', thh4 = '$t19', th5 = '$a24', thh5 = '$t24', th6 = '$a29', thh6= '$t29', th7 = '$a34', thh7= '$t34', th8 = '$a39', thh8 = '$t39', friday = '$a5', fridayhourse = '$t5', f2= '$a10', fh2 = '$t10', f3 = '$a15', fh3 = '$t15', f4 = '$a20', fh4= '$t20', f5 = '$a25', fh5 =' $t25', f6 = '$a30', fh6 = '$t30', f7 = '$a35', fh7 = '$t35', f8 = '$a40', fh8 = '$t40' WHERE id = '$id'";
    $result1 = mysqli_query($conn, $insertData1);

    // if ($result1) {
    //     echo '<div class="alert alert-success alert-dismissible fade show mt-5" id="alert" role="alert">
    //                 <strong>Success!</strong> Activity Saved Successfully.</a>
    //                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //               </div>';
    // } else {
    //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //                 <strong>Error!</strong> Something went wrong.
    //                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //               </div>';
    // }


}
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
    <link rel="shortcut icon" href="/src/img/ASDR LOGO 2.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Manager portal | Activity</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<style>
    /* Style the thumb */
    .mainAccordion::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.2);
        /* Set the color of the thumb */
        border-radius: 3px;
        /* Set the rounded corners of the thumb */
    }

    /* Hide the scrollbar arrows */
    .mainAccordion::-webkit-scrollbar-button {
        display: none;
    }

    .accordion {
        background-color: rgb(245,247,257);
        color: black;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        position: relative;
        border: 1px solid rgb(228,231,235);
    }

    .accordion-icon {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 18px;
        font-weight: bold;
        transition: transform 0.3s ease;
    }

    .accordion.active .accordion-icon {
        transform: translateY(-50%) rotate(-180deg);
    }

    .accordion:hover {
        /* background-color: #ccc; */
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
        border: 1px solid rgb(228,231,235);
    }

    .without_ampm::-webkit-datetime-edit-ampm-field {
        display: none;
    }

    input[type="time"]::-webkit-datetime-edit-ampm-field {
        display: none;
    }

    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 20px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        /* overflow: auto; */
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 55%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    @-webkit-keyframes animatetop {
        from {
            top: -300px;
            opacity: 0
        }

        to {
            top: 0;
            opacity: 1
        }
    }

    @keyframes animatetop {
        from {
            top: -300px;
            opacity: 0
        }

        to {
            top: 0;
            opacity: 1
        }
    }

    /* The Close Button */
    .close {
        color: black;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        padding: 2px 16px;
        /* background-color: #5cb85c; */
        color: white;
    }

    .modal-body {
        padding: 2px 16px;
        overflow: auto;
        height: 310px;
    }

    .modal-footer {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
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


                <ul class="sidebar-nav">
                    <li class="sidebar-header">

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

                    <li class="sidebar-item active">
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
                    <?php
                    include '../_dbconnect.php';
                    $unreadNotification = mysqli_query($conn, "SELECT * FROM activity where accept = 0");
                    $totalUndreadNotifications = mysqli_num_rows($unreadNotification);
                    ?>
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">
                                        <?php
                                        echo $totalUndreadNotifications;
                                        ?>
                                    </span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    <?php
                                    include '../_dbconnect.php';
                                    $query1 = "SELECT * FROM activity where accept = 0";
                                    $unreadNotification = mysqli_query($conn, $query1);

                                    $noOfRows = mysqli_num_rows($unreadNotification);
                                    if ($noOfRows == 0) {
                                        echo '
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg> Currently No any Notification to show.
                                    </div>';
                                    } else {
                                        echo $totalUndreadNotifications . 'New Notifications';
                                    }

                                    ?>
                                </div>
                                <div class="list-group">
                                    <?php
                                    include '../_dbconnect.php';
                                    $query1 = "SELECT * FROM activity where accept = 0";
                                    $unreadNotification = mysqli_query($conn, $query1);

                                    $noOfRows = mysqli_num_rows($unreadNotification);
                                    while ($fatchData = mysqli_fetch_assoc($unreadNotification)) {
                                        $fatchEmp_Id = $fatchData['id'];
                                        echo '
                                        <a href="showNotification.php?id=' . $fatchData['id'] . '" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New Notification</div>
                                                <div class="text-muted small mt-1">Employee id - <b>' . $fatchEmp_Id . '</b> send weekly activity report. Please check it out. </div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>';
                                    }
                                    ?>
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
                <center>
                    <section class="vh-50">
                        <div class="mb-5 h-50">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col col-md-9 col-lg-7 col-xl-7">
                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body p-4">
                                            <div class="d-flex text-black">
                                                <div class="flex-shrink-0">
                                                    <img src="../afterEmployeeLogin/img/avatars/unknownUser.jpg"
                                                        alt="Generic placeholder image" class="img-fluid"
                                                        style="width: 180px; border-radius: 10px;">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <?php
                                                    $fatchempname = $_GET['empname'];
                                                    $position = $_GET['position'];
                                                    $fatchempid = $_GET['empid'];
                                                    ?>
                                                    <h5 class="mb-1 fs-4">
                                                        <b>
                                                            <?php echo $fatchempname ?>
                                                        </b>
                                                    </h5>
                                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                                        <?php echo $position ?>
                                                    </p>
                                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                                        <?php echo $fatchempid ?>
                                                    </p>
                                                    <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                                        style="background-color: #efefef;">
                                                        <div>
                                                            <p class="small text-muted mb-1">Total Working Time</p>
                                                            60 hrs
                                                        </div>
                                                        <?php                                         
                                                        // $id = $_GET['empid'];
                                        
                                                        $sql = "SELECT * FROM `activity` where id ='$id'";
                                                        $tableResult = mysqli_query($conn, $sql);
                                                        $rowCount = mysqli_num_rows($tableResult);
                                                        // echo $rowCount;
                                                        $row = mysqli_fetch_assoc($tableResult);

                                                        $grandTotal = 0.0;
                                                        $floats = [floatval($row['mondathours']), floatval($row['mh2']), floatval($row['mh3']), floatval($row['mh4']), floatval($row['mh5']), floatval($row['mh6']), floatval($row['mh7']), floatval($row['mh8'])];
                                                        
                                                        $total = 0.0;
                                                        foreach ($floats as $float) {
                                                            $total += $float;
                                                        }
                                                        $grandTotal += $total;
                                                        if ($total > 8) {
                                                            $extend8Hrs = true;
                                                        }
                                                        
                                                        $floats2 = [floatval($row['tuesdayhourse']), floatval($row['tah2']), floatval($row['tah3']), floatval($row['tah4']), floatval($row['tah5']), floatval($row['tah6']), floatval($row['tah7']), floatval($row['tah8'])];
                                                        
                                                        $total2 = 0.0;
                                                        foreach ($floats2 as $float) {
                                                            $total2 += $float;
                                                        }
                                                        $grandTotal += $total2;
                                                        
                                                        $floats3 = [floatval($row['wednesdayhourse']), floatval($row['wh2']), floatval($row['wh3']), floatval($row['wh4']), floatval($row['wh5']), floatval($row['wh6']), floatval($row['wh7']), floatval($row['wh8'])];
                                                        
                                                        $total3 = 0.0;
                                                        foreach ($floats3 as $float) {
                                                            $total3 += $float;
                                                        }
                                                        $grandTotal += $total3;
                                                        
                                                        $floats4 = [floatval($row['thursdaytourse']), floatval($row['thh2']), floatval($row['thh3']), floatval($row['thh4']), floatval($row['thh5']), floatval($row['thh6']), floatval($row['thh7']), floatval($row['thh8'])];
                                                        
                                                        $total4 = 0.0;
                                                        foreach ($floats4 as $float) {
                                                            $total4 += $float;
                                                        }
                                                        $grandTotal += $total4;
                                                        
                                                        $floats5 = [floatval($row['fridayhourse']), floatval($row['fh2']), floatval($row['fh3']), floatval($row['fh4']), floatval($row['fh5']), floatval($row['fh6']), floatval($row['fh7']), floatval($row['fh8'])];
                                                        
                                                        $total5 = 0.0;
                                                        foreach ($floats5 as $float) {
                                                            $total5 += $float;
                                                        }
                                                        $grandTotal += $total5;
                                                        
                                                        echo '<div class="px-3">
                                                        <p class="small text-muted mb-1">Consumed Hours</p>
                                                        '.$grandTotal.'
                                                    </div>';
                                                        ?>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </center>
                <br>
                <?php 
                $extend8Hrs = false;
                if (!$extend8Hrs){
                    echo '';
                }
                else{
                    echo 'Error';
                }
                ?>
                 
                <div class="mainAccordion" style="height: 190px; overflow-y: scroll; overflow-x: hidden;">
                    <button class="accordion">Activity Code A1<span class="accordion-icon">+</span></button>
                    <div class="panel">
                        <p style="padding: 20px;"><strong>Tranning</strong> Activity code A1 shows it will be a tranning
                            period.</p>
                    </div>

                    <button class="accordion">Activity Code A2<span class="accordion-icon">+</span></button>
                    <div class="panel">
                        <p style="padding: 20px;"><strong>Error Debugging.</strong>Activity code A2 shows it will be a
                            Error Debugging.</p>
                    </div>

                    <button class="accordion">Activity Code A3<span class="accordion-icon">+</span></button>
                    <div class="panel">
                        <p style="padding: 20px;"><strong>Frontend</strong> Activity code A3 shows it will be a Frontend
                            part.</p>
                    </div>

                    <button class="accordion">Activity Code A4<span class="accordion-icon">+</span></button>
                    <div class="panel">
                        <p style="padding: 20px;"><strong>Designing</strong> Activity code A4 shows it will be a
                            Designing part.</p>
                    </div>
                </div>
                <br>
                <br>
                <?php
                $extend8Hrs = false;
                if ($extend8Hrs == true) {
                    echo 'Error';
                }
                ?>
                <?php
                include '../_dbconnect.php';
                $id = $_GET['empid'];

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
                                <td><b style="padding: 0 20px;"> Activity </b></td>
                                <td><b style="padding: 0 20px;">Hours</b></td>
                                <td><b style="padding: 0 20px;"> Activity </b></td>
                                <td><b style="padding: 0 20px;">Hours</b></td>
                                <td><b style="padding: 0 20px;"> Activity </b></td>
                                <td><b style="padding: 0 20px;">Hours</b></td>
                                <td><b style="padding: 0 20px;"> Activity </b></td>
                                <td><b style="padding: 0 20px;">Hours</b></td>
                                <td><b style="padding: 0 20px;"> Activity </b></td>
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t10"
                                            id="x" value="<?php echo $row['fh2'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t11"
                                            id="x" value="<?php echo $row['mh3'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t12"
                                            id="x" value="<?php echo $row['tah3'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t13"
                                            id="x" value="<?php echo $row['wh3'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t14"
                                            id="x" value="<?php echo $row['thh3'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t15"
                                            id="x" value="<?php echo $row['fh3'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t16"
                                            id="x" value="<?php echo $row['mh4'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t17"
                                            id="x" value="<?php echo $row['tah4'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t18"
                                            id="x" value="<?php echo $row['wh4'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t19"
                                            id="x" value="<?php echo $row['thh4'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t20"
                                            id="x" value="<?php echo $row['fh4'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t21"
                                            id="x" value="<?php echo $row['mh5'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t22"
                                            id="x" value="<?php echo $row['tah5'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t23"
                                            id="x" value="<?php echo $row['wh5'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t24"
                                            id="x" value="<?php echo $row['thh5'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t25"
                                            id="x" value="<?php echo $row['fh5'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t26"
                                            id="x" value="<?php echo $row['mh6'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t27"
                                            id="x" value="<?php echo $row['tah6'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t28"
                                            id="x" value="<?php echo $row['wh6'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t29"
                                            id="x" value="<?php echo $row['thh6'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t30"
                                            id="x" value="<?php echo $row['fh6'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t31"
                                            id="x" value="<?php echo $row['mh7'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t32"
                                            id="x" value="<?php echo $row['tah7'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t33"
                                            id="x" value="<?php echo $row['wh7'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t34"
                                            id="x" value="<?php echo $row['thh7'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t35"
                                            id="x" value="<?php echo $row['fh7'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t36"
                                            id="x" value="<?php echo $row['mh8'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t37"
                                            id="x" value="<?php echo $row['tah8'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t38"
                                            id="x" value="<?php echo $row['wh8'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t39"
                                            id="x" value="<?php echo $row['thh8'] ?>">
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
                                        <input type="number" step="0.01" class="without_ampm form-control" name="t40"
                                            id="x" value="<?php echo $row['fh8'] ?>">
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
                                            if ($total > 8) {
                                                $extend8Hrs = true;
                                            }
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
                <center><button type="submit  me-2" class="btn btn-outline-dark mb-3">Save Activity</button></center>
                <!-- <center><button type="submit  me-2" class="btn btn-outline-dark mb-3">Save Activity</button></center> -->
                </form>


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
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                if (this.classList.contains("active")) {
                    this.classList.remove("active");
                    this.querySelector(".accordion-icon").innerHTML = "+";
                    this.nextElementSibling.style.display = "none";
                } else {
                    for (var j = 0; j < acc.length; j++) {
                        if (acc[j].classList.contains("active")) {
                            acc[j].classList.remove("active");
                            acc[j].querySelector(".accordion-icon").innerHTML = "+";
                            acc[j].nextElementSibling.style.display = "none";
                        }
                    }
                    this.classList.add("active");
                    this.querySelector(".accordion-icon").innerHTML = "-";
                    this.nextElementSibling.style.display = "block";
                }
            });
        }

    </script>

</body>

</html>