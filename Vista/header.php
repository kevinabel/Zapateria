
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio- Deep Blue Admin</title>


        <link rel="stylesheet" type="text/css" href="../Recursos/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../Recursos/css/local.css" />
        <script type="text/javascript" src="../Recursos/js/main.js"></script>
        <script type="text/javascript" src="../Recursos/js/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="../Recursos/js/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="../Recursos/bootstrap/js/bootstrap.min.js"></script>

        <!-- you need to include the shieldui css and js assets in order for the charts to work -->
        <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
        <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
        <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">ZAPATERIA</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active"><a href="index.php"><i class="fa fa-bullseye"></i> Inicio</a></li>
                        <li><a href="Vista.php"><i class="fa fa-tasks"></i>Compras</a></li>
                        <li><a href="Vista.php"><i class="fa fa-globe"></i> Ventas</a></li>
                        <li><a href="Vista.php"><i class="fa fa-list-ol"></i> Almacen</a></li>
                        <li><a href="Vista.php"><i class="fa fa-font"></i> Caja</a></li>
                        <li><a href="Vista.php"><i class="fa fa-font"></i> Contabilidad</a></li>
                        <li><a href="Vista.php"><i class="fa fa-list-ol"></i> Seguridad</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenimiento <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="Marca();">Marca</a></li>
                                <li><a href="Categoria.php">Categoria</a></li>
                            </ul>
                        </li>
                                        <!--<li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                                        <li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                                        <li><a href="bootstrap-grid.html"><i class="fa fa-table"></i> Bootstrap Grid</a></li>-->
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class="dropdown messages-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Mensajes <span class="badge">2</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">2 Nuevos Mensajes</li>
                                <li class="message-preview">
                                    <a href="#">
                                        <span class="avatar"><i class="fa fa-bell"></i></span>
                                        <span class="message">Alerta de Seguridad</span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="message-preview">
                                    <a href="#">
                                        <span class="avatar"><i class="fa fa-bell"></i></span>
                                        <span class="message">Alerta de Seguridad</span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Ir a la Bandeja<span class="badge">2</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Roberto<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
                                <li><a href="#"><i class="fa fa-gear"></i> Ajustes</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            