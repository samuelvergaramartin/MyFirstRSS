<?php 
    require("../config/styles.php");
    require("../config/modes.php");
    require("../config/codes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo mainCSSStyle; ?>
    <?php 
        if($mode == maintenanceMode) {
            echo maintenanceCSSStyle;
        }
        if($mode == normalMode) {
            echo normalCSSStyle;
        }
    ?>
    <title>RSS 3</title>
</head>
<body>
    <a href=<?php echo $headerURL; ?>/src/public/index.php?source=main>Volver a inicio</a> <br>
    <a href=<?php echo $headerURL; ?>/src/public/index.php?source=exRSSPart2>Volver atrás</a> <br>
    <script>const rss = 3;</script>
    <?php 
        if($mode == normalMode) {
            echo $rssPageCode;
        }
        if($mode == maintenanceMode) {
            echo maintenanceCode;
        }
    ?>
</body>
</html>