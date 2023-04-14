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
    <header class="header">
      <nav>
        <div class= "navbar-left-side">
          <a class= "navbar-left" href= "home.php"><img class= "navbar-logo" src= "css/mlogo.png" alt= "logo">HealthSync Medical Centre</a>
        </div>
        <div class= "navbar-right-side">
          <a class= "navbar-right" href= "admin_history.php">All Appointment History</a>
          <a class= "navbar-right" href= "admin_doctor.php">Doctors</a>
          <a class= "navbar-right" href= "admin_cabin.php">Cabin</a>
          <a class= "navbar-right" href= "signin.php">Sign Out</a>
        </div>
      </nav>
    </header>
    <section class= "all-section">
      <div class= "table-info">
        <h1>Available Medicine</h1>
        <div class= "table columns">
          <div class= "table-headings"><h5>Medicine Id</h5></div>
          <div class= "table-headings"><h5>Medicine Name</h5></div>
          <div class= "table-headings"><h5>Available Medicine</h5></div>
          <div class= "table-headings"><h5>Price</h5></div>
        </div>
        <?php
        require_once('DBconnect.php');
        session_start();
        $email = $_SESSION['email'];
        $sql_table = "SELECT * from medicine WHERE medId <> 0";
        $result_table = mysqli_query($conn, $sql_table);
        if(mysqli_num_rows($result_table) != 0){
        while($row = mysqli_fetch_assoc($result_table)){
        ?>
        <div class= "table">
          <div class= "table-data"><h5><?php echo $row['medId'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['medName'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['available'];?></h5></div>
          <div class= "table-data"><h5><?php echo $row['price'];?></h5></div>
        </div>
        <?php }}?>
      </div>
      <br>
      <br>
      <br>
      <section class= "c1">
        <form action= "admin_medicine1.php" method= "post">
          <h1>Add New Medicine Details</h1>
          <label>Medicine Id:</label>
          <input placeholder= "Enter the Medicine Id" name= "med_id" type= "number">
          <br>
          <label>Medicine Name:</label>
          <input placeholder= "Enter the Medicine Name" name= "medName" type= "text">
          <br>
          <label>Available Medicine:</label>
          <input placeholder= "Enter the Number of Medicine" name= "available" type= "number">
          <br>
          <label>Price:</label>
          <input placeholder= "Enter the Price" name= "p1" type= "number">
          <br>
          <br>
          <input class= "buttons" name= "add" value= "Add" type= "submit">
          <br>
        </form>
      </section>
      <br>
      <br>
      <br>
      <section class= "c2">
        <form action= "admin_medicine2.php" method= "post">
          <h1>Change the Medicine Details</h1>
          <label>Medicine Id:</label>
          <input placeholder= "Enter the Medicine Id" name= "medid" type= "number">
          <br>
          <label>Medicine Name:</label>
          <input placeholder= "Enter the Medicine Name" name= "med_name" type= "text">
          <br>
          <label>Available Medicine:</label>
          <input placeholder= "Enter the Number of Medicine" name= "available_slots" type= "number">
          <br>
          <label>Price:</label>
          <input placeholder= "Enter the Price" name= "p2" type= "number">
          <br>
          <br>
          <input class="buttons" name= "modify" value= "Change" type= "submit">
        </form>
        <br>
      </section>
      <br>
      <br>
      <br>
      <section class= "c3">
        <form action= "admin_medicine3.php" method= "post">
          <h1>Remove the Medicine Details</h1>
          <label>Medicine Id:</label>
          <input placeholder= "Enter the Medicine Id" name= "id" type= "number">
          <br>
          <br>
          <input class="buttons" name= "delete" value= "Remove" type= "submit">
          <br>
        </form>
      </section>
    </section>
    <footer>
      <p>&copy; 2023 | HealthSync Medical Centre | All rights reserved. </p>
    </footer>
 </body>
</html>