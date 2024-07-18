<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

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



    </style>
</head>
<body class="hiddenX">


    <!-- NAVBAR / ENCABEZADO -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
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
                <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#servicios" style="color: #C8A096;">Servicios</a>
              </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Productos-User" style="color: #C8A096;">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#contacto" style="color: #C8A096;">Contacto</i></a>
                  </li>
                  <span id="separador" class="vertical-separator"></span>
                  <li class="nav-item" style="margin-left: 0;">
                    <a class="nav-link active texto1" aria-current="page" href="/Perfil-User" style="color: #C8A096;">Cuenta <i class="fa-solid fa-user" style="margin-left: 10px;"></i></a>
                  </li>
                  <li class="nav-item" style="margin-left: 100px;">
                    <a class="nav-link active texto1" aria-current="page" href="/Logout" style="color: #C8A096;">Cerrar sesión<i class="fa-solid fa-arrow-right-from-bracket" style="margin-left: 10px;"></i></a>
                  </li>
                </ul>
                <a href="/Reservacion-User">
                  <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
                </a>
            </div>
        </div>
    </nav>






    {{-- Aquí tu código papi --}}






    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){

  function separadorHidden(){
      var cuentaLi = document.getElementById("cuenta");
       var separador = document.getElementById("separador");
        if (window.innerWidth <= 992) {
          $('.vertical-separator').css('visibility', 'hidden');
        } else {
          $('.vertical-separator').css('visibility', 'visible');
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
