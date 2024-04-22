<?php
    require("./config/hosts.php");
    $lectura = file_get_contents("../server.conf");
    $posicion = strpos($lectura, 'PORT=');
    $port = substr($lectura, $posicion + 5);

    $headerURL;
    const mainPage = "mainPage";
    const part1Page = "part1Page";
    const part2Page = "part2Page";

    switch(host) {
        case localhost: $headerURL = "http://rss.samuelpc.local:" . $port;
        break;
        case vpsWithoutCloudflareProxy: $headerURL = "https://exerciserss.netcathost.es:" . $port;
        break;
        case vpsWithCloudflareProxy: $headerURL = "https://exerciserss.netcathost.es:";
        break;
        default: throw new Error("ERROR: Configuración de host inválida!");
    }
    
?>