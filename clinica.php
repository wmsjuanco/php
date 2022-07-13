<?php
$aPacientes[] = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "ana acuña",
    "edad" => 45,
    "peso" => 81.50
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Juan I",
    "edad" => 66,
    "peso" => 79
);


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de paciente</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre y apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $aPacientes["dni"];  ?></td>
                            <td><?php echo $aPacientes["nombre"]; ?></td>
                            <td><?php echo $aPacientes["edad"];  ?></td>
                            <td><?php echo $aPacientes["peso"];  ?></td>
                        </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </main>

</body>

</html>
<tr>

</tr>
<?php foreach ($aPacientes as $paciente) { ?>

<?php } ?>