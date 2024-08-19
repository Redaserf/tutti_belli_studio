<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            overflow-x: hidden; 
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
                z-index: 300000;
            }



/* Aquí tus estilos */


.custom-alerts {
        background-color: #e0e0e0; /* Color rosado */
        border: 1px solid #e0e0e0;
        color: #000000;
        border-radius: 5px;
        padding: 20px;
        font-family: "Josefin Sans", sans-serif;
    }
    .custom-alerts .alert-heading {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .custom-alerts p {
        font-size: 1.1rem;
        margin-bottom: 0;
    }
    .custom-alerts hr {
        border-top: 2px solid #000000;
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
            position: fixed;
            top: 20px;
            right: 20px;
            display: none;
            z-index: 2000;/* para que este por encima del modal */
            animation-duration: 0.8s;
        }

        .custom-alert.show {
            display: block;
            animation-name: slideIn;
        }

        .custom-alert.hide {
            animation-name: slideOut;
        }
        /* Alerta bonita */

    .btn-cancelar {
        background-color: red;
        border-color: red;
        color: white;
    }

    .btn-cancelar:hover {
        background-color: darkred;
        border-color: darkred;
    }
    .btn-light:hover{
      background-color:#fa3284;
    }
    .footer-pers{
      padding: 40px;
      margin-top:70px;
    }
    @media (max-width: 480px) {
    .imgnavbar{
      width:200px;
      height: 45px;
    
    }}

        /* Carrito css */

@media (max-width: 768px) {
  #carrito {
    font-size: 0.9rem;
    margin-right: 15px;
  }

  #carrito-count {
    top: 0;
    right: 0;
    transform: translate(50%, -50%);
    font-size: 12px;
  }
}

@media (min-width: 769px) {
  #carrito {
    font-size: 1rem;
    margin-right: 30px;
  }

  #carrito-count {
    top: -10px;
    right: -15px;
    font-size: 13px;
  }
}

    /* Fin carrito css */

    </style>
</head>
<body class="hiddenX">
  <div id="contenedor_carga"></div>


<!-- NAVBAR / ENCABEZADO -->
<nav style="background: #f8d7da !important;" id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Home-usuario">
      <img src="/resources/img/dashboard-navbar/Letras Tutti.png" class="imgnavbar"alt="Tutti Belli Studio" width="250" height="50">
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
              <a class="nav-link active texto1" aria-current="page" href="/Cursos-User" style="color: #000000;">Cursos</a>
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

          <a id="carrito" style="margin-right: 30px; position: relative;" class="nav-link active texto1" aria-current="page" href="/Carrito-User" style="color: #000000;">
            <i class="fa-solid fa-cart-shopping"></i>
            <span id="carrito-count" style="">
                <!-- Aquí se insertará la cantidad de productos -->
            </span>
          </a>

          <a href="/Reservacion-User" style="margin-right:20px;">
            <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
          </a>
      </div>
  </div>
</nav>

<br><br>

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


    <br><br><br><br><br><br><br><br>

      <!-- FOOTER -->
      <footer id="contacto" class="footer" class="fonts3">
        <div style="background-color: black !important; margin-bottom: -30px;" class="col-12 text-center mt-2">
        <div class="icons">
                        <a href="https://www.facebook.com/profile.php?id=100066839301986" class=""><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/tutti_belli_trc_studio/" class=""><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/5218713826767" class=""><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
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
        modalBody.innerHTML = '<p>Te enviaremos un correo con la información necesaria para proceder con la inscripción del curso.</p>';
        const modalFooter = document.querySelector('#inscripcionModal .modal-footer');
        modalFooter.innerHTML = '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>';
    });


    // Dibujar cursos

    function dibujarCursos() {
      $.ajax({
        url: '/get/cursosActivos',
        method: 'GET',
        success: function(data) {
          console.log(data);
          const cursos = $('#cursos');
          cursos.empty();
          if (data.length === 0) {
            cursos.append(`
              <div class="col-12 text-center my-5">
                <div class="custom-alerts" role="alert">
                  <h4 class="alert-heading">¡No hay cursos disponibles en este momento!</h4>
                  <p>Actualmente no hay cursos programados. Vuelve más tarde para ver si hay cursos disponibles.</p>
                  <hr>
                  <p class="mb-0">Mientras tanto, puedes explorar otros servicios y productos que ofrecemos.</p>
                </div>
                <br>
                <br>
                <br> 
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
              </div>
            `);
          } else {
            data.forEach(curso => {
              const tecnicas = curso.tecnicas.map(tecnica => tecnica.nombre).join(', ');
              const buttonText = curso.inscrito ? 'Inscrito' : 'Inscribirme';
              const buttonDisabled = curso.inscrito ? 'disabled' : '';

              // Verificar si se debe mostrar el botón de cancelar inscripción
              const buttonCancelar = (curso.inscrito && (curso.estado === 0 || curso.estado === null) && curso.activo === 1) ? 
                  `<button class="btn btn-danger cancelar-inscripcion-btn" data-inscripcion-id="${curso.inscripcionId}" data-curso-id="${curso.id}">Cancelar inscripción</button>` : '';

              const card = `
                <div class="col-md-6 col-lg-4 col-xl-4 col-sm-12">
                  <div class="card">
                    <img src="/storage/${curso.imagen}" class="card-img-top" alt="${curso.nombre}">
                    <div class="card-body">
                      <h5 class="card-title">${curso.nombre}</h5>
                      <p class="card-text">${curso.descripcion}</p>
                      <p class="card-text">Instructor: ${curso.empleado ? curso.empleado.name : 'No asignado'}</p>
                      <p class="card-text">Técnicas: ${tecnicas}</p>
                      <p class="card-text">Costo de inscripción: $${curso.precio}</p>
                      <p class="card-text">Fecha de inicio: ${curso.fechaInicio}</p>
                      <p class="card-text">Segunda fecha: ${curso.segundaFecha}</p>
                      <p class="card-text">Tercera fecha: ${curso.terceraFecha}</p>
                      <p class="card-text">Hora de inicio: ${curso.horaInicio}</p>
                      <button class="btn btn-primary inscribirme-btn" data-curso-id="${curso.id}" ${buttonDisabled} data-bs-toggle="modal" data-bs-target="#inscripcionModal">${buttonText}</button>
                      ${buttonCancelar}
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


    let cursoIdActual;

    $(document).on('click', '.inscribirme-btn', function() {
      cursoIdActual = $(this).data('curso-id');
      const modalBody = document.querySelector('#inscripcionModal .modal-body');
      modalBody.innerHTML = '¿Estás seguro de inscribirte en este curso?';
      const modalFooter = document.querySelector('#inscripcionModal .modal-footer');
      modalFooter.innerHTML = `
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Rechazar</button>
        <button type="button" class="btn btn-primary" id="confirmarInscripcion">Aceptar</button>
      `;

      $('#confirmarInscripcion').off('click').on('click', function() {
        $.ajax({
          url: '/inscripcion',
          method: 'POST',
          data: {
            cursoId: cursoIdActual,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            if (response.success) {
              $(`[data-curso-id=${cursoIdActual}]`).text('Inscrito').prop('disabled', true);
              $('#inscripcionModal').modal('hide');

              $('#inscripcionModal').on('hidden.bs.modal', function() {
                mostrarMensajeInscripcion();
                $('#inscripcionModal').off('hidden.bs.modal');
              });
            } else {
              alert('Ocurrió un error al inscribirse. Inténtalo de nuevo.');
            }
          },
          error: function(xhr, status, error) {
            alert('Ocurrió un error al inscribirse. Inténtalo de nuevo.');
          }
        });
      });
    });

    function mostrarMensajeInscripcion() {
      const modalBody = document.querySelector('#inscripcionModal .modal-body');
      modalBody.innerHTML = '<p>Estás inscrito a este curso, para más información acerca del pago dirigete a tu historial de tu perfil.</p>';
      const modalFooter = document.querySelector('#inscripcionModal .modal-footer');
      modalFooter.innerHTML = '<button type="button" id="cerrarModalxd" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>';
      $('#inscripcionModal').modal('show');
      
      document.getElementById('cerrarModalxd').addEventListener('click', function() {
      window.location.href = '/Historial-User';
  });
  }


  $(document).on('click', '.cancelar-inscripcion-btn', function() {
    const inscripcionId = $(this).data('inscripcion-id');
    const cursoId = $(this).data('curso-id');

    if (confirm('¿Estás seguro de que deseas cancelar la inscripción a este curso?')) {
        $.ajax({
            url: `/inscripcion/eliminarReal/${inscripcionId}`,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                alert('Inscripción cancelada exitosamente.');
                dibujarCursos(); // Redibuja los cursos para reflejar los cambios
            },
            error: function(error) {
                alert('Hubo un error al cancelar la inscripción.');
                console.log(error);
            }
        });
    }
});


$(document).ready(function(){

  $('#carritoxd').empty();
$.get('/carrito/contar-productos', function(data) {
  $('#carrito-count').text(data.cantidad);
});

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
