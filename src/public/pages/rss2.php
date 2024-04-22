<?php 
    require("../config/styles.php");
    require("../config/modes.php");
    require("../config/codes.php");
    require("../config/modes.php");
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
    <title>RSS 2</title>
</head>
<body>
    <a href=<?php echo $headerURL; ?>/src/public/index.php?source=main>Volver a inicio</a> <br>
    <script>const rss = 2;</script>
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