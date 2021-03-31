<?php
if(isset($_POST["submit"])){

$id = $_POST['id'];  
$date = $_POST['date'];
$technologies = $_POST['technos'];


if(!isset($id) || empty($id) || !isset($date) || empty($date) || !isset($technologies) || empty($technologies))
{

$error = "You should fill the options";
 header('location: '.BASE_URI.'espace_admin/index.php?page=formation&&error='.urlencode($error));


}
else{

}   
$id = $_SESSION['user_id'];


 $sql="INSERT INTO `formation` (dev_id,techno_name, date_formation)
 
 VALUES ('$id','$technologies','$date')";

 if(!$result = mysqli_query($conn,$sql))
 {
    die("ERROR ".mysqli_error($conn));
 }
 else
 { 
    $success = "Row inserted";
    header('location: '.BASE_URI.'espace_admin/index.php?page=formation&&success='.urlencode($success));
 }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation</title>
</head>
<body>
<h1 class="title">FORMATION</h1>
<div class="form">
<form action="" method="POST">
            <label class="lab">id_dev:</label> 
             <br> 
             <input type="text"   name="id" class="inp">
             <br>
             <label class="lab">Date de Formation:</label>
             <br>
             <input id="party" type="datetime-local" name="date" class="inp">
             <br>
             <label class="lab">Technologies:</label>
             <br>
             <select id="technologies" name="technos" class="inp">
             <option value="PHP">PHP</option>
             <option value="HTML">HTML</option>
             <option value="JS">JS</option>
             <option value="CGI">CGI</option>
             <option value="AJAX">AJAX</option>
             </select>
             <br>
             <input type="submit" name="submit" value="submit" class="sub"></input>
</form>
</div>

    
</body>
</html> 
<?php
// include '../core/init.php';
// if(isset($_POST["submit"])){
//     $id = $_SESSION['user_id'];
//     $formation = $_POST["formation"];
//     $date = $_POST["date"];
// echo $id. " " . $formation. " ". $date; 


// $query = "INSERT INTO `formation` (`dev_id`, `techno_name`, `date_formation`) VALUES ('$id', '$formation', '$date')";

// $result = mysqli_query($conn, $query);
// if (!$result) {
//     die("error").mysqli_error($result);
// }
// }
?>
