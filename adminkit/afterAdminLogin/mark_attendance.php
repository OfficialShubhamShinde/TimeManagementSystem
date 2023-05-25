<?php
include '../_dbconnect.php';

$data = json_decode(file_get_contents('php://input'), true);
$empid = $data['empid'];
$date = $data['date'];
$time = $data['time'];
$type = $data['type'];

// check if the employee has already marked attendance for the given date
$sql = "SELECT * FROM empattend WHERE empid = ? AND date = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('is', $empid, $date);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // update the existing attendance record with outtime
    $sql = "UPDATE empattend SET outtime = ? WHERE empid = ? AND date = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sis', $time, $empid, $date);
    $result = $stmt->execute();

    if ($result) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    // insert a new attendance record with intime
    $sql = "INSERT INTO empattend (empid, date, intime, outtime) VALUES (?, ?, ?, '')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('iss', $empid, $date, $time);
    $result = $stmt->execute();

    if ($result) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>
