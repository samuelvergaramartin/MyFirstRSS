<?php
    $mainPageCode = "
        <h1 id='titulo'>Mis ejercicios de RSS. Samuel Vergara Martín</h1>

        <ul>
            <li class='listados'><a href='" . $headerURL ."/src/public/index.php?source=exRSSPart1'>Link parte 1 del ejercicio (con el rss en el xml)</a> <br></li>
            <li class='listados'><a href='" . $headerURL . "/src/public/index.php?source=exRSSPart2'>Link parte 2 del ejercicio (enlaces de los rss de 3 sitios diferentes)</a></li>
        </ul>
    ";
    const maintenanceCode = "
        <h1>Página web en mantenimiento. Disculpe las molestias.</h1>
    ";
    $rssPageCode = "
        <h1 id='titulo'>Ejercicio de RSS Parte 2</h1>
        <div id='blog-feed'></div>
        <script src='" . $headerURL . "/loadRSS'></script>
    ";
?>
