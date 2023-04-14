<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if (isset($_POST['delete']) == 'Delete') {
    if(isset($_POST['id'])){
        $medId = $_POST['id'];
    }
        $sql_add = "DELETE from medicine where medId = '$medId'";
            mysqli_query($conn, $sql_add);
            header("Location: admin_medicine.php");

}
?>