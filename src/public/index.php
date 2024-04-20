<?php 
const normalMode = "Normal";
const maintenanceMode = "Maintenance";
const normalCSSPath = "./styles/normal.css";
const maintenanceCSSPath = "./styles/maintenance.css";

const normalCode = "
    <h1 style='color: cyan; text-align: center; font-size: 40px;'>Mis ejercicios de RSS. Samuel Vergara Martín</h1>

    <a style='font-size: 40px; color: red; 'href='https://exerciserss.netcathost.es/parte1'>Parte 1 del ejercicio (con el rss en el xml)</a> <br>
    <a style='font-size: 40px; color: red; ' href='https://exerciserss.netcathost.es/parte2'>Parte 2 del ejercicio (enlaces de los rss de 3 sitios diferentes)</a>
";
const maintenanceCode = "
    <h1>Página web en mantenimiento. Disculpe las molestias.</h1>
";

$mode = normalMode;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href=<?php
        if($mode == normalMode) {
            echo normalCSSPath;
        }
        if($mode == maintenanceMode) {
            echo maintenanceCSSPath;
        }
    ?>>
    <title>Ejercicio RSS</title>
</head>
<body>
    <?php 
        if($mode == normalMode) {
            echo normalCode;
        }
        if($mode == maintenanceMode) {
            echo maintenanceCode;
        }
    ?>
</body>
</html>