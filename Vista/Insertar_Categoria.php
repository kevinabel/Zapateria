<?php
include 'header.php';
require_once '../Modelo/Zapateria.php';
$ListaMarca = Zapateria::getMarca();
?>
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
            <a class="navbar-brand" >Categoria</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" align="center">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Insertar_Categoria.php">Nuevo</a></li>
                <li><a href='javascript:window.print(); void 0;'>Imprimir</a> </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<form action="Categoria.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Descripcion">
    </div>


    <button type="submit" class="btn btn-default">Guardar</button>
</form>
<?php
include 'foot.php';
?>


