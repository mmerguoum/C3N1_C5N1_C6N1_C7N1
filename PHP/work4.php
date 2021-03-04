<?php
// afficher les nombre premier
function nombrepremier( $nombre ){


    for ($i = 2; $i < $nombre; $i++){
        if ($nombre % $i == 0){
            $fois = 1;
        }
    }

    if (isset($fois)) {
        echo "$nombre n'est pas un nombre premier";
    }
    else{
        echo "$nombre est un nombre premier";
    }

}

nombrepremier(7901);
echo "<br/>";
nombrepremier(10);
?>