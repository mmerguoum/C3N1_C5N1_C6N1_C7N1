<?php

include '../core/init.php';
// printArray($_SESSION);
 
if (isset($_POST['enter'])) {
    


 $email = trim(strip_tags($_POST["email"]));
 $pass = trim(strip_tags($_POST["password"]));

 
 $query = "SELECT * FROM dev WHERE email = '$email' && password = '$pass'";
 $result=mysqli_query($conn,$query);


 if($result)
 {
    while($row=mysqli_fetch_assoc($result)){
        
    
        if($email === $row['email'] && $pass===$row['password'])
        {  
            if($row['status']==='admin')

            {      
            
                   createSession("admin",$row['fname']);
                   createSession("admin_id",$row['id_dev']);
                   header('location: '.BASE_URI.'espace_admin/admin.php');
            }

            else{
                 
                createSession("user",$row['fname']);
                createSession('user_id',$row['id_dev']);
                header('location: '.BASE_URI.'espace_dev/utilisateur.php');
            }  


        }

        else
        {

            header('location: '.BASE_URI.'login/login.php');
        }


    }




 }

   

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
       function prevent()
       {
           window.history.forward();
       }

      setTimeout("prevent()",0);

       window.onload=function(){null};

    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="maincop.css">
    <title>Login in</title>
</head>
<body>
<form action="" method="POST">  
 
 <div class="container">
     
 <h2 class="login">Login</h2><br>
 <input type="email" name="email" placeholder="E-mail" class="bord" ><br>
 <input type="password" name="password" placeholder="Password" class="bord"><br>
 <input type="submit" name="enter" class="btn" value="Envoyer"><br>
 <a href= "../registre/registre.php" class = "save">inscrivez-vous</a>
</body>
</html>