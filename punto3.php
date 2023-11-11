<?php

include "html/punto3.html";


if (isset($_GET['verificar'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cc'];

    echo "<h6>Nombre:  ".$nombre."</h6>";
    echo "<h6>Apellido:  ".$apellido."</h6>";
    echo "<h6>Cédula:  ".$cedula."</h6>";

}

?>