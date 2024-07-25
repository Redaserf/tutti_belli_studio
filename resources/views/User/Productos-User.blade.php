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
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    text-align: center;
}

.product-image {
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
    <div class="product-card">
        <img src="data:image/jpeg;base64,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" alt="Producto" class="product-image">
        <div class="product-info">
            <h2 class="product-title">Aguja pro</h2>
            <p class="product-description">Aguja marca Isra que sirve para penetrar todo tipo de piel</p>
            <p class="product-price">$200</p>
        </div>
        <a href="#">
          <button style="margin-bottom: 10px;" id="" type="button" class="btn btn-outline-success">Agregar al carrito</button>
        </a>
    </div>
  </div>

<br><br><br>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){

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


// Pantalla de carga
var loader = document.getElementById("contenedor_carga");
var navbar = document.getElementById("navbar");
window.addEventListener('load', function(){
    $('#navbar').css('visibility', 'visible');
    loader.style.display = "none";
})

</script>
</body>
</html>
