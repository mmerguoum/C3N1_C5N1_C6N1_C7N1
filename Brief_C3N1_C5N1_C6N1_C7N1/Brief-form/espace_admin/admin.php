<?php   
include '../core/init.php';
if(isset($_POST['LOGOUT'])){

    if(isset($_SESSION)){
        session_unset();
        session_destroy();
        header('location: '.BASE_URI.'login/login.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <title>Admin</title>
</head>
<body>
    
    <header>
    <nav>
        <ul>
            <li><a class= "active" href="utilisateur.php"> HOME </a></li>
            <li><a href="#"> developpeur </a></li>
            <li><a href="#"> COMPETENCE </a></li>
            <li><a href="#"> FORMATION </a></li>
            <li><a href="#"> CONTACT </a></li>
            <li>
             <form action="" method="POST">
            <input type="submit" name="LOGOUT" value="LOGOUT" class="button"/>
        </form>  
     </li>
           
        </ul>
          
    </nav>
    </header>

    <?php  if(isset($_SESSION['admin'])) : ?>

   <h1 style="color:white">Bienvenue : Mr/Mme <?= $_SESSION['admin']  ?> </h1>
 
    <?php  endif; ?>
    
</body>
</html>