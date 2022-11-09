<?php

if (!empty($_POST)) {
    $captcha = $_POST['g-recaptcha-response'];

    if (!$captcha) {
        echo "<script> alert('Verifica el captcha'); </script>";
    } else {
        header("Location: encuesta.php");
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="icon" href="img/logo_uaem.png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Test | Home</title>
</head>


<body>
    <header>
        <img src="img/Top.png" alt="">
    </header>

    <div class="contenido_principal">

        <div class="logo">
            <img class="logo_uaem" src="img/logo_escuela.png" alt="logo_uaem">
        </div>

        <h1 class="titulo">"Test Depresión, Ansiedad y Estres"</h1>
        <br>

        <div class="tarjeta">

            <div class="tarjeta_card">
                <img src="img/ayuda_icon.png" alt="">
                <p>Te ayudara a tener una noción.</p>
            </div>

            <div class="tarjeta_card">
                <img src="img/grafica_icon.png" alt="">
                <p>Para tener un mejor evita dejar preguntas en neutrales.</p>
            </div>

            <div class="tarjeta_card">
                <img src="img/tiempo_icon.png" alt="">
                <p>Te tomara aproximadamente 10 minuntos.</p>
            </div>

        </div>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

            <input class="button-68" type="submit" value="Empezar Test">

            <div class="g-recaptcha capt" data-sitekey="6LdsixQgAAAAAOW_graOjYXh25YsZEguv6IL90Ba"></div>

        </form>

    </div>

</body>

</html>