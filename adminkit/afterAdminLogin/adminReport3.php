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

    <title>Manager portal | Reports</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .buttons-container {
            margin-top: 10px;
            margin-right: 20px;
            padding: 5px;
        }

        .buttons-container button {
            margin-left: 10px;
        }

        .dropdown-item {
            display: block;
        }
    </style>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #ddd;
        }
    </style>

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
                    <li class="sidebar-item active">
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

                    // check if the form was submitted
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // get the selected fields from the checkboxes
                        $fields = isset($_POST['fields']) ? $_POST['fields'] : array();
                    }

                    if (isset($_POST['empid'])) {
                        $empid = $_POST['empid'];
                        // Do something with $empid
                    }
                    if (isset($_POST['startDate'])) {
                        $startDate = $_POST['startDate'];
                        // Do something with $startDate
                    }
                    if (isset($_POST['endDate'])) {
                        $endDate = $_POST['endDate'];
                        // Do something with $endDate
                    }
                    if (isset($_POST['sortby'])) {
                        $sortby = $_POST['sortby'];
                        // Do something with $sortby
                    }


                    ?>
                    <div class="d-flex flex-row justify-content-end buttons-container">
                        <button type="button" onclick="window.location.reload();" class="btn btn-outline-dark">
                            <i class="fa fa-refresh"></i> Refresh
                        </button>
                        <button type="button" onclick="downloadPDF();" class="btn btn-outline-dark">
                            <i class="fa fa-file-pdf-o"></i> Download PDF
                        </button>
                        <button type="button" onclick="downloadExcel();" class="btn btn-outline-dark">
                            <i class="fa fa-file-excel-o"></i> Download Excel
                        </button>
                        <button type="button" onclick="window.print();" class="btn btn-outline-dark">
                            <i class="fa fa-print"></i> Print
                        </button>

                    </div>
                </div>

                <!-- Refresh button  code here  -->

                <script>
                    $(document).ready(function () {
                        $('.dropdown-menu input[type="checkbox"]').click(function () {
                            var selectedItemValues = [];
                            $('.dropdown-menu input[type="checkbox"]:checked').each(function () {
                                selectedItemValues.push($(this).val());
                            });
                            console.log(selectedItemValues);
                        });
                    });

                </script>

                <!-- Download PDF File code here  -->

                <script>
                    function downloadPDF() {
                        // Select the HTML elements that you want to include in the PDF
                        const head = document.querySelector('#report_head');
                        const body = document.querySelector('#report_body');

                        // Use html2canvas to capture the HTML elements as images
                        Promise.all([
                            html2canvas(head, { scale: 3, useCORS: true }),
                            html2canvas(body, { scale: 2, useCORS: true })
                        ]).then(([headCanvas, bodyCanvas]) => {
                            // Create a new jsPDF instance
                            const pdf = new jsPDF('p', 'mm', 'a4');

                            // Set the font for the heading
                            pdf.setFont('Arial', 'bold');

                            // Calculate the height of the page, taking into account the margins
                            const pageHeight = pdf.internal.pageSize.getHeight() - 10;

                            // Get the font size of the heading
                            const headFontSize = parseFloat(window.getComputedStyle(head).fontSize);

                            // Convert the canvas images to data URLs
                            const headData = headCanvas.toDataURL('image/png', 1.0);
                            const bodyData = bodyCanvas.toDataURL('image/png', 1.0);

                            // Set the font size for the body to match the heading
                            pdf.setFontSize(headFontSize * 0.8);

                            // Add the images to the PDF document
                            pdf.addImage(headData, 'PNG', 0, 0, 210, 40, '', 'FAST');
                            pdf.addImage(bodyData, 'PNG', 0, 45, 210, pageHeight - 45, '', 'FAST');

                            // Save the PDF document
                            pdf.save("report.pdf");
                        });
                    }
                </script>


                <!-- Download excel code here  -->

                <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>

                <script>
                    function downloadExcel() {
                        // Define the worksheet data
                        var reportHead = document.getElementById("report_head").innerText;
                        var reportHeadArray = reportHead.split("\n"); // split the text by newline character
                        var ws_data = [];
                        reportHeadArray.forEach(function (text) {
                            ws_data.push([text]); // add each text on a separate row
                        });
                        ws_data.push([], ["$fields"]); // add an empty row and the header row

                        // Get the data to be included in the Excel file
                        var table = document.getElementById("report_body");
                        var rows = table.querySelectorAll("tr");

                        // Loop through each row of the table and add it to the worksheet data
                        rows.forEach(function (row) {
                            var rowData = [];
                            var cols = row.querySelectorAll("td");
                            cols.forEach(function (col) {
                                rowData.push(col.innerText);
                            });
                            ws_data.push(rowData);
                        });

                        // Create a new Workbook
                        var wb = XLSX.utils.book_new();

                        // Create a new worksheet
                        var ws = XLSX.utils.aoa_to_sheet(ws_data);

                        // Add the worksheet to the Workbook
                        XLSX.utils.book_append_sheet(wb, ws, "Employee Report");

                        // Save the Workbook as an Excel file
                        var filename = "Employee Report.xlsx";
                        XLSX.writeFile(wb, filename);
                    }
                </script>



                <?php

                include '../_dbconnect.php';
                // Retrieve employee name from the database
                $sql = "SELECT empname FROM employees WHERE empid = '$empid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $empname = $row["empname"];
                } else {
                    $empname = "No Found";
                }

                $sql = "SELECT project FROM empwork WHERE empid = '$empid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $project = $row["project"];
                } else {
                    $project = "No Found";
                }
                ?>


                <table>
                    <div class="container-fluid">
                        <div class="row justify-content-around">
                            <div class="card">
                                <div class="card-body">

                                    <div id="report_head">
                                        <br>
                                        <center>
                                            <h5 class="card-title">REPORT</h5>
                                        </center>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="card-text">Employee ID : <b>
                                                        <?php echo $empid; ?>
                                                    </b> </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="card-text">Employee Name : <b>
                                                        <?php echo $empname; ?>
                                                    </b></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="card-text">Report From: <b>
                                                        <?php echo $startDate; ?>
                                                    </b> </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="card-text">Report Upto: <b>
                                                        <?php echo $endDate; ?>
                                                    </b> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <p class="card-text">Project Name: <b>Time Management System </b>
                                                        <!-- <?php echo $project; ?> -->
                                                    </b> </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="card-text">Client Name: XYZ company</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                </table>

                <?php


                // do something with the selected fields
                if (!empty($fields)) {
                    // build a SQL query using the selected fields
                    include '../_dbconnect.php';

        //             $sql = "SELECT *
        // FROM employees e
        // JOIN empwork w ON e.empid = w.empid AND e.empid = $empid
        // JOIN empintime i ON e.empid = i.empid AND DATE(i.intime) = DATE(w.date) 
        // JOIN empouttime o ON e.empid = o.empid AND DATE(o.outtime) = DATE(w.date) 
        // WHERE w.date BETWEEN '$startDate' AND '$endDate'
        // ORDER BY w.date DESC
        // ";
        $sql = "SELECT *
        FROM empattend
        WHERE empid = $empid ";

                    $result = $conn->query($sql);
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <?php foreach ($fields as $field): ?>
                                                <th style="background-color: #f2f2f2;">
                                                    <b>
                                                        <?php echo $field; ?>
                                                    </b>
                                                </th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = $result->fetch_assoc()): ?>
                                            <tr>
                                                <?php foreach ($fields as $field): ?>
                                                    <td>
                                                        <?php echo $row[$field]; ?>
                                                    </td>
                                                <?php endforeach; ?>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>
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