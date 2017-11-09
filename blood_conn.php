<?php
$host="localhost";
$user="root";
$password="";
$db="nakky";
$connect=mysqli_connect($host,$user,$password);
$connection=mysqli_select_db($connect,$db); 
?>