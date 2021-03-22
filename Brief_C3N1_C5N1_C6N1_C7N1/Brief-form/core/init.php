<?php

session_start();
include '../config/config.php';
include '../helpers/functions.php';

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("Error:can't connect to server ");


?>