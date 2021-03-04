<?php 
$date = strtotime($_POST["date"]); 
echo date('d/M/Y h:i:s', $date);
?>