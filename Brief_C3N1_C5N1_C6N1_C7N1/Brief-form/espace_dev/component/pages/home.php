
<?php  if(isset($_SESSION)) :  ?>
   
   <div class="infos"><H1 >Bienvenue : Mr/Mme <?=  $_SESSION['fuser'].' '.  $_SESSION['luser'];  ?></H1>
   <H1 >Votre id  :  <?=  $_SESSION['user_id'];  ?></H1></div>

<?php endif; ?>