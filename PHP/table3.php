<?php

//Fonction 
function affichtable($month){
    echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
}

//** */
//Déclaration tableau
$month = array("said" => 13, "badr" => 16, "najat" => 15);
//Afficher Tableau 
affichtable($month);

//Insertion
$month["karim"] =10;
// $month=array_merge($month, ["zrze" => "sdf"]);
//merge associative array with another associative array
array_merge($month,['hamid' => 10]);
affichtable($month);

array_push($month,12);
affichtable($month);

// supression :
// unset($month["badr"]);
// affichtable($month);

// max/min

echo "Déterminer la note maximale et la note minimale du groupe";

echo "la note maximale est : " .max($month);
echo " <br>la note minimale est :" .min($month);

affichtable($month);

echo "Afficher le tableau après l'avoir trier par ordre alphabétique";

ksort($month);
affichtable($month);
//Calcul note maximal t la note minimale

echo "la note maximale est: ".max($month)."la note minimale est:".min($month);
asort($month);
affichtable($month);
echo"la moyenne de la classe:".round(array_sum($month)/count($month),3);
echo array_sum($month);

//var_dump($month);

?>