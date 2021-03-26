<?php  
$con = mysqli_connect("localhost","root","","brief") or die("Error:can't connect to server ");
$query = "SELECT * from dev";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
    <?php  if($row = mysqli_num_rows($result)>0) : ?>
    <?php while($data = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <th scope="row"><?= $data['id']; ?></th>
      <td><?= $data['lname']; ?></td>
      <td><?= $data['fname']; ?></td>
    </tr>

    <?php endwhile; ?>
    <?php endif;  ?>
    
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
</body>
</html>