<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Sobre | Qualidade de Vida</title>    

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<link href="img/loguinho.png" rel="shortcut icon" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->

<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business Strategy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->

<!--//fonts-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
<script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //script for smooth drop down-nav -->


</head>
<body>
	<div class="w3-slider">	
	<!-- header -->
	<header>
		<div class="w3layouts-top-strip">
			<div class="container-fluid">
				<div class="w3ls-social-icons">
					<a class="facebook" target="_blank" href="https://www.facebook.com/qualidadedevidabrasil"><i class="fa fa-facebook"></i></a>
                    <a data-toggle="modal" data-target="#procurar" href="#0" data-target=".bs-example-modal-lg"><i class="fa fa-search"></i></a>
                    
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
						<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">Login</button></li>
						
					</ul>
				</div>

				<div class="logo col-md-12 col-sm-12 col-xs-12">
					<h1><a href="index.php"><img class="img-responsive" style="margin:0 auto" src="img/logotopo.png"/></a></h1>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
		<div class="w3layouts-inner-banner">
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- navigation -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a class="active" href="sobre.php">Sobre</a></li>
					
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" style="font-family: 'Raleway', sans-serif;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						
                                 	<?php 
									
									 include("conexao.php");
										$consulta= mysql_query("SELECT * FROM categoria WHERE deletar != 1" );
											while($dados= mysql_fetch_array($consulta)){?>
									<li><a style="font-family: 'Raleway', sans-serif;" href="categorias.php?id=<?php echo $dados['idCategoria']; ?>"><?php echo $dados['nome']; ?></a></li>
									<?php } ?>
                            
					  </ul>
					</li>
					<li><a href="contato.php">Contato</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- About-page -->
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Qualidade de Vida</h2>
				<div class="w3-about-top">
				<div class="col-md-12 col-sm-12 col-xs-12 w3ls-about-top-left-grid">
					<img src="img/abt.jpg" alt=" " class="img-responsive center-block" /><br>
					
					<p style="text-align: justify">&nbsp;&nbsp;&nbsp;&nbsp;Qualidade de Vida (QV) é uma plataforma online que tem por objetivo promover a saúde e o bem estar de seus usuários.<br>
&nbsp;&nbsp;&nbsp;&nbsp;O projeto conta com duas funcionalidades essenciais para o monitoramento do bem estar físico e são elas: IMC (índice de massa corporal, refere-se a medida do peso de cada pessoa, sendo uma relação entre a massa e a sua altura) e a anamnese (avaliação realizada para analisar o passado e histórico de doenças).<br>
&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvida pela Ponks, uma empresa de software dos educandos do Curso Técnico em Informática para Internet do Centro Educacional Marista Ir. Acácio, o projeto contará com a participação efetiva dos educadores que auxiliarão os educandos a se manterem saudáveis, utilizando o QV como uma ferramenta cooperativa. 
</p>
				</div>
				
                    
				</div>
				<div class="clearfix"> </div>
                <!-- Large modal -->
<div class="col-md-12"> 
        <b></b>
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#integrante" ><img src="img/logoponks.png" style="width: 120px; backgroung-color: none;"/></button><center>


			</div>
	
	
		

		
		</section>
        </div>
		<!-- /.about-page -->
		<!-- //main-content -->
		<!-- footer -->
		<footer>
			<div class="container">
				<div class="w3ls-footer-grids">					
					<div class="col-md-12">
						<center><p style="color: #8C8C8C;">© 2016 Qualidade de Vida. Todos os direitos reservados ao CEM Ir. Acácio | Desenvolvido por <a href="http://mhsdevelopers.com.br/ponks/" target="_blank">Ponks Software Development</a></p></center>
					<div class="clearfix"></div>
				</div>
			</div>
		</footer>
		
				<div class="modal fade bs-example-modal-lg" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    <h4 class="modal-title" id="myModalLabel" style="text-align: center; color: #edbe31; font-size: 23px; ">LOGIN - ALUNO</h4>
      </div>
      
            <div class="modal-body">
				<div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12" >
                  
                    <form class="form-horizontal form-label-left" action="perfil/verificar.php?acao=verificar" method="post">
					
                                	  <h1 class="text-center"><img src="img/logotopo.png" width="280" class="img-responsive 
                                      center-block" style="padding-bottom:20px;"></h1>
                
                                      <div class="item form-group">
                                      <p class="text-center center-margin" style="text-transform: uppercase;font-weight:bold;" class="col-md-3 col-sm-3 col-xs-12"><?php error_reporting(0); if($_GET['msg'] == 'error'){echo 'Login ou senha incorretos.';} else if($_GET['msg'] == 'session'){echo 'Por favor digite seus dados de acesso.';}?></p>
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for=""></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text" name="usuario" id="nome" class="form-control col-md-7 col-xs-12" placeholder="Preencha o usuário:" required>
                                        </div>
                                      </div>
                                      
                                      <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for=""></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="password" name="senha" id="nome" class="form-control col-md-7 col-xs-12" placeholder="Preencha a senha:" required>
                                        </div>
                                      </div>
                                      
                                      
                                      <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
                                          
                                          <button id="send" type="submit"  class="btn btn-info">Entrar</button>
                                        </div>
                                      </div>
                    </form>
                    
                  
                </div>
                
                
                
                
                
                
                
   		 </div>
  </div>
</div>
</div>
</div>

<div class="modal fade bs-example-modal-lg" id="integrante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title " style=" text-align:center" id="myModalLabel">Qualidade de Vida - Desenvolvedores</h4>
      </div>
      
            <div class="modal-body">
				<div class="row">
  <div class="col-md-4" style="text-align:center;">
<a href="https://www.facebook.com/matheushenrique.guerreiro" target="blank">
<center><img src="integrantes/eder.png" class="img img-responsive" alt="Matheus Henrique Lima Vilar" title="Matheus Henrique Lima Vilar" style="width:50%;"></center>
<p style="font-size:13px;"><b>Eder Diego de Oliveira</b></p>
<p style="font-size:12px;">Analista</p>
</a>
</div>

<div class="col-md-4" style="text-align:center;">
<a href="https://www.facebook.com/matheushenrique.guerreiro" target="blank">
<center><img src="integrantes/villar.png" class="img img-responsive" alt="Matheus Henrique Lima Vilar" title="Matheus Henrique Lima Vilar" style="width:50%;"></center>
<p style="font-size:13px;"><b>Matheus Henrique</b></p>
<p style="font-size:12px;">Programador/Analista</p>
</a>
</div>

<div class="col-md-4" style="text-align:center;">
<a href="https://www.facebook.com/NathaliaRodrigues28?fref=ts" target="blank">
<center><img src="integrantes/nathy.png" class="img img-responsive" alt="Matheus Henrique Lima Vilar" title="Matheus Henrique Lima Vilar" style="width:50%;"></center>
<p style="font-size:13px;"><b>Nathalia Rodrigues</b></p>
<p style="font-size:12px;">Programador/Analista</p>
</a>
</div>

<div class="col-md-4" style="text-align:center;">
<a href="https://www.facebook.com/profile.php?id=100008084526142" target="blank">
<center><img src="integrantes/mateuso.png" class="img img-responsive" alt="Matheus Henrique Lima Vilar" title="Matheus Henrique Lima Vilar" style="width:50%;"></center>
<p style="font-size:13px;"><b>Mateus Oliveira</b></p>
<p style="font-size:12px;">Programador</p>
</a>
</div>

<div class="col-md-4" style="text-align:center;">
<a href="https://www.facebook.com/luiz.moreira.108?fref=ts" target="blank">
<center><img src="integrantes/dodo.png" class="img img-responsive" alt="Matheus Henrique Lima Vilar" title="Matheus Henrique Lima Vilar" style="width:50%;"></center>
<p style="font-size:13px;"><b>Luiz Moreira</b></p>
<p style="font-size:12px;">Design/Programador</p>
</a>
</div>

<div class="col-md-4" style="text-align:center;">
<a href="https://www.facebook.com/gabriel.rafael.77582?fref=ts" target="blank">
<center><img src="integrantes/rafael.png" class="img img-responsive" alt="Matheus Henrique Lima Vilar" title="Matheus Henrique Lima Vilar" style="width:50%;"></center>
<p style="font-size:13px;"><b>Gabriel Igor</b></p>
<p style="font-size:12px;">Design</p>
</a>
</div>

  
</div>
   		 </div>
  </div>
</div>

			</div>


<div class="modal fade" id="procurar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="buscar.php" name="busca" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <input type="text" class="col-md-12" name="busca" placeholder="Pesquisar notícia..">
                </div><br><br>
                <div class="col-md-12" style="text-align: center">
                    <input type="submit" name="botao" class="btn btn-info" value="Buscar">
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>		
		<!-- //footer -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->	
</body>
</html>