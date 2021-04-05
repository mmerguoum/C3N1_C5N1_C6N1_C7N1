<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 class="title">COMPETENCES</h1>
<form method="POST">
<label for="site-search" class="cher">Search developer:</label>
<input type="search" id="site-search" name="q">

<input type="submit" value="search" name="search">
</form>

<?php if(isset($_POST['search'])) : ?>

    <?php 
        
        $term = $_REQUEST['q'];
        $query = "SELECT d.nom,d.prenom,t.techno_name,t.niveau from developeur d, dev_techno t  WHERE  d.id_dev = t.id_dev and d.email = '$term' ";
        $result = mysqli_query($conn,$query);
        
        
        ?>
<table class="zebra"> 
<thead> 
<tr> 
    
    <th>Nom</th> 
    <th>Prenom</th> 
    <th>Technologies</th> 
    <th>Niveau</th>
    
</tr> 
</thead> 
<tbody> 

<?php  if($result) : ?>
    <?php   while($row=mysqli_fetch_assoc($result)): ?>
<tr> 
    
    <td><?=  $row["nom"];  ?></td> 
    <td><?= $row["prenom"] ; ?></td>  
    <td><?= $row["techno_name"] ; ?></td>   
    <td><?=  $row['niveau'];  ?></td>

</tr> 
<?php  endwhile; ?>
<?php  endif; ?>

</tbody> 
</table> 

<?php  endif; ?>

    
</body>
</html>