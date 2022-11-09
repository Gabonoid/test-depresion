<?php
include_once("includes/pregunta.php");

$conexion = mysqli_connect("localhost", "root", "", "orientacion_vocacional");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/logo_uaem.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_encuesta.css">
    <title>Orientacion Vocacional | Encuesta</title>
</head>

<body>
    <header>
        <img src="img/Top.png" alt="">
    </header>

    <div class="logo">
        <img class="logo_uaem" src="img/logo_escuela.png" alt="logo_uaem">
    </div>

    <div class="card_preguntas">

        <form id="formulario_radio" action="resultados.php" method="POST">

            <?php
            for ($i = 1; $i < 19; $i++) {
                $consulta = "SELECT * FROM preguntas WHERE id_pregunta=" . $i;

                $fila = mysqli_fetch_array(mysqli_query($conexion, $consulta));

                pregunta($fila["id_pregunta"], $fila["pregunta"]);
            }
            ?>

            <input id="button-68" type="submit" value="Terminar">
        </form>

    </div>
</body>

</html>