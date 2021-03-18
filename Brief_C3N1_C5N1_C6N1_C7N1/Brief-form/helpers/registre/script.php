<?php

include "config.php";

if(isset($_POST["enter"]) && !empty($_POST['enter'])){
    $firstName = trim(strip_tags($_POST["fname"]));
    $lastName = trim(strip_tags($_POST["lname"]));
    $email = trim(strip_tags($_POST["email"]));
    $pass = ($_POST["password"]);

    if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($pass)){

        $insert = "INSERT INTO dev(fname,lname,email,password) VALUES('$firstName','$lastName','$email', '$pass')";
        $result = mysqli_query($con,$insert);

        // printArray($result);

        if($result){
       $success = "Developer added succesfully";
        header("Location: ../login/login.php");
        exit;
        
      }
    

    else
    {
        echo "not allowed";
    }
}  
}