<?php
$user =  'root';
$pass = '';
$db = 'wasorder';

$db = new mysqli('localhost',$user, $pass, $db) or die ("unable to connect");

echo "great work";


?>

