<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
$_SESSION['email'] = $email;
?>
<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset= "UTF-8">
    <meta http-equiv= "X-UA-Compatible" content= "IE=edge">
    <meta name= "viewport" content= "width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "css/style.css">
    <link rel="stylesheet" href= "css/appointment_pagez.css">
    <title>HealthSync Medical Centre</title>
    <link rel= "icon" href= "css/mlogo.png" type= "image/x-icon">
  </head>
  <body>
    <header class= "header">
      <nav>
        <div class= "navbar-left-side">
          <a class= "navbar-left" href= "home.php"><img class= "navbar-logo" src= "css/mlogo.png" alt= "logo">HealthSync Medical Centre</a>
        </div>
        <div class= "navbar-right-side">
          <a class= "navbar-right" href= "available_doctors.php">Doctors</a>
          <a class= "navbar-right" href= "available_cabin.php">Cabin</a>
          <a class= "navbar-right" href= "available_medicine.php">Medicine</a>
          <a class= "navbar-right" href= "user_history.php">Appointment History</a>
          <a class= "navbar-right" href= "signin.php">Sign Out</a>
        </div>
      </nav>
    </header>
    <section class= "appointment-section">
      <form class= "appointment-details" action= "make_appointment.php" method= "post">
        <br>
        <br>
        <h1>Appointment details</h1>
        <label>Phone Number:</label>
        <input placeholder= "Your Phone Number" required name= "phone" type= "text">
        <br>
        <label>Doctor Id:</label>
        <select name="docId">
        <?php
          $sql1 = "SELECT DISTINCT docId FROM doctors";
          $result1 = mysqli_query($conn, $sql1);
          $rows = mysqli_num_rows($result1);
          if($rows>0){
            while($row = mysqli_fetch_assoc($result1)){
          ?>
            <option name= "from" value ="<?php echo $row['docId'] ?>"><?php echo $row['docId'] ?></option>
            <?php }}
          ?>
        </select>
        <br>
        <label>Doctor's Name:</label>
        <select name= "docName">
        <?php
          $sql1 = "SELECT DISTINCT docName FROM doctors";
          $result1 = mysqli_query($conn, $sql1);
          $rows = mysqli_num_rows($result1);
          if($rows>0){
            while($row = mysqli_fetch_assoc($result1)){
          ?>  
            <option name= "from" value ="<?php echo $row['docName'] ?>"><?php echo $row['docName'] ?></option>
            <?php }} 
          ?>
        </select>
        <br>
        <label>Cabin Class:</label>
        <select name= "cabinclass">
        <?php
          $sql1 = "SELECT DISTINCT cabinclass FROM cabin";
          $result1 = mysqli_query($conn, $sql1);
          $rows = mysqli_num_rows($result1);
          if($rows>0){
            while($row = mysqli_fetch_assoc($result1)){
          ?>
            <option name= "from" value ="<?php echo $row['cabinclass'] ?>"><?php echo $row['cabinclass'] ?></option>
            <?php }} 
          ?>
        </select>
        <br>
        <label>Medicine Id:</label>
        <select name="medId">
        <?php
          $sql1 = "SELECT DISTINCT medId FROM medicine";
          $result1 = mysqli_query($conn, $sql1);
          $rows = mysqli_num_rows($result1);
          if($rows>0){
            while($row = mysqli_fetch_assoc($result1)){
          ?>
            <option name = "from" value ="<?php echo $row['medId'] ?>"><?php echo $row['medId'] ?></option>
            <?php }} 
          ?>
        </select>
        <br>
        <label>Medicine Name:</label>
        <select name="medName">
        <br>
        <?php
          $sql1 = "SELECT DISTINCT medName FROM medicine";
          $result1 = mysqli_query($conn, $sql1);
          $rows = mysqli_num_rows($result1);
          if($rows>0){
            while($row = mysqli_fetch_assoc($result1)){
          ?>
            <option name= "from" value ="<?php echo $row['medName'] ?>"><?php echo $row['medName'] ?></option>
            <?php } } 
          ?>
        </select>
        <br>
        <label>Appointment Date:</label>
        <input required name= "date" type= "date">
        <br>
        <br>
        <input class= "appointment-button" value= "Make Appointment" type= "submit">
        <br>
        <br>
      </form>
    </section>
    <footer>
      <p>&copy; 2023 | HealthSync Medical Centre | All rights reserved. </p>
    </footer>
  </body>
</html>