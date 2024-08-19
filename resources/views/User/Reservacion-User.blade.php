<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservar cita</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
    <!-- datePicker -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- datePicker --> 
    
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8VQ4y5rYuOOG3LOJGlgU8KnJ9UXr83Eo&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
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
        z-index: 5000000;
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
h1, h2, h3, h4, h5 ,a, li, p{
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
    word-wrap: break-word;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
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
.checkpersonalizado{
    border:solid black 2px;
}
#selected-service-details {
    border: 1px solid black;
    border-radius: 10px;
    padding: 20px;
    background-color: #ffffff; /* Fondo blanco */
}

.modal-content {
    border: 2px solid black;
    border-radius: 10px;
    background-color: #ffffff; /* Fondo blanco */
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

.image-container {
    margin-top: 50px;
    display: flex;
    justify-content: center;
}

#horariosImagen {
    max-width: 70%; /* Ajusta el tamaño máximo de la imagen */
    height: auto;
    border: 1px solid black;
    border-radius: 5px;
    
}

.mapa-container {
    width: 100%;
    height: 300px; /* Puedes ajustar la altura según tus necesidades */
    border: 1px solid black;
    border-radius: 10px;
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .row {
        flex-direction: column;
    }

    .col-md-6 {
        width: 100%;
        margin-bottom: 20px;
    }

    .mapa-container {
        height: 200px; /* Ajusta la altura del mapa para dispositivos móviles */
    }

    .image-container {
        margin-top: 30px;
    }

    #horariosImagen {
        max-width: 90%; /* Ajusta el tamaño máximo de la imagen para dispositivos móviles */
        margin-top: 100px;
    }
}
gmp-map {
        height: 100%;
        width: 100%;
        height: 300px; /* Puedes ajustar la altura según tus necesidades */
        border: 1px solid black;
        border-radius: 10px;
        margin-bottom: 20px;
      }

/* Aquí tus estilos */


/* personalizar checkbox de tecnicas */

.custom-checkbox-input {
    width: 20px;
    height: 20px;
    border: 2px solid #000000; /* Cambia el color del borde */
    background-color: #fff; /* Cambia el color de fondo */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Agrega sombra */
}

.modal-content { 
    font-family: "Josefin Sans", sans-serif !important;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.modal-header {
    background-color: #ffb6c1; /* Color rosado claro */
    color: black;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}
.btn-light:hover{
      background-color:#fa3284;
    }

.modal-header .modal-title {
    font-weight: 600;
}

.modal-body {
    background-color: #fff;
    padding: 20px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}



.modal-footer {
    background-color: #f8f9fa;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}

.btn-pink {
    background-color: #ffb6c1;
    color: black;
    border: none;
}

.btn-pink:hover {
    background-color: #ff69b4;
    color: white;
}

.btn-secondary {
    background-color: #6c757d;
    color: white;
    border: none;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

#fechaCita {
    border: 1px solid #ff1493;
    border-radius: 10px;
    width: 100%;
    color: #495057;
    font-size: 1rem;
}

#horaCita {
    border: 1px solid #ff1493;
    border-radius: 10px;
    width: 100%;
    color: #495057;
    font-size: 1rem;
}
#termsModal{
    z-index: 200000;

}


/* div de la parte inferior */
.parte-inferior {
    font-family: "Josefin Sans", sans-serif !important;
    position: fixed;
    border-top: 2px solid #000; /* Borde superior negro */
    bottom: 0;
    left: 0;
    width: 100%;
    height: 20%;
    background-color: white; /* Menos transparente */
    z-index: 9999;
    color: black;
    display: flex;
    align-items: center;
    justify-content: space-between; /* Alinea el contenido y el botón */
    padding: 0 20px; /* Añade un poco de espacio a los lados */
    font-size: 18px;
}

.parte-inferior .contenido {
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Alinea el contenido a la izquierda */
}

#cantidadTecnicas, #precioTotal {
    margin-bottom: 5px; /* Espacio entre los elementos */
}

.parte-inferior p, .parte-inferior a {
    margin: 5px 0; /* Espacio entre los nuevos textos */
}

.parte-inferior a {
    color: #e83e8c; /* Color del enlace */
    text-decoration: underline;
}

.btn-personalizado {
    background-color: pink; /* Fondo rosa */
    color: black; /* Texto e icono negros */
    border: none; /* Sin borde */
    padding: 12px 25px; /* Espaciado interior */
    font-size: 16px; /* Tamaño de la fuente */
    display: flex;
    align-items: center;
}

.btn-personalizado i {
    margin-left: 6px; /* Espacio entre el texto y el icono */
}

.container {
    margin-bottom: 10%; /* Espacio en la parte inferior igual a la altura del div fijo */
}

@media (max-width: 600px) {
    .parte-inferior {
        height: 15%; /* Ajusta la altura en dispositivos móviles si es necesario */
    }

    .container {
        margin-bottom: 30%; /* Ajusta el margen inferior para dispositivos móviles */
    }
    .parte-inferior p, .parte-inferior a {
        font: size 14px;
    }
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
            z-index: 70000;/* para que este por encima del modal */
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
.footer-pers{
      padding: 40px;
      margin-top:70px;
    }
.citasModal{
    z-index: 60000;
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
        <img src="/resources/img/dashboard-navbar/Letras Tutti.png"class="imgnavbar" alt="Tutti Belli Studio" width="250" height="50">
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


    <div class="modal fade citasModal" id="citasModal" tabindex="-1" aria-labelledby="labelcitasModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="citaForm">
                    @csrf   
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelcitasModal">Crear Cita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id='id'>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="empleadoId" id="empleadoId">
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fechaCita" name='fechaCita' placeholder="Fecha de la cita" required>
                            <label for="fechaCita" id="fechaCitaLabel">Fecha de la cita</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select style='display: none' class='form-control' id="horaCita" name="horaCita">
                            </select>
                        </div>
                        <div>
                            <input type="hidden" id="serviciosSeleccionados" name="serviciosSeleccionados">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control" name="usuarioId" value="{{ Auth::user()->id }}" id="usuarioId">
                        </div>
                        <div class="mt-3 text-center">
                        <p>
                            <input class="form-check-input text-center checkpersonalizado"id="CheckBoxCondiciones" type="checkbox" style="margin-right:12px;"><a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Términos y Condiciones</a></input></p>
                            <p>Para que los resultados de los tratamiento realizados durante la cita sean exitosos, se deberá seguir con los tratamientos proporcionados al pie de la letra.</p>
                            <a href="https://drive.google.com/drive/folders/12Zhf7GFmlEn2jwGzjygeUewU26XyBXLr?usp=sharing" target="_blank">Lista de Tratamientos</a>
                        </div>
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="BotonConfirmar"type="submit" class="btn btn-pink">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<br><br>

    

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <label for="exampleDataList" class="form-label mb-3" style="margin-right: 40%">Servicios y tecnicas</label>
                        <input list="datalistOptions" id="exampleDataList" class="mb-3" placeholder="Buscar...">
                        <i class="fa-solid fa-magnifying-glass" style="margin0-left: 7%"></i>
                        <datalist id="datalistOptions"></datalist>
                    </div>
                    <div class="accordion" id="acordionCitas">
                        <!-- Añadir acordeones aquí -->
                    </div><!-- fin del accordion -->
                </div>
                <div class="col-md-6">
                    <div id="mapaContainer" class="mapa-container">
                        <!-- api de maps -->
                        <gmp-map center="25.55710792541504,-103.3420181274414" zoom="14" map-id="DEMO_MAP_ID">
                        <gmp-advanced-marker position="25.55710792541504,-103.3420181274414" title="My location"></gmp-advanced-marker>
                        </gmp-map>
                    </div>
                    <div class="image-container">
                        <img src="/resources/img/home/horariotutti.jpg" alt="Horarios" class="img-fluid" id="horariosImagen">
                    </div>
                </div>
            </div>
        </div>
            <!-- <div class="col-md-6">
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
    </div> -->

    

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
    


    <div class="parte-inferior" id="mostrarServiciosTecnicasSeleccionados" style="display: none;">
        <div class="contenido">
            <div id="cantidadTecnicas"></div>
            <div id="precioTotal"></div>
        </div>
        <button id='btnAgregar' class="btn btn-personalizado" data-bs-toggle="modal" data-bs-target="#citasModal">
            Agendar cita<i class="fa-solid fa-calendar-plus"></i>
        </button>
    </div>


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

<br><br><br>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/i18n/datepicker-es.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>

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

$(document).ready(function(){

$('#carritoxd').empty();
$.get('/carrito/contar-productos', function(data) {
  $('#carrito-count').text(data.cantidad);
});


    $('#fechaCita').prop('disabled', true).hide();
    $('a[data-bs-target="#termsModal"]').click(function(e){
            e.preventDefault();
            $('#termsModal').modal('show');
        });

        
        $('#termsModal').on('hidden.bs.modal', function () {
            $('#citasModal').modal('show');
        });


        // $('#citasModal').on('hidden.bs.modal', function () {
        //     // Ocultar el input con el ID 'fechaCita'
        //     $('#fechaCita').prop('disabled', true).hide();
        // });



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
            //alertas


            $('#CheckBoxCondiciones').change(function() {
            if ($(this).is(':checked')) {
                $('#BotonConfirmar').prop('disabled', false);
            } else {
                $('#BotonConfirmar').prop('disabled', true);
            }
        });

        function checkCheckbox() {
    if ($('#CheckBoxCondiciones').is(':checked')) {
        $('#BotonConfirmar').prop('disabled', false);
    } else {
        $('#BotonConfirmar').prop('disabled', true);
    }
}
checkCheckbox();
$('#CheckBoxCondiciones').change(function() {
    checkCheckbox();
});
$('#citasModal').on('hidden.bs.modal', function () {
    $('#CheckBoxCondiciones').prop('checked', false); 
    $('#BotonConfirmar').prop('disabled', true);   
});


    $('#empleadoId').on('change', function() {
            let empleado = $(this).val();
            $('#fechaCitaLabel').show();

            if (empleado) {
                datepicker(empleado);
            } else {
                console.error('No se ha seleccionado un empleado válido.');
            }
        });

        let empleado = $('#empleadoId').val();
        if (empleado) {
            datepicker(empleado);
        } else {
            console.error('No se ha seleccionado un empleado válido.');
        }
    });

    function datepicker(empleadoId){
    $.ajax({
        url: `/un/empleado/horarios/citas/${empleadoId}`,
        method: 'GET',
        success: function(response) {
            const empleado = response[0];
            const horarios = empleado.horarios;

            const diasTrabajo = horarios.map(horario => parseInt(horario.diaSemana));

            const allDays = [0, 1, 2, 3, 4, 5, 6];
            const hiddenDays = allDays.filter(day => !diasTrabajo.includes(day));

            function actualizarOpcionesHora(fechaHora) {
                let select = $('#horaCita');
                select.empty();

                let fechaMoment = moment(fechaHora);

                var hoy = moment();
                var diaSemana = fechaMoment.day();
                var horarioDia = horarios.find(horario => parseInt(horario.diaSemana) === diaSemana);

                if (horarioDia) {
                    let horaInicio = moment(fechaMoment).set({
                        hour: horarioDia.horaInicio.split(':')[0],
                        minute: horarioDia.horaInicio.split(':')[1],
                        second: 0
                    });

                    let horaFin = moment(fechaMoment).set({
                        hour: horarioDia.horaFin.split(':')[0],
                        minute: horarioDia.horaFin.split(':')[1],
                        second: 0
                    });

                    let horasOcupadas = empleado.citas_empleados
                        .filter(cita => moment(cita.fechaCita).isSame(fechaMoment, 'day'))
                        .map(cita => moment(cita.horaCita, 'HH:mm:ss').format('HH:mm:ss'));

                        while (horaInicio.isBefore(horaFin)) {
                            let horaTexto = horaInicio.format('HH:mm:ss');
                            
                            //si es el día actual, quitar las horas con menos de 1 hora de anticipación
                            if (!horasOcupadas.includes(horaTexto)) {
                                if (fechaMoment.isSame(hoy, 'day')) {
                                    if (horaInicio.isAfter(limiteHora)) {
                                        let option = new Option(horaTexto, horaTexto);
                                        select.append(option);
                                    }
                                } else {
                                    let option = new Option(horaTexto, horaTexto);
                                    select.append(option);
                                }
                            }

                            horaInicio.add(1, 'hour');
                        }

                    console.log('Opciones agregadas:', select.children('option').length);

                    if (select.children('option').length > 0) {
                        select.val(select.children('option').first().val());
                    } else {
                        alert('No hay horas disponibles para la fecha seleccionada.');
                        $('#citasModal').modal('hide');
                        $('#fechaCita').hide();

                    }
                }
            }
            $("#fechaCita").datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0,
                maxDate: "+3M -1D",
                regional: "es",
                beforeShowDay: function(fecha) {
                    var dia = moment(fecha).day();

                    if (hiddenDays.includes(dia)) {
                        return [false, "", "Día no laborable"];
                    }

                    var hoy = moment();
                    if (moment(fecha).isSame(hoy, 'day')) {
                        const horaInicioLimite = moment(hoy).add(2, 'hours');
                        const horarioDia = horarios.find(horario => parseInt(horario.diaSemana) === dia);
                        const horaFinHoy = horarioDia ? horarioDia.horaFin : '16:00:00';
                        const horaFinHoyParts = horaFinHoy.split(':');
                        hoy.set({
                            hour: horaFinHoyParts[0],
                            minute: horaFinHoyParts[1],
                            second: 0
                        });

                        if (horaInicioLimite.isSameOrAfter(hoy)) {
                            return [false, "", `Las citas deben ser al menos 2 horas después de la hora actual`];
                        }
                    }

                    return [true, "", ""];
                },
                onSelect: function(dateText) {
                    var fechaSeleccionada = moment(dateText, 'YYYY-MM-DD').toDate();

                    actualizarOpcionesHora(fechaSeleccionada);
                    $('#horaCita').show();
                }
            });

            $("#fechaCita").on('keyup', function() {
                var fechaText = $(this).val();
                if (fechaText) {
                    var fechaSeleccionada = moment(fechaText, 'YYYY-MM-DD').toDate();

                    actualizarOpcionesHora(fechaSeleccionada);
                    $('#horaCita').show();
                }
            });

        },
        error: function(error){
            console.log(error);
        }
    });
}

$('#empleadoId').change(function() {
    var empleadoId = $(this).val();

    // Resetear el selector de fecha y ocultar el de hora
    $('#fechaCita').val('').datepicker('destroy'); // Limpiar y destruir el datepicker anterior
    $('#horaCita').hide().empty(); // Ocultar y vaciar el select de horas

    if (empleadoId) {
        datepicker(empleadoId); // Volver a inicializar el datepicker con el nuevo empleado
    }
});


//     $("#fechaCita").datepicker({//cada que le pica al input de fechaCita se actualiza el select de horas y se muestra un calendario 
//             dateFormat: 'yy-mm-dd',
//             minDate: 0, // No permite seleccionar fechas anteriores a hoy
//             maxDate: "+3M -1D",//permite hacer citas a de hoy a un mes y diez dias
//             regional: "es",// no agarra el español
//             onSelect: function(dateText) {

//                 console.log(dateText)
// // separa la fecha de dateText ya que si da la fecha bien pero al ponerla asi actualizarOpciones(new Date(dateText)) muestra una fecha anterior
//                 var partes = dateText.split('-');
//                 var anio = parseInt(partes[0], 10);
//                 var mes = parseInt(partes[1], 10) - 1; 
//                 var dia = parseInt(partes[2], 10);
                
                
//                 var fechaSeleccionada = new Date(anio, mes, dia);

//                 console.log('Fecha seleccionada:', fechaSeleccionada);


//                 let select = $('#horaCita');
//                 select.show();

//                 actualizarOpcionesSelect(fechaSeleccionada);

            //     var selectedDate = new Date(dateText);
            // var fechaActual = new Date();
            // select.empty(); // Limpiar las opciones anteriores

            // // Comprobar si la fecha seleccionada es hoy
            // if (selectedDate.toDateString() === fechaActual.toDateString()) {
            //     // Si es hoy, agregar solo horas futuras
            //     var horaActual = fechaActual.getHours();
            //     for (var hora = horaActual + 1; hora < 24; hora++) {
            //         select.append(new Option(hora + ":00", hora + ":00"));
            //         select.append(new Option(hora + ":30", hora + ":30"));
            //     }
            // } else {
            //     // Si no es hoy, agregar todas las horas del día
            //     for (var hora = 0; hora < 24; hora++) {
            //         select.append(new Option(hora + ":00", hora + ":00"));
            //         select.append(new Option(hora + ":30", hora + ":30"));
            //     }
            // }
            //}
        // });

        
        // $("#fechaCita").on('input', function() {
        //         var fechaTexto = $(this).val();
        //         var partes = fechaTexto.split('-');
        //         var anio = parseInt(partes[0], 10);
        //         var mes = parseInt(partes[1], 10) - 1; 
        //         var dia = parseInt(partes[2], 10);
                
        //         var fechaSeleccionada = new Date(anio, mes, dia);
        //         actualizarOpcionesSelect(fechaSeleccionada);
        //     });


        function esMismaFecha(fecha1, fecha2) {//compara si es el mismo anño, mes y dia
                return fecha1.getFullYear() === fecha2.getFullYear() &&
                fecha1.getMonth() === fecha2.getMonth() &&
                fecha1.getDate() === fecha2.getDate();
            }
        

        // function actualizarOpcionesSelect(date) {
        //         let dia = date.getDay();
        //         console.log('fecha seleccionada: ',date);
        //         console.log('Hoy: ', new Date());
        //         let select = $('#horaCita');

        //         select.empty();

        //         let hoy = new Date();
        //         hoy.setHours(0, 0, 0, 0);


        //         if(esMismaFecha(date, hoy)) {// si el dia es hoy
                    
        //         let horaInicio;
        //         let horaFin;
        //         if(dia>=1 && dia<=5){// lunes a viernes
        //             horaInicio = new Date().getHours() + 2;//solo puede hacer citas 2 horas despues
        //             console.log('Hora Actual mas dos horas: ', horaInicio);
        //             horaFin = 21;
        //         }else if(dia === 0 || dia === 6){//sabados y domingos
        //             horaInicio = new Date().getHours() + 2;
        //             console.log(horaInicio);
        //             horaFin = 16;
        //         }

        //         if(esMismaFecha(date, hoy)){
        //             if(horaInicio > horaFin) {
        //                 select.hide();
        //                 mostrarAlerta('Ya no hay horarios disponibles por hoy.', 'alert-primary', 'info-fill')
        //             }
        //         }

        //         for (let hora = horaInicio; hora < horaFin; hora++) {
        //             const valorTiempo = `${String(hora).padStart(2, '0')}:00:00`;
        //             console.log(valorTiempo);
        //             select.append(new Option(valorTiempo, valorTiempo));
        //         }
        //             return;
        //     }


        //     let horaInicio;
        //     let horaFin;
        //     if(dia>=1 && dia<=5){
        //         horaInicio = 9;
        //         horaFin = 21;
        //     }else if(dia === 0 || dia === 6){
        //         horaInicio = 10;
        //         horaFin = 16;
        //     }

        //     for (let hora = horaInicio; hora < horaFin; hora++) {
        //         const valorTiempo = `${String(hora).padStart(2, '0')}:00:00`;
        //         console.log(valorTiempo);
        //         select.append(new Option(valorTiempo, valorTiempo));
        //     }

        // }

        $('#citasModal').on('hidden.bs.modal', function () {
            console.log('El modal se ha cerrado.');

            $('#citaForm')[0].reset();
            $('#horaCita').hide();
            $('#fechaCita').hide();

            $('#fechaCitaLabel').hide();

        });



        function dibujarServiciosTecnicas() {
            $.get('/servicios/tecnicas', function(serviciosTecnicas) {
                console.log(serviciosTecnicas);
                let acordeon = $('#acordionCitas');
                acordeon.empty();

                let inputSearch = $("#datalistOptions");
                inputSearch.empty();

                serviciosTecnicas.forEach(servicio => {
                    acordeon.append(`
                        <div class="accordion-item" data-servicio-id="${servicio.id}">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse${servicio.id}" aria-expanded="true" aria-controls="panelsStayOpen-collapse${servicio.id}">
                                    ${servicio.nombre}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapse${servicio.id}" class="accordion-collapse collapse show">
                                <div class="accordion-body" id="acordeon${servicio.id}">
                                </div>
                            </div>
                        </div>
                    `);

                    inputSearch.append(`<option value="${servicio.nombre}">`);

                    let acordeonCuerpoTecnicas = $(`#acordeon${servicio.id}`);

                    servicio.tecnicas.forEach(tecnica => {
                        acordeonCuerpoTecnicas.append(`
                            <div class="form-check tecnica-item" data-tecnica-id="${tecnica.id}" data-tecnica-nombre="${tecnica.nombre.toLowerCase()}">
                                <input class="form-check-input custom-checkbox-input" type="checkbox" value="${tecnica.id}" data-servicio-id="${servicio.id}" id="radioButton${tecnica.id}" name="checkboxes${servicio.id}">
                                <label class="form-check-label" for="radioButton${tecnica.id}" id="tecnicaLabel${tecnica.id}" style="width: 100%">
                                    ${tecnica.nombre}
                                    <p>${tecnica.descripcion}</p>
                                    <p id="precio${tecnica.id}" data-precio=${tecnica.precio}>Precio: $${tecnica.precio}</p>
                                </label>
                            </div>
                        `);

                        inputSearch.append(`<option value="${tecnica.nombre}">`);
                    });
                });

                $('#exampleDataList').on('input', function() {
                    let terminoBusqueda = $(this).val().toLowerCase();
                    
                    $('.accordion-item').each(function() {
                        let nombreServicio = $(this).find('.accordion-button').text().toLowerCase();
                        let servicioCoincide = nombreServicio.includes(terminoBusqueda);
                        
                        let tecnicasVisibles = false;

                        //restablecer la visibilidad de todas las técnicas
                        $(this).find('.form-check').show();

                        $(this).find('.form-check').each(function() {
                            let nombreTecnica = $(this).data('tecnica-nombre');
                            if (nombreTecnica.includes(terminoBusqueda)) {
                                $(this).show();
                                tecnicasVisibles = true;
                            } else if (!servicioCoincide) {
                                $(this).hide();
                            }
                        });

                        if (servicioCoincide || tecnicasVisibles) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                });
            });
        }



        dibujarServiciosTecnicas();

    
    $(document).on('click', '.custom-checkbox-input', function() {
        let servicioId = $(this).data('servicio-id');
        let checkboxes = $(`input[name="checkboxes${servicioId}"]`);
        
        // deseleccionar todos los checkboxes con el mismo grupo/servicio
        checkboxes.not(this).prop('checked', false);
    let totalPrecio = 0;
    let cantidadTecnicasSeleccionadas = 0;

        if ($('.custom-checkbox-input:checked').length > 0) {
            $('#mostrarServiciosTecnicasSeleccionados').show();
            
            $('.custom-checkbox-input:checked').each(function() {
                let tecnicaId = $(this).val();
                let precio = parseFloat($(`#precio${tecnicaId}`).text().replace('Precio: $', ''));
                
                totalPrecio += precio;
                
                cantidadTecnicasSeleccionadas++;//contar tecnicas
            });
            
            $('#precioTotal').text(`Precio Total: $${totalPrecio.toFixed(2)}`);
            $('#cantidadTecnicas').text(`Técnicas Seleccionadas: ${cantidadTecnicasSeleccionadas}`);
        } else {
            $('#mostrarServiciosTecnicasSeleccionados').hide();
        }
    });


       //Dibujar empleados
       $.get('/usuarios/rol/empleado', function(usersRolEmpleado) {
    console.log('empleados y admins: ', usersRolEmpleado);
    let selectUsuarios = $('#empleadoId');
    selectUsuarios.empty();

    // Agregar la opción "Selecciona un empleado" como predeterminada y no seleccionable
    selectUsuarios.append(`
        <option class="text-center" value="" disabled selected>Selecciona un empleado</option>
    `);

    usersRolEmpleado.forEach(usuario => {
        selectUsuarios.append(`
            <option class="text-center" value="${usuario.id}">${usuario.name + " " +usuario.apellido}</option>
        `);
        console.log(usersRolEmpleado);
    });

    // Habilitar y mostrar los campos de fecha y hora cuando se selecciona un empleado
    selectUsuarios.change(function() {
        var empleadoId = $(this).val();
        if (empleadoId) {
            $('#fechaCita').prop('disabled', false).show();
            $('#horaCita').prop('disabled', false).hide(); // Sigue oculto hasta que se seleccione una fecha
        } else {
            $('#fechaCita').prop('disabled', true).hide();
            $('#horaCita').prop('disabled', true).hide();
        }
    });
});
            


        $('#citaForm').on('submit', function(e) {
            e.preventDefault();

        // Mostrar la pantalla de carga
        $('#contenedor_carga').css('display', 'block');

            let serviciosSeleccionados = [];

            $('.custom-checkbox-input:checked').each(function() {
                let tecnicaId = $(this).val();
                let servicioId = $(this).data('servicio-id');
                let precio = parseFloat($(`#precio${tecnicaId}`).text().replace('Precio: $', ''));
                
                serviciosSeleccionados.push({
                    servicioId: servicioId,
                    tecnicaId: tecnicaId
                })
            });

            $('#serviciosSeleccionados').val(JSON.stringify(serviciosSeleccionados));

            let formData = $(this).serialize();


            $.ajax({
                url: '/registro/citas/usuarios',
                method: 'POST',
                data: formData,
                success: function(response) {
                    limpiarFormulario();              
                    
                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');

                    let alertMessage = '';
                    let alertClass = '';
                    let alertIcon = '';

                    if(response.message === 'Cita creada con éxito'){
                        alertMessage = 'Cita creada con éxito, PENDIENTE a confirmacion';
                        alertClass = "alert-success";
                        alertIcon = "check-circle-fill";
                    } else if(response.message === 'Cita actualizada con éxito'){
                        alertMessage = 'Se hizo correctamente';
                        alertClass = "alert-success";
                        alertIcon = "check-circle-fill";
                    }
                    if (alertMessage) {
                        localStorage.setItem('alertMessage', alertMessage);
                        localStorage.setItem('alertClass', alertClass);
                        localStorage.setItem('alertIcon', alertIcon);
                    }

                    
                    window.location.href = '/Historial-User';
                    
                },
                error: function(xhr){
                    console.log(xhr);

                    if (xhr.responseJSON) {
                        

                        if (xhr.readyState === 4 && xhr.responseJSON.message) {
                            if (xhr.responseJSON.error) {
                                mostrarAlerta(`Error: ${xhr.responseJSON.error}`, 'alert-danger', 'exclamation-triangle-fill');
                            }
                            else if (xhr.responseJSON.message === 'Debe seleccionar al menos un servicio') {
                                mostrarAlerta('Por favor, selecciona al menos un servicio.', 'alert-warning', 'exclamation-triangle-fill');
                            } else if (xhr.responseJSON.message === 'Ya existe una cita para esta fecha y hora') {
                                mostrarAlerta('Ya existe una cita para esta fecha y hora.', 'alert-warning', 'exclamation-triangle-fill');
                            } else if (xhr.responseJSON.message === 'La fecha debe ser hoy o posterior.') {
                                mostrarAlerta('La fecha debe ser hoy o posterior.', 'alert-warning', 'exclamation-triangle-fill');
                            } else if (xhr.responseJSON.message === 'The fecha cita field must be a valid date.') {
                                mostrarAlerta('Error: Ingrese correctamente la fecha.', 'alert-danger', 'exclamation-triangle-fill');
                            } else {
                                mostrarAlerta(`Error: ${xhr.responseJSON.message}`, 'alert-danger', 'exclamation-triangle-fill');
                            }
                        } else if (!xhr.responseJSON.error && !xhr.responseJSON.message) {
                            mostrarAlerta('Error desconocido. Por favor, inténtelo de nuevo.', 'alert-danger', 'exclamation-triangle-fill');
                        }
                    } else {
                        mostrarAlerta('Error desconocido. Por favor, inténtelo de nuevo.', 'alert-danger', 'exclamation-triangle-fill');
                    }

                $('#contenedor_carga').css('display', 'none');

                }
            });

        });


            
       
        function limpiarFormulario() {
            $('#id').val('');
            $('#fechaCitaLabel').hide();
            $('#citaForm')[0].reset();
        }

        $('#btnAgregar').on('click', function() {
//limpia el btn de agregar cita y esconde el btn de eliminar y la hora de la cita para que se despliegue cuando seleccionen fecha
            limpiarFormulario();
        })
    


    //dibujar servicios y sus tecnicas con

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

// });


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
