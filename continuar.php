<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Noticias | Qualidade de Vida</title>    
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
 <link href="img/loguinho.png" rel="shortcut icon">
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
					<a class="facebook" href="https://www.facebook.com/qualidadevidabrasil/"><i class="fa fa-facebook"></i></a>
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
					<li><a href="sobre.php">Sobre</a></li>
					
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle active" style="font-family: 'Raleway', sans-serif;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria <span class="caret"></span></a>
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

		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- Blog -->
		<div class="agileits Blog">
			<div class="container">
            <?php
$id = $_GET['id'];
$consulta = mysql_query("SELECT * FROM noticias WHERE idNoticia = $id");
while ($dados = mysql_fetch_array($consulta))
{
$idNoticia = $dados['idNoticia'];

	?>

				<h2 class="agile-inner-title"><?php $query  = mysql_query("SELECT * FROM noticias WHERE idNoticia ='$id' AND deletar != 1");
						while($resultado = mysql_fetch_array($query)) {
							echo $resultado['titulo'];
						} 
						?></h2>
				<!-- single -->
	<div class="single">
			<div class="single-grid">
				<div class="col-md-12 w3ls-blog-left">
					<div class="w3-blog-left-grid">
						
						<div class="w3ls-blog-leftr center-block">
							<img src="<?php echo $dados['imagem'];?>" style="height: 300px;margin: 0 auto"  class="img-responsive" />
							<p><?php echo $dados['conteudo'];?></p>
						</div>
						
<div class="fb-like" data-href="http://localhost/reeducar/web/continuar.php?idNoticia=<?php echo $dados['idNoticia'];?>&idCategoria=<?php echo $dados['idCategoria'];?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
						
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-comments" data-href="http://localhost/web/perfil.php?idNoticia=&idNoticia=<?php echo $idNoticia;?>" data-numposts="5" data-width="100%"></div>

                            
						</div>	
					</div>
				</div>
				
			</div>
	</div>
<!-- //single -->
<?php } ?>

			</div>
		</div>
		<!-- // Blog -->
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