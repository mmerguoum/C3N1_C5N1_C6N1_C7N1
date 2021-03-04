<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

   $month = array ("1" => "janvier", "2" => "février" , "3" => "mars" ,"4" => "avril" ,"5" => "mai" ,"6" => "juin", "7" => "juiller", "8" => "aout", "9" => "septembre", "10" => "octobre", "11" => "novembre", "12" => "décembre");
   echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
?>

</body>
</html>