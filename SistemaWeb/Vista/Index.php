<?php
session_start();
if (!isset($_SESSION['S_IDUSUARIO'])) {
  header('Location: ../Login/index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ClinicMax</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../Plantilla/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../Plantilla/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../Plantilla/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../Plantilla/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../Plantilla/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../Plantilla/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../Plantilla/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet"
    href="../../Plantilla/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../Plantilla/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../Plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- plugin de datatables -->
  <link rel="stylesheet" href="../../Plantilla/plugins/DataTables/datatables.min.css">
  <!-- plugin de select2 -->
  <link rel="stylesheet" href="../../Plantilla/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../Plantilla/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
  .swal2-popup {
    font-size: 1.6rem !important;
  }
</style>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Cl&iacute;nica</b>MAX</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <!-- <span class="label label-warning">10</span> -->
              </a>
              <ul class="dropdown-menu">
                <li class="header">You don't have notifications</li>
                <!-- <li>
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li> -->
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <!-- <span class="label label-danger">9</span> -->
              </a>
              <ul class="dropdown-menu">
                <li class="header">You don't have tasks</li>
                <!-- <li>
                  
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="#">
                        <h3>
                          Create a nice theme
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="#">
                        <h3>
                          Some task I need to do
                          <small class="pull-right">60%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="#">
                        <h3>
                          Make beautiful transitions
                          <small class="pull-right">80%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li> -->
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img id="img_nav" class="user-image" alt="User Image">
                <span class="hidden-xs">
                  <?php echo $_SESSION['S_USER']; ?>
                </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img id="img_subnav" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_SESSION['S_USER']; ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" onclick="AbrirModalEditarContra()" class="btn btn-default btn-flat">Cambiar
                      contrase&ntilde;a</a>
                  </div>
                  <div class="pull-right">
                    <a href="../Controlador/usuario/controlador_cerrar_sesion.php"
                      class="btn btn-default btn-flat">Salir</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img id="img_lateral" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>
              <?php echo $_SESSION['S_USER']; ?>
            </p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Navegaci&oacute;n Principal</li>
          <li class="active treeview">
            <a onclick="recargarPaginaYcargarContenido('contenido_principal', 'Usuario/Vista_Usuario_Listar.php')">
              <!-- <a onclick="cargar_contenido('contenido_principal','Usuario/Vista_Usuario_Listar.php')"> -->
              <i class="fa fa-users"></i> <span>Usuario</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right">
                </i></span>
            </a>
            <a onclick="recargarPaginaYcargarContenido('contenido_principal', 'Doctor/Vista_Doctor_Listar.php')">
              <!-- <a onclick="cargar_contenido('contenido_principal','Doctor/Vista_Doctor_Listar.php')"> -->
              <i class="fa fa-user-md"></i> <span>Doctores</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right">
                </i></span>
            </a>
            <a onclick="recargarPaginaYcargarContenido('contenido_principal', 'Paciente/Vista_Paciente_Listar.php')">
              <!-- <a onclick="cargar_contenido('contenido_principal','Paciente/Vista_Paciente_Listar.php')"> -->
              <i class="fa fa-users"></i> <span>Paciente</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right">
                </i></span>
            </a>
            <a onclick="recargarPaginaYcargarContenido('contenido_principal', 'Cita/Vista_cita_listar.php')">
              <!-- <a onclick="cargar_contenido('contenido_principal','Cita/Vista_cita_listar.php')"> -->
              <i class="fa fa-user"></i> <span>Citas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <a onclick="recargarPaginaYcargarContenido('contenido_principal', 'consulta/Vista_consulta_listar.php')">
              <!-- <a onclick="cargar_contenido('contenido_principal','consulta/Vista_consulta_listar.php')"> -->
              <i class="fa fa-stethoscope"></i> <span>Consulta Medica</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <a onclick="recargarPaginaYcargarContenido('contenido_principal', 'Insumo/Vista_insumo_listar.php')">
              <!-- <a onclick="cargar_contenido('contenido_principal','Insumo/Vista_insumo_listar.php')"> -->
              <i class="fa fa-cube"></i> <span>Insumos</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <a
              onclick="recargarPaginaYcargarContenido('contenido_principal', 'Procedimiento/Vista_procedimiento_listar.php')">
              <!-- <a onclick="cargar_contenido('contenido_principal','Procedimiento/Vista_procedimiento_listar.php')"> -->
              <i class="fa fa-spinner"></i> <span>Procedimientos</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right">
                </i></span>
            </a>
            <a
              onclick="recargarPaginaYcargarContenido('contenido_principal', 'Especialidad/Vista_especialidad_listar.php')">
              <!-- <a onclick="cargar_contenido('contenido_principal','Especialidad/Vista_especialidad_listar.php')"> -->
              <i class="fa fa-gg"></i> <span>Especialidad</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <!-- Este menu redirige a los dashboard de Dona -->
            <a onclick="cargar_contenido('contenido_principal','Dashboard/chartjs.php')">
              <i class="fa fa-dashboard"></i> <span>Dashboard de Servicios</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <!-- Este menu redirige a los dashboard de Barras -->
            <a onclick="cargar_contenido('contenido_principal','Dashboard/chartjs2.php')">
              <i class="fa fa-dashboard"></i> <span>Dashboard de Pacientes</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <!-- Este menu redirige a los dashboard de Barras -->
            <a onclick="cargar_contenido('contenido_principal','Dashboard/chartjs3.php')">
              <i class="fa fa-dashboard"></i> <span>Dashboard de Citas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <input type="text" id="txtidprincipal" value="<?php echo $_SESSION['S_IDUSUARIO'] ?>" hidden>
        <input type="text" id="usuarioprincipal" value="<?php echo $_SESSION['S_USER'] ?>" hidden>
        <div class="row" id="contenido_principal">
          <div class="col-md-12">
            <div class="box box-warning box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Pantalla Principal</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                Aqu&iacute; va el contenido principal
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Update Resume
                  <span class="label label-success pull-right">95%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Laravel Integration
                  <span class="label label-warning pull-right">50%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Back End Framework
                  <span class="label label-primary pull-right">68%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Allow mail redirect
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Other sets of options are available
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Expose author name in posts
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Allow the user to show his name in blog posts
              </p>
            </div>
            <!-- /.form-group -->

            <h3 class="control-sidebar-heading">Chat Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Delete chat history
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <div class="modal fade" id="modal_editar_contra" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar contrase&ntilde;a</h4>
        </div>
        <div class="modal-body">
          <div class="col-lg-12">
            <!-- <input type="text" id="txtcontra_bd" hidden> -->
            <input type="text" id="txtcontra_bd" hidden>
            <label for="">Contrase&ntilde;a actual</label>
            <input type="password" class="form-control" id="txtcontraactual_editar"
              placeholder="Contrase&ntilde;a actual"><br>
          </div>
          <div class="col-lg-12">
            <label for="">Nueva Contrase&ntilde;a</label>
            <input type="password" class="form-control" id="txtcontranueva_editar"
              placeholder="Nueva Contrase&ntilde;a"><br>
          </div>
          <div class="col-lg-12">
            <label for="">Repetir Contrase&ntilde;a</label>
            <input type="password" class="form-control" id="txtcontrarepetir_editar"
              placeholder="Repetir Contrase&ntilde;a"><br>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" onclick="EditarContra()">
            <i class="fa fa-check">
              <b>&nbsp;Modificar</b>
            </i>
          </button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">
            <i class="fa fa-close">
              <b>&nbsp;Cerrar</b>
            </i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery 3 -->
  <script src="../../Plantilla/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../Plantilla/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    var idioma_espanol = {
      select: {
        rows: "%d fila seleccionada"
      },
      "processing": "Procesando...",
      "sLengthMenu": "Mostrar_Menu_Registros",
      "sZeroRecords": "No se encontraron resultados",
      "sEmptyTable": "Ning&uacute;n dato disponible en esta tabla",
      "sInfo": "Registros del (_START_al_END_) total de _TOTAL_registros",
      "sInfoEmpty": "Registros del (0 al 0) total de 0 registros",
      "sInfoFiltered": "Filtrando de un total de _MAX_registros",
      "sInfoPostFix": "",
      "sSearch": "Buscar",
      "sUrl": "",
      "sInfoThousands": ",",
      "sLoadingRecords": "<b>No se encontraron datos</b>",
      "onPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending": "Activar para ordenar la columna de manera ascendente",
        "sSortDescending": "Activar para ordenar la columna de manera descendente",
      }
    }
    function cargar_contenido(contenedor, contenido) {
      $("#" + contenedor).load(contenido);
    }
    $.widget.bridge('uibutton', $.ui.button);

    function decimal(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla == 8 || tecla == 46) { // Permitir tecla de retroceso (8) y punto decimal (46)
        return true;
      }
      patron = /[0-9\.]/; // Ajustar el patrón para incluir el punto decimal
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

    function soloNumeros(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla == 8) {
        return true;
      }
      patron = /[0-9]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

    function soloLetras(e) {
      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
      especiales = "8-37-39-46";
      tecla_especial = false
      for (var i in especiales) {
        if (key == especiales[i]) {
          tecla_especial = true;
          break;
        }
      }
      if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
      }
    }
    function recargarPaginaYcargarContenido(contenedorId, url) {
      // Almacenar la URL del contenido en una cookie
      document.cookie = "url_contenido=" + url;

      // Recargar la página
      location.reload();
    }

    // Cuando la página se carga completamente
    window.onload = function () {
      // Obtener la URL del contenido almacenada en la cookie
      var url_contenido = getCookie("url_contenido");

      // Si se encuentra la URL del contenido en la cookie
      if (url_contenido) {
        // Cargar el contenido en el contenedor especificado
        cargar_contenido('contenido_principal', url_contenido);
      }
    };

    // Función para obtener el valor de una cookie por su nombre
    function getCookie(cookieName) {
      var name = cookieName + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var cookieArray = decodedCookie.split(';');
      for (var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i];
        while (cookie.charAt(0) == ' ') {
          cookie = cookie.substring(1);
        }
        if (cookie.indexOf(name) == 0) {
          return cookie.substring(name.length, cookie.length);
        }
      }
      return "";
    }



  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../Plantilla/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="../../Plantilla/bower_components/raphael/raphael.min.js"></script>

  <!-- Sparkline -->
  <script src="../../Plantilla/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="../../Plantilla/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../../Plantilla/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../Plantilla/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../Plantilla/bower_components/moment/min/moment.min.js"></script>
  <script src="../../Plantilla/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="../../Plantilla/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="../../Plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="../../Plantilla/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../../Plantilla/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../../Plantilla/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- ChartJS -->
  <script src="../../Plantilla/bower_components/chart.js/Chart.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="../../Plantilla/dist/js/demo.js"></script>
  <script src="../../Plantilla/plugins/DataTables/datatables.min.js"></script>
  <script src="../../Plantilla/plugins/select2/select2.min.js"></script>
  <script src="../../Plantilla/plugins/sweetalert2/sweetalert2.js"></script>
  <script src="../Js/Usuario.js"></script>
  <script>
    TraerDatosUsuario();
  </script>
</body>

</html>