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
    <link rel="shortcut icon" href="/src/img/ASDR LOGO 2.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Manager portal | Leaves</title>

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
                    
                    <li class="sidebar-item active">
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
                <div class="container-fluid p-0">

                    <?php
                    include '../_dbconnect.php';

                    if (isset($_POST['action'])) {
                        $action = $_POST['action'];
                        $leaveId = $_POST['leaveId'];

                        if ($action == 'accept') {
                            // Update leave status as accepted in database
                            $query = "UPDATE leaves SET status = 'accepted' WHERE application_id = $leaveId";
                            mysqli_query($conn, $query);
                        } else if ($action == 'decline') {
                            // Update leave status as declined in database
                            $query = "UPDATE leaves SET status = 'declined' WHERE application_id = $leaveId";
                            mysqli_query($conn, $query);
                        }
                    }

                    $query = "SELECT * FROM leaves WHERE status = 'pending'";
                    $result = mysqli_query($conn, $query);

                    $query = "SELECT * FROM leaves WHERE status = 'pending'";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) == 0) {
                        echo "<div class='alert alert-info text-center'>
                             <h5>No pending leave applications</h5>
                             </div>";
                    } else {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $leaveId = $row['application_id'];
                            $empid = $row['empid'];
                            $empname = $row['empname'];
                            $leavetype = $row['leavetype'];
                            $leavefrom = $row['leavefrom'];
                            $leaveupto = $row['leaveupto'];
                            $reason = $row['reason'];
                        }
                        echo '
                             <div class="card mb-3">
                             <div class="card-body">
      
                            <form action="" method="post">
                            <input type="hidden" name="leaveId" value="' . $leaveId . '">
                            <h5 class="card-title">Leave Application</h5>
                            <div class="row">
                            <div class="col">
                            <label for="leaveid" class="form-label">Application ID</label>
                            <input type="text" class="form-control" id="leaveid" name="leaveid" value="' . $leaveId . '" readonly>
                            </div>
                            <div class="col">
                            <label for="empid" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" id="empid" name="empid" value="' . $empid . '" readonly>
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col">
                            <label for="empname" class="form-label">Employee Name</label>
                            <input type="text" class="form-control" id="empname" name="empname" value="' . $empname . '" readonly>
                            </div>
                            <div class="col">
                            <label for="leavetype" class="form-label">Leave Type</label>
                            <input type="text" class="form-control" id="leavetype" name="leavetype" value="' . $leavetype . '" readonly>
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col">
                            <label for="leavefrom" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="leavefrom" name="leavefrom" value="' . $leavefrom . '" readonly>
                            </div>
                            <div class="col">
                            <label for="leaveupto" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="leaveupto" name="leaveupto" value="' . $leaveupto . '" readonly>
                            </div>
                            </div>
                            <br>
                            <div class="mb-3">
                            <label for="reason" class="form-label">Description</label>
                            <textarea class="form-control" id="reason" name="reason" rows="3" readonly>' . $reason . '</textarea>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-success" name="action" value="accept">Accept</button>
                            <button type="submit" class="btn btn-danger" name="action" value="decline">Decline</button>
           
                            </div>
                            </form>
                            </div>
                            </div>
                            ';
                    }
                    ?>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Leave Details</h5>
                                    <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Employee ID</th>
                <th scope="col">Application ID</th>
                <th scope="col">Leave Type</th>
                <th scope="col">Leave Reason</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Total Days</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            include '../_dbconnect.php';
            $sql = "SELECT * FROM `leaves`";
            $tableResult = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($tableResult)) {
                $fatchapplicationid = $row['application_id'];
                $fatchempid = $row['empid'];
                $fatchleavetype = $row['leavetype'];
                $fatchleavereason = $row['leavereason'];
                $fatchleavefrom = $row['leavefrom'];
                $fatchleaveupto = $row['leaveupto'];
                //$fetchtdays= $row[''];
                $fatchreason = $row['reason'];
                $fatchstatus = $row['status'];

                // set the status color based on the status value
                $status_color = '';
                switch ($fatchstatus) {
                    case 'accepted':
                        $status_color = 'text-success';
                        break;
                    case 'declined':
                        $status_color = 'text-danger';
                        break;
                    default:
                        $status_color = 'text-warning';
                        break;
                }

                echo '<tr>
                    <th scope="row">' . $fatchempid . '</th>
                    <td>' . $fatchapplicationid . '</td>
                    <td>' . $fatchleavetype . '</td>
                    <td>' . $fatchleavereason . '</td>
                    <td>' . $fatchleavefrom . '</td>
                    <td>' . $fatchleaveupto . '</td>
                    <td>2</td>
                    <td>' . $fatchreason . '</td>
                    <td class="' . $status_color . '">' . $fatchstatus . '</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</div>

                                </div>
                            </div>
                        </div>

                        <script
                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                            crossorigin="anonymous">
                            </script>
                    </div>
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