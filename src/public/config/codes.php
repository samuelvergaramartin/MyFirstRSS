<?php
    $mainPageCode = "
        <h1 id='titulo'>Mis ejercicios de RSS. Samuel Vergara Martín</h1>

        <a href='" . $headerURL ."/src/public/index.php?source=exRSSPart1'>Parte 1 del ejercicio (con el rss en el xml)</a> <br>
        <a href='" . $headerURL . "/src/public/index.php?source=exRSSPart2'>Parte 2 del ejercicio (enlaces de los rss de 3 sitios diferentes)</a>
    ";
    const maintenanceCode = "
        <h1>Página web en mantenimiento. Disculpe las molestias.</h1>
    ";
    $rssPageCode = "
        <h1 id='titulo'>Ejercicio de RSS Parte 2</h1>
        <div id='blog-feed'></div>
        <script src=$headerURL/loadRSS></script>
    ";
?>