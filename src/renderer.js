 // URL del feed RSS (reemplaza con la URL de tu propio feed)
     var feedURL;
     switch(rss) {
        case 1: feedURL = "https://www.juntadeandalucia.es/educacion/portals/delegate/rss/ced/portalconsejeria/alumnado/-/-/false/OR/true/ishare_noticefrom/DESC/";
        break;
        case 2: feedURL = "https://feeds.bbci.co.uk/news/world/rss.xml";
        break;
        case 3: feedURL = "https://rss.nytimes.com/services/xml/rss/nyt/Europe.xml";
        break;
        default: feedURL = "https://aleare.com.ar/blog/feed/";
     }
 // Función para cargar el feed y mostrarlo en el contenedor

 function cargarFeed() {//
     fetch(`https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(feedURL)}`)
         .then(response => response.json())
         .then(data => {
             // Verificar si se obtuvo el feed correctamente
             if (data.status === 'ok') {
                 mostrarFeed(data.items);
             } else {
                 console.error('Error al obtener el feed.');
             }
         })
         .catch(error => {
             console.error('Error de red:', error);
         });
 }

 // Función para mostrar el feed en el contenedor
 function mostrarFeed(items) {
        var contenedor = document.getElementById('blog-feed');

        // Crear elementos HTML para cada artículo del feed
        items.forEach(item => {
        // Crear un DIV para cada artículo del feed
        var contenedorArticulo = document.createElement('div');

        var titulo = document.createElement('h2');
        titulo.textContent = item.title;

        var enlace = document.createElement('a');
        enlace.href = item.link;
        enlace.textContent = 'Leer más';

        var descripcion = document.createElement('p');
        descripcion.innerHTML = item.description;

        var separador = document.createElement('hr');

        // Agregar elementos al contenedor del artículo
        //contenedorArticulo.appendChild(imagen);
        contenedorArticulo.appendChild(titulo);
        contenedorArticulo.appendChild(descripcion);
        contenedorArticulo.appendChild(enlace);
        contenedorArticulo.appendChild(separador);

        // Agregar el contenedor del artículo al contenedor principal
        contenedor.appendChild(contenedorArticulo);
     });
 }

 // Cargar el feed cuando la página se carga completamente
 window.addEventListener('load', cargarFeed);