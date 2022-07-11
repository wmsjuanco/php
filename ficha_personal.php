<?php

date_default_timezone_set("America/Argentina/buenos_aires");
// 
$nombre = "nelson daniel tarche";
$edad = 34;
//$aPeliculas = array ("volver al futuro", "titanic", "el dia despues de mañana");
$aPeliculas = ["volver al futuro", "titanic", "el dia despues de mañana"]; /* otra forma*/ 
// print_r($aPeliculas [0]  ); /* esto para que imprima en pantalla script solicitada*/
// var_dump($aPeliculas);  /* esto es para que imprima todo el array*/
print_r($aPeliculas [1]);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ficha personal</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Ficha personal</h1>
            </div>
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Fecha</th>
                        <td>
                            <?php
                            echo date("d/m/Y");

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nombre y apellido: </th>
                        <td>
                            <?php echo $nombre;?>
                        </td>
                    </tr>
                    <tr>
                        <th>Edad</th>
                        <td>
                        <?php echo $edad;?>
                        </td>
                    </tr>
                    <tr>
                        <th>Peliculas favoritas</th>
                        <td>
                        <?php echo $aPeliculas[0]; ?><br>
                        <?php echo $aPeliculas[1]; ?><br>
                        <?php echo $aPeliculas[2]; ?>
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>