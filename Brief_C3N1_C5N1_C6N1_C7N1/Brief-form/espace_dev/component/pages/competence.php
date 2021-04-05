

<?php

if(isset($_POST["Insert"])){

  
    $technologies = $_POST['technos'];
    $niveau = $_POST['niveau'];

if(!isset($technologies) || empty($technologies) || !isset($niveau) || empty($niveau))

{
   
    $error = "You should fill the options";
     header('location: '.BASE_URI.'espace_dev/index.php?page=competence&&error='.urlencode($error));
    

}
else{

}   
    $id = $_SESSION['user_id'];


     $sql="INSERT INTO `dev_techno` (id_dev,techno_name, niveau)
     
     VALUES ('$id','$technologies','$niveau')";

     if(!$result = mysqli_query($conn,$sql))
     {
        die("ERROR ".mysqli_error($conn));
     }
     else
     { 
        $success = "Row inserted";
        header('location: '.BASE_URI.'espace_dev/index.php?page=competence&&success='.urlencode($success));
     }

}



?>


<!-- <?php  if(isset($_SESSION)) :  ?>
   
     <p style= "color:red" >Bienvenue <?=  $_SESSION['fuser'];  ?></p>

  <?php endif; ?> -->



          <div class="form">
          <h1 class="comp">COMPETENCES</h1><br>
         <form action="" method="POST" >
            <select id="technologies" name="technos" class="select">
          <option value="tech">Technologies...</option>
          <option value="PHP">PHP</option>
          <option value="HTML">HTML</option>
          <option value="JS">JS</option>
          <option value="CGI">CGI</option>
          <option value="AJAX">AJAX</option>
          </select>
          <br>
          <select id="Niveau" name="niveau" class="select">
          <option value="niv">Votre niveau...</option>
          <option value="-1">-1</option>
          <option value="1">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          </select><br>
            <input type="submit" name="Insert" value="Insert" class="btn"/>
            </form>
            </div>
        
           

        