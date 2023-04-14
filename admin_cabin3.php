<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if (isset($_POST['delete']) == 'Delete') {
    if(isset($_POST['cabin3'])){
        $cabinclass = $_POST['cabin3'];
    }
        $sql_add = "DELETE from cabin where cabinclass = '$cabinclass'";
            mysqli_query($conn, $sql_add);
            header("Location: admin_cabin.php");

}
?>