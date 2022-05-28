<?php 

//INFORMAÇÕES DO BANCO
$host = "localhost"; //computador onde o servidor de banco de dados esta instalado
$user = "root"; //seu usuario para acessar o banco
$pass = ""; //senha do usuario para acessar o banco
$db = "soccer_team_app"; //banco que deseja acessar

$connection = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pass);
$connection->exec("set names utf8");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>