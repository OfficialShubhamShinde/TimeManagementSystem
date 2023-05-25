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

    <title>Manager portal | Employees</title>

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
                        <a class="sidebar-link" href="adminDashbord.php">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
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

                    <h1 class="h3 mb-3"> Employees</h1>



                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-primary" onclick="showForm()"> + Add New Employee </button>
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

                                        <label for="" class="form-label mb-3">Personal Details: </label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="name" name="name"
                                                aria-describedby="emailHelp" placeholder="Full Name" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email ID" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="number" class="form-control" id="contactno" name="contactno"
                                                placeholder="Contact Number">
                                        </div>
                                        <select class="form-select mb-3 mt-3" name="gender" id="gender"
                                            aria-label="Default select example" required>
                                            <option selected>Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" id="dob" name="dob"
                                                placeholder="Date-Of-Birth">
                                        </div>
                                        <div class="form-floating mb-3 mt-2">
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                name="address" id="address" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Address</label>
                                        </div>
                                        <label for="" class="form-label mb-3">Employee Details: </label>
                                        <div class="mb-3">
                                            <input type="number" class="form-control" id="empid" name="empid"
                                                placeholder="Employee ID" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="department" name="department"
                                                placeholder="Department" required>
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="position" name="position"
                                                placeholder="Position" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" id="cemailid" name="cemailid"
                                                placeholder="Email ID (Company)" required>
                                        </div>
                                        <select class="form-select mb-3 mt-3" name="emptype" id="emptype"
                                            aria-label="Default select example" required>
                                            <option selected>Employee Type</option>
                                            <option value="intern">Intern</option>
                                            <option value="employee">Employee</option>
                                            <option value="hr">HR</option>
                                        </select>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" id="doj" name="doj"
                                                placeholder="Date-Of-Joining">
                                        </div>
                                        <select class="form-select mb-3 mt-3" name="status" id="status"
                                            aria-label="Default select example" required>
                                            <option selected>Status</option>
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                        <label for="" class="form-label mb-3">Login Credentials: </label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="empusername" name="empusername"
                                                placeholder="Username" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" id="emppassword"
                                                name="emppassword" placeholder="Password" required>
                                        </div>
                                        <select class="form-select mb-3 mt-3" name="usertype" id="usertype"
                                            aria-label="Default select example" required>
                                            <option selected>User Type</option>
                                            <option value="Employee">Employee</option>
                                            <option value="Manager">Admin</option>
                                        </select>
                                        <center><button type="submit" class="btn btn-primary mb-3">Add Employee</button>
                                        </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $contactno = $_POST['contactno'];
                    $gender = $_POST['gender'];
                    $dob = $_POST['dob'];
                    $address = $_POST['address'];
                    $empid = $_POST['empid'];
                    $department = $_POST['department'];
                    $position = $_POST['position'];
                    $cemailid = $_POST['cemailid'];
                    $emptype = $_POST['emptype'];
                    $doj = $_POST['doj'];
                    $status = $_POST['status'];
                    $empusername = $_POST['empusername'];
                    $emppassword = $_POST['emppassword'];
                    $usertype = $_POST['usertype'];

                    include '../_dbconnect.php';

                    $insertData = "INSERT INTO `employees` (`empid`, `empname`, `empusername`, `emppassword`, `usertype`, `emailid`, `contactno`, `department`, `position`, `companyemailid`, `doj`, `emptype`, `gender`, `dob`, `address`, `status`) VALUES ('$empid', '$name', '$empusername', '$emppassword', '$usertype', '$email', '$contactno', '$department', '$position', '$cemailid', '$doj', '$emptype', '$gender', '$dob', '$address', '$status')";
                    $result = mysqli_query($conn, $insertData);


                    if ($result) {
                        echo '<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                            <strong>Success!</strong> Employee added Successfull.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';

                        // $Fatched_start_date = $doj;
                        // Get the date of the next Monday
                        $monday = date('Y-m-d', strtotime('last Monday', strtotime($doj)));
                        $friday = date('Y-m-d', strtotime('next Friday', strtotime($doj)));
                        $dates = array();

                        // Loop through the 5 weekdays and add each date to the array
                        for ($i = 0; $i < 5; $i++) {
                            $date = date("Y-m-d", strtotime($monday . "+$i day")); // Add $i days to the Monday to get the date for this day
                            $day = date("D", strtotime($date)); // Get the day of the week (e.g. Mon, Tue, etc.) for this date
                            if ($day == 'Sat' || $day == 'Sun')
                                continue; // Skip weekends
                
                            // Add the date to the array with the appropriate column name
                            switch ($day) {
                                case 'Mon':
                                    $dates['monday'] = $date;
                                    break;
                                case 'Tue':
                                    $dates['tuesday'] = $date;
                                    break;
                                case 'Wed':
                                    $dates['wednesday'] = $date;
                                    break;
                                case 'Thu':
                                    $dates['thursday'] = $date;
                                    break;
                                case 'Fri':
                                    $dates['friday'] = $date;
                                    break;
                            }
                        }

                        $inserDataActivity = "INSERT INTO `activity` (`id`, `week`, `mondaydate`, `monday`, `mondathours`, `ma2`, `mh2`, `ma3`, `mh3`, `ma4`, `mh4`, `ma5`, `mh5`, `ma6`, `mh6`, `ma7`, `mh7`, `ma8`, `mh8`, `tuesdaydate`, `tuesday`, `tuesdayhourse`, `ta2`, `tah2`, `ta3`, `tah3`, `ta4`, `tah4`, `ta5`, `tah5`, `ta6`, `tah6`, `ta7`, `tah7`, `ta8`, `tah8`, `wednesdaydate`, `wednesday`, `wednesdayhourse`, `w2`, `wh2`, `w3`, `wh3`, `w4`, `wh4`, `w5`, `wh5`, `w6`, `wh6`, `w7`, `wh7`, `w8`, `wh8`, `thursdaydate`, `thursday`, `thursdaytourse`, `th2`, `thh2`, `th3`, `thh3`, `th4`, `thh4`, `th5`, `thh5`, `th6`, `thh6`, `th7`, `thh7`, `th8`, `thh8`, `fridaydate`, `friday`, `fridayhourse`, `f2`, `fh2`, `f3`, `fh3`, `f4`, `fh4`, `f5`, `fh5`, `f6`, `fh6`, `f7`, `fh7`, `f8`, `fh8`, `status`, `accept`, `weekcreatedornot`) VALUES ('$empid', '1', '{$dates['monday']}', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', '{$dates['tuesday']}', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', '{$dates['wednesday']}', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', '{$dates['thursday']}', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', '{$dates['friday']}', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', 'NA', '0', '1', '0', '0')";
                        $inserDataActivityQuery = mysqli_query($conn, $inserDataActivity);
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
                                <h5 class="card-title mb-0">Employee Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" style="background-color: white; border-radius: 8px">
                                    <table class="table">
                                        <thead>
                                            <tr class="light">
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Emp Type</th>
                                                <th scope="col">Joining Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <?php
                                                include '../_dbconnect.php';
                                                $sql = "SELECT * FROM `employees`";
                                                $tableResult = mysqli_query($conn, $sql);
                                                $color = 'light';
                                                while ($row = mysqli_fetch_assoc($tableResult)) {
                                                    $fatchEmpId = $row['empid'];
                                                    $fatchEmpName = $row['empname'];
                                                    $fatchEmpUsername = $row['empusername'];
                                                    $fatchEmpPassword = $row['emppassword'];
                                                    $fatchUserType = $row['usertype'];
                                                    $fatchEmailId = $row['emailid'];
                                                    $fatchContactNo = $row['contactno'];
                                                    $fatchDepartment = $row['department'];
                                                    $fatchPosition = $row['position'];
                                                    $fatchCompanyEmailId = $row['companyemailid'];
                                                    $fatchDoj = $row['doj'];
                                                    $fatchEmpType = $row['emptype'];
                                                    $fatchGender = $row['gender'];
                                                    $fatchDob = $row['dob'];
                                                    $fatchAddress = $row['address'];
                                                    $fatchStatus = $row['status'];

                                                    echo '<th scope="row">' . $fatchEmpId . '</th>
                <td>' . $fatchEmpName . '</td>
                <td>' . $fatchDepartment . '</td>
                <td>' . $fatchPosition . '</td>
                <td>' . $fatchEmpType . '</td>
                <td>' . $fatchDoj . '</td>
                <td>' . $fatchStatus . '</td>
                <td> 
                
                <form action="updateEmp.php" method="get">
  <input type="hidden" name="empid" value="' . $fatchEmpId . '">
  <button type="submit" class="btn btn-outline-dark">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
      <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
    </svg>
  </button>
</form>


              </td>
          </tr>';
                                                }
                                                ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- </main> -->

            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>ASDR
                                        Infotech</strong></a>
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

    <!-- Datatables js (leave detail form )-->
    <script src="assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="assets/js/vendor/buttons.bootstrap5.min.js"></script>
    <script src="assets/js/vendor/buttons.html5.min.js"></script>
    <script src="assets/js/vendor/buttons.flash.min.js"></script>
    <script src="assets/js/vendor/buttons.print.min.js"></script>

</body>

</html>