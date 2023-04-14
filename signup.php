<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset= "UTF-8">
    <meta http-equiv= "X-UA-Compatible" content= "IE=edge">
    <meta name= "viewport" content= "width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "css/style.css">
    <link rel= "stylesheet" href= "css/signup.css">
    <title>HealthSync Medical Centre</title>
    <link rel= "icon" href= "css/mlogo.png" type= "image/x-icon">
  </head>
  <body>
    <header class= "header">
      <nav>
        <div class= "navbar-left-side">
          <a class= "navbar-left" href= "home.php"><img class= "navbar-logo" src="css/mlogo.png" alt= "logo">HealthSync Medical Centre</a>
        </div>
        <div class= "navbar-right-side">
          <a class= "navbar-right" href= "home.php">Home</a>
          <a class= "navbar-right" href= "signin.php">Back</a>
        </div>
      </nav>
    </header>
    <section class= "signup-section">
      <form class= "signup-details" action= "create_account.php" method= "post">
        <br>
        <br>
        <h1>Account Details</h1>
        <br>
        <br>
        <label>First Name:</label>
        <input placeholder= "Full Name" name= "full_name" type= "text">
        <br>
        <label>Date of Birth:</label>
        <input placeholder= "Birth Date" name= "birth_date" type= "date">
        <br>
        <label>Gender:</label>
        <select placeholder= "Select" name= "gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Other</option>
        </select>
        <br>
        <label>Phone Number:</label>
        <input placeholder= "Phone Number" name= "phone_number" type= "text">
        <br>
        <label>Email:</label>
        <input placeholder= "Email" name= "email" type= "text">
        <br>
        <label>Password:</label>
        <input placeholder= "Password" name= "password" type= "password">
        <br>
        <br>
        <input class= "signup-button" value= "Sign Up" type= "submit">
        <br>
        <br>
      </form>
    </section>
    <footer>
      <p>&copy; 2023 | HealthSync Medical Centre | All rights reserved. </p>
    </footer>
  </body>
</html>