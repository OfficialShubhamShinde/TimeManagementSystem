<?php
include '../_dbconnect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $updateQuery = "UPDATE activity SET accept = 1 WHERE id ='$id'";
    $deletSql = mysqli_query($conn, $updateQuery);

    if($deletSql){
        header('location: adminDashbord.php');
    }
    else{
        echo "Error";
    }
}
else{
    echo "error";
}
?>