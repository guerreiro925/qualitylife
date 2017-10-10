<?php 
include("conexao.php");
session_start();

if( (!isset($_SESSION['usuario']) == true ) )
{
	unset ($_SESSION['login']);
	header('location:../index.php');	
}
	
	$sessaousuario = $_SESSION ['usuario']; // Ativando esta variável + 'nome' = inicia a visualização do perfil do usuário//
	

?>

<!DOCTYPE html>
<html>
<head>
<link href="img/loguinho.png" rel="shortcut icon">
<title><?php $query = mysql_query("SELECT * FROM usuario WHERE usuario = '$sessaousuario' AND deletar != 1");
while($dadosA = mysql_fetch_array($query)){	
$idUsuario = $dadosA['idUsuario'];
$senha = $dadosA['alterar_senha'];

$query = mysql_query("SELECT * FROM aluno WHERE idUsuario = '$idUsuario' AND deletar != 1");
while($dadosB = mysql_fetch_array($query)){
	echo $dadosB['nome'];
	$imagem = $dadosB['imagem'];

$queryC = mysql_query("SELECT * FROM imc WHERE pessoa = '$idUsuario' AND deletar != 1");
while($dadosC = mysql_fetch_array($queryC)){
	$resultado = $dadosC['resultado'];
	$estado = $dadosC['estado'];
	
$queryD = mysql_query("SELECT * FROM anamnese WHERE pessoa = '$idUsuario' AND deletar != 1");
while($dadosD = mysql_fetch_array($queryD)){
	
	$doenca_anterior = $dadosD['doenca_anterior'];
	$doenca_familiar = $dadosD['doenca_familiar'];
	$cirurgia_internacao = $dadosD['cirurgia_internacao'];
	$medicacao = $dadosD['medicacao'];
	$alergia = $dadosD['alergia'];
	$numero_refeicoes = $dadosD['numero_refeicoes'];
	$atividade_fisica = $dadosD['atividade_fisica'];
	$vezes_semana = $dadosD['vezes_semana'];
	$duracao = $dadosD['duracao'];
	$intensidade = $dadosD['intensidade'];
	$esforco = $dadosD['esforco'];
	
?></title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style-perfil.css" />
<link rel="stylesheet" href="css/custom.min.css" />
</head>

<body>
<div class="header">
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigation">
        	<div class="navbar-header">
            
	            <a href="#" data-id="imc" class="navbar-brand scroll-top"><img class="img-responsive img-responsive-css"  src="img/logo.png"/></a>
	            <button type="button" id="nav-toggle" class="navbar-toggle col-md-6" data-toggle="collapse" data-target="#main-nav">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	            </button>
            </div>
        	<!--/.navbar-header-->
	        <div id="main-nav" class="collapse navbar-collapse">
	            <ul class="nav navbar-brand navbar-nav">
		            <li><a href="#" class="scroll-top" data-id="imc">IMC</a></li>
					<li><a href="#" class="scroll-link" data-id="anamnese">Anamnese</a></li>
                    <li role="presentation" class="dropdown">
    					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      					<?php echo $sessaousuario;?> <img src="<?php echo $imagem;?>" class="img-circle" width="20px" height="20px">
    					</a>
    					<ul class="dropdown-menu">
      						<li><a href="#0" data-toggle="modal" data-target=".bs-example-modal-lg">Login</a></li>
                            <li><a href="sair.php">Sair</a></li>
    					</ul>
  					</li>
	            </ul>
	        </div>
	        <!--/.navbar-collapse-->
	    </nav>
	    <!--/.navbar-->
	</div>
	<!--/.container-->
</div>
<!--/.header-->

<div class="page-section intro w3layouts-team-bg" id="imc">
<br><br>
	<div class="container" style="background-color: rgba(249,210,108,0.8); border-radius: 10px 10px 10px 10px; padding-bottom: 6em">
		<h1>IMC</h1>
		<p class="lead" style="font-size: 1em">Visualize o seu índice de massa corporal</p>
		<hr/>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Resultado do cálculo:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $resultado;?></div> 
        </div>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Estado:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $estado;?></div> 
        </div>
	</div>
	<!--/.container-->
</div>
<!--/.page-section-->

<div id="anamnese" class="page-section w3layouts-anamnese" style="margin-bottom: -10px;">
	<div class="container" style="background-color: rgba(249,210,108,0.8); border-radius: 10px 10px 10px 10px; padding-bottom: 6em">
		<h1>Anamnese</h1>
        <p style="text-align:justify">TESTE TUDO</p>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Doenças:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $doenca_anterior;?></div> 
        </div>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Doenças Familiar:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $doenca_familiar;?></div> 
        </div>
		        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Cirurgia ou internação:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $cirurgia_internacao;?></div> 
        </div>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Medicação:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $medicacao;?></div> 
        </div>
		        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Alergia:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $alergia;?></div> 
        </div>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Nº de refeições:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $numero_refeicoes;?></div> 
        </div>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Atividade física:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $atividade_fisica;?></div> 
        </div>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Nº de atividades físicas:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $vezes_semana;?></div> 
        </div>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Duração da atividade física:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $duracao;?></div> 
        </div>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Intensidade da atividade física:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $intensidade;?></div> 
        </div>
        <div class="row">
			<div class="col-xs-4" style="color: #fff; font-weight: bold">Esforço:</div>
  			<div class="col-xs-6" style="color: #fff"><?php echo $esforco;?></div> 
        </div>
	</div>
	<!--/.container-->
</div>
<!--/#africa-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    <h4 class="modal-title" id="myModalLabel" style="text-align: center; color: #edbe31; font-size: 23px; ">ALTERAR A SENHA</h4>
      </div>
      
            <div class="modal-body">
				<div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12" >
                  
                    <form class="form-horizontal form-label-left" action="verificar.php?acao=alterar_senha" enctype="multipart/form-data" method="post">
                
                					<div class="item form-group">
                                        <div class="">
                                          <input type="text" value="<?php echo $idUsuario;?>" name="id" hidden="hidden" id="senha" class="">
                                        </div>
                                      </div>
                
                                      <div class="item form-group">
                                      <p class="text-center center-margin" style="text-transform: uppercase;font-weight:bold;" class="col-md-3 col-sm-3 col-xs-12"><?php error_reporting(0); if($_GET['msg'] == 'error'){echo 'Preencha corratamente os dados, para alterar a senha';} else if($_GET['msg'] == 'session'){echo 'Por favor digite seus dados de acesso.';}?></p>
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for=""></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="password" name="senha_nova" id="senha" class="form-control col-md-7 col-xs-12" placeholder="Preencha uma nova senha.." required>
                                        </div>
                                      </div>
                                      
                                      <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for=""></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="password" name="senha_confirmacao" id="senha" class="form-control col-md-7 col-xs-12" placeholder="Preencha a confirmação de senha.." required>
                                        </div>
                                      </div>
                                      
                                      
                                      <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
                                          
                                          <button id="send" type="submit"  class="btn btn-info">Alterar</button>
                                        </div>
                                      </div>
                    </form>
                    
                  
                </div>
                
                
                
                
                
                
                
   		 </div>
  </div>
</div>
</div>
</div>

<?php } } } } ?>
<!--/.page-section-->

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/validator.js"></script>

<script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
<script type="text/javascript">
$(document).ready(function() {
	// navigation click actions	
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
	});
	// scroll to top action
	$('.scroll-top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow'); 		
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});
});
// scroll function
function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}
</script>
</body>
</html>