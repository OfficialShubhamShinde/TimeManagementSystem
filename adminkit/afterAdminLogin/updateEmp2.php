<?php
  // Include database connection file
  include '../_dbconnect.php';

  // Retrieve form data
  $id = $_POST['empid'];
  $name = $_POST['empname'];
  $email = $_POST['empemail'];
  $contact = $_POST['empcontact'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $department = $_POST['department'];
  $position = $_POST['position'];
  $companyemail = $_POST['companymail'];
  $doj = $_POST['doj'];
  $emptype = $_POST['emptype'];
  $status = $_POST['status'];

  // Update employee record in database
  $sql = "UPDATE employees SET empname='$name', emailid='$email', contactno='$contact', dob='$dob', gender='$gender', address='$address', department='$department', position='$position', companyemailid='$companyemail', doj='$doj', emptype='$emptype', status='$status' WHERE empid=$id";
  $result = mysqli_query($conn, $sql);

  // Check if update was successful
  if ($result) {
    echo "<script>alert('Employee information updated successfully.')</script>";
    echo "<script>window.location.href = 'adminEmployees.php';</script>";
  } else {
    echo "Error updating employee information: " . mysqli_error($conn);
  }

  // Close database connection
  mysqli_close($conn);
?>
