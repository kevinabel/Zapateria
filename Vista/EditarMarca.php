
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../Recursos/css/materialize-css/dist/css/materialize.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

        <div class="divider"></div>
        <div class="section">
        </div>

        <div class="divider"></div>
        <div class="section">
            <div class="col s1 "></div>
            <div class=" card-panel teal lighten-5" >
                <div class=" row ">
                <div class="col s7" align="center">
                    <h5>Marca</h5>
                </div>
                <div class="col s5" align="right">
                    <a class="waves-effect waves-light btn" href="InsertarMarca.php"><i class="material-icons ">add</i> Nuevo</a>
                    <a class="waves-effect waves-light btn">PDF</a>
                     <a class="waves-effect waves-light btn" href="../index.php">Inicio</a>
                </div>
                    </div>
            </div>
            <div class="col s1 "></div>
        </div>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s1"> </div>
                <div class="col s10" > 
                    <div class="row">
                        <form class="col s12" action="Marca.php">

                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="text" class="validate" value="Alvin" >
                                    <label for="password">Descripción</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col s1"> </div>
            </div>
        </div>

        <div class="divider"></div>
        <div class="section">
        </div>


        <!-- include jquery -->
        <script type="text/javascript" src="../Recursos/js/jquery/dist/jquery.js"></script>

        <!-- material design js -->
        <script src="../Recursos/css/materialize-css/dist/js/materialize.min.js"></script>

        <!-- include angular js -->
        <script src="../Recursos/js/angular/angular.min.js"></script>
    </body>
</html>


