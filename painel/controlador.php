<?php
/* CONTROLADOR PHP */
include('conexao.php');
$acao = $_GET['acao'];
error_reporting(0);
//acessar_usuario//
if($acao == 'acessar'){

$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);
$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);
$senha = explode('.', $senha);
$senha = $senha[0];



$query = mysql_query("SELECT * FROM adm WHERE usuario = '$usuario' AND deletar != 1");
while($rs = mysql_fetch_array($query)){

$senha_banco = $rs['senha'];
$senha_banco_hs = $rs['senha'];
$senha_banco = explode('.', $senha_banco);
$senha_banco = $senha_banco[0];
}




if($senha != $senha_banco OR $senha_banco == NULL){
echo "<script>window.location.href='login.php?msg=error';</script>";
session_destroy();
} else {



$query = mysql_query("SELECT * FROM adm WHERE usuario = '$usuario' AND senha = '$senha_banco_hs' AND deletar != 1");
while($result = mysql_fetch_array($query)){
session_start();
$_SESSION['usuario'] = $result['usuario'];
echo "<script>window.location.href='index.php';</script>";

}

}
//sair//
} else if($acao == 'sair'){

session_start();
session_destroy();	
echo "<script>window.location.href='index.php';</script>";
	
} 




// --------------------------------------------------------------- ADMINISTRADOR ---------------------------------------------------------------//

 else if($acao == 'add_administrador'){
	
	$usuario = addslashes($_POST['usuario']);
	$senha = addslashes($_POST['senha']);
	$nivel = addslashes($_POST['nivel']);


	$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);




$seleciona = mysql_query("SELECT * FROM adm WHERE usuario = '$usuario'");

if(mysql_num_rows($seleciona) == 0){

mysql_query("INSERT INTO adm ( usuario, senha, nivel ) VALUES ('$usuario', '$senha', '$nivel') ");	

}

echo "<script>window.location.href='administradores_incluir.php?msg=ok';</script>";


} else if($acao == 'editar_administrador'){
	
	$idadministrador = $_POST['id'];
	$usuario = addslashes($_POST['usuario']);
	$senha = addslashes($_POST['senha']);
	$nivel = addslashes($_POST['nivel']);

$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);


	
mysql_query("UPDATE adm SET usuario='$usuario', senha='$senha', nivel='$nivel' WHERE idAdministrador = '$idadministrador'");

echo "<script>window.location.href='administradores_editar.php?id=$idadministrador&msg=ok';</script>";




} else if ($acao == 'excluir_administrador'){
	
	$idadministrador = $_GET['id'];
mysql_query("UPDATE adm SET deletar = '1' WHERE idAdministrador = '$idadministrador'");	

echo "<script>window.location.href='administradores.php';</script>";


// --------------------------------------------------------------- USUÁRIO ---------------------------------------------------------------//
} else if ($acao == 'add_usuario'){
	
	$usuario = addslashes( $_POST['usuario']);
	$senha = addslashes( $_POST['senha']);
	
	$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);

$seleciona = mysql_query("SELECT * FROM usuario WHERE usuario = '$usuario'");

if(mysql_num_rows($seleciona) == 0){

mysql_query("INSERT INTO usuario ( usuario, senha ) VALUES ('$usuario', '$senha') ");

echo "<script>window.location.href='usuarios_incluir.php?msg=ok';</script>";


}
else{
echo "<script>window.location.href='usuarios_incluir.php?msg=error';</script>";
	
}
} else if ($acao == 'editar_usuario'){
	
	$idusuario = $_POST['id'];
	$usuario = addslashes( $_POST['usuario']);
	$senha = addslashes( $_POST['senha']);
	
$senha = md5($senha);
$senha = sha1($senha);
$senha = sha1($senha);
$senha = md5($senha);
$senha = '$P$B/A'.$senha.'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9).'.'.rand(1, 9).rand(1, 9).rand(1, 9);	
	mysql_query("UPDATE usuario SET usuario='$usuario', senha='$senha' WHERE idUsuario = '$idusuario' ");
	
echo "<script>window.location.href='usuarios_editar.php?id=$idusuario&msg=ok';</script>";
	
	
} else if ($acao == 'excluir_usuario'){
	
	$idusuario = $_GET['id'];
	
	mysql_query("UPDATE usuario SET deletar = '1' WHERE idUsuario = '$idusuario'");
	
echo "<script>window.location.href='usuarios.php';</script>";


// --------------------------------------------------------------- TURMA ---------------------------------------------------------------//
} else if ($acao == 'add_turma'){
	
	$turma = addslashes( $_POST['turma']);
	
	mysql_query("INSERT INTO turma ( nome ) VALUES ('$turma') ");	

echo "<script>window.location.href='turmas_incluir.php?msg=ok';</script>";


}else if ($acao == 'editar_turma'){
	
	$idturma = $_POST['id'];
	$turma = addslashes( $_POST['turma']);
	
	mysql_query("UPDATE turma SET nome='$turma' WHERE idTurma = '$idturma' ");
	
echo "<script>window.location.href='turmas_editar.php?id=$idturma&msg=ok';</script>";
	
	
}else if ($acao == 'excluir_turma'){
	
	$idturma = $_GET['id'];
	
	mysql_query("UPDATE turma SET deletar = '1' WHERE idTurma = '$idturma'");
	
echo "<script>window.location.href='turmas.php';</script>";

} else if ($acao == 'add_turma'){
	
	$turma = addslashes( $_POST['turma']);
	
	mysql_query("INSERT INTO turma ( nome ) VALUES ('$turma') ");	

echo "<script>window.location.href='turmas_incluir.php?msg=ok';</script>";



// --------------------------------------------------------------- ALUNO ---------------------------------------------------------------//

} else if ($acao == 'add_aluno'){
	
	$nome = addslashes( $_POST['nome']);
	$idUsuario = addslashes( $_POST['usuario']);
	$data = addslashes( $_POST['data']);
	$sexo = addslashes( $_POST['sexo']);
	$telefone = addslashes( $_POST['telefone']);
	$idTurma = addslashes($_POST['turma']);
	
	$imagem = $_FILES['imagem'];
	
	
if (isset($_FILES['imagem']))
	{
		$pasta_diretorio="img/";

if (!file_exists ($pasta_diretorio))
	{
		mkdir($pasta_diretorio);
	}
$arquivo = $pasta_diretorio.$imagem["name"];
move_uploaded_file($imagem['tmp_name'],$arquivo);
	
mysql_query("INSERT INTO aluno(nome, idUsuario,  data, sexo, telefone, turma, imagem) SELECT '$nome', '$idUsuario', '$data' , '$sexo',  '$telefone', '$idTurma', '$arquivo' FROM DUAL WHERE NOT EXISTS(SELECT nome FROM aluno WHERE nome = '$nome')");	



} else{
	
	mysql_query("INSERT INTO aluno(nome, idUsuario,  data, sexo, telefone, turma, imagem) SELECT '$nome', '$idUsuario', '$data' , '$sexo',  '$telefone', '$idTurma', '$imagem' FROM DUAL WHERE NOT EXISTS(SELECT nome FROM aluno WHERE nome = '$nome')");
	
}

echo "<script>window.location.href='alunos_incluir.php?msg=ok';</script>";
}else if ($acao == 'editar_aluno'){
	
	
	$idaluno = $_POST['id'];
	$nome = addslashes( $_POST['nome']);
	$idUsuario = addslashes( $_POST['usuario']);
	$data = addslashes( $_POST['data']);
	$sexo = addslashes( $_POST['sexo']);
	$telefone = addslashes( $_POST['telefone']);
	$idTurma = addslashes($_POST['turma']);
	
	$imagem = $_FILES['imagem'];
	
	
if (file_exists($_FILES['imagem']['tmp_name']))
	{
				if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $imagem["type"])) 
		{ $msg = "Arquivo em formato inválido! A imagem deve ser jpg, jpeg, bmp, gif ou png. Envie outro arquivo"; 
		   echo "<script>location.href='alunos_editar.php?id=$idAluno'; alert('$msg');</script>";
		}
	else{
	$imagem = $_FILES['imagem'];
		$pasta_dir= "img/"; 
		if (!file_exists($pasta_dir))
		{
			mkdir($pasta_dir);
		}
		$arquivo_imagem = $pasta_dir.$imagem["name"];
		move_uploaded_file($imagem["tmp_name"],$arquivo_imagem);
		
mysql_query("UPDATE aluno SET nome='$nome', idUsuario='$idUsuario', data='$data', sexo='$sexo', telefone='$telefone', turma='$idTurma', imagem='$arquivo_imagem' WHERE idAluno = '$idaluno' ");
	}}
	
	// se não selecionar a imagem atualiza os demais dados.
	else {

mysql_query("UPDATE aluno SET nome='$nome', idUsuario='$idUsuario', data='$data', sexo='$sexo', telefone='$telefone', turma='$idTurma' WHERE idAluno = '$idaluno' ");
	}
	echo "<script>window.location.href='alunos_editar.php?id=$idaluno&msg=ok';</script>";

	
}else if ($acao == 'excluir_aluno'){
	
	$idaluno = $_GET['id'];
	
	mysql_query("UPDATE aluno SET deletar = '1' WHERE idAluno = '$idaluno'");
	
echo "<script>window.location.href='alunos.php';</script>";



// --------------------------------------------------------------- ALUNO/ANAMNESE ---------------------------------------------------------------//

} else if ($acao == 'add_anamnese'){
	
	$tipo = addslashes( $_POST['tipo']);
	$funcao = addslashes( $_POST['funcao']);
	$pessoa = addslashes( $_POST['pessoa']);
	$esforco = addslashes( $_POST['esforco']);
	$atividade = addslashes( $_POST['atividade']); 
	$intensidade = addslashes( $_POST['intensidade']);
	$numero_atividade = addslashes( $_POST['numero_atividade']);
	$duracao_atividade = addslashes( $_POST['duracao_atividade']);
	$refeicoes = addslashes( $_POST['refeicoes']);
	$doenca_familiar = addslashes( $_POST['doenca_familiar']);
	$doenca_anterior = addslashes( $_POST['doenca_anterior']);
	$cirurgia_internacao = addslashes( $_POST['cirurgia_internacao']); 
	$medicacao = addslashes( $_POST['medicacao']);
	$alergia = addslashes( $_POST['alergia']);
	
	
	mysql_query("INSERT INTO anamnese (tipo, funcao, pessoa, esforco, doenca_anterior, doenca_familiar, cirurgia_internacao, medicacao, alergia, numero_refeicoes, atividade_fisica, vezes_semana, duracao, intensidade) VALUES('$pessoa','$funcao','$tipo','$esforco','$doenca_anterior','$doenca_familiar','$cirurgia_internacao','$medicacao','$alergia','$refeicoes','$atividade','$numero_atividade','$duracao_atividade','$intensidade') ");	

echo "<script>window.location.href='anamnese_incluir.php?msg=ok';</script>";


}else if ($acao == 'editar_anamnese'){
	
	$idanamnese = $_POST['id'];
	$tipo = addslashes( $_POST['tipo']);
	$funcao = addslashes( $_POST['funcao']);
	$pessoa = addslashes( $_POST['pessoa']);
	$esforco = addslashes( $_POST['esforco']);
	$atividade = addslashes( $_POST['atividade']); 
	$intensidade = addslashes( $_POST['intensidade']);
	$numero_atividade = addslashes( $_POST['numero_atividade']);
	$duracao_atividade = addslashes( $_POST['duracao_atividade']);
	$refeicoes = addslashes( $_POST['refeicoes']);
	$doenca_familiar = addslashes( $_POST['doenca_familiar']);
	$doenca_anterior = addslashes( $_POST['doenca_anterior']);
	$cirurgia_internacao = addslashes( $_POST['cirurgia_internacao']); 
	$medicacao = addslashes( $_POST['medicacao']);
	$alergia = addslashes( $_POST['alergia']);
	
	mysql_query("UPDATE anamnese SET tipo='$tipo', funcao='$funcao', pessoa='$pessoa', esforco='$esforco', funcao='$funcao', doenca_anterior='$doenca_anterior', doenca_anterior='$doenca_anterior', doenca_familiar='$doenca_familiar', cirurgia_internacao='$cirurgia_internacao', medicacao='$medicacao', alergia='$alergia', numero_refeicoes='$numero_refeicoes', atividade_fisica='$atividade_fisica', vezes_semana='$numero_atividade', duracao='$duracao_atividade', intensidade='$intensidade' WHERE idAnamnese = '$idanamnese' ");
	
echo "<script>window.location.href='anamnese_editar.php?id=$idanamnese&msg=ok';</script>";
	
	
}else if ($acao == 'excluir_anamnese'){
	
	$idanamnese = $_GET['id'];
	
	mysql_query("UPDATE anamnese SET deletar = '1' WHERE idAnamnese = '$idanamnese'");
	
echo "<script>window.location.href='anamnese.php';</script>";


// --------------------------------------------------------------- ALUNO/IMC ---------------------------------------------------------------//


} else if ($acao == 'add_imc'){
	
	$pessoa = addslashes( $_POST['tipo']);
	$cargo = addslashes( $_POST['funcao']);
	$nome = addslashes( $_POST['pessoa']);
	$peso = addslashes( $_POST['peso']);
	$altura = addslashes( $_POST['altura']);
	$idade = addslashes( $_POST['idade']);
	$sexo = addslashes( $_POST['sexo']);
	$resultado = addslashes( $_POST['resultado']);
	$estado = addslashes( $_POST['estado']);
	
	mysql_query("INSERT INTO imc (pessoa, turma_cargo, nome, idade, peso, altura, sexo, resultado, estado) VALUES ('$pessoa','$cargo','$nome','$idade','$peso','$altura','$sexo','$resultado','$estado') ");	

echo "<script>window.location.href='imc_incluir.php?msg=ok';</script>";


}else if ($acao == 'editar_imc'){
	
	$idimc = $_POST['id'];
	$pessoa = addslashes( $_POST['tipo']);
	$cargo = addslashes( $_POST['funcao']);
	$nome = addslashes( $_POST['pessoa']);
	$peso = addslashes( $_POST['peso']);
	$altura = addslashes( $_POST['altura']);
	$idade = addslashes( $_POST['idade']);
	$sexo = addslashes( $_POST['sexo']);
	$resultado = addslashes( $_POST['resultado']);
	$estado = addslashes( $_POST['estado']);
	
	mysql_query("UPDATE imc SET pessoa='$pessoa', turma_cargo='$cargo', nome='$nome', idade='$idade', peso='$peso', altura='$altura', sexo='$sexo', resultado='$resultado', estado='$estado' WHERE idImc = '$idimc' ");
	
echo "<script>window.location.href='imc_editar.php?id=$idimc&msg=ok';</script>";
	
	
}else if ($acao == 'excluir_turma'){
	
	$idimc = $_GET['id'];
	
	mysql_query("UPDATE turma SET deletar = '1' WHERE idTurma = '$idimc'");
	
echo "<script>window.location.href='turmas.php';</script>";





// --------------------------------------------------------------- CARGO ---------------------------------------------------------------//


 }else if ($acao == 'add_cargo'){
	
	$cargo = addslashes( $_POST['cargo']);
	
	mysql_query("INSERT INTO cargo ( descricao ) VALUES ('$cargo') ");	

echo "<script>window.location.href='cargos_incluir.php?msg=ok';</script>";


}else if ($acao == 'editar_cargo'){
	
	$idcargo = $_POST['id'];
	$cargo = addslashes( $_POST['cargo']);
	
	mysql_query("UPDATE cargo SET descricao='$cargo' WHERE idCargo = '$idcargo' ");
	
echo "<script>window.location.href='cargos_editar.php?id=$idcargo&msg=ok';</script>";
	
	
}else if ($acao == 'excluir_cargo'){
	
	$idcargo = $_GET['id'];
	
	mysql_query("UPDATE cargo SET deletar = '1' WHERE idCargo = '$idcargo'");
	
echo "<script>window.location.href='cargos.php';</script>";

// --------------------------------------------------------------- FUNCIONÁRIO --------------------------------------------------------------//


} else if ($acao == 'add_funcionario'){
	
	$nome = addslashes( $_POST['nome']);
	$data = addslashes( $_POST['data']);
	$sexo = addslashes( $_POST['sexo']);
	$telefone = addslashes( $_POST['telefone']);
	$idCargo = addslashes( $_POST['cargo']);
	$imagem = $_FILES['imagem'];
	
	
if (isset($_FILES['imagem']))
	{
		$pasta_diretorio="img/";

if (!file_exists ($pasta_diretorio))
	{
		mkdir($pasta_diretorio);
	}
$arquivo = $pasta_diretorio.$imagem["name"];
move_uploaded_file($imagem['tmp_name'],$arquivo);
	
mysql_query("INSERT INTO funcionario(nome,  data, sexo, telefone, cargo, imagem) SELECT '$nome', '$data', '$sexo','$telefone','$idCargo' ,'$arquivo' FROM DUAL WHERE NOT EXISTS(SELECT nome FROM funcionario WHERE nome = '$nome')");	

echo "<script>window.location.href='funcionarios_incluir.php?msg=ok';</script>";
}


}else if ($acao == 'editar_funcionario'){
	
	$idfuncionario = $_POST['id'];
	$nome = addslashes( $_POST['nome']);
	$data = addslashes( $_POST['data']);
	$sexo = addslashes( $_POST['sexo']);
	$telefone = addslashes( $_POST['telefone']);
	$idCargo = addslashes( $_POST['cargo']);
	$imagem = $_FILES['imagem'];
	
	
if (file_exists($_FILES['imagem']['tmp_name']))
	{
				if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $imagem["type"])) 
		{ $msg = "Arquivo em formato inválido! A imagem deve ser jpg, jpeg, bmp, gif ou png. Envie outro arquivo"; 
		   echo "<script>location.href='funcionarios_editar.php?id=$idfuncionario'; alert('$msg');</script>";
		}
	else{
	$imagem = $_FILES['imagem'];
		$pasta_dir= "img/"; 
		if (!file_exists($pasta_dir))
		{
			mkdir($pasta_dir);
		}
		$arquivo_imagem = $pasta_dir.$imagem["name"];
		move_uploaded_file($imagem["tmp_name"],$arquivo_imagem);
		
mysql_query("UPDATE funcionario SET nome='$nome', data='$data', sexo='$sexo', telefone='$telefone', cargo='$idCargo', imagem='$arquivo_imagem' WHERE idFuncionario = '$idfuncionario' ");
	}}
	
	// se não selecionar a imagem atualiza os demais dados.
	else {

mysql_query("UPDATE funcionario SET nome='$nome', data='$data', sexo='$sexo', telefone='$telefone', cargo='$idCargo' WHERE idFuncionario = '$idfuncionario' ");
	}
	echo "<script>window.location.href='funcionarios_editar.php?id=$idfuncionario&msg=ok';</script>";

	
}else if ($acao == 'excluir_funcionario'){
	
	$idfuncionario = $_GET['id'];
	
	mysql_query("UPDATE funcionario SET deletar = '1' WHERE idFuncionario = '$idfuncionario'");
	
echo "<script>window.location.href='funcionarios.php';</script>";



// --------------------------------------------------------------- NOTICIA ---------------------------------------------------------------//


} else if ($acao == 'editar_noticia'){
	
	$idnoticia = addslashes( $_POST['id']);
	$titulo = addslashes( $_POST['titulo']);
	$resumo = addslashes( $_POST['resumo']);
	$conteudo = addslashes( $_POST['conteudo']);
	$idCategoria = addslashes( $_POST['categoria']);
	$data = addslashes( $_POST['data']);
	$imagem = $_FILES['imagem'];
	
if (file_exists($_FILES['imagem']['tmp_name']))
	{
				if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $imagem["type"])) 
		{ $msg = "Arquivo em formato inválido! A imagem deve ser jpg, jpeg, bmp, gif ou png. Envie outro arquivo"; 
		   echo "<script>location.href='noticias_editar.php?id=$idNoticia'; alert('$msg');</script>";
		}
	else{
	$imagem = $_FILES['imagem'];
		$pasta_dir= "img/"; 
		if (!file_exists($pasta_dir))
		{
			mkdir($pasta_dir);
		}
		$arquivo_imagem = $pasta_dir.$imagem["name"];
		move_uploaded_file($imagem["tmp_name"],$arquivo_imagem);
		
mysql_query("UPDATE noticias SET titulo='$titulo', resumo='$resumo', conteudo='$conteudo', idCategoria='$idCategoria', data='$data', imagem='$arquivo_imagem' WHERE idNoticia = '$idnoticia' ");
	}}
	
	// se não selecionar a imagem atualiza os demais dados.
	else {

mysql_query("UPDATE noticias SET titulo='$titulo', resumo='$resumo', conteudo='$conteudo', idCategoria='$idCategoria', data='$data' WHERE idNoticia = '$idnoticia' ");
	}
	echo "<script>window.location.href='noticias_editar.php?id=$idnoticia&msg=ok';</script>";

	
} else if ($acao == 'add_noticia'){

	$titulo = addslashes( $_POST['titulo']);
	$resumo = addslashes( $_POST['resumo']);
	$conteudo = addslashes( $_POST['conteudo']);
	$idCategoria = addslashes( $_POST['categoria']);
	$data = date('Y-m-d');
	$imagem = $_FILES['imagem'];
		
		if (isset($_FILES['imagem']))
			{
				$pasta_diretorio="img/";
		
		if (!file_exists ($pasta_diretorio))
			{
				mkdir($pasta_diretorio);
			}
		$arquivo = $pasta_diretorio.$imagem["name"];
		move_uploaded_file($imagem['tmp_name'],$arquivo);
	
		mysql_query("INSERT INTO noticias ( titulo, resumo, imagem, conteudo, idCategoria, data ) VALUES ('$titulo', '$resumo', '$arquivo', '$conteudo', '$idCategoria', '$data') ");	
			}

echo "<script>window.location.href='noticias_incluir.php?msg=ok';</script>";


} else if ($acao == 'excluir_noticia'){
	
	$idnoticia = $_GET['id'];
	
	mysql_query("UPDATE noticias SET deletar = '1' WHERE idNoticia = '$idnoticia'");
	
echo "<script>window.location.href='noticias.php';</script>";
}




// --------------------------------------------------------------- CATEGORIA ---------------------------------------------------------------//
 else if ($acao == 'add_categoria'){
	
	$categoria = addslashes( $_POST['categoria']);
	
	mysql_query("INSERT INTO categoria ( nome ) VALUES ('$categoria') ");	

echo "<script>window.location.href='categorias_incluir.php?msg=ok';</script>";


}else if ($acao == 'editar_categoria'){
	
	$idcategoria = $_POST['id'];
	$categoria = addslashes( $_POST['categoria']);
	
	mysql_query("UPDATE categoria SET nome='$categoria' WHERE idCategoria = '$idcategoria' ");
	
echo "<script>window.location.href='categorias_editar.php?id=$idcategoria&msg=ok';</script>";
	
	
}else if ($acao == 'excluir_categoria'){
	
	$idcategoria = $_GET['id'];
	
	mysql_query("UPDATE categoria SET deletar = '1' WHERE idCategoria = '$idcategoria'");
	
echo "<script>window.location.href='categorias.php';</script>";


// --------------------------------------------------------------- SLIDE ---------------------------------------------------------------//
} else if ($acao == 'add_slide'){
	
	$descricao = addslashes( $_POST['descricao']);
	$imagem = $_FILES['imagem'];
	
	
if (isset($_FILES['imagem']))
	{
		$pasta_diretorio="img/";

if (!file_exists ($pasta_diretorio))
	{
		mkdir($pasta_diretorio);
	}
$arquivo = $pasta_diretorio.$imagem["name"];
move_uploaded_file($imagem['tmp_name'],$arquivo);
	
mysql_query("INSERT INTO slide ( imagem, descricao ) VALUES ('$arquivo','$descricao') ");	

echo "<script>window.location.href='slides_incluir.php?msg=ok';</script>";


}
}
else if ($acao == 'editar_slide'){
	
	$idslide = $_POST['id'];
	$descricao = addslashes( $_POST['descricao']);
	$imagem = $_FILES['imagem'];
	
	
if (file_exists($_FILES['imagem']['tmp_name']))
	{
				if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $imagem["type"])) 
		{ $msg = "Arquivo em formato inválido! A imagem deve ser jpg, jpeg, bmp, gif ou png. Envie outro arquivo"; 
		   echo "<script>location.href='categorias_editar.php?id=$idslide'; alert('$msg');</script>";
		}
	else{
	$imagem = $_FILES['imagem'];
		$pasta_dir= "img/"; 
		if (!file_exists($pasta_dir))
		{
			mkdir($pasta_dir);
		}
		$arquivo_imagem = $pasta_dir.$imagem["name"];
		move_uploaded_file($imagem["tmp_name"],$arquivo_imagem);
		
mysql_query("UPDATE slide SET imagem='$arquivo_imagem', descricao='$descricao' WHERE idSlide = '$idslide' ");
	}}
	
	// se não selecionar a imagem atualiza os demais dados.
	else {

mysql_query("UPDATE slide SET descricao='$descricao' WHERE idSlide = '$idslide' ");
	}

	
echo "<script>window.location.href='slides_editar.php?id=$idslide&msg=ok';</script>";
	
	
}else if ($acao == 'excluir_slide'){
	
	$idslide = $_GET['id'];
	
	mysql_query("UPDATE slide SET deletar = '1' WHERE idSlide = '$idslide'");
	
echo "<script>window.location.href='slides.php';</script>";


// --------------------------------------------------------------- DÚVIDA ---------------------------------------------------------------//
} else if ($acao == 'add_duvida'){
	
	$nome = addslashes( $_POST['nome']);
	$email = addslashes( $_POST['email']);
	$pergunta = addslashes( $_POST['pergunta']);
	
	mysql_query("INSERT INTO duvidas ( nome, email, pergunta ) VALUES ('$nome', '$email', '$pergunta') ");	

echo "<script>window.location.href='duvidas_incluir.php?msg=ok';</script>";


}else if ($acao == 'editar_duvida'){
	
	$idduvida = $_POST['id'];
	$nome = addslashes( $_POST['nome']);
	$email = addslashes( $_POST['email']);
	$pergunta = addslashes( $_POST['pergunta']);
	
	mysql_query("UPDATE duvidas SET nome='$nome', email='$email', pergunta='$pergunta' WHERE idDuvida = '$idduvida' ");
	
echo "<script>window.location.href='duvidas_editar.php?id=$idduvida&msg=ok';</script>";
	
	
}else if ($acao == 'excluir_duvida'){
	
	$idduvida = $_GET['id'];
	
	mysql_query("UPDATE duvidas SET deletar = '1' WHERE idDuvida = '$idduvida'");
	
echo "<script>window.location.href='duvidas.php';</script>";

}
?>