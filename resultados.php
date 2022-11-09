<?php
require_once("includes/descripcion.php");

$back =
    $_POST[1] +
    $_POST[6] +
    $_POST[8] +
    $_POST[10] +
    $_POST[11];
$front =
    $_POST[1] +
    $_POST[3] +
    $_POST[6] +
    $_POST[8] +
    $_POST[12] +
    $_POST[13];
$analisis =
    $_POST[1] +
    $_POST[2] +
    $_POST[4] +
    $_POST[9] +
    $_POST[14] +
    $_POST[15];
$mantenimiento = ($_POST[1] == 1) ? 0 : ($_POST[3] +
    $_POST[5] +
    $_POST[7] +
    $_POST[8]);
$movil =
    $_POST[1] +
    $_POST[3] +
    $_POST[6] +
    $_POST[8] +
    $_POST[9] +
    $_POST[16] +
    $_POST[17];
$tesis = ($_POST[1] == 1) ? 0 : ($_POST[2] +
    $_POST[2] +
    $_POST[9] +
    $_POST[18]);
$seguridad =
    $_POST[1] +
    $_POST[2] +
    $_POST[4] +
    $_POST[5] +
    $_POST[7] +
    $_POST[9];
$server =
    $_POST[1] +
    $_POST[5] +
    $_POST[7] +
    $_POST[8];

$arrayValores = array(
    "Backend" => $back,
    "Frontend" => $front,
    "Análisis de Datos" => $analisis,
    "Mantenimiento" => $mantenimiento,
    "Desarrollo Móvil" => $movil,
    "Tesis" => $tesis,
    "Ciberseguridad" => $seguridad,
    "Servidores" => $server
);

$topMateria = array_search(max($arrayValores), $arrayValores);
$puntajeMayor = max($back, $front, $analisis, $mantenimiento, $movil, $tesis, $seguridad, $server);
$porcentaje = $puntajeMayor * 100 / 18;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/logo_uaem.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_resultados.css">
    <title>Orientacion Vocacional | Resultados</title>
</head>

<body>
    <header>
        <img src="img/Top.png" alt="">
    </header>

    <div class="logo">
        <img class="logo_uaem" src="img/logo_escuela.png" alt="logo_uaem">
    </div>
    <h1 class="titulo">Resultados</h1>
    <div class="principal">

        <section class="content">
            <canvas id="myChart"></canvas>
        </section>

        <div class="informacion">

            <div class="porcentaje_card">
                <h2>Con un <b><?php echo $porcentaje ?>%</b></h2>
                <p>Eres candidato para <u><?php echo $topMateria ?></u></p>
                <img src="img/Score_icon.png" class="porcentaje_img">
            </div>

            <div class="info_materia">
                <h2>¿Qué es <?php echo $topMateria ?>?</h2>
                <br>
                <p><?php echo infoMostrar($topMateria) ?></p>
            </div>            

            <a href="./index.php">Volver al inicio</a>
            
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php
    require_once("includes/grafica.php");
    graficar($back, $front, $analisis, $mantenimiento, $movil, $tesis, $seguridad, $server);
    ?>
</body>

</html>