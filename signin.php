<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset= "UTF-8">
    <meta http-equiv= "X-UA-Compatible" content= "IE=edge">
    <meta name= "viewport" content= "width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "css/style.css">
    <link rel= "stylesheet" href= "css/signin.css">
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
          <a class= "navbar-right" href= "home.php">Home</a>
          <a class= "navbar-right" href= "signup.php">Create Account</a>
        </div>
      </nav>
    </header>
    <section class= "signin-section">
      <form class= "login-section" action= "login.php" method = "post">
        <br>
        <h1>Sign In</h1>
        <label>Email:</label>
        <input placeholder= "Type Your Email address" name= "email" type= "text">
        <br>
        <label>Password:</label>
        <input placeholder= "Type Your Password" name= "password" type= "password">
        <br>
        <br>
        <input class= "login-button" value= "Sign In" type= "submit">
        <br>
        <br>
        <?php //if (isset($_SESSION['error'])): ?>
          <!-- <p class="error-msg"><?php //echo $_SESSION['error']; ?></p> -->
        <?php //endif; ?>
      </form>
    </section>
    <footer>
      <p>&copy; 2023 | HealthSync Medical Centre | All rights reserved. </p>
    </footer>
  </body>
</html>