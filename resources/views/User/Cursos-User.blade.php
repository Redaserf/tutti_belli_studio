<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
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
        /*ESTILOS DE LAS CARTAS DE INSCRIPCION*/ 
        .card {
                    margin: 20px;
                    border-radius: 10px;
                    transition: transform 0.3s ease;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-radius: 10px 10px 0 0;
        }
        .card-img-top {
            width: 0 auto;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #e83e8c;
            border-color: #e83e8c;
        }

        .btn-primary:hover {
            background-color: #d63384;
            border-color: #d63384;
        }

        .btn-secondary {
            background-color: #f8d7da;
            border-color: #f8d7da;
            color: #000;
        }

        .btn-secondary:hover {
            background-color: #f5c6cb;
            border-color: #f5c6cb;
        }
        /*ESTILOS DE LAS CARTAS DE INSCRIPCION*/ 

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

<br>

<div class="container mt-5 pt-5">
  <div id="cursos" class="row">
    {{-- Cursos mediante backend --}}
  </div>
</div>


    <div class="modal fade" id="inscripcionModal" tabindex="-1" aria-labelledby="inscripcionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inscripcionModalLabel">Confirmar Inscripción</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de inscribirte en este curso?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Rechazar</button>
                    <button type="button" class="btn btn-primary" id="confirmarInscripcion">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


<br><br><br><br><br>

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
    document.getElementById('confirmarInscripcion').addEventListener('click', function() {
        const modalBody = document.querySelector('#inscripcionModal .modal-body');
        modalBody.innerHTML = '<p>Te avisaremos si entras al curso mediante un correo. Gracias.</p>';
        const modalFooter = document.querySelector('#inscripcionModal .modal-footer');
        modalFooter.innerHTML = '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>';
    });


    // Dibujar cursos

    function dibujarCursos() {
    $.ajax({
        url: '/get/cursos',
        method: 'GET',
        success: function(data) {
            console.log(data);
            const cursos = $('#cursos');
            cursos.empty();
            if (data.length === 0) {
                cursos.append(`
                    <div class="col-12 text-center my-5">
                        <div class="custom-alert" role="alert">
                            <h4 class="alert-heading">¡No hay cursos disponibles en este momento!</h4>
                            <p>Actualmente no hay cursos programados. Vuelve más tarde para ver si hay cursos disponibles.</p>
                            <hr>
                            <p class="mb-0">Mientras tanto, puedes explorar otros servicios y productos que ofrecemos.</p>
                        </div>
                    </div>
                `);
            } else {
                data.forEach(curso => {
                    const tecnicas = curso.tecnicas.map(tecnica => tecnica.nombre).join(', ');
                    const card = `
                        <div class="col-md-4">
                          <div class="card">
                            <img src="/storage/${curso.imagen}" class="card-img-top" alt="${curso.nombre}">
                            <div class="card-body">
                              <h5 class="card-title">${curso.nombre}</h5>
                              <p class="card-text">${curso.descripcion}</p>
                              <p class="card-text">Instructor: ${curso.empleado ? curso.empleado.name : 'No asignado'}</p>
                              <p class="card-text">Técnicas: ${tecnicas}</p>
                              <p class="card-text">Costo de inscripción: $${curso.precio}</p>
                              <p class="card-text">Fecha: ${curso.fechaInicio} Hora: ${curso.horaInicio}</p>
                              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inscripcionModal">Inscribirme</button>
                            </div>
                          </div>
                        </div>
                    `;
                    cursos.append(card);
                });
            }
        },
        error: function(error) {
            console.error('Error al obtener los cursos:', error);
        }
    });
}





$(document).ready(function(){

  dibujarCursos();

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



    // Fin document.ready

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
