<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if(isset($_POST['modify']) == 'Modify'){
    if(isset($_POST['docid']) && isset($_POST['docname']) && isset($_POST['fd_name']) && isset($_POST['available_slots']) && isset($_POST['p2'])){
        $docId = $_POST['docid'];
        $docName = $_POST['docname'];
        $fdName = $_POST['fd_name'];
        $available = $_POST['available_slots'];
        $price = $_POST['p2'];
        $sql_add = "UPDATE doctors set docId = '$docId', docName = '$docName', fdName = '$fdName', price = '$price',  available = '$available' where docId = '$docId'";
            mysqli_query($conn, $sql_add);
            header("Location: admin_doctor.php");
    }
}
?>