<?php
 $email = trim(strip_tags($_POST["email"]));
 $pass = trim(strip_tags($_POST["password"]));
 $error = "";
 
if (isset($email,$pass)) {
 $conn = new mysqli("localhost", "root","","brief");
 // Check connection
 if (!$conn) {
 die("Connection failed: " . connect_error($conn));
 }
//  else{
//      echo "Connected successfully";
//  }
 $query = "SELECT * FROM dev WHERE email = '$email' && password = '$pass'";
  $result= mysqli_query($conn,$query);
  if (!$result) {
    die("Connection failed: " . connect_error($result));
    }
    else{
        echo "Connected successfully";
    }
    while( $row = mysqli_fetch_assoc($result) ){
      $db_name=  $row['email'];
      $db_pass =  $row['password'];
    }
    if ($db_name == $email &&  $db_pass ==$pass) {
       header("location: home.php");
    }
    else if ($db_name !== $email &&  $db_pass !==$pass) {
      
        header("location: login.php");
     }

}