<?php
    $lectura = file_get_contents("../server.conf");
    $posicion = strpos($lectura, 'PORT=');
    $port = substr($lectura, $posicion + 5);

    const mainPage = "mainPage";
    const part1Page = "part1Page";
    const part2Page = "part2Page";
    $headerURL = "http://rss.samuelpc.local:" . $port;
?>