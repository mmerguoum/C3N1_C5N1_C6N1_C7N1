<?php
// concatenation

$string = "hello";
$string .= " mourad";

echo $string;


// Convertit le premier caractère d’une chaîne en majuscul

$str = ucfirst($string);
echo "<br>";
echo $str;
echo "<br>";
var_dump ($str);
echo "<br>";
print_r ($str);

// Convertit le premier caractère de chaque mot dans une chaîne en majuscul

$str1 = ucwords($string);
echo "<br>";
echo $str1;


// Renvoie la longueur d’une chaîne

$str2 = strlen($string);
echo "<br>";
echo $str2;


// Compare deux cordes (avec une condition)

echo "<br>";
echo "<br>";
$phrase1 = 123;
$phrase2 = "123";
var_dump($phrase1);

if(strcmp($phrase1,$phrase2))
{
echo "not equal";
}
else{
echo "equal";
}

// Inverse une chaîne

echo "<br>";
echo "<br>";
$str4 = strrev($string);
echo "<br>";
echo $str4;

echo "<br>";
$text = "HI HOW ARE YOU ?";
// $test = strtolower($text);
echo ucwords(strtolower($text));

// strtoupper
// strtolower
// ucwords

?>