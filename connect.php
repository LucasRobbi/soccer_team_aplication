<?php 

//CONNECTION WITH DATAABSE
$host = "localhost";
$user = "root";
$pass = "";
$db = "soccer_team_app";

$connection = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pass);
$connection->exec("set names utf8");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>