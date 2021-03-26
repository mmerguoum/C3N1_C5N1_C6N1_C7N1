<?php  if(isset($_SESSION['admin'])) : ?>

<h1 style="color:black">Bienvenue : Mr/Mme <?= $_SESSION['admin']  ?> </h1>

 <?php  endif; ?>