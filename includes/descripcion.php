<?php

function infoMostrar($materia)
{
    $conexion = mysqli_connect("localhost", "root", "", "orientacion_vocacional");
    $idMateria = selectMateria($materia);
    $consulta = "SELECT * FROM materias WHERE id_materia=" . $idMateria;
    $fila = mysqli_fetch_array(mysqli_query($conexion, $consulta));

    return $fila["resumen"];
}

function selectMateria($materia)
{
    $materiaBD = 0;
    switch ($materia) {
        case "Backend":
            $materiaBD = 1;
            break;
        case "Frontend":
            $materiaBD = 2;
            break;
        case "Análisis de Datos":
            $materiaBD = 3;
            break;
        case "Mantenimiento":
            $materiaBD = 4;
            break;
        case "Desarrollo Móvil":
            $materiaBD = 5;
            break;
        case "Tesis":
            $materiaBD = 6;
            break;
        case "Ciberseguridad":
            $materiaBD = 7;
            break;
        case "Servidores":
            $materiaBD = 8;
            break;
    }
    return $materiaBD;
}
