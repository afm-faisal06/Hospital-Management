<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if(isset($_POST['modify']) == 'Modify'){
    if(isset($_POST['cabin2']) && isset($_POST['available_slots']) && isset($_POST['p2'])){
        $cabinclass = $_POST['cabin2'];
        $available = $_POST['available_slots'];
        $price = $_POST['p2'];
        $sql_add = "UPDATE cabin set cabinclass = '$cabinclass', price = '$price', available= '$available'where cabinclass = '$cabinclass'";
            mysqli_query($conn, $sql_add);
            header("Location: admin_cabin.php");
    }
}
?>