<?php 
const normalMode = "Normal";
const maintenanceMode = "Maintenance";
const mainCSSPath = "../styles/main.css";
const normalCSSPath = "./styles/exercisepart1.css";
const maintenanceCSSPath = "../styles/maintenance.css";
const author = "Samuel Vergara Martín";

const normalCode = "
    <h1>Ejercicio parte 1<h1>
    <div id='blog-feed'></div>
    <script src='test.js'></script>
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
    <title>Ejercicio RSS Parte 1</title>
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