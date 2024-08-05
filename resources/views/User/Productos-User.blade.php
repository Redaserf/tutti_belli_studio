<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Productos</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
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
            background-color: #000;
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

h1, h2, h3, h4, h5 ,a, li{
  font-family: "Josefin Sans", sans-serif !important;
}

.custom-alert{
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

/*Footer*/
.footer {
    background-color: #000000;
    color: white;
    
    width: 100%;
}
.footer a {
    color: white;
}
.footer .links,
.footer .horario {
    list-style: none;
    padding: 0;
}
.footer .icons a {
    margin: 0 10px;
    color: white;
    font-size: 24px;
}
.footer .row > div {
    margin-bottom: 20px;
}
.footer .container-fluid {
    padding: 0 40px;
}


        /* Alerta bonita */

        @keyframes slideIn {
          from {
              transform: translateX(100%);
          }
          to {
              transform: translateX(0);
          }
        }

        @keyframes slideOut {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(100%);
            }
        }

        .custom-alert {
        background-color: #e0e0e0; /* Color rosado */
        border: 1px solid #e0e0e0;
        color: #000000;
        border-radius: 5px;
        padding: 20px;
        font-family: "Josefin Sans", sans-serif;
    }
    .custom-alert .alert-heading {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .custom-alert p {
        font-size: 1.1rem;
        margin-bottom: 0;
    }
    .custom-alert hr {
        border-top: 2px solid #000000;
    }

        

        /* Fin alerta bonita */

    </style>
</head>
<body class="hiddenX">
  <div id="contenedor_carga"></div>


<!-- NAVBAR / ENCABEZADO -->
<nav style="background: #f8d7da !important;" id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Home-usuario">
      <img src="/resources/img/dashboard-navbar/Letras Tutti.png" alt="Tutti Belli Studio" width="300" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
        <li class="nav-item">
          <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#servicios" style="color: #000000;">Servicios</a>
        </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Productos-User" style="color: #000000;">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#cursos" style="color: #000000;">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#contacto" style="color: #000000;">Contacto</i></a>
            </li>
            <span id="separador" class="vertical-separator"></span>
            <li class="nav-item" style="margin-left: 0;">
              <a class="nav-link active texto1" aria-current="page" href="/Perfil-User" style="color: #000000;">Cuenta <i class="fa-solid fa-user" style="margin-left: 10px;"></i></a>
            </li>
            <li class="nav-item" style="">
              <a class="nav-link active texto1" aria-current="page" href="/Logout" style="color: #000000;">Cerrar sesión<i class="fa-solid fa-arrow-right-from-bracket" style="margin-left: 10px;"></i></a>
            </li>
        </ul>
        <a id="carrito" style="margin-right: 30px;" class="nav-link active texto1" aria-current="page" href="/Carrito-User" style="color: #000000;"><i class="fa-solid fa-cart-shopping"></i></a>
          <a href="/Reservacion-User" style="margin-right:20px;">
            <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
          </a>
      </div>
  </div>
</nav>

  <br><br><br><br><br><br>



  <div id="productos" class="product-container">

  </div>

<br><br><br><br><br><br><br>
<!-- alerta -->

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
          <symbol id="check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </symbol>
          <symbol id="info-fill" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
          </symbol>
          <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </symbol>
      </svg>
  
        <div class="custom-alert alert alert-dismissible fade" role="alert">
            <svg id="alert-icon" class="bi flex-shrink-0 me-2" role="img" aria-label="Icon" width="24" height="24"></svg>
            <div id="alertaTexto">Texto de la alerta</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <!-- fin alerta -->


      <!-- FOOTER -->
      <footer id="contacto" class="footer" class="fonts3">
        <div style="background-color: #1e1b1b;"class="container-fluid">
            <div class="row text-center text-md-left">
              <br><br><br>
                <div class="col-md-4 text-center">
                    <img style="width: 400px;height: 100px;"src="/resources/img/dashboard-navbar/tuttibelli.png" alt="Tutti Belli Studio" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <h5>Dirección</h5>
                    <p>Torreon,Coahuila<br>Ex Hacienda la joya zafiro #67</p>
                    <p>Teléfono: +52 871 382 6767</p>
                    <p>Email: tuttibellistudiotrc@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces</h5>
                    <ul class="links">
                        <li><a href="/Home-usuario">Inicio</a></li>
                        <li><a href="/Home-usuario#servicios">Servicios</a></li>
                        <li><a href="/Home-usuario#cursos">Cursos</a></li>
                        <li><a href="/Logout">Cerrar sesión</a></li>
                    </ul>
                    <h5>Horario</h5>
                    <ul class="horario">
                        <li>Lunes a Viernes: 9:00-9:00</li>
                        <li>Sábado: 10:00-4:00</li>
                        <li>Domingo: 10:00-4:00</li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="icons">
                        <a href="https://www.facebook.com/profile.php?id=100066839301986" class=""><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/tutti_belli_trc_studio/" class=""><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/5218713826767" class=""><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: black !important; margin-bottom: -30px;" class="col-12 text-center mt-2">
          <p style="margin-bottom: 30px;">&copy;Copyright Tutti Belli Studio. Todos los derechos reservados
          <br>Diseñada y desarrollada by Deiters</p>
      </div>
    </footer>

         

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>

  // Crear función alertas (esto va por encima de todo para que funcione)   

  function mostrarAlerta(text, alertClass, iconId) {
    $("#alertaTexto").text(text);
    $(".custom-alert")
    .removeClass("alert-primary alert-success alert-warning alert-danger hide")
    .addClass(`show ${alertClass}`)
    .fadeIn();
    $("#alert-icon").html(`<use xlink:href="#${iconId}"/>`);
    setTimeout(function() {
      $(".custom-alert")
      .removeClass("show")
      .addClass("hide")
      .fadeOut();
    }, 6000);
  }
  
  // Dibujar productos

  function dibujarProductos() {
    $.ajax({
        url: '/productosCompras',
        method: 'GET',
        success: function(data) {
            const productos = $('#productos');
            productos.empty();
            if (data.length === 0) {
            productos.append(`
              <div class="col-12 text-center my-5">
                <div class="custom-alert" role="alert">
                  <h4 class="alert-heading">¡No hay productos disponibles en este momento!</h4>
                  <p>Actualmente no hay productos. Vuelve más tarde para ver si hay productos disponibles.</p>
                  <hr>
                  <p class="mb-0">Mientras tanto, puedes explorar otros servicios que ofrecemos.</p>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
              </div>
            `);
          }
            data.forEach(producto => {
                const card = `
                    <div class="product-card">
                        <img src="/storage/${producto.imagen}" alt="${producto.nombre}" class="product-image">
                        <div class="product-info">
                            <h2 class="product-title">${producto.nombre}</h2>
                            <p class="product-description">${producto.descripcion}</p>
                            <p class="product-price">$${producto.precio}</p>
                        </div>
                        <button style="margin-bottom: 10px;" type="button" class="btn btn-outline-success agregar-carrito" data-id="${producto.id}">Agregar al carrito</button>
                    </div>
                `;
                productos.append(card);
            });

            $('.agregar-carrito').click(function() {
                const productId = $(this).data('id');
                agregarAlCarrito(productId);
            });
        }
    });
}

function agregarAlCarrito(productId) {
    $.ajax({
        url: '/carrito/agregar',
        method: 'POST',
        data: {
            productId: productId,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            mostrarAlerta('Producto agregado al carrito', 'alert-success', 'check-circle-fill');
        },
        error: function(error) {
            console.log(error);
            mostrarAlerta('Hubo un error al agregar el producto al carrito', 'alert-danger', 'exclamation-triangle-fill');
        }
    });
}
                             
                  // Pantalla de carga
                  var loader = document.getElementById("contenedor_carga");
                  var navbar = document.getElementById("navbar");
                  window.addEventListener('load', function(){
                    $('#navbar').css('visibility', 'visible');
                    loader.style.display = "none";
                  })
                  
                  $(document).ready(function(){
                  
                    dibujarProductos();
                  
                    function separadorHidden(){
                    var cuentaLi = document.getElementById("cuenta");
                    var carrito = document.getElementById("carrito");
                    var separador = document.getElementById("separador");
                    if (window.innerWidth <= 992) {
                    $('.vertical-separator').css('visibility', 'hidden');
                    $('#carrito').css('marginBottom', '20px');
                    } else {
                    $('.vertical-separator').css('visibility', 'visible');
                    $('#carrito').css('marginBottom', '0');
                    }
                    }
                    window.addEventListener('resize', separadorHidden);
                    separadorHidden();
                  

            // Alertas Document.ready

         // Mostrar alerta guardada en localStorage para que no se quite cuando reinicies la pagina
            const alertMessage = localStorage.getItem('alertMessage');
            const alertClass = localStorage.getItem('alertClass');
            const alertIcon = localStorage.getItem('alertIcon');

            if (alertMessage) {
                mostrarAlerta(alertMessage, alertClass, alertIcon);

                // Limpiar el mensaje de alerta después de mostrarlo
                localStorage.removeItem('alertMessage');
                localStorage.removeItem('alertClass');
                localStorage.removeItem('alertIcon');
            }

            //Fin alertas


                      // Scripts aquí
                  
                  });

</script>
</body>
</html>
