<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="for.age.php" method="post" style="margin-left:500px;"><br>
<input type="text" name="name" placeholder="nom"><br><br>
<input type="text" name="age" placeholder="age"><br><br>
<input type="text" name="sexe" placeholder="sexe"><br><br>
<input type="submit">
</form>


<?php 
 if(!empty($_POST)){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $sexe = $_POST["sexe"];

 echo "<br>";

    echo " « Bienvenu $sexe $name, vous avez $age ans. »";
 } 



?>
</body>
</html>