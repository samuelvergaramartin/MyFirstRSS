<?php 
    require("./config/modes.php");
    require("./config/routes.php");
    require("./config/codes.php");
    require("./config/styles.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo mainCSSStyle ?>
    <?php 
        if($mode == maintenanceMode) {
            echo maintenanceCSSStyle;
        }
        if($mode == normalMode) {
            echo normalCSSStyle;
        }
    ?>
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