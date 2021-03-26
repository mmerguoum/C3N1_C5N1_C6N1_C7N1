<h1>page developeur</h1>
<?php  

$query1 = "SELECT * from developeur";
$resultat = mysqli_query($conn,$query1);

?>

<table class="zebra"> 
<thead> 
<tr> 
    <th>Nom</th> 
    <th>Prenom</th> 
   
</tr> 
</thead> 
<tbody> 

<?php  if($resultat) : ?>
    <?php   while($row=mysqli_fetch_object($resultat)): ?>
<tr> 
    <td><?=  $row->nom;  ?></td> 
    <td><?= $row->prenom ; ?></td>    
</tr> 
<?php  endwhile; ?>
<?php  endif; ?>

</tbody> 
</table> 