<?php
session_start();
if (!isset($_SESSION['loggedinUser']) || $_SESSION['loggedinUser'] != true) {
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

    <title>Employee portal | Leaves</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <link href="buttons.bootstrap5.css" rel="stylesheet" type="text/css" />
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
                        <a class="sidebar-link" href="EmployeeDashbord.php">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
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

                            <span class="align-middle">Attendance </span>
                        </a>
                    </li>




                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="EmployeeLeaves.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-bar-right align-middle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8Zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5Z" />
                            </svg>
                            <span class="align-middle">Leaves</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="EmployeeActivity.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-activity align-middle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
                            </svg>
                            <span class="align-middle">Activity</span>
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

                <h1 class="h3 mb-3"><strong> Employee Portal </strong> </h1>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">0</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    0 Notifications
                                </div>
                                <div class="list-group">
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
                                    <?php echo $_SESSION['loginUserName'] ?>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="EmployeeProfile.php"><i class="align-middle me-1"
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

                    <h1 class="h3 mb-3">Leave Application</h1>



                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button onclick="showForm()"> + Request for leaves </button>
                                </div>
                                <!-- <button onclick="showForm()">Add Leave Request</button> -->
                                <form action="" method="POST" id="leaveForm" style="display: none;"
                                    onsubmit="hideForm()">
                                    <!-- Leave request form fields go here -->
                                    <button style="position: absolute; top: 10px; right: 10px;" type="button"
                                        class="close" aria-label="Close" onclick="hideForm()">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="container">

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="Employee id" class="form-label">Employee ID</label>
                                                <input type="" class="form-control" name="empid" id=""
                                                    placeholder="Enter Your Employee ID">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Employee name" class="form-label">Employee Name</label>
                                                <input type="" class="form-control" name="empname" id=""
                                                    placeholder="Enter Your Employee ID">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="leavetype" class="form-label">Leave Type</label>
                                                <select class="form-select" name="leavetype"
                                                    aria-label="Default select example">
                                                    <option selected>Choose type of leave you want</option>
                                                    <option value="Half Day">Half Day</option>
                                                    <option value="Full Day">Full Day</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="leavetype" class="form-label">Leave Reason</label>
                                                <select class="form-select" name="leavereason"
                                                    aria-label="Default select example">
                                                    <option selected>Choose type of leave you want</option>
                                                    <option value="Sick">Sick</option>
                                                    <option value="Vacation">Vacation</option>
                                                    <option value="Personal">Personal</option>
                                                    <option value="Professional">Professional</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="leavefrom" class="form-label">Start Date</label>
                                                <input type="date" class="form-control" name="leavefrom" placeholder=""
                                                    aria-label="">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="leaveto" class="form-label">End Date</label>
                                                <input type="date" class="form-control" name="leaveupto"
                                                    placeholder="Leave to" aria-label="">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="reason" class="form-label">Description</label>
                                            <textarea class="form-control" id="leave" name="reason" rows="3"></textarea>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-outline-dark">Submit</button>
                                        </div>
                                        <br>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $empid = $_POST['empid'];
                        $empname = $_POST['empname'];
                        $leavetype = $_POST['leavetype'];
                        $leavereason = $_POST['leavereason'];
                        $leavefrom = $_POST['leavefrom'];
                        $leaveupto = $_POST['leaveupto'];
                        $reason = $_POST['reason'];


                        include '../_dbconnect.php';

                        $insertData = "INSERT INTO `leaves`(`empid`,`empname`, `leavetype`, `leavereason`, `leavefrom`, `leaveupto`, `reason`, `status`) VALUES ('$empid','$empname','$leavetype','$leavereason',' $leavefrom','$leaveupto',' $reason', 'pending')";
                        $result = mysqli_query($conn, $insertData);


                        if ($result) {
                            echo '<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                            <strong>Success!</strong> Employee added Successfull.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                        } else {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> Something went wrong.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                        }
                    }

                    ?>
                    <br>


                    </form>

                    <script>


                        function showForm() {
                            var form = document.getElementById("leaveForm");
                            form.style.display = "block";
                            form.addEventListener('dblclick', hideForm);
                        }

                        function hideForm() {
                            var form = document.getElementById("leaveForm");
                            form.style.display = "none";
                            form.removeEventListener('dblclick', hideForm);
                        }

                    </script>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Leave History</h5>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <?php
                                        include '../_dbconnect.php';
                                        ?>

                                        <?php
                                        $user = $_SESSION['empUserId'];
                                        $query = "SELECT * FROM leaves WHERE empid='$user'";
                                        $result = mysqli_query($conn, $query);
                                        ?>

                                        <table id="alternative-page-datatable" class="table dt-responsive nowrap"
                                            style="border: 0;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Application ID</th>
                                                    <th scope="col">Employee ID</th>
                                                    <th scope="col">Leave Type</th>
                                                    <th scope="col">Leave Reason</th>
                                                    <th scope="col">Start Date</th>
                                                    <th scope="col">End Date</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $row['application_id']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['empid']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['leavetype']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['leavereason']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['leavefrom']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['leaveupto']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['reason']; ?>
                                                        </td>
                                                        <td
                                                            style="color:<?php echo ($row['status'] == 'accepted') ? 'green' : (($row['status'] == 'declined') ? 'red' : 'black'); ?>;">
                                                            <?php echo $row['status']; ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->

                                </div>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
                 </main>

                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row text-muted">
                                <div class="col-6 text-start">
                                    <p class="mb-0">
                                        <a class="text-muted" href="https://adminkit.io/"
                                            target="_blank"><strong>ASDR Infotech</strong></a>
                                        &copy;
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="text-muted" href="https://adminkit.io/"
                                                target="_blank">Support</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="text-muted" href="https://adminkit.io/" target="_blank">Help
                                                Center</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="text-muted" href="https://adminkit.io/"
                                                target="_blank">Privacy</a>
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

    <!-- Datatables js (leave detail form )-->
    <script src="assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="assets/js/vendor/buttons.bootstrap5.min.js"></script>
    <script src="assets/js/vendor/buttons.html5.min.js"></script>
    <script src="assets/js/vendor/buttons.flash.min.js"></script>
    <script src="assets/js/vendor/buttons.print.min.js"></script>

</body>

</html>