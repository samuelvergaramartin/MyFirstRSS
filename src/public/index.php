<?php 
    require("./config/modes.php");
    require("./config/routes.php");
    require("./config/codes.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo mainCSSPath ?>>
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