const express = require('express');
const phpExpress = require('php-express')();
var port;
const app = express();
const { spawn } = require('child_process');

spawn(__dirname + "/portReader.sh").stdout.on("data", (data) => port = Number(`${data}`));
setTimeout(() => {
    app.engine('php', phpExpress.engine);
    app.set('views', '.');
    app.set('view engine', 'php');
    app.all(/.+\.php$/, phpExpress.router);

    app.get("/main.xml", (req, res) => {
        res.sendFile(__dirname + "/main.xml");
    });
    app.get("/loadRSS", (req, res) => {
        res.sendFile(__dirname + "/renderer.js");
    });
    app.get("/rss1", (req, res) => {
        res.render(__dirname + "/public/pages/rss1");
    });
    app.get("/rss2", (req, res) => {
        res.render(__dirname + "/public/pages/rss2");
    });
    app.get("/rss3", (req, res) => {
        res.render(__dirname + "/public/pages/rss3");
    });
    app.use("/", (req, res) => {
        const parametros = req.query;
        res.render("src/public/index", {
            parametros: parametros
        });
    });


    app.listen(port, () => {
        console.log(`Servidor listo y escuchando en el puerto ` + port);
    });
}, 1000);