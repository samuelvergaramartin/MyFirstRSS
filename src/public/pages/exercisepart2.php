<?php 
const normalMode = "Normal";
const maintenanceMode = "Maintenance";
const mainCSSPath = "../styles/main.css";
const normalCSSPath = "./styles/exercisepart2.css";
const maintenanceCSSPath = "../styles/maintenance.css";
const author = "Samuel Vergara Martín";

const normalCodeDEPRECATED = "
    <h1 style='color: cyan; text-align: center'>Mi Ejercicio de RSS</h1>

    <div id='blog-feed'></div>
    <script src='pages/p1rss.js'></script>
";

const normalCode = "
    <h1>Ejercicio parte 2</h1>
";

const maintenanceCode = "
    <h1>Sección en mantenimiento. Disculpe las molestias.</h1>
";

$mode = maintenanceMode;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio RSS Parte 2</title>
    <link rel="stylesheet" href=<?php
        if($mode == normalMode) {
            echo normalCSSPath;
        }
        if($mode == maintenanceMode) {
            echo maintenanceCSSPath;
        }
    ?>>
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