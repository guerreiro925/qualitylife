
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
	<link href="img/icon.png" rel="shortcut icon">
    <title>Qualidade de vida | Painel Administrativo </title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- ZMDI ICONS -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
    
    <!-- NProgress -->
    <link href="assets/css/nprogress.css" rel="stylesheet">
	
	<link href="assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

	<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/scroller.bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
	    <link rel="icon" href="img/logo.png" />
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
                  <li><a href="index.php"><i class="zmdi zmdi-hc-2x zmdi-home"></i> Início </a></li>
                </ul>
                <ul class="nav side-menu">
                 <?php if($nivel == 'ADMIN'){?><li ><a href="administradores.php"><i class="zmdi zmdi-hc-2x zmdi-account-box"></i> Administrador </a></li><?php } ?>
                </ul>
                <ul class="nav side-menu">
                 <li><a href="usuarios.php"><i class="zmdi zmdi-hc-2x zmdi-accounts"></i> Usuário</a></li>
                </ul>
                <ul class="nav side-menu">
                  <?php if($nivel == 'ADMIN'){?><li class="active"><a href="turmas.php"><i class="zmdi zmdi-hc-2x zmdi-balance"></i> Turma</a></li><?php } ?>
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
                <h3>Incluir turma</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">


                    <form class="form-horizontal form-label-left" action="controlador.php?acao=add_turma" method="post" enctype="multipart/form-data" novalidate>

                      <p>Preencha corretamente os campos para realizar a inclusão </p>
                      <span class="section"><p><?php error_reporting(0); if($_GET['msg'] == 'ok'){echo 'Registro incluído com sucesso.';} else if($_GET['msg'] == 'error'){echo 'Erro ao incluir dados, tente novamente mais tarde.';}?></p>
</span>

                      <div class="">
                        <div class="">
                          <input id="name" value="<?php echo $id;?>" name="id"  hidden="hidden" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Turma:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="turma" id="turma" class="form-control col-md-7 col-xs-12"placeholder="Preencha o nome da turma" required type="text">
                        </div>
                      </div>
                                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button type="reset" class="btn btn-primary" onClick="window.location.href='turmas.php'">Voltar</button>
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

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/js/nprogress.js"></script>
    <!-- validator -->
    <script src="assets/js/validator.js"></script>

	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	
    <script src="assets/js/custom.min.js"></script>
    
    <script src="assets/js/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/buttons.bootstrap.min.js"></script>
    <script src="assets/js/buttons.flash.min.js"></script>
    <script src="assets/js/buttons.html5.min.js"></script>
    <script src="assets/js/buttons.print.min.js"></script>
    <script src="assets/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/js/dataTables.keyTable.min.js"></script>
    <script src="assets/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/responsive.bootstrap.js"></script>
    <script src="assets/js/datatables.scroller.min.js"></script>

    <!-- Custom Theme Scripts -->

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>

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