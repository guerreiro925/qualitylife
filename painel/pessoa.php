<!doctype html>
<?php
 
mysql_connect("localhost", "root", "");
mysql_select_db("reeducar");

$tipo = $_POST['tipo']; 
$funcao = $_POST['funcao'];
 
 if ($tipo == 1)
 {
	$sql = "SELECT * FROM aluno where turma='$funcao'"; 
    $qr = mysql_query($sql) or die(mysql_error());
	
	
	if(mysql_num_rows($qr) <= 0)
	{
   		 echo  '<option value="0">'.htmlentities('Não existe turma').'</option>';
    }
	else
	{
   		while($ln = mysql_fetch_assoc($qr))
		{
      	echo '<option value="'.$ln['nome'].'">'.$ln['nome'].'</option>';
		}
	}
 }
 
 else
 {
	$sql = "SELECT * FROM funcionario where cargo='$funcao'"; 
    $qr = mysql_query($sql) or die(mysql_error());
	
	
	if(mysql_num_rows($qr) <= 0)
	{
   		 echo  '<option value="0">'.htmlentities('Não existe funcionario para essa turma').'</option>';
    }
	else
	{
   		while($ln = mysql_fetch_assoc($qr))
		{
      	echo '<option value="'.$ln['nome'].'">'.$ln['nome'].'</option>';
		}
	} 
	 
 }


?>