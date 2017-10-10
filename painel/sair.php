<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
    <link rel="icon" href="img/logo.png" />
</head>

<body>
<?php 
session_start();
unset($_SESSION['login']); // Deleta uma variável da sessão
session_destroy(); // Destrói toda sessão
header("Location: login.php");

echo "<script>setTimeout('window.location='login.php'',1);</script>";
?>

</body>
</html>