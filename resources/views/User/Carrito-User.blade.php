<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
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


#navbar {
    font-family: "Josefin Sans", sans-serif !important;  
}

label, p, input, button, h1, h2, h3 {
    font-family: "Josefin Sans", sans-serif !important;
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

    .main-container {
            font-family: "Josefin Sans", sans-serif !important;
            display: flex;
            justify-content: space-between;
            padding: 50px;
        }

        .table-container {
            flex: 3;
            padding: 16px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .summary-container {
            flex: 1;
            padding: 16px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .total-price {
            font-size: 1.5em;
            color: #000;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }

        .table-container img {
            width: 70px; /* Ajusta esta anchura según tus necesidades */
            height: auto; /* Mantiene la proporción de la imagen */
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .btn-buy {
            margin-top: 20px;
            font-size: 1.2em;
            padding: 10px 20px;
        }

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

<br><br><br><br>

<div class="main-container">
  <div class="table-container">
      <table class="table">
          <thead>
              <tr>
                  <th scope="col">Imagen</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Costo</th>
                  <th scope="col">Eliminar</th>
              </tr>
          </thead>
          <tbody id="carritoTabla">

          </tbody>
      </table>
  </div>
  <div class="summary-container">
      <div id="costo-total" class="total-price"></div>
      <button id="comprar" class="btn btn-success btn-buy">Comprar</button>
  </div>
</div>

<br><br>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>

function dibujarCarrito() {
            $.ajax({
                url: '/get/carrito',
                method: 'GET',
                success: function(data) {
                    const carrito = $('#carritoTabla');
                    const costoTotal = $('#costo-total');
                    carrito.empty();
                    let total = 0;
                    data.forEach(producto => {
                        const item = `
                            <tr>
                                <td><img src="/storage/${producto.imagen}" alt="${producto.nombre}"></td>
                                <td>${producto.nombre}</td>
                                <td>${producto.descripcion}</td>
                                <td>$${producto.precio}</td>
                                <td>
                                  <button class="btn btn-danger" onclick="carritoDelete(${producto.pivot.id})"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        `;
                        carrito.append(item);
                        total += producto.precio;
                    });
                    costoTotal.text('Costo Total: $' + total);
                },
                error: function(error) {
                  console.log(error);
                  alert('Hubo un error al obtener los productos del carrito');
                }
              });
            }

        // Eliminar producto del carrito

        function carritoDelete(id){
          $.ajax({
              url: `/carrito/eliminar/${id}`,
              method: 'GET',
              success: function(){
                  dibujarCarrito();
              },
              error: function(error){
                  console.log(error)
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
  dibujarCarrito();

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



    // Scripts aquí

});



</script>
</body>
</html>
