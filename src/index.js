const express = require('express');
const phpExpress = require('php-express')();
const port = 8080;
const app = express();

app.engine('php', phpExpress.engine);
app.set('views', '.');
app.set('view engine', 'php');
app.all(/.+\.php$/, phpExpress.router);

app.get("/main.xml", (req, res) => {
    res.sendFile(__dirname + "/main.xml");
});
app.get("/test", (req, res) => {
    res.sendFile(__dirname + "/test.js");
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