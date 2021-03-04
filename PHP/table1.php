
<?php
$ceu = array ("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Bruxelles", "Denmark" => "Copenhague", "Finland" => "Helsinki "," France "=>" Paris ",
" Slovaquie "=>" Bratislava "," Slovénie "=>" Ljubljana "," Allemagne "=>" Berlin "," Grèce "=>" Athènes "," Irlande " => "Dublin", "Netherlands" => "Amsterdam",

"Portugal" => "Lisbonne", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "Londres "," Chypre "=>" Nicosie "," Lituanie "=>"Vilnius ",
" République tchèque "=>" Prague "," Estonie "=>" Tallin "," Hongrie "=>" Budapest "," Lettonie "=>" Riga "," Malte "=>" La Valette "," Autriche "=>" Vienne "," Pologne "=>" Varsovie "); 
foreach($ceu as $x => $x_value) {
    echo "La capitale des " . $x . " est : " . $x_value;
    echo "<br>";
  }


?>