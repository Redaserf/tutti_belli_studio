<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
                  @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');


body, html {
    margin: 0;
    padding: 0;
    background-image: url('/resources/img/home/low-poly-grid-haikei.svg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    min-height: 100vh;
}

.hiddenX{
    overflow-x: hidden;
}

.vertical-separator {
            display: inline-block;
            width: 1.5px;
            height: 30px;
            background-color: #C8A096;
            margin: 3px 15px;
            vertical-align: middle;
}

/* ANIMACION DE CARGA */
#contenedor_carga{
        background: #ffffff url(/resources/img/home/preloader.gif) no-repeat center center;
        background-size: 20%;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 100;
    }

/* Aquí tus estilos */

.fonts3{
  font-family: "Josefin Sans", sans-serif !important;
}

#navbar{
  font-family: "Josefin Sans", sans-serif !important;  
}

label{
  font-family: "Josefin Sans", sans-serif !important;
}
p{
  font-family: "Josefin Sans", sans-serif !important;
}
input{
  font-family: "Josefin Sans", sans-serif !important;
}
button{
  font-family: "Josefin Sans", sans-serif !important;
}

h1, h2, h3{
  font-family: "Josefin Sans", sans-serif !important;
}

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Ubuntu';
    margin: 0 auto;
  }

  .product-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 16px;
    padding: 16px;
}

.product-card {
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    text-align: center;
}

.product-image {
  border-radius: 20px;
    width: 50%;
    height: 200px; /* Ajusta esta altura según tus necesidades */
    object-fit:contain; /* Mantiene la proporción de la imagen y recorta si es necesario */
}

.product-info {
    padding: 16px;
}

.product-title {
    font-size: 1.5em;
    margin: 0 0 10px 0;
}

.product-description {
    font-size: 1em;
    color: #666;
    margin: 0 0 10px 0;
}

.product-price {
    font-size: 1.2em;
    color: #333;
    font-weight: bold;
}


    </style>
</head>
<body class="hiddenX">
  <div id="contenedor_carga"></div>

  <!-- NAVBAR / ENCABEZADO -->
  <nav style="background: #f8d7da !important;" id="navbar" class="fonts3 navbar navbar-expand-lg fixed-top bg-body-tertiary" style="visibility: hidden;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/resources/img/dashboard-navbar/Letras Tutti.png" alt="Tutti Belli Studio" width="300" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
          <li class="nav-item">
            <a class="nav-link active texto1" aria-current="page" href="/Home-guest#servicios" style="color: #000000;">Servicios</a>
          </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/Productos-Guest" style="color: #000000;">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active texto1" aria-current="page" href="/Home-guest#cursos" style="color: #000000;">Cursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active texto1" aria-current="page" href="/Home-guest#contacto" style="color: #000000;">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active texto1" aria-current="page" href="/Login" style="color: #000000;">Iniciar sesión</a>
              </li>
            </ul>
            <a href="/Login">
              <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
            </a>
          </div>
        </div>
      </nav>

      <br><br><br><br><br><br>


      <div id="productos" class="product-container">

      </div>

      <br><br><br>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>

  // Dibujar productos

  function dibujarProductos() {
          $.ajax({
        url: '/get/productos',
        method: 'GET',
        success: function(data) {
          const productos = $('#productos');
          productos.empty();
          data.forEach(producto => {
                const card = `
                <div class="product-card">
                        <img src="/storage/${producto.imagen}" alt="${producto.nombre}" class="product-image">
                        <div class="product-info">
                            <h2 class="product-title">${producto.nombre}</h2>
                            <p class="product-description">${producto.descripcion}</p>
                            <p class="product-price">$${producto.precio}</p>
                        </div>
                        <a href="/Login">
                          <button style="margin-bottom: 10px;" type="button" class="btn btn-outline-success">Agregar al carrito</button>
                          </a>
                          </div>
                          `;
                          productos.append(card);
                        });
                      }
                    });
                  }

                  // Pantalla de carga
                  var loader = document.getElementById("contenedor_carga");
                  var navbar = document.getElementById("navbar");
                  window.addEventListener('load', function(){
                      $('#navbar').css('visibility', 'visible');
                      loader.style.display = "none";
                  });


$(document).ready(function(){

  dibujarProductos();


  
  // Fin document.ready
});



</script>
</body>
</html>
