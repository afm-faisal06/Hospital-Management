<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset= "UTF-8" />
    <meta http-equiv= "X-UA-Compatible" content= "IE=edge" />
    <meta name= "viewport" content= "width=device-width, initial-scale=1.0" />
    <title>HealthSync Medical Centre</title>
    <link rel= "icon" href= "css/mlogo.png" type= "image/x-icon">
    <link rel= "stylesheet" href= "css/style.css">
    <link rel= "stylesheet" href= "css/admin_dcms.css">
  </head>
  <body>
    <header class= "header">
      <nav>
        <div class= "navbar-left-side">
          <a class= "navbar-left" href= "home.php"><img class= "navbar-logo" src= "css/mlogo.png" alt= "logo">HealthSync Medical Centre</a>
        </div>
        <div class= "navbar-right-side">
          <a class= "navbar-right" href= "admin_history.php">All Appointment History</a>
          <a class= "navbar-right" href= "admin_cabin.php">Cabin</a>
          <a class= "navbar-right" href= "admin_medicine.php">Medicine</a>
          <a class= "navbar-right" href= "signin.php">Sign Out</a>
        </div>
      </nav>
    </header>
    <section class= "all-section">
      <div class= "table-info">
        <h1>Available Doctors</h1>
        <div class= "table columns">
          <div class= "table-headings"><h5>Doctor's Id</h5></div>
          <div class= "table-headings"><h5>Doctor's Name</h5></div>
          <div class= "table-headings"><h5>Specialization</h5></div>
          <div class= "table-headings"><h5>Available Slots</h5></div>
          <div class= "table-headings"><h5>Fee</h5></div>
        </div>
        <?php
        require_once('DBconnect.php');
        session_start();
        $email = $_SESSION['email'];
        $sql_table = "SELECT * from doctors WHERE docId <> 0;";
        $result_table = mysqli_query($conn, $sql_table);
        if(mysqli_num_rows($result_table) != 0){
        while($row = mysqli_fetch_assoc($result_table)){
        ?>
        <div class= "table">
          <div class= "table-data"><h5><?php echo $row['docId'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['docName'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['fdName'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['available'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['price'];?></h5></div>
        </div>
        <?php }}?>       
      </div>
      <br>
      <br>
      <br>
    <section class= "c1">
      <form action= "admin_doctor1.php" method= "post">
        <h1>Add New Doctor's Details</h1>
        <label>Doctor's Id:</label>
        <input placeholder= "Enter the Doctor's Id" name= "docID" type= "number">
        <br>
        <label>Doctor's Name:</label>
        <input placeholder= "Enter the Doctor's Name" name= "docName" type= "text">
        <br>
        <label>Specialization:</label>
        <input placeholder= "Enter Specialization" name= "fdName" type= "text">
        <br>
        <label>Available Slots:</label>
        <input placeholder= "Enter the Available Slots" name= "available" type= "number">
        <br>
        <label>Fee:</label>
        <input placeholder= "Enter the Fee" name= "p1" type= "number">
        <br>
        <br>
        <input class= "buttons" name= "add" value= "Add" type="submit">
        <br>
      </form>
    </section>
      <br>
      <br>
      <br>
      <section class= "c2">
        <form action= "admin_doctor2.php" method= "post">
          <h1>Change the Doctor's Details</h1>
          <label>Doctor's Id:</label>
          <input placeholder= "Enter the Doctor's Id" name="docid" type= "number">
          <br>
          <label>Doctor's Name:</label>
          <input placeholder= "Enter the Doctor's Name" name= "docname" type= "text">
          <br>
          <label>Specialization:</label>
          <input placeholder= "Enter Specialization" name= "fd_name" type= "text">
          <br>
          <label>Available Slots:</label>
          <input placeholder= "Enter the Available Slots" name= "available_slots" type= "number">
          <br>
          <label>Price:</label>
          <input placeholder= "Enter the Fee" name= "p2" type= "number">
          <br>
          <br>
          <input class= "buttons" name= "modify" value= "Change" type="submit">
        </form>
        <br>
      </section>
      <br>
      <br>
      <br>
      <section class= "c3">
        <form action= "admin_doctor3.php" method= "post">
          <h1>Remove the Doctor's details</h1>
          <label>Doctor's Id:</label>
          <input placeholder= "Enter the Doctor's Id" name= "docId" type= "number">
          <br>
          <br>
          <input class= "buttons" name= "delete" value= "Remove" type= "submit">
          <br>
        </form>
      </section> 
    </section>
    <footer>
      <p>&copy; 2023 | HealthSync Medical Centre | All rights reserved. </p>
    </footer>
 </body>
</html>