<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservar cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
    <!-- datePicker -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- datePicker --> 
    
    
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


/* personalizar checkbox de tecnicas */

.custom-checkbox-input {
    width: 20px;
    height: 20px;
    border: 2px solid #000000; /* Cambia el color del borde */
    background-color: #fff; /* Cambia el color de fondo */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Agrega sombra */
}



/* div de la parte inferior */
.parte-inferior {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 20%;
            background-color: rgba(0, 0, 0, 0.8); /* Color de fondo semi-transparente */
            z-index: 9999; /* Asegura que el div esté sobre otros elementos */
            color: white; /* Color del texto */
            display: flex;
            align-items: center;
            justify-content: center;
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


  <div class="modal fade" id="citasModal" tabindex="-1" aria-labelledby="labelcitasModal" aria-hidden="true">
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
                            <input type="text" class="form-control" id="fechaCita" name='fechaCita' placeholder="Fecha de la cita" required>
                            <label for="fechaCita">Fecha de la cita</label>
                        </div>
                        <div class="form-floating mb-3">
                        <select style='display: none' class='form-control' id="horaCita" name="horaCita" required>
                        
                        </select>
                        </div>
                        <div>
                            <!-- Servicios ya preseleccionados <div class='container'>
                                <div id="service" class="form-control multiselect-container form-floating mb-3" required></div>
                            </div> -->
                            <input type="hidden" id="serviciosSeleccionados" name="serviciosSeleccionados">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control" name="usuarioId" value="{{ Auth::user()->id }}" id="usuarioId">
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="empleadoId" id="empleadoId">\
                            </select>
                        </div>
                        <!-- <div style="display: none" class="mb-3">
                            <label for="notasCita">Notas de la cita</label>
                            <textarea class="form-control" id="notasCita" name='notasCita' rows="7" required></textarea>
                        </div> -->
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" style='display:none' id='btnEliminar' class='btn btn-danger'>Eliminar</button> -->
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-dark">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<br>

    

    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                    <div>
                        <label for="exampleDataList" class="form-label">Servicios y tecnicas</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Buscar...">
                            <datalist id="datalistOptions">
                                
                            </datalist>
                    </div>
                <div class="accordion" id="acordionCitas">
                    
                </div><!-- fin del accordion -->
                    <!-- Añadir más servicios según sea necesario -->
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
    


    <div class="parte-inferior" style="display: none" id="mostrarServiciosTecnicasSeleccionados">
            <div>

            <div id="cantidadTecnicas"></div>
                <div id="precioTotal"></div>

            </div>
        <button id='btnAgregar' class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#citasModal"  style="width: curso;">
            Agendar cita<i style="margin-left: 6px" class="fa-solid fa-calendar-plus"></i>
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


    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/i18n/datepicker-es.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
<script>

$(document).ready(function(){


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



    $("#fechaCita").datepicker({//cada que le pica al input de fechaCita se actualiza el select de horas y se muestra un calendario 
            dateFormat: 'yy-mm-dd',
            minDate: 0, // No permite seleccionar fechas anteriores a hoy
            maxDate: "+3M -1D",//permite hacer citas a de hoy a un mes y diez dias
            regional: "es",// no agarra el español
            onSelect: function(dateText) {

                console.log(dateText)
// separa la fecha de dateText ya que si da la fecha bien pero al ponerla asi actualizarOpciones(new Date(dateText)) muestra una fecha anterior
                var partes = dateText.split('-');
                var anio = parseInt(partes[0], 10);
                var mes = parseInt(partes[1], 10) - 1; 
                var dia = parseInt(partes[2], 10);
                
                
                var fechaSeleccionada = new Date(anio, mes, dia);

                console.log('Fecha seleccionada:', fechaSeleccionada);


                let select = $('#horaCita');
                select.show();

                actualizarOpcionesSelect(fechaSeleccionada);

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
            }
        });

        

        function actualizarOpcionesSelect(date) {
                let dia = date.getDay();
                console.log('fecha seleccionada: ',date);
                console.log('Hoy: ', new Date());
                let select = $('#horaCita');

                select.empty();

                if(date.getDay() === new Date().getDay()) {// si el dia es hoy
                    
                let horaInicio;
                let horaFin;
                if(dia>=1 && dia<=5){// lunes a viernes
                    horaInicio = new Date().getHours() + 2;//solo puede hacer citas 2 horas despues
                    console.log('hora Actual mas dos horas: ', horaInicio);
                    horaFin = 21;
                    if(horaInicio > horaFin) {
                        $('#horaCita').hide();
                        mostrarAlerta('por hoy ya no hay horarios disponibles', 'alert-primary', 'info-fill')
                    }
                }else if(dia === 0 || dia === 6){//sabados y domingos
                    horaInicio = new Date().getHours() + 2;
                    console.log(horaInicio);
                    horaFin = 16;
                    if(horaInicio > horaFin) {
                        $('#horaCita').hide();
                        mostrarAlerta('por hoy ya no hay horarios disponibles', 'alert-primary', 'info-fill')
                    }
                }

                for (let hora = horaInicio; hora < horaFin; hora++) {
                    const valorTiempo = `${String(hora).padStart(2, '0')}:00:00`;
                    console.log(valorTiempo);
                    select.append(new Option(valorTiempo, valorTiempo));
                }
                    return;
            }


            let horaInicio;
            let horaFin;
            if(dia>=1 && dia<=5){
                horaInicio = 9;
                horaFin = 21;
            }else if(dia === 0 || dia === 6){
                horaInicio = 10;
                horaFin = 16;
            }

            for (let hora = horaInicio; hora < horaFin; hora++) {
                const valorTiempo = `${String(hora).padStart(2, '0')}:00:00`;
                console.log(valorTiempo);
                select.append(new Option(valorTiempo, valorTiempo));
            }

        }

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
            
            // Iterar sobre los checkboxes seleccionados
            $('.custom-checkbox-input:checked').each(function() {
                let tecnicaId = $(this).val();
                let precio = parseFloat($(`#precio${tecnicaId}`).text().replace('Precio: $', ''));
                
                // Sumar el precio
                totalPrecio += precio;
                
                // Contar el número de técnicas seleccionadas
                cantidadTecnicasSeleccionadas++;
            });
            
            // Mostrar el precio total y la cantidad de técnicas seleccionadas
            $('#precioTotal').text(`Precio Total: $${totalPrecio.toFixed(2)}`);
            $('#cantidadTecnicas').text(`Técnicas Seleccionadas: ${cantidadTecnicasSeleccionadas}`);
        } else {
            $('#mostrarServiciosTecnicasSeleccionados').hide();
        }
    });


       //Dibujar empleados
       $.get('/usuarios/rol/empleado', function(usersRolEmpleado) {
                let selectUsuarios = $('#empleadoId');
                selectUsuarios.empty();

                const indiceAleatorio = Math.floor(Math.random() * usersRolEmpleado.length);
                const empleadoAleatorio = usersRolEmpleado[indiceAleatorio].id;


                selectUsuarios.append(`
                    <option class="text-center" value="${empleadoAleatorio}" selected>-- cualquier empleado --</option>
                `)

                usersRolEmpleado.forEach(usuario => {
                    selectUsuarios.append(`
                        <option class="text-center" value="${usuario.id}">Empleado: ${usuario.name + " " +usuario.apellido}</option>
                    `)
                    console.log(usersRolEmpleado);
                })
            })


        $('#citaForm').on('submit', function(e) {
            e.preventDefault();

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
                    let alertMessage = '';
                    let alertClass = '';
                    let alertIcon = '';

                    if(response.message === 'Cita creada con éxito'){
                        alertMessage = 'cita creada con exito';
                        alertClass = "alert-success";
                        alertIcon = "check-circle-fill";
                    } else if(response.message === 'Cita actualizada con éxito'){
                        alertMessage = 'Se confirmo correctamente';
                        alertClass = "alert-success";
                        alertIcon = "check-circle-fill";
                    }
                    if (alertMessage) {
                        localStorage.setItem('alertMessage', alertMessage);
                        localStorage.setItem('alertClass', alertClass);
                        localStorage.setItem('alertIcon', alertIcon);
                    }

                    window.location.href = '/Reservacion-User';//aqui va la puta vista que falta @aaron apurale alv
                    
                },
                error: function(xhr){
                    console.log(xhr);
                    var response = xhr.responseJSON;
                        let alertMessage = '';
                        let alertClass = 'alert-danger'; // clase predeterminada para errores
                        let alertIcon = 'exclamation-triangle-fill'; //icono de danger

                        if (response && response.message) {
                            if (response.message === 'Debe seleccionar al menos un servicio') {
                                alertMessage = 'Por favor, seleccione al menos un servicio.';
                                alertClass = 'alert-warning'; // Cambia a advertencia
                                alertIcon = 'exclamation-triangle-fill'; 
                            } else if (response.message == 'Ya existe una cita para esta fecha y hora') {
                                alertMessage = 'Ya existe una cita para esta fecha y hora.';
                                alertClass = 'alert-warning'; // Cambia a advertencia
                                alertIcon = 'exclamation-triangle-fill'; 
                            } else {
                                alertMessage = 'Por favor, complete todos los campos correctamente.';
                            }
                        } else {
                            alertMessage = 'Se ha producido un error en la solicitud.';
                        }

                        if (alertMessage) {
                            mostrarAlerta(alertMessage, alertClass, alertIcon);
                        }
                }
            })

        })


            
       
        function limpiarFormulario() {
            $('#id').val('');
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
