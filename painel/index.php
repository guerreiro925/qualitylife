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
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc.s -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="img/icon.png" rel="shortcut icon">
    <title>Qualiade de vida | Painel Administrativo </title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- ZMDI ICONS -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
    
    <!-- NProgress -->
    <link href="assets/css/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="img/logo.png" width="40" height="45"> <span style="font-size: 18px">Qualidade de vida</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <ul class="nav side-menu">
                  <li class="active"><a href="index.php"><i class="zmdi zmdi-hc-2x zmdi-home"></i> Início </a></li>
                </ul>
                <ul class="nav side-menu">
                 <?php if($nivel == 'ADMIN'){?><li ><a href="administradores.php"><i class="zmdi zmdi-hc-2x zmdi-account-box"></i> Administrador </a></li><?php } ?>
                </ul>
                <ul class="nav side-menu">
                 <li><a href="usuarios.php"><i class="zmdi zmdi-hc-2x zmdi-accounts"></i> Usuário</a></li>
                </ul>
                <ul class="nav side-menu">
                  <?php if($nivel == 'ADMIN'){?><li><a href="turmas.php"><i class="zmdi zmdi-hc-2x zmdi-balance"></i> Turma</a></li><?php } ?>
                </ul>
                <ul class="nav side-menu">
                <li><a href="alunos.php"><i class="fa fa-users"></i> Aluno <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="imc.php">IMC</a>
                        </li>
                        <li><a href="anamnese.php">Anamnese</a>
                        </li>
                    </ul>
                  </li>                  

                </ul>
                <ul class="nav side-menu">
                  <?php if($nivel == 'ADMIN'){?><li><a href="cargos.php"><i class="zmdi zmdi-hc-2x zmdi-assignment"></i> Cargo </a></li><?php } ?>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="funcionarios.php"><i class="zmdi zmdi-hc-2x zmdi-wrench"></i> Funcionário</a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="noticias.php"><i class="zmdi zmdi-hc-2x zmdi-edit"></i> Notícia<span class="badge bg-red pull-right" data-toggle="tooltip" data-placement="right" title="Total de dados"><?php echo $noticia;?></span></a></li>
                </ul>
                <ul class="nav side-menu">
                  <?php if($nivel == 'ADMIN'){?><li><a href="categorias.php"><i class="zmdi zmdi-hc-2x zmdi-label"></i> Categoria </span></a></li><?php } ?>
                </ul>
                <ul class="nav side-menu">
                  <?php if($nivel == 'ADMIN'){?><li><a href="slides.php"><i class="zmdi zmdi-hc-2x zmdi-image"></i> Slide</a></li><?php } ?>
                </ul>
                <ul class="nav side-menu">
                  <?php if($nivel == 'ADMIN'){?><li><a href="duvidas.php"><i class="zmdi zmdi-hc-2x zmdi-pin-help"></i> Dúvida <span class="badge bg-red pull-right" data-toggle="tooltip" data-placement="right" title="Total de dados"><?php echo $duvida;?></span></a></li><?php } ?>
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
                    <span class=" zmdi zmdi-caret-down-circle"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="sair.php"><i class="fa fa-sign-out pull-right"></i>SAIR</a></li>
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
              
            </div>
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
					<h1 class="text-center responsive-contai " > BEM-VINDO <p> 
					<?php 
					if($nivel == 'ADMIN'){ 
					echo "ADMINISTRADOR $sessaousuario";}  else { echo "USUÁRIO $sessaousuario";}
					?> </p>
					
					</h1>
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

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/js/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>
  </body>
</html>