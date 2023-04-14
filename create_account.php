<?php
require_once('DBconnect.php');
session_start();

if(isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['birth_date']) && isset($_POST['password']) && isset($_POST['phone_number']) && isset($_POST['gender'])){
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $birthdate = $_POST['birth_date'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $sql = "SELECT * from user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $sql_id = "SELECT count(*) from user";
    $result_id = mysqli_query($conn, $sql_id);
    $rows = mysqli_num_rows($result_id);
    if($rows>0){
    while($row = mysqli_fetch_assoc($result_id) ){
        $id =  $row['count(*)'] + 1;
    }}
    $sql_add = "INSERT INTO user VALUES ('$id', '$fullname', '$email', '$birthdate', '$password', '$phonenumber', '$gender')";
    if(mysqli_num_rows($result) > 0){
        header("Location: signup.php");
    }else{
        mysqli_query($conn, $sql_add);
        $_SESSION['email'] = $email;
        header("Location: signin.php");
    }
}






?>