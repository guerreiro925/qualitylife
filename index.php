<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Página Inicial | Qualidade de Vida</title>    

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<link href="img/loguinho.png" rel="shortcut icon" />
<link href="fonts/stylesheet.css" rel="stylesheet" />
<!-- meta tags -->
<meta charset="utf-8" />
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
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
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
	<!-- top-header and slider -->
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
	<!-- main-slider -->
		<ul id="demo1">
        <?php 
			include("conexao.php");
			
					$consulta= mysql_query("SELECT * FROM slide");
						while($dados= mysql_fetch_array($consulta) ){ ?>
			<li>
			<img src="<?php echo $dados ['imagem'];?>" alt="" />
			<!--Slider Description example-->
			 <div class="slide-desc">
					
					<p style="background-color: #584A30; opacity: 0.6"><?php echo $dados ['descricao'];?> </p> <?php }?>
			  </div>
			</li>
			
		</ul>
	</div>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
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
					<li><a class="active" href="index.php">Home</a></li>
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
					<li><a href="contato.php">Contato</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //navigation -->
		<!-- main-content -->
		<div class="wthree-main-content">
		<!-- Blog -->
		<div class="agileits Blog">
			<div class="container">
				<h2 class="agile-inner-title">Central de Noticias</h2><br><br>
				<!-- news -->
	<div class="w3layouts-news">
			<div class="agile-its-news-grid">
				<div class="col-md-12 w3ls-blog-left">
				<?php
				
				$consulta= mysql_query("SELECT * FROM noticias WHERE deletar != 1" );
					while($dados= mysql_fetch_array($consulta)){
						$idCategoria = $dados['idCategoria'];
						setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


$date = $dados['data'];
 

				?>
					<div class="w3-blog-left-grid">
						<div class="w3ls-blog-leftl" >
							<h4 style="text-transform: uppercase"><?php echo strftime("%B", strtotime($date));?>
 <span><?php echo strftime("%d", strtotime($date));?></span></h4>
							<a href="categorias.php?id=<?php echo $dados['idCategoria'];?>"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i><?php $query  = mysql_query("SELECT * FROM categoria WHERE idCategoria ='$idCategoria'");
							while($resultado = mysql_fetch_array($query)){
							echo $resultado['nome'];
							} 
							?></a>
						</div>
						<div class="w3ls-blog-leftr" style="float: right;height: 400px ">
							<a href="continuar.php?id=<?php echo $dados['idNoticia'];?>"><img style="height: 200px;" src="<?php echo $dados ['imagem'];?>" alt=" " class="img-responsive center-block" /></a>
							<p><?php echo $dados['resumo'];?></p>
							<ul>
								<li><a href="categorias.php?id=<?php echo $dados['idCategoria'];?>"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i><?php $query  = mysql_query("SELECT * FROM categoria WHERE idCategoria ='$idCategoria'");
							while($resultado = mysql_fetch_array($query)){
							echo $resultado['nome'];
							} 
							?></a></li>
							</ul>
							<div class="more">
								<a href="continuar.php?id=<?php echo $dados['idNoticia'];?>">Continuar Lendo</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<br>
					
						
					
				
				<?php }?>
			
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
	</div>
<!-- //news -->
			</div>
			<div class="wthree-news w3layouts-clients text-center">
				<div class="container">
					<h3 class="w3l-title" >NOTÍCIAS MAIS VISITADAS</h3>
					<p class="para" style="color: #fff; opacity: 1;font-weight: bold">Visualize as nossas notícias mais visitadas pelos usuários, selecione uma e intereja nela, curtindo e comentando!</p>
					<?php 

					$consulta= mysql_query("SELECT * FROM noticias ORDER BY idNoticia LIMIT 4");
						while($dados= mysql_fetch_array($consulta) ){
		

							?>
					<div class="col-md-6 wthree-right">
						<div class="w3-agile-left">
							
							<div class="agileits-right text-left">
								<a href="continuar.php?id=<?php echo $dados['idNoticia'];?>"><?php echo $dados['titulo'];?></a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="wel-right">
							<div class="content-item item-image1">
								<a href="continuar.php?id=<?php echo $dados['idNoticia'];?>"><img src="<?php echo $dados['imagem'];?>" alt="" /></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
						<?php } ?>
					
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- // Blog -->


			
		
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