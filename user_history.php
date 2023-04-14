<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset= "UTF-8" />
    <meta http-equiv= "X-UA-Compatible" content= "IE=edge" />
    <meta name= "viewport" content= "width=device-width, initial-scale=1.0" />
    <title>HealthSync Medical Centre</title>
    <link rel= "icon" href= "css/mlogo.png" type= "image/x-icon">
    <link rel= "stylesheet" href= "css/style.css">
    <link rel= "stylesheet" href= "css/user_historyd.css">
  </head>
  <body>
    <header class= "header">
      <nav>
        <div class= "navbar-left-side">
          <a class= "navbar-left" href= "home.php"><img class= "navbar-logo" src= "css/mlogo.png" alt= "logo">HealthSync Medical Centre</a>
        </div>
        <div class= "navbar-right-side">
          <a class= "navbar-right" href= "appointment_page.php">Make Appointment</a>
          <a class= "navbar-right" href= "available_doctors.php">Doctors</a>
          <a class= "navbar-right" href= "available_cabin.php">Cabin</a>
          <a class= "navbar-right" href= "available_medicine.php">Medicine</a>
          <a class= "navbar-right" href= "signin.php">Sign Out</a>
        </div>
      </nav>
    </header>
    <section class= "history-section">
      <div class= "table-info">
        <h1><?php
        require_once('DBconnect.php');
        session_start();
        $email = $_SESSION['email'];
        if ($email === "admin1@gmail.com") {
          echo "All Appointment History";
        }else{
          echo "Appointment History";
        }
        ?></h1>
        <div class= "table columns">
          <div class= "table-headings"><h5>Name</h5></div>
          <div class= "table-headings"><h5>Phone</h5></div>
          <div class= "table-headings"><h5>Doctor's Name</h5></div>
          <div class= "table-headings"><h5>Cabin Class</h5></div>
          <div class= "table-headings"><h5>Medicine</h5></div>
          <div class= "table-headings"><h5>Appointment Date</h5></div>
          <div class= "table-headings"><h5>Total Cost</h5></div>
        </div>
        <?php
        if ($email === "admin1@gmail.com") {
          $sql_table = "SELECT * from appointment";
        }else{
          $sql_table = "SELECT * from appointment where email = '$email'";
        }
        $result_table = mysqli_query($conn, $sql_table);
        if(mysqli_num_rows($result_table) != 0){
        while($row = mysqli_fetch_assoc($result_table)){
        ?>
        <div class= "table">
          <div class= "table-data"><h5><?php echo $row['full_name'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['phone'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['docName'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['cabinclass'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['medName'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['date'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['estcost'];?></h5></div>
        </div>
        <?php }}?>
      </div>
    </section>
    <footer>
      <p>&copy; 2023 | HealthSync Medical Centre | All rights reserved. </p>
    </footer>
 </body>
</html>