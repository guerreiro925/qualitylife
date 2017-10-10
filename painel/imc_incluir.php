<?php 
include("conexao.php");
session_start();

if( (!isset($_SESSION['usuario']) == true ) )
{
	unset ($_SESSION['login']);
	header('location:login.php');	
}

	$sessaousuario = $_SESSION ['usuario']; // Ativando esta variável + 'nome' = inicia a visualização do perfil do usuário//
?>



<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Qualidade de vida | Painel Administrativo  </title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- ZMDI ICONS -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/css/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
       
    <link rel="icon" href="img/logo.png" />
	<!-- JQUERY -->
	<script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript"> 
      $(document).ready(function(){
          
         $("select[name=tipo]").change(function(){
            $("select[name=funcao]").html('<option value="0">Carregando...</option>');
			$("select[name=pessoa]").html('<option value="0">Carregando...</option>');
             
            $.post("funcao.php",
                  {
					  tipo:$(this).val()},
                  	  function(valor){
                      $("select[name=funcao]").html(valor);
                  })
		})	
		
		
		  $("select[name=funcao]").change (function(){
			$("select[name=pessoa]").html('<option value="0">Carregando...</option>');
			
            var tipo= $("select[name=tipo]").val();  
            $.post("pessoa.php",
                  {
					  tipo:tipo,
					  funcao:$(this).val()},
                  	  function(valor){
                      $("select[name=pessoa]").html(valor);
                  })
		})  
		  
		 	})
       
</script>
<script type="text/javascript">
function exibe()
{
 
peso=  document.imc.peso.value;
altura=  document.imc.altura.value;
idade= document.imc.idade.value;
sexo= document.imc.sexo.value;
quadrado =(parseFloat(altura) * parseFloat(altura)) 
document.imc.resultado.value =  parseFloat(peso)/ parseFloat(quadrado);


if (idade <= 6)
{
		if (document.imc.resultado.value <= 14) {
		document.imc.estado.value= "Você está abaixo peso.";
		}
	
		if (document.imc.resultado.value > 14 &&  document.imc.resultado.value <= 16){
	    document.imc.estado.value= "Você está normal.";
		}

		if (document.imc.resultado.value > 16 &&  document.imc.resultado.value <= 18){
		document.imc.estado.value= "Você está com sobrepeso.";
		}

		if(document.imc.resultado.value > 18){
		document.imc.estado.value= "Você está obeso.";
		}
}

else if (idade == 7 || idade == 8)
{
		if (document.imc.resultado.value <= 15) {
		document.imc.estado.value= "Você está abaixo peso.";
		}
	
		if (document.imc.resultado.value > 15 &&  document.imc.resultado.value <= 17){
		document.imc.estado.value= "Você está com o peso normal.";
		}

		if (document.imc.resultado.value > 17 &&  document.imc.resultado.value <= 19){
		document.imc.estado.value= "Você está com sobrepeso.";
		}

		if(document.imc.resultado.value > 19){
		document.imc.estado.value= "Você está obeso.";
		}
}

else if (idade == 9 || idade == 10)
{
		if (document.imc.resultado.value <= 16) {
		document.imc.estado.value= "Você está abaixo peso.";
		}
	
		if (document.imc.resultado.value > 16 &&  document.imc.resultado.value <= 18){
		document.imc.estado.value= "Você está com o peso normal.";
		}

		if (document.imc.resultado.value > 18 &&  document.imc.resultado.value <= 20){
		document.imc.estado.value= "Você está com sobrepeso.";
		}

		if(document.imc.resultado.value > 20){
		document.imc.estado.value= "Você está obeso.";
		}
}

else if (idade == 11 || idade == 12)
{
		if (document.imc.resultado.value <= 17) {
		document.imc.estado.value= "Você está abaixo peso.";
		}
	
		if (document.imc.resultado.value > 17 &&  document.imc.resultado.value <= 19){
		document.imc.estado.value= "Você está com o peso normal.";
		}

		if (document.imc.resultado.value > 19 &&  document.imc.resultado.value <= 21){
		document.imc.estado.value= "Você está com sobrepeso.";
		}

		if(document.imc.resultado.value > 21){
		document.imc.estado.value= "Você está obeso.";
		}
}

else if (idade == 13 || idade == 14)
{
		if (document.imc.resultado.value <= 19) {
		document.imc.estado.value= "Você está abaixo peso.";
		}
	
		if (document.imc.resultado.value > 19 &&  document.imc.resultado.value <= 21){
		document.imc.estado.value= "Você está com o peso normal.";
		}

		if (document.imc.resultado.value > 21 &&  document.imc.resultado.value <= 23){
		document.imc.estado.value= "Você está com sobrepeso.";
		}

		if(document.imc.resultado.value > 23){
		document.imc.estado.value= "Você está obeso.";
		}
}

else if (idade == 15)
{
		if (document.imc.resultado.value <= 19.5) {
		document.imc.estado.value= "Você está abaixo peso.";
		}
	
		if (document.imc.resultado.value > 19.5 && document.imc.resultado.value <= 21.5){
		document.imc.estado.value= "Você está com o peso normal.";
		}

		if (document.imc.resultado.value > 21.5 &&  document.imc.resultado.value <= 23.5){
		document.imc.estado.value= "Você está com sobrepeso.";
		}

		if(document.imc.resultado.value > 23.5){
		document.imc.estado.value= "Você está obeso.";
		}
}
else if (idade >15 && sexo =="masculino")
{
	if (document.imc.resultado.value <= 20) {
		document.imc.estado.value= "Você está abaixo peso.";
		}
	
		if (document.imc.resultado.value > 20 &&  document.imc.resultado.value <= 25){
		document.imc.estado.value= "Você está com o peso normal.";
		}

		if (document.imc.resultado.value > 25 &&  document.imc.resultado.value <= 30){
		document.imc.estado.value= "Você está com sobrepeso.";
		}
		
		if (document.imc.resultado.value > 30 &&  document.imc.resultado.value <= 40){
		document.imc.estado.value= "Você está obeso morbido.";
		}

		if(document.imc.resultado.value > 40){
		document.imc.estado.value= "Você está obeso.";
		}
}
else if (idade >15 && sexo =="feminino")
{
	if (document.imc.resultado.value <= 18) {
		document.imc.estado.value= "Você está abaixo peso.";
		}
	
		if (document.imc.resultado.value > 18 && document.imc.resultado.value <= 25){
		document.imc.estado.value= "Você está com o peso normal.";
		}

		if (document.imc.resultado.value > 25 &&  document.imc.resultado.value <= 30){
		document.imc.estado.value= "Você está com sobrepeso.";
		}
		
		if (document.imc.resultado.value > 30 &&  document.imc.resultado.value <= 35){
		document.imc.estado.value= "Você está obeso morbido.";
		}

		if(document.imc.resultado.value > 35){
		document.imc.estado.value= "Você está obeso.";
		}
}
}
</script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="img/logo.png" width="40" height="45"> <span style="font-size: 18px">Qualidade de vida</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="zmdi zmdi-hc-2x zmdi-home"></i> Início </a></li>
                </ul>
                <ul class="nav side-menu">
                 <li ><a href="administradores.php"><i class="zmdi zmdi-hc-2x zmdi-account-box"></i> Administrador </a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="usuarios.php"><i class="zmdi zmdi-hc-2x zmdi-accounts"></i> Usuário</a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="turmas.php"><i class="zmdi zmdi-hc-2x zmdi-balance"></i> Turma</a></li>
                </ul>
                <ul class="nav side-menu">
                <li class="active"><a href="alunos.php"><i class="fa fa-users"></i> Aluno <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="imc.php">IMC</a>
                        </li>
                        <li><a href="anamnese.php">Anamnese</a>
                        </li>
                    </ul>
                  </li>
				</ul>
                <ul class="nav side-menu">
                  <li><a href="cargos.php"><i class="zmdi zmdi-hc-2x zmdi-assignment"></i> Cargo </a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="funcionarios.php"><i class="zmdi zmdi-hc-2x zmdi-wrench"></i> Funcionário</a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="noticias.php"><i class="zmdi zmdi-hc-2x zmdi-edit"></i> Notícia<span class="badge bg-red pull-right" data-toggle="tooltip" data-placement="right" title="Total de dados"><?php echo $noticia;?></span></a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="categorias.php"><i class="zmdi zmdi-hc-2x zmdi-label"></i> Categoria </span></a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="slides.php"><i class="zmdi zmdi-hc-2x zmdi-image"></i> Slide</a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="duvidas.php"><i class="zmdi zmdi-hc-2x zmdi-pin-help"></i> Dúvida <span class="badge bg-red pull-right" data-toggle="tooltip" data-placement="right" title="Total de dados"><?php echo $duvida;?></span></a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="sair.php"><i class="zmdi zmdi-hc-2x zmdi-mail-reply"></i> Sair </a></li>
                </ul>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $sessaousuario;?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="sair.php"><i class="fa fa-sign-out pull-right"></i> SAIR</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Incluir IMC</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">


                    <form name="imc" class="form-horizontal form-label-left" action="controlador.php?acao=add_imc" method="post" enctype="multipart/form-data" novalidate>

                      <p>Preencha corretamente os campos para realizar a inclusão </p>
                      <span class="section"><p><?php error_reporting(0); if($_GET['msg'] == 'ok'){echo 'Registro incluído com sucesso.';} else if($_GET['msg'] == 'error'){echo 'Erro ao incluir dados, tente novamente mais tarde.';}?></p>
</span>

                      <div class="">
                        <div class="">
                          <input id="name" value="<?php echo $id;?>" name="id"  hidden="hidden" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Selecione um tipo de pessoa:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="tipo" id="tipo" class="form-control col-md-7 col-xs-12 required" required >
							<option value="0" class="required" required selected>Escolha um Tipo da Pessoa</option>                
							<option value="1"> Educando</option>
							<option value="2"> Colaborador </option>
							</select>
                        </div>
                      </div>
						
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Selecione um(a) Turma/Cargo:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="funcao" id="funcao" class="form-control col-md-7 col-xs-12 required" required >
							<option value="0" class="required" required disabled="disabled">Escolha um(a) Turma/Cargo</option>                
							</select>
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Selecione uma pessoa:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pessoa" id="pessoa" class="form-control col-md-7 col-xs-12 required" required >
							<option value="0" class="required" required disabled="disabled">Escolha uma pessoa</option>                
						  </select>
                        </div>
                      </div>
					  
                      <div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Peso:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="number" name="peso" class="form-control col-md-7 col-xs-12 required" required/>
						</div>
				      </div>
					  
					  <div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Altura:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" data-inputmask="'mask' : '9.99'" name="altura" class="form-control col-md-7 col-xs-12 required" required/>
						</div>
				      </div>
					  
					  <div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Idade:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="number"  name="idade" class="form-control col-md-7 col-xs-12 required" required/>
						</div>
				      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Sexo:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="sexo" id="sexo" class="form-control col-md-7 col-xs-12 required" required >
							<option value class="required" required >Selecione o seu tipo de sexo</option>  
							<option value="masculino">Masculino</option>
							<option value="feminino">Feminino</option>               
						  </select>
                        </div>
                      </div>
					  
					  <div class="item form-group" style="text-align: center">
					  
						 <input id="send" type="button" value="Calcular" onclick="exibe()" class="btn btn-info">
					  
					  </div>
					  
					  
					  <div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Resultado:</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" readonly id="resultado" name="resultado" class="input form-control col-md-3 col-xs-12 required"/>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">	
							<input type="text" readonly id="estado" name="estado" class="input form-control col-md-3 col-xs-12 required"/>
						</div>
					  </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary" onClick="window.location.href='imc.php'">Voltar</button>
                          <button id="send" type="submit"  class="btn btn-info">Cadastre</button>
                        </div>
                      </div>
					  </form>
                      
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

	<script src="assets/js/jquery.inputmask.bundle.min.js"></script>

    <!-- validator -->

    <!-- jquery.inputmask -->
    <script>
      $(document).ready(function() {
        $(":input").inputmask();
      });
    </script>
	
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/js/nprogress.js"></script>
    <!-- validator -->
    <script src="assets/js/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

    <!-- validator -->
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
    <!-- /validator -->
  </body>
</html>