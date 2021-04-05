<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <title>Update Dev</title>
</head>
<body>
 
<div class="container">

<form action="" method="POST" class="frm">  
<h2 class="login">Update formulaire</h2><br>

<?php  
$query="SELECT * FROM `developeur` WHERE id_dev=".(int) $_GET['update'];
$result = mysqli_query($conn,$query);
if($result) : ?>
<?php  while($data=mysqli_fetch_assoc($result)) : ?>



<label class="control-label">Nom</label><br>
<input type="text" name="name"  class="colum" value="<?= $data['nom']  ?>"><br>
<label class="control-label">Prénom</label><br>
<input type="text" name="prenom"  class="colum" value="<?= $data['prenom'] ?>"><br>
<input type="hidden" name="dev_id" value="<?=  $data['id_dev']  ?>">
<label class="control-label">Email</label><br>
<input type="email" name="email"  class="colum" value="<?=  $data['email'] ?>"><br>
<input type="submit" name="edit" class="btn" value="save">
<?php  endwhile;   ?>
<?php  endif;  ?>

</form>
</div>

<?php  

if(isset($_POST['edit']))
{
  
   $name = $_POST['name'];
   $prenom = $_POST['prenom'];
   $email = $_POST['email'];

   $id = (int) $_POST['dev_id'];


   $query = "UPDATE `developeur` SET nom = '$name', prenom='$prenom', email='$email' WHERE id_dev='$id'";
   
   $result=mysqli_query($conn,$query);

   if($result)
   {

      
      echo '<script type="text/javascript">';
      
       echo 'window.location.href="http://localhost/C3N1_C5N1_C6N1_C7N1/brief_C3N1_C5N1_C6N1_C7N1/Brief-form/espace_admin/index.php?page=developeur"';
      
      echo '</script>';
   }

   else
   {

     echo "no";
   }

    
}


?>

</body>
</html>