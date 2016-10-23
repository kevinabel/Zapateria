<?php
	
	# conectare la base de datos
    //$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    //require_once('db.php');
    //$connect=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $connect=@mysqli_connect("localhost", "root", "", "aeminpu");
    mysqli_set_charset($connect,'utf8');
    if(!$connect){
        die("imposible conectarse: ".mysqli_error($connect));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>

