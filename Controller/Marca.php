<?php
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
Zapateria::RegMarca($descripcion);
alert('ingreado');
?>