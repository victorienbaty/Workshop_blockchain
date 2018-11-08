<?php
function connect()
{
$user="root";
$pass="";
$dbh = new PDO('mysql:host=localhost;dbname=workshop_blockchain', $user, $pass);
return $dbh;
}
?>
