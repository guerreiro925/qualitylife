<?php 
include("conexao.php");
$idslide = $_POST['id'];
$nome = $_POST['nome'];

mysql_query("UPDATE funcionario SET nome='$nome' WHERE idFuncionario = '$idslide'");
?>