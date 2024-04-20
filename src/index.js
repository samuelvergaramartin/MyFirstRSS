const express = require('express');
const phpExpress = require('php-express')();
const port = 8080;
const app = express();

app.engine('php', phpExpress.engine);
app.set('views', '.');
app.set('view engine', 'php');
app.all(/.+\.php$/, phpExpress.router);

app.use("/", (req, res) => res.render("public/index"));

app.listen(port, () => {
  console.log(`Servidor listo y escuchando en el puerto ` + port);
});