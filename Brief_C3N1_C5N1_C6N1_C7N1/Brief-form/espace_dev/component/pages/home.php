
<?php  if(isset($_SESSION)) :  ?>
   
   <H1 style="color:black">Bienvenue : Mr/Mme <?=  $_SESSION['fuser'];  ?></H1>

<?php endif; ?>