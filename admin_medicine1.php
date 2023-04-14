<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if (isset($_POST['add']) == 'Add') {
    if(isset($_POST['med_id']) && isset($_POST['medName']) && isset($_POST['available']) && isset($_POST['p1'])){
        $medId = $_POST['med_id'];
        $medName = $_POST['medName'];
        $available = $_POST['available'];
        $price = $_POST['p1'];
            $sql_add = "INSERT INTO medicine VALUES ('$medId', '$medName', '$price', '$available')";
            mysqli_query($conn, $sql_add);
            header("Location: admin_medicine.php");
}
}
?>