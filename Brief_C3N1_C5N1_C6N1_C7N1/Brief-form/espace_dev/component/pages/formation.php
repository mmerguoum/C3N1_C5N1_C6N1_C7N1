<?php  

$query1 = "SELECT * from formation";
$resultat = mysqli_query($conn,$query1);

?>


<h1 style="color:black">Vos formation</h1>


<table class="zebra"> 
<thead> 
<tr> 
    <th>Formation</th> 
    <th>Date de la formation</th> 
   
</tr> 
</thead> 
<tbody> 

<?php  if($resultat) : ?>
    <?php   while($row=mysqli_fetch_object($resultat)): ?>
<tr> 
    <td><?=  $row->techno_name;  ?></td> 
    <td><?= $row->date_formation ; ?></td>    
</tr> 
<?php  endwhile; ?>
<?php  endif; ?>

</tbody> 
</table> 