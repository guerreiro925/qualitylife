<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contato | Qualidade de Vida</title>    
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
						<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Login</button></li>
						
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
					<li><a href="sobre.php">Sobre</a></li>
					
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
					<li><a class="active" href="contato.php">Contato</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //main-content -->
		<div class="wthree-main-content">
			<!-- contact us -->
	<section class="agileits contact-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s">
					<h2 class="agile-inner-title">Entrar em Contato</h2>
					</div>
					<div class="col-sm-8 w3layouts-agileits">
						<form class="my-form" enctype="multipart/form-data" action="controlador.php" method="post">
						<span class="section"><p><?php error_reporting(0); if($_GET['msg'] == 'ok'){echo 'Mensagem enviada com sucesso.';} else if($_GET['msg'] == 'error'){echo 'Erro ao incluir dados, tente novamente mais tarde.';}?></p>
</span>
						  <div class="form-group">
							<input type="text" name="nome" class="form-control" id="name" placeholder="Preencha o seu nome completo.." required>
						  </div>
						  <div class="form-group">
							<input type="email" name="email" class="form-control" id="email" placeholder="Preencha o seu email completo.." required>
						  </div>
						  <div class="form-group">
							<textarea required required class="form-control" name="duvida" id="message" rows="7" cols="25" style="resize:none;" required placeholder="Preencha a sua mensagem.."></textarea>
						  </div>
						  
						  <button type="submit" class="btn btn-default btn-block">Enviar</button>
						</form>
					</div>
					
					<div class="col-sm-4 w3layouts-agileits">
						<div class="w3layouts-address">
						<h4>Mais Informações</h4>
                        <br>
						<address>
						  <strong class="bold">Email</strong><br>
						  <a class="mail" href="#0">qualidadevidabrasil@outlook.com</a>
						</address>	
							
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<div class=" map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.453730295662!2d-51.145509129629154!3d-23.262957528799458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xceb4638f5ea5334f!2sCentro+Educacional+Marista+Irm%C3%A3o+Ac%C3%A1cio!5e0!3m2!1spt-BR!2sbr!4v1479315575808" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
	<!-- /.contact us -->
		</div>
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
		
				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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