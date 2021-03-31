<?php

include "../core/init.php";



if(isset($_POST["enter"]) && !empty($_POST['enter'])){
    $firstName = trim(strip_tags($_POST["first"]));
    $lastName = trim(strip_tags($_POST["last"]));
    $email = trim(strip_tags($_POST["email"]));
    $pass = ($_POST["password"]);


    if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($pass)){


        $select = "SELECT email from developeur WHERE email = '$email'";
        $res = mysqli_query($conn,$select);
        $data = mysqli_fetch_row($res);
      
         if(!$data)
         {
             
        $insert = "INSERT INTO developeur(nom,prenom,email,status,password) VALUES('$firstName','$lastName','$email', 'dev' , '$pass')";
        $result = mysqli_query($conn,$insert);

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

         else
         {
             $error = "Email exist try another one";
              
              echo "<div style='color:red'>";
                
               echo  "<pre>". $error."</pre>" ;
              echo "</div>";
         }

        

        // printArray($result);

      
}  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>registre</title>
</head>
<body>

 <form action="" method="POST">  
 
<div class="container">
    
<h2 class="login">Registre</h2><br>
<input type="text" name="first" placeholder="Nom" class="lname" ><br>
<input type="text" name="last" placeholder="Prénom" class="fname"><br>
<input type="email" name="email" placeholder="E-mail" class="email"><br>
<input type="password" name="password" placeholder="Password" class="password"><br>
<input type="submit" name="enter" class="btn" value="Envoyer">

</div>
</form> 
</body>
</html>