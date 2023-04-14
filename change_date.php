<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
if(isset($_POST['modify']) == 'Modify'){
    if(isset($_POST['rowName']) && isset($_POST['appointment'])){
      $rowName = $_POST['rowName'];
      $appointment = $_POST['appointment'];
      $sql_add = "UPDATE appointment set date = '$appointment' where row = '$rowName'";
          mysqli_query($conn, $sql_add);
          header("Location: admin_history.php");
  }
}
?>