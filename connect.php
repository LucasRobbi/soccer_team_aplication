<?php 

//INFORMAÇÕES DO BANCO
$host = "localhost"; //computador onde o servidor de banco de dados esta instalado
$user = "root"; //seu usuario para acessar o banco
$pass = ""; //senha do usuario para acessar o banco
$banco = "soccer_team_app"; //banco que deseja acessar

$conexao = new PDO('mysql:host='.$host.';dbname='.$banco.';charset=utf8', $user, $pass);
$conexao->exec("set names utf8");
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$teste = 'teste';
echo $teste;

?>