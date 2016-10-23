<?php
require_once '../Modelo/Zapateria.php';
$ListaMarca = Zapateria::getMarca();
?>
<span id="mensaje"></span>
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
            <a class="navbar-brand" >Marca</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" align="center">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
            </ul>
            <form class="navbar-form navbar-left" id="buscar">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" onclick="NuevaMarca();">Nuevo</a></li>
                <li><a href='javascript:window.print(); void 0;'>Imprimir</a> </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<table class="table table-striped" align="center" id="listamarca">
    <thead>
        <tr>
            <th><h3>Descripcion</h3></th>
            <th><h3>Editar</h3></th>
            <th><h3>Eliminar</h3></th>

        </tr>
    </thead>
    <?php
    foreach ($ListaMarca as $lista) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $lista['nombre'] ?></td>
                <td>
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </td>
                <td>
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </td>
            </tr>
        </tbody>
        <?php
    }
    ?>
</table>
<div id="insertarmarca">
    <form id="insertar" role="form" action="" onsubmit="InsertarMarca();">
        <div class="form-group">
            <label>Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="">
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
</div>
<script>
    $('#insertarmarca').hide();
    function NuevaMarca() {
        $('#buscar').hide();
        $('#listamarca').hide();
        $('#insertarmarca').show();
    }
    function InsertarMarca() {
        var valores = {
            'descripcion': $('#descripcion').val()
        };
        $.ajax({
            type: "POST",
            url: "Controller/Marca.php",
            data: valores,
            success: function (data) {
                $('#insertarmarca').hide();
                $('#buscar').show();
                $('#listamarca').show();
            }
        });
    }
</script>


