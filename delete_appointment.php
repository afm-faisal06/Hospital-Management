<?php
    require_once('DBconnect.php');
    session_start();
    $email = $_SESSION['email'];
    if(isset($_POST['row']) && isset($_POST['docId']) && isset($_POST['cabinclass']) && isset($_POST['medId'])){
      $row = $_POST['row'];
      $docId = $_POST['docId'];
      $cabinclass = $_POST['cabinclass'];
      $medId = $_POST['medId'];
      $sql = "DELETE FROM appointment WHERE row = $row";
      mysqli_query($conn, $sql);
      $query=mysqli_query($conn,"select * from appointment");
      $number=1;
      while($row=mysqli_fetch_array($query)){
        $id=$row['row'];//PLEASE CHANGE ACCORDING TO YOUR DATABASE AUTO-INCREAMENT ID
        $sql = "UPDATE appointment SET row=$number WHERE row=$id";
        if($conn->query($sql) == TRUE){
            echo "Record RESET succesfully<br>";
        }
        $number++;
    }
    //Alter the increment to the latest number(bigger number)
     $sql = "ALTER TABLE appointment AUTO_INCREMENT =1"; //CHANGE TABLE NAME
    if($conn->query($sql) == TRUE){
        echo "Record ALTER succesfully";
    }else{
        echo"Error ALTER record: " . $conn->error;
    } 
    }
    $sql_add1 = "UPDATE doctors set available = available + 1 where docId = '$docId'";
          mysqli_query($conn, $sql_add1);
    $sql_add2 = "UPDATE cabin set available = available + 1 where cabinclass = '$cabinclass'";
          mysqli_query($conn, $sql_add2);
    $sql_add3 = "UPDATE medicine set available = available + 1 where medId = '$medId'";
          mysqli_query($conn, $sql_add3);
    header("Location: admin_history.php");
?>