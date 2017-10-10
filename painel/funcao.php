<!doctype html>
<?php
 
mysql_connect("localhost", "root", "");
mysql_select_db("reeducar");
 
$tipo = $_POST['tipo'];
 
 
if ($tipo == 1)
{
	$sql = "SELECT * FROM turma ORDER BY nome ASC"; 
    $qr = mysql_query($sql) or die(mysql_error());
	
	if(mysql_num_rows($qr) <= 0)
	{
   		 echo  '<option value="0">'.htmlentities('Não existe turma').'</option>';
    }
	else
	{
		echo  '<option value="0">'.htmlentities('Selecione a turma').'</option>';
   		while($ln = mysql_fetch_assoc($qr))
		{
      	echo '<option value="'.$ln['nome'].'">'.$ln['nome'].'</option>';
		}
   	}
}

else
{
	$sql = "SELECT * FROM cargo ORDER BY descricao ASC"; 
    $qr = mysql_query($sql) or die(mysql_error());
	
	if(mysql_num_rows($qr) <= 0)
	{
   		 echo  '<option value="0">'.htmlentities('Não existe cargo').'</option>';
    }
	else
	{
		echo  '<option value="0">'.htmlentities('Selecione o Cargo').'</option>';
   		while($ln = mysql_fetch_assoc($qr))
		{
      	echo '<option value="'.$ln['descricao'].'">'.$ln['descricao'].'</option>';
		}
   	}
}
	





?>