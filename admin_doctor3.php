<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if (isset($_POST['delete']) == 'Delete') {
    if(isset($_POST['docId'])){
        $docId = $_POST['docId'];
    }
        $sql_add = "DELETE from doctors where docId = '$docId'";
            mysqli_query($conn, $sql_add);
            header("Location: admin_doctor.php");
}
?>