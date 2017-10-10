<?php

$banco = "reeducar";
$servidor = "localhost";
$usuario = "root";
$senha = "";

$conexao = mysql_connect($servidor, $usuario, $senha);
mysql_select_db($banco, $conexao);

$c_duvida = mysql_query("SELECT * FROM duvidas WHERE deletar != 1", $conexao);
$c_noticia = mysql_query("SELECT * FROM noticias WHERE deletar != 1", $conexao);
$c_aluno = mysql_query("SELECT * FROM aluno WHERE deletar != 1", $conexao);

$duvida = mysql_num_rows($c_duvida);
$noticia = mysql_num_rows($c_noticia);
$aluno = mysql_num_rows($c_aluno);

error_reporting(0);
session_start();
$usuario = $_SESSION['usuario'];
if($usuario == NULL){
} else {
$query = mysql_query("SELECT * FROM adm WHERE usuario = '$usuario'");
while($result = mysql_fetch_array($query)){
$nivel = $result['nivel']; // COMUM/ADMIN
}
}
?>