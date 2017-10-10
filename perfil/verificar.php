<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("conexao.php");
$acao = $_GET['acao'];



if($acao == 'verificar'){


$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);
$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);
$senha = explode('.', $senha);
$senha = $senha[0];



$query = mysql_query("SELECT * FROM usuario WHERE usuario = '$usuario' AND deletar != 1");
while($rs = mysql_fetch_array($query)){

$senha_banco = $rs['senha'];
$senha_banco_hs = $rs['senha'];
$senha_banco = explode('.', $senha_banco);
$senha_banco = $senha_banco[0];
}




if($senha != $senha_banco ){
echo "
<script>

	alert('Login ou senha estão incorretos, caso queira redefinir sua senha converse com seu educador!');
	window.location = '../index.php';

</script>";
session_destroy();

} else {



$query = mysql_query("SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha_banco_hs' AND deletar != 1");
while($result = mysql_fetch_array($query)){
session_start();
$_SESSION['usuario'] = $result['usuario'];
echo "<script>window.location.href='index.php';</script>";

}
}
}
 
else if($acao == 'alterar_senha'){

$idusuario = $_POST['id'];
$senha = addslashes( $_POST['senha_confirmacao']);
$senha_nova = addslashes( $_POST['senha_nova']);
if($senha == $senha_nova){

$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);	

	mysql_query("UPDATE usuario SET senha='$senha' WHERE idUsuario = '$idusuario' ");
	echo "<script>

	alert('Alterado com sucesso a sua senha, entre agora com essa senha nova!');
	window.location = '../index.php';
	session_destroy();

</script>";

}
else{

	echo "<script>

	alert('Preencha os dois campos idênticos, para alterar a senha com sucesso!');
	window.location = 'index.php';


</script>";
	
}
}
?>