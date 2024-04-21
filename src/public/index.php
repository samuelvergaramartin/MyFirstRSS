<?php 
    require("./config/modes.php");
    require("./config/routes.php");
    require("./config/codes.php");
    require("./config/styles.php");

    $targeted_source;

    if(isset($_GET['source'])) {
        switch($_GET['source']) {
            case "main": $targeted_source = mainPage;
            break;
            case "exRSSPart1": $targeted_source = part1Page;
            break;
            case "exRSSPart2": $targeted_source = part2Page;
            break;
            default: $targeted_source = mainPage;
            break;
        }
    }
    else $targeted_source = mainPage;
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
            switch($targeted_source) {
                case mainPage: echo mainPageCode;
                break;
                case part1Page: include("./pages/exercisepart1.html");
                break;
                case part2Page: echo maintenanceCode;
                break;
            }
        }
        if($mode == maintenanceMode) {
            echo maintenanceCode;
        }
    ?>
</body>
</html>