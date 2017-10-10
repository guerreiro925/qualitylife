<?php
/* CONTROLADOR PHP */
include('conexao.php');
$acao = $_GET['acao'];

if($acao == 'editar_noticia'){
$idnoticia = $_POST['id'];
echo $idnoticia;
}

?>