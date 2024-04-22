<?php 
    require("../config/styles.php");
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
    <title>RSS 1</title>
</head>
<body>
    <h1 id="titulo">Ejercicio de RSS Parte 2</h1>
    <div id='blog-feed'></div>
    <script src=<?php echo $headerURL;?>/loadRSS></script>
</body>
</html>
