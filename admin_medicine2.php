<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if(isset($_POST['modify']) == 'Modify'){
    if(isset($_POST['medid']) && isset($_POST['med_name']) && isset($_POST['available_slots']) && isset($_POST['p2'])){
        $medId = $_POST['medid'];
        $medName = $_POST['med_name'];
        $available = $_POST['available_slots'];
        $price = $_POST['p2'];
        $sql_add = "UPDATE medicine set medId = '$medId', medName = '$medName', price = '$price', available= '$available' where medId = '$medId'";
            mysqli_query($conn, $sql_add);
            header("Location: admin_medicine.php");
    }
}
?>