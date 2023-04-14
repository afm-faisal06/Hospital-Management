<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if(isset($_POST['phone']) && isset($_POST['docId']) && isset($_POST['docName']) && isset($_POST['cabinclass']) && isset($_POST['medId']) && $_POST['medName'] && $_POST['date']){
    $phone = $_POST['phone'];
    $docId = $_POST['docId'];
    $docName = $_POST['docName'];
    $cabinclass = $_POST['cabinclass'];
    $medId = $_POST['medId'];
    $medName = $_POST['medName'];
    $date = $_POST['date'];
    $sql_new = "SELECT full_name FROM user WHERE email = '$email'";
    $result_new = mysqli_query($conn, $sql_new);
    $row_new = mysqli_fetch_assoc($result_new);
    // $full_name= $row_new['full_name'].""."";
    $full_name= $row_new['full_name'];
    $sql_check1 = "SELECT available from doctors WHERE docId = '$docId' AND docName = '$docName'";
    $sql_check2 = "SELECT available from cabin WHERE cabinclass = '$cabinclass'";
    $sql_check3 = "SELECT available from medicine WHERE medId = '$medId' AND medName = '$medName'";
    $result_check1 = mysqli_query($conn, $sql_check1);
    $result_check2 = mysqli_query($conn, $sql_check2);
    $result_check3 = mysqli_query($conn, $sql_check3);
    if (mysqli_num_rows($result_check1) != 0) {
        while($row_check1 = mysqli_fetch_assoc($result_check1) ){
            $available1 = $row_check1['available']-1;
        }
      }
    if (mysqli_num_rows($result_check2) != 0) {
      while($row_check2 = mysqli_fetch_assoc($result_check2) ){
          $available2 = $row_check2['available']-1;
      }
    }
    if (mysqli_num_rows($result_check3) != 0) {
      while($row_check3 = mysqli_fetch_assoc($result_check3) ){
          $available3 = $row_check3['available']-1;
      }
    }
    if (isset($available1) && isset($available2) && isset($available3)) {
      if ($available1 < 0 || $available2 <0 || $available3<0) {
        header("Location: appoitnment_page.php");
      } else{
        $sql_available1 = "UPDATE doctors set available = $available1 where docId = '$docId'";
        $sql_available2 = "UPDATE cabin set available = $available2 where cabinclass = '$cabinclass'";
        $sql_available3 = "UPDATE medicine set available = $available3 where medId = '$medId'";
        mysqli_query($conn, $sql_available1);
        mysqli_query($conn, $sql_available2);
        mysqli_query($conn, $sql_available3);
        $sql = "SELECT COUNT(*) as count FROM appointment";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $total = $row["count"] + 1;
        $sql_check4 = "SELECT price from doctors WHERE docId = '$docId' AND docName = '$docName'";
        $sql_check5 = "SELECT price from cabin WHERE cabinclass = '$cabinclass'";
        $sql_check6 = "SELECT price from medicine WHERE medId = '$medId' AND medName = '$medName'";
        $result_check4 = mysqli_query($conn, $sql_check4);
        $result_check5 = mysqli_query($conn, $sql_check5);
        $result_check6 = mysqli_query($conn, $sql_check6);
        $row_check4 = mysqli_fetch_assoc($result_check4);
        $row_check5 = mysqli_fetch_assoc($result_check5);
        $row_check6 = mysqli_fetch_assoc($result_check6);
        $estcost = $row_check4 ['price'] +$row_check5 ['price']+  $row_check6 ['price'];
        $sql_history = "INSERT INTO appointment VALUES ('$full_name', '$phone', '$docId', '$docName', '$cabinclass', '$date','$medId', '$medName', '$email', '$estcost', '$total')";
        mysqli_query($conn, $sql_history);
      }
    } else{
      header("Location: appointment_page.php");
    }
}  
?>
<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset= "UTF-8" />
    <meta http-equiv= "X-UA-Compatible" content= "IE=edge" />
    <meta name= "viewport" content= "width=device-width, initial-scale=1.0" />
    <title>HealthSync Medical Centre<</title>
    <link rel= "icon" href= "css/mlogo.png" type= "image/x-icon">
    <link rel= "stylesheet" href= "css/style.css">
    <link rel= "stylesheet" href= "css/appointment_receiptg.css" />
  </head>
  <body>
    <!-- <header class= "header">
      <nav>
        <div class= "navbar-left-side">
          <a class= "navbar-left" href= "home.php"><img class= "navbar-logo" src= "css/mlogo.png" alt= "logo">HealthSync Medical Centre</a>
        </div>
        <div class= "navbar-right-side">
          <a class= "navbar-right" href= "appointment_page.php">Make Appointment</a>
          <a class= "navbar-right" href= "available_doctors.php">Doctors</a>
          <a class= "navbar-right" href= "available_cabin.php">Cabin</a>
          <a class= "navbar-right" href= "available_medicine.php">Medicine</a>
          <a class= "navbar-right" href= "user_history.php">Appointment History</a>
          <a class= "navbar-right" href= "signin.php">Sign Out</a>
        </div>
      </nav>
    </header> -->
    <section class= "receipt-section">
      <form class= "receipt-info">
        <div class= "receipt-border">
          <h1 class= "receipt-top">Appointment Reciept</h1>
          <div class= "receipt-bottom">
            <div class= "receipt-left">
              <h5 class= "receipt-both">Patient Name: <span><?php echo $full_name?></span> </h5>
              <h5 class= "receipt-both">Doctor's Name: <span><?php echo $docName?></span></h5>
              <h5 class= "receipt-both">Medicine Name: <span><?php echo $medName?></span></h5>
            </div>
            <div class= "receipt-right">
              <h5 class= "receipt-both">Phone Number: <span><?php echo $phone?></span></h5>
              <h5 class= "receipt-both">Cabin Class: <span><?php echo $cabinclass?></span></h5>
              <h5 class= "receipt-both">Appointment Date: <span><?php echo $date?></span></h5>
            </div>
          </div>
          <div class= "receipt-mid">
              <h5 class= "receipt-both">Total Cost: <span><?php echo $estcost?> TK</span></h5>
          </div>
        </div>
        <input onclick= "window.print()" class= "print-button" value= "Print" type= "submit">
      </form>
    </section>
    <!-- <footer>
      <p>&copy; 2023 | HealthSync Medical Centre | All rights reserved. </p>
    </footer> -->
  </body>
</html>