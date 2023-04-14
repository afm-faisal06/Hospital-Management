<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if (isset($_POST['add']) == 'Add') {
    if(isset($_POST['docID']) && isset($_POST['docName']) && isset($_POST['fdName']) && isset($_POST['available']) && isset($_POST['p1'])){
        $docId = $_POST['docID'];
        $docName = $_POST['docName'];
        $fdName = $_POST['fdName'];
        $available = $_POST['available'];
        $price = $_POST['p1'];
            $sql_add = "INSERT INTO doctors VALUES ('$docId', '$docName', '$fdName', '$price', '$available')";
            mysqli_query($conn, $sql_add);
            header("Location: admin_doctor.php");
}
}
?>