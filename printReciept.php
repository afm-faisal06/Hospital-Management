<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset= "UTF-8" />
    <meta http-equiv= "X-UA-Compatible" content= "IE=edge" />
    <meta name= "viewport" content= "width=device-width, initial-scale=1.0" />
    <title>HealthSync Medical Centre<</title>
    <link rel= "icon" href= "css/mlogo.png" type= "image/x-icon">
    <link rel= "stylesheet" href= "css/style.css">
    <link rel= "stylesheet" href= "css/print_Reciepts.css" />
  </head>
  <body>
    <!-- <header class= "header">
      <nav>
        <div class= "navbar-left-side">
          <a class= "navbar-left" href= "home.php"><img class= "navbar-logo" src= "css/mlogo.png" alt= "logo">HealthSync Medical Centre</a>
        </div>
        <div class= "navbar-right-side">
          <a class= "navbar-right" href= "admin_history.php">All Appointment History</a>
          <a class= "navbar-right" href= "admin_doctor.php">Doctors</a>
          <a class= "navbar-right" href= "admin_cabin.php">Cabin</a>
          <a class= "navbar-right" href= "admin_medicine.php">Medicine</a>
          <a class= "navbar-right" href= "signin.php">Sign Out</a>
        </div>
      </nav>
    </header> -->
<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if(isset($_POST['serial'])){
    $row = $_POST['serial'];
    $sql_table = "SELECT * from appointment where row = '$row'";
    $result_table = mysqli_query($conn, $sql_table);
    if(mysqli_num_rows($result_table) != 0){
    while($row = mysqli_fetch_assoc($result_table)){
    ?>
    <section class= "receipt-section">
      <form class= "receipt-info">
        <div class= "receipt-border">
          <h1 class= "receipt-top">Appointment Reciept</h1>
          <div class= "receipt-bottom">
            <div class= "receipt-left">
              <h5 class= "receipt-both">Patient Name: <span><?php echo $row['full_name'];?></span> </h5>
              <h5 class= "receipt-both">Doctor's Name: <span><?php echo $row['docName'];?></span></h5>
              <h5 class= "receipt-both">Medicine Name: <span><?php echo $row['medName'];?></span></h5>
            </div>
            <div class= "receipt-right">
              <h5 class= "receipt-both">Phone Number: <span><?php echo $row['phone'];?></span></h5>
              <h5 class= "receipt-both">Cabin Class: <span><?php echo $row['cabinclass'];?></span></h5>
              <h5 class= "receipt-both">Appointment Date: <span><?php $row['date'];?></span></h5>
            </div>
          </div>
          <div class= "receipt-mid">
              <h5 class= "receipt-both">Total Cost: <span><?php echo $row['estcost'];?> TK</span></h5>
          </div>
        </div>
        <input onclick= "window.print()" class= "print-button" value= "Print" type= "submit">
      </form>
    </section>
    <?php }}} ?>
    <!-- <footer>
      <p>&copy; 2023 | HealthSync Medical Centre | All rights reserved. </p>
    </footer> -->
  </body>
</html>