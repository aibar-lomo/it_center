<?php
$db = new mysqli('localhost','root','','login');

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$db->query("INSERT INTO `signin` (`email`,`password`) 
VALUES ('$email','$password')");


header("location: signin.php");

$db->close();
?>
