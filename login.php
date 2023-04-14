<?php
require_once('DBconnect.php');
session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

$email = $_POST['email'];
$password = $_POST['password'];
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * from user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) != 0){
        if($email == "admin1@gmail.com"){
        header("Location: admin_history.php");
        }else{
            header("Location: appointment_page.php");
        }
    }else{
        //$_SESSION['error'] = "Invalid username or password.";
        header("Location: signin.php");
    }
}
?>