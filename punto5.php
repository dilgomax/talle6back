<?php
    include 'db/conexion.php';

    $query = mysqli_query($conexion, "SELECT * FROM usuarios")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/ico_base.png" type="image/x-icon">
    <title>Base de datoas</title>
</head>
<body id="bg5">
    <header id="fixed">
        <div class="dropdown">
            <button class="bt" ><a href="index.html">INICIO</a></button>
        </div>
        <div class="dropdown">
            <button class="bt"><a href="index.html#sl">TALLER</a></button>
            <div class="dropdown-content">
                <a href="punto1.php">1. Calculadora</a>
                <a href="punto2.php">2. Mayor o menor</a>
                <a href="punto3.php">3. Envío de datos GET</a>
                <a href="punto4.php">4. Edad exacta</a>
                <a href="punto5.php">5. Base de datos</a>
            </div>
        </div>
        <div class="dropdown">
        <button class="bt" ><a href="../index.html#contacto">CONTACTO</a></button>
        </div>
    </header>
<div class="wrapper">
    <div class="container">
            <div class="filter">
            <div class="row">
                <div class="col-sm-4">
                <div class="show-row">
                    <select class="form-control">
                    <option value="5" selected="selected">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    </select>
                </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                <div class="search-row">
                    <input type="text" name="search" class="form-control" placeholder="Enter your keyword">
                </div>
                </div>
            </div>
            </div>
        <table id="music" class="table table-responsive table-hover">
            <thead>
            <tr  class="myHead">
                <th>#</th>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
            </tr>
            </thead>
            <tbody>

            <?php
            
            while ($datos = mysqli_fetch_array($query)) {
                $id = $datos['id'];
                $nombre = $datos['nombre'];
                $apellido = $datos['apellido'];
                $cedula = $datos['cedula'];

                echo'
                <tr data-url="FQS7i2z1CoA">
                    <td></td>
                    <td>'.$id.'</td>
                    <td>'.$nombre.'</td>
                    <td>'.$apellido.'</td>
                    <td>'.$cedula.'</td>
                </tr>
                ';
            }

            ?>
            </tbody>
        </table>
        <div class="text-center controller">
            <ul class="pagination"></ul>
            <ul class="pager">
            <li ><a href="javascript:void(0)" class="prev">Previous</a></li>
            <li><a href="javascript:void(0)" class="next">Next</a></li>
            </ul>
        </div>
    </div>
</div>
    <script src="js/script.js"></script>
</body>
</html>