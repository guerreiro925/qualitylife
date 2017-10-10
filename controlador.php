<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("conexao.php");

	$nome = addslashes( $_POST['nome']);
	$email = addslashes( $_POST['email']);
	$duvida = addslashes( $_POST['duvida']);
	
mysql_query("INSERT INTO duvidas ( pergunta, nome, email ) VALUES ('$duvida', '$nome', '$email') ");	

echo "<script>window.location.href='contato.php?msg=ok';</script>";
	

?>