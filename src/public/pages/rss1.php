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
    <title>RSS 1</title>
</head>
<body>
    <?php 
        if($mode == normalCode) {
            echo $rssPageCode;
        }
        if($mode == maintenanceCode) {
            echo maintenanceCode;
        }
    ?>
</body>
</html>
