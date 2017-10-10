<?php 

$banco="reeducar";
$servidor="localhost";
$usuario="root";
$password=""; 

$conexao = mysql_connect($servidor,$usuario,$password);
mysql_select_db ($banco,$conexao);
 
?>