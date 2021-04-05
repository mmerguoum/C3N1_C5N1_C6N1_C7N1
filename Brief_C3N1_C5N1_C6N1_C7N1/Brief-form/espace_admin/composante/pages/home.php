<?php  if(isset($_SESSION['admin']) && isset($_SESSION['prenom'])) : ?>

<h1 style="color:black" class="infos">Bienvenue : Mr/Mme <?= $_SESSION['admin'].' '.  $_SESSION['prenom'];?> </h1><br>

 <?php  endif; ?>

<?php



$query_expert = "SELECT dev_techno.techno_name, dev_techno.niveau, developeur.nom,developeur.prenom 

from dev_techno, developeur 
WHERE dev_techno.id_dev=developeur.id_dev
AND dev_techno.techno_name='HTML'
 AND niveau = 5";

$data_expert = mysqli_query($conn,$query_expert);


$query_inconnu = "SELECT dev_techno.techno_name, dev_techno.niveau, developeur.nom,developeur.prenom 

from dev_techno, developeur 
WHERE dev_techno.id_dev=developeur.id_dev
 AND niveau = -1";
$data = mysqli_query($conn,$query_inconnu);


$query_insifusant = "SELECT dev_techno.techno_name, dev_techno.niveau, developeur.nom,developeur.prenom 

from dev_techno, developeur 
WHERE dev_techno.id_dev=developeur.id_dev
 AND niveau <= 3 ";

$data_inf=mysqli_query($conn,$query_insifusant);



?>
<table class="zebra"> 
<thead> 
    <H2>Les listes des experts en HTML :</H2>
<tr> 
    
    <th>Nom</th> 
    <th>Prenom</th> 
    <th>Techniologies</th> 
    <th>Niveau</th>
   
</tr> 
</thead> 
<tbody> 

    <?php   if($data_expert) : ?>
        <?php   while($row=mysqli_fetch_assoc($data_expert)): ?>

<tr> 
    <td><?=  $row["nom"];  ?></td> 
    <td><?=  $row["prenom"];  ?></td> 
    <td><?=  $row["techno_name"] ; ?></td> 
    <td><?=  $row["niveau"] ; ?></td>  
      
</tr> 
<?php endwhile; ?>
<?php endif; ?>



</tbody> 
</table> 
<table class="zebra"> 
<thead> 
    <H2>Les liste des développeurs ayant un niveau inconnu  :</H2>
<tr> 
    
    <th>Nom</th> 
    <th>Prenom</th> 
    <th>Techniologies</th> 
    <th>Niveau</th>
   
</tr> 
</thead> 
<tbody> 

<?php   if($data) : ?>
        <?php   while($row=mysqli_fetch_assoc($data)): ?>
     
    
     <tr> 
         <td><?=  $row["nom"];  ?></td> 
         <td><?=  $row["prenom"];  ?></td> 
         <td><?=  $row["techno_name"] ; ?></td> 
         <td><?=  $row["niveau"] ; ?></td>  
           
         
     </tr> 
     <?php endwhile; ?>
     <?php endif;  ?>



</tbody> 
</table> 
</table> 
<table class="zebra"> 
<thead> 
    <H2>Les liste des développeurs dont un niveau est insuffisant :</H2>
<tr> 
    
    <th>Nom</th> 
    <th>Prenom</th> 
    <th>Techniologies</th> 
    <th>Niveau</th>
   
</tr> 
</thead> 
<tbody> 

<?php   if($data_inf) : ?>
        <?php   while($row=mysqli_fetch_assoc($data_inf)): ?>
     
    
     <tr> 
         
         <td><?=  $row["nom"];  ?></td> 
         <td><?=  $row["prenom"];  ?></td> 
         <td><?=  $row["techno_name"] ; ?></td> 
         <td><?=  $row["niveau"] ; ?></td>  
            
         
         
     </tr> 
     <?php endwhile; ?>
     <?php endif;  ?>



</tbody> 
</table> 

