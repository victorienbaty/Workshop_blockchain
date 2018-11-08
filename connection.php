<?php
$dsn = 'mysql:host=51.158.68.31;dbname=workshop_blockchain'; 
$username = 'root';
$password = 'Epsi2017!';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

$conn = new PDO($dsn, $username, $password,$options);
 ?>
