<h1 class="title">ALL DEVELOPER</h1>
<?php  

$query1 = "SELECT * from developeur WHERE status = 'dev'";
$resultat = mysqli_query($conn,$query1);

?>
<?php
if(isset($_GET['delete'])){
$id= $_GET['delete'];
$query = "DELETE FROM developeur WHERE id_dev = '$id'";
$res= mysqli_query($conn,$query);

if($res === TRUE)
{
    echo "Record deleted";
}
else
{
    echo "record not deleted";
}
}

?>

<table class="zebra"> 
<thead> 
<tr> 
    <th>ID</th>
    <th>Nom</th> 
    <th>Prenom</th> 
    <th>E-mail</th> 
    <th>option</th>
   
</tr> 
</thead> 
<tbody> 

<?php  if($resultat) : ?>
    <?php   while($row=mysqli_fetch_assoc($resultat)): ?>
<tr> 
    <td><?=  $row["id_dev"];  ?></td> 
    <td><?=  $row["nom"];  ?></td> 
    <td><?= $row["prenom"] ; ?></td>  
    <td><?= $row["email"] ; ?></td>   
    <td class="delup">
        <a href="index.php?page=developeur&&update=<?=  $row["id_dev"]; ?>" class = "opt">Update</a>
        <a href="index.php?page=developeur&&delete=<?= $row['id_dev'] ?>" class = "option"> Delete </a>
    </td>
</tr> 
<?php  endwhile; ?>
<?php  endif; ?>

</tbody> 
</table> 