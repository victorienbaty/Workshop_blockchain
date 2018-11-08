<?php
include ("config.php");

$row="";
$db=connect();
$sql = "SELECT id FROM login WHERE login = 'Vito'";
foreach($db->query($sql) as $row);
{print_r($row);}
var_dump($row);