<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if (isset($_POST['add']) == 'Add') {
    if(isset($_POST['cabin1']) && isset($_POST['available']) && isset($_POST['p1'])){
        $cabinclass = $_POST['cabin1'];
        $available = $_POST['available'];
        $price = $_POST['p1'];
            $sql_add = "INSERT INTO cabin VALUES ('$cabinclass', '$price', '$available')";
            mysqli_query($conn, $sql_add);
            header("Location: admin_cabin.php");
}
}
?>