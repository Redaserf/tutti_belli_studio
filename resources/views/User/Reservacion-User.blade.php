<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservar cita</title>
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
            background-color: #000000;
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
.container {
  margin-top: 80px;
  border-radius: 5px;
  padding: 20px;
}
.accordion-button {
  background-color: #f0b4be; /* Botón rosado */
  color: black;
  font-weight: bold;
}

.accordion-button:not(.collapsed) {
            background-color: #f0b4be; /* Botón rosado más oscuro cuando está abierto */
        }
        .accordion-item {
            border: 1px solid black; /* Bordes negros */
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .accordion-item .form-check {
            border-top: 1px solid black;
            padding-top: 10px;
        }
        #selected-service-details {
            border: 1px solid black;
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff; /* Fondo rosado claro */
        }
        .modal-content {
            border: 2px solid black;
            border-radius: 10px;
            background-color: #ffffff; /* Fondo rosado claro */
        }
        .btn-primary {
            background-color: #000000;
            border: none;
        }


        .btn-primary:hover {
            background-color: #ff1493;
        }

        .vertical-separator {
            display: inline-block;
            width: 1.5px;
            height: 30px;
            background-color: #000;
            margin: 3px 15px;
            vertical-align: middle;
    }



/* Aquí tus estilos */



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


    <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="accordion" id="serviceAccordion">
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Micropigmentacion
                          </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#serviceAccordion">
                          <div class="accordion-body">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="1" id="technique1">
                                  <label class="form-check-label" for="technique1">
                                      Técnica 1
                                  </label>
                                  <p>Info de técnica 1</p>
                                  <p>Precio: $100</p>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="2" id="technique2">
                                  <label class="form-check-label" for="technique2">
                                      Técnica 2
                                  </label>
                                  <p>Info de técnica 2</p>
                                  <p>Precio: $200</p>
                              </div>
                              <!-- Agregar más técnicas según sea necesario -->
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Pestañas
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#serviceAccordion">
                        <div class="accordion-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" id="technique3">
                                <label class="form-check-label" for="technique3">
                                    Técnica 3
                                </label>
                                <p>Info de técnica 3</p>
                                <p>Precio: $150</p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="4" id="technique4">
                                <label class="form-check-label" for="technique4">
                                    Técnica 4
                                </label>
                                <p>Info de técnica 4</p>
                                <p>Precio: $250</p>
                            </div>
                            <!-- Agregar más técnicas según sea necesario -->
                        </div>
                    </div>
                </div>
                <!-- Añadir más servicios según sea necesario -->
              </div>
            </div>
            <div class="col-md-6">
                <div id="selected-service-details">
                    <!-- Aquí se mostrarán los detalles del servicio seleccionado -->
                    <h5>Detalles del Servicio Seleccionado</h5>
                    <div id="selected-techniques">
                        <!-- Aquí se mostrarán las técnicas seleccionadas -->
                    </div>
                    <div class="mt-3">
                        <label for="appointment-date" class="form-label">Fecha</label>
                        <input type="date" id="appointment-date" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="appointment-time" class="form-label">Hora</label>
                        <input type="time" id="appointment-time" class="form-control">
                    </div>
                    <div class="mt-3">
                        <p>
                            <input class="form-check-input" type="checkbox" style="margin-right:12px;"><a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Términos y Condiciones</a></input></p>
                    </div>
                    <button id="confirm-appointment" class="btn btn-primary">Reservar Cita</button>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Modal de Términos y Condiciones -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="termsModalLabel">Términos y Condiciones</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Aquí puedes agregar el texto de términos y condiciones -->
              <p>Términos y Condiciones de Tutti Beli Studio
                  Bienvenido a Tutti Beli Studio. Al utilizar nuestros servicios, usted acepta y se compromete a cumplir con los siguientes términos y condiciones. Por favor, léalos detenidamente.
                  En Tutti Beli Studio, nos esforzamos por ofrecerle los mejores tratamientos y técnicas para el cuidado de su belleza. Sin embargo, es fundamental que usted, como cliente, siga las recomendaciones y cuidados proporcionados por nuestro personal profesional.
                  Nuestros tratamientos están diseñados para proporcionarle los mejores resultados posibles. Para garantizar la efectividad y seguridad de los mismos, es crucial que siga las indicaciones y cuidados recomendados por nuestros especialistas. Tutti Beli Studio no se hace responsable de ningún problema, daño o efecto adverso que pueda surgir si usted no sigue las instrucciones proporcionadas por nuestro personal.
                  Cada técnica aplicada en nuestro estudio viene con una serie de cuidados específicos que deben ser seguidos rigurosamente para mantener los resultados y asegurar su bienestar. Tutti Beli Studio no se hace responsable de cualquier complicación, efecto adverso o disminución en la calidad de los resultados si no se siguen las recomendaciones de cuidado posterior proporcionadas por nuestros profesionales.
                  Al aceptar recibir un tratamiento o técnica en Tutti Beli Studio, usted declara haber sido informado de los cuidados necesarios y de las posibles consecuencias de no seguir dichas indicaciones. Además, reconoce y acepta que cualquier desviación de las recomendaciones proporcionadas será bajo su propio riesgo y responsabilidad.
                  Tutti Beli Studio se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Cualquier cambio será comunicado oportunamente y se considerará aceptado si continúa utilizando nuestros servicios.
                  Para cualquier consulta o información adicional sobre nuestros términos y condiciones, por favor contáctenos a través de nuestro correo electronico o numero de telefono
                  Al utilizar los servicios de Tutti Beli Studio, usted reconoce haber leído, entendido y aceptado estos términos y condiciones.
                                    
                  Agradecemos su confianza en Tutti Beli Studio y esperamos brindarle la mejor experiencia y resultados en cada visita.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal de Confirmación de Cita -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Cita Guardada</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tu cita se ha guardado. Te mandaremos un correo para darte a conocer si tu cita fue aceptada.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    






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
