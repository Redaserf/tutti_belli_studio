<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas pendientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- datePicker -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- datePicker -->

<!--Esto es para e; calendario-->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales/es.min.js'></script> <!-- Archivo de localización en español -->
    


    <style>

        @import url('https://fonts.googleapis.com/css2?family=Playwrite+FR+Moderne:wght@100..400&display=swap');
        
        
        
        /* Dashboard */
        /* Google Font Import - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');


* {
    margin: 0;
    padding: 0;
}

.menu-links-custom {
    margin: 0;
    padding: 0;
    padding-left: 0;
}

ul{
    padding-left: 0;
}

.hiddenX {
    overflow-x: hidden;
}

#contenedor_carga {
    background: #ffffff url(/Integradora/resources/imagenes/preloader.gif) no-repeat center center;
    background-size: 20%;
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 100;
}

/* Dashboard CSS */
:root {
    --body-color: #FFF;
    --sidebar-color: #E4E9F7;
    --primary-color: #ffcade;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #707070;
    --tran-02: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.4s ease;
    --tran-05: all 0.5s ease;
}

body {
    height: 100vh;
    background: var(--body-color);
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;
}

.sidebar.close {
    width: 90px;
}

.dashboard-container {
    font-family: "Poppins", sans-serif;
}

.sidebar .text {
    font-size: 16px;
    font-weight: 500;
    color: var(--text-color);
    transition: var(--tran-03);
    white-space: nowrap;
    opacity: 1;
}

.sidebar.close .text {
    opacity: 0;
}

.sidebar .image {
    min-width: 60px;
    margin-right: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar li {
    height: 50px;
    margin-top: 10px;
    list-style: none;
    display: flex;
    align-items: center;
}

.sidebar li .icon {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 60px;
    font-size: 18px;
}

.sidebar li .icon,
.sidebar li .text {
    color: var(--text-color);
    transition: var(--tran-02);
}

.sidebar header {
    position: relative;
}

.sidebar .menu {
    margin-top: 45px;
}

.sidebar .image-text img {
    width: 48px;
    border-radius: 8px;
}

.sidebar header .image-text {
    display: flex;
    align-items: center;
}

header .image-text .header-text {
    display: flex;
    flex-direction: column;
}

header {
    margin-bottom: 20px;
}

.header-text .name {
    font-weight: 600;
}

.header-text .rol {
    margin-top: -2px;
}

.sidebar header .toggle {
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--sidebar-color);
    font-size: 16px;
    transition: var(--tran-03);
    cursor: pointer;
}

.sidebar.close header .toggle {
    transform: translateY(-50%);
}

.sidebar li a {
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 8px;
    transition: var(--tran-04);
}

.sidebar li a:hover {
    background: var(--primary-color);
}

.sidebar li a:hover .icon,
.sidebar li a:hover .text {
    color: var(--sidebar-color);
}

.sidebar .menu-bar {
    height: calc(100% - 110px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.home {
    position: relative;
    margin-left: 90px; /* Inicialmente, deja espacio para la sidebar */
    background: var(--body-color);
    transition: var(--tran-05);

}

.sidebar.close ~ .home {
    margin-left: 90px; /* Cuando la sidebar está cerrada, deja menos espacio */
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 98;
    display: none;
}

/* Fin Dashboard */


    .container-full{
        min-height: calc(94vh - 6rem);
        margin-top: -50px;
        margin: 100px;
        box-shadow: 1px 4px 8px rgba(0, 0, 0, 0.5);
        border-radius: 20px;
    }

    /* body{
        overflow-y: hidden;
    } */

    .citas{
        font-family: "Playwrite FR Moderne"
    }



    .top{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    }

    .top a{
    margin-left: 0px;
    }

    .top h2{
    font-family: "Playwrite FR Moderne";
    margin-right: 20px;
    }

    .section-divider {
      height: 3px;
      background-color: rgba(0, 0, 0, 0.8);
      min-width: 100%;
      margin-top: 20px;
    }


     /*Esto es para el select de los servicios*/

     .multiselect-container {
        display: flex;
        flex-direction: column;
        }
        .multiselect-option {
        cursor: pointer;
        padding: 5px;
        }
        .multiselect-option:hover {
        background-color: #f8f9fa;
        }
        .multiselect-option.selected {
        background-color: #0d6efd;
        color: white;
        }

        /*Esto es para el select de los servicios*/




        /*Esto es para personalizar el calendario*/

         /* Personaliza la barra de herramientas del encabezado */
         .fc-header-toolbar {
            background-color: #f0f0f0; /* Color de fondo de la barra de herramientas */
            border-bottom: 1px solid #cccccc; /* Borde inferior de la barra de herramientas */
        }

        /* Estilo para los botones de vista */
        .fc-header-toolbar .fc-button {
            background-color: #117bff; /* Color de fondo del botón */
            color: #ffffff; /* Color del texto del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            padding: 5px 10px; /* Espaciado interno */
            margin: 0 2px; /* Espaciado entre botones */
        }

        .fc-header-toolbar .fc-button:hover {
            background-color: #0056b3; /* Color de fondo al pasar el ratón */
            color: #ffffff; /* Color del texto al pasar el ratón */
        }

        .fc-header-toolbar .fc-button.fc-button-active {
            background-color: #003d7a; /* Color de fondo del botón activo */
            color: #ffffff; /* Color del texto del botón activo */
        }

        .fc-header-toolbar .fc-button.fc-button-group {
            background-color: #007bff; /* Color de fondo del grupo de botones */
            color: #ffffff; /* Color del texto del grupo de botones */
        }
        /*esto es para personalizar el calendario*/
    </style>

</head>

<body class="">

<meta name="csrf-token" content="{{ csrf_token() }}">


    <div id="contenedor_carga"></div>
    <div class="overlay"></div>

        {{-- Sidebar --}}
    
        <nav class="dashboard-container sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="/resources/img/dashboard-navbar/furina.jpg" alt="">
                    </span>
                    <div class="text header-text">
                        <span class="name">{{ Auth::user()->name }}</span>
                        <span class="rol">Administrador</span>
                    </div>
                </div>
                <i class="fa-solid fa-angle-right toggle"></i>
            </header>
    
            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="/Home-administrador">
                                <i class="fa-solid fa-house icon"></i>
                                <span class="text nav-text">Inicio</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/Ver-Citas">
                                <i class="fa-regular fa-calendar icon"></i>
                                <span class="text nav-text">Citas</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/Ver-Servicios">
                                <i class="fa-solid fa-scissors icon"></i>
                                <span class="text nav-text">Servicios</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/Ver-Cursos">
                                <i class="fa-solid fa-pencil icon"></i>
                                <span class="text nav-text">Cursos</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/Ver-Productos">
                                <i class="fa-solid fa-basket-shopping icon"></i>
                                <span class="text nav-text">Productos</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/Ver-Inventario">
                                <i class="fa-solid fa-box icon"></i>
                                <span class="text nav-text">Inventario</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/Ver-Descuentos">
                                <i class="fa-solid fa-percent icon"></i>
                                <span class="text nav-text">Descuentos</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/Ver-Empleados">
                                <i class="fa-solid fa-user-tie icon"></i>
                              <span class="text nav-text">Empleados</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="bottom-content">
                        <li class="">
                            <a href="/Logout">
                                <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                                <span class="text nav-text">Cerrar sesión</span>
                            </a>
                        </li>
                    </div>
                </div>
            </nav>
                
            {{-- Fin Sidebar --}}

            <section class="home">
        <div class="top text-center">
            <h2>Citas pendientes</h2>
            <button id='btnAgregar' class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#citasModal"  style="width: curso;">
                Agendar cita<i style="margin-left: 6px" class="fa-solid fa-calendar-plus"></i>
            </button>
        </div>
        <div class="section-divider"></div>


        <div id='calendar'></div>


        <!-- Modal -->
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
                                        <div class='container'>
                                            <div id="service" class="form-control multiselect-container form-floating mb-3" required></div>
                                        </div>
                                        <input type="hidden" id="serviciosSeleccionados" name="serviciosSeleccionados">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" name="usuarioId" id="usuarioId"></select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" name="empleadoId" id="empleadoId"></select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notasCita">Notas de la cita</label>
                                        <textarea class="form-control" id="notasCita" name='notasCita' rows="7" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" style='display:none' id='btnEliminar' class='btn btn-danger'>Eliminar</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-dark">Confirmar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/i18n/datepicker-es.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
    


    // Scripts para todas las vistas
    
        // Pantalla de carga
        var loader = document.getElementById("contenedor_carga");
        var navbar = document.getElementById("navbar");
        window.addEventListener('load', function(){
            $('#navbar').css('visibility', 'visible');
            loader.style.display = "none";
        });
    
    $(document).ready(function(){

        

            $("#fechaCita").datepicker({//cada que le pica al input de fechaCita se actualiza el select de horas y se muestra un calendario 
                dateFormat: 'yy-mm-dd',
                minDate: 0, // No permite seleccionar fechas anteriores a hoy
                maxDate: "+3M -1D",//permite hacer citas a de hoy a un mes y diez dias
                regional: "es",
                onSelect: function(dateText) {
                    actualizarOpcionesSelect(new Date(dateText));
                    let select = $('#horaCita');
                    select.show();
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
            let select = $('#horaCita');

            select.empty();



            let horaInicio;
            let horaFin;
            if(dia>=0 && dia<=4){
                horaInicio = 9;
                horaFin = 21;
            }else if(dia === 5 || dia === 6){
                horaInicio = 10;
                horaFin = 16;
            }

            for (let hora = horaInicio; hora < horaFin; hora++) {
                const valorTiempo = `${String(hora).padStart(2, '0')}:00:00`;
                console.log(valorTiempo);
                select.append(new Option(valorTiempo, valorTiempo));
            }

        }

        // verificar fechas y horas ya seleccionadas





        const eventos = @json($events);

        console.log(eventos);

        //calendario
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            initialDate: new Date().toISOString().split('T')[0],
            slotMinTime: '08:00:00',
            slotMaxTime: '21:00:00',
            slotDuration: '01:00:00',
            slotLabelInterval: '01:00:00',
            validRange: {
                start: new Date().toISOString().split('T')[0],
                end: new Date(new Date().setMonth(new Date().getMonth() + 3)).toISOString().split('T')[0]
            },
            events: @json($events),//variable de eventos que agarra el arreglo events de el controlador
            businessHours: [
                {
                    daysOfWeek: [1, 2, 3, 4, 5], // Lunes a viernes
                    startTime: '09:00',
                    endTime: '21:00'
                },
                {
                    daysOfWeek: [0, 6], // Domingo y sábado
                    startTime: '10:00',
                    endTime: '16:00'
                }
            ],
                selectable: true,
                selectOverlap: function(event) {
                    return event.display !== 'background';
                },
                eventClick: function(info) {
                // Prevenir el comportamiento por defecto del navegador
                info.jsEvent.preventDefault();

                var citaId = info.event.id;

                console.log(citaId);

                editarCita(citaId);

                // Acciones a realizar al hacer clic en un evento
                // alert('Evento: ' + info.event.title);
                // alert('Fecha de inicio: ' + info.event.start.toISOString());
                // alert('Descripción: ' + info.event.extendedProps.description);


                
                // Ejemplo de redirección a otra página
                // window.location.href = '/evento/' + info.event.id;
            },
            headerToolbar: {//y asi se dibujan los eventos en el calendario
                left: 'prev,next',
                center: 'title',
                right: 'timeGridWeek,timeGridDay' // user can switch between the two
            },
            locales: [ 'es' ],
            locale: 'es',
            slotLabelFormat: { // Ajusta el formato de las horas en el calendario
                hour: 'numeric',
                minute: '2-digit',
                hour12: false
            },
            titleFormat: {
                month: 'long',
                year: 'numeric',
                day: 'numeric',
                hour: 'numeric',
                minute: '2-digit',
                hour12: false
            },
            dateClick: function(info) {
                limpiarFormulario();


                var fechaHora = info.date;

                // Obtener la fecha (YYYY-MM-DD)
                var anio = fechaHora.getFullYear();
                var mes = String(fechaHora.getMonth() + 1).padStart(2, '0'); 
                var dia = String(fechaHora.getDate()).padStart(2, '0');
                var fechaFormatoDeseado = `${anio}-${mes}-${dia}`;

                // Obtener la hora (HH:MM:SS) 
                var hora = String(fechaHora.getHours()).padStart(2, '0');
                var minutos = String(fechaHora.getMinutes()).padStart(2, '0');
                var segundos = String(fechaHora.getSeconds()).padStart(2, '0');
                var tiempoFormatoDeseado = `${hora}:${minutos}:${segundos}`;

                console.log('Fecha:', fechaFormatoDeseado);
                console.log('Hora:', tiempoFormatoDeseado);
                
                $('#fechaCita').val(fechaFormatoDeseado); 
                console.log($('#fechaCita').val());
                actualizarOpcionesSelect(fechaHora);
                $('#horaCita').show();
                if ($('#horaCita').find(`option[value="${tiempoFormatoDeseado}"]`).length === 0)
                {
                    $('#horaCita').append(new Option(tiempoFormatoDeseado, tiempoFormatoDeseado));
                }
                $('#horaCita').val(tiempoFormatoDeseado);

                $('#btnEliminar').hide();
                $('#citasModal').modal('show');
            }
        });

        calendar.render();

        function eliminarCita(id){
            $.ajax({
                url: `/eliminar/cita/${id}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'DELETE',
                success: function(response){
                    alert('se elimino con exito');
                    window.location.href = '/Ver-Citas';
                },
                error: function(error) {
                    console.log(error);
                }
            })
        }

        $('#btnEliminar').on('click', function() {
            eliminarCita($('#id').val());
        })

        function editarCita(id){
            limpiarFormulario();
            
            $.get(`/cita/servicios/tecnica/${id}`, function(citasServicios) {

                console.log('Datos recibidos:', citasServicios); // Añadir un registro de depuración
                console.log(`Id de la cita: `, citasServicios.cita.id);

                

                $('#btnEliminar').show();
                
                    $('#id').val(citasServicios.cita.id);
                    $('#fechaCita').val(citasServicios.cita.fechaCita);


                    const citaDate = new Date(citasServicios.cita.fechaCita);
                    actualizarOpcionesSelect(citaDate);
                    
                    $('#horaCita').show();
                    $('#horaCita').val(citasServicios.cita.horaCita);

                    citasServicios.servicios.forEach(servicio => {

                        let selectMultipleServicios = $('#service');
                        let opcion = selectMultipleServicios.find(`div[data-select-id="${servicio.id}"]`);
                        
                        if(opcion.length > 0){

                            opcion.addClass('selected');

                            selectMultipleServicios.data('value', servicio.id);
                        }
                       
                    })
                    citasServicios.cita.servicios.forEach(servicio => {
                        console.log(servicio);
                        servicio.tecnicas.forEach(tecnica => {
                            console.log(tecnica);
                            $('.multiselect-option.selected').each(function() {
                                    console.log('ID de la técnica:', tecnica.id);
                                $(`#tecnicaSelect${servicio.id}`).val(tecnica.id);
                                $(`#tecnicaSelect${servicio.id}`).show();
                            });
                        })
                    })
                    $('#usuarioId').val(citasServicios.cita.usuarioId);
                    $('#empleadoId').val(citasServicios.cita.empleadoId);

                    $('#notasCita').val(citasServicios.cita.notasCita);
            })
            $('#citasModal').modal('show');

        }


            $.get('/servicios/tecnicas', function(servicios){//puedo traer las tecnicas con servicios.tecnicas.nombre ex
                    console.log(servicios);

                    let selectServiciosMul = $('#service');
                    selectServiciosMul.empty();

                    servicios.forEach(servicio => {
                        console.log(servicio.tecnicas);//si lo manda
                        selectServiciosMul.append(`

                            <div class="multiselect-option form-control" data-value="${servicio.id}" data-select-id="${servicio.id}">${servicio.nombre}</div>

                            <div class="form-floating mb-3">
                                <select class="form-control" id="tecnicaSelect${servicio.id}" style="display: none" required></select>
                            </div>

                    `)
                    servicio.tecnicas.forEach( tecnica => {
                        $(`#tecnicaSelect${servicio.id}`).append(`
                        <option value='${tecnica.id}'>-- ${tecnica.nombre} -- ${tecnica.precio}</option>
                    `)
                    })
                
                })
                //despliega el select de tecnicas de cada servicio cuando lo seleccionan
                $('#service').on('click', '.multiselect-option', function() {
                    $(this).toggleClass('selected');
                    console.log($(this));


                    let selectId = $(this).data('select-id');
                    $(`#tecnicaSelect${selectId}`).toggle();
                    console.log($(this));
               });

               
               
            })//Fin de dibujar servicios y sus tecnicas pipipi
            console.log($('.multiselect-option'));




            //Dibujar usuarios
            $.get('/usuarios/rol/usuario', function(usersRolUsuario) {
                let selectUsuarios = $('#usuarioId');
                selectUsuarios.empty();

                usersRolUsuario.forEach(usuario => {
                    selectUsuarios.append(`
                        <option class="text-center" value="${usuario.id}">Cliente: ${usuario.name + " " +usuario.apellido}</option>
                    `)
                    console.log(usersRolUsuario);
                })
            })

            //Dibujar empleados
            $.get('/usuarios/rol/empleado', function(usersRolEmpleado) {
                let selectUsuarios = $('#empleadoId');
                selectUsuarios.empty();

                usersRolEmpleado.forEach(usuario => {
                    selectUsuarios.append(`
                        <option class="text-center" value="${usuario.id}">Empleado: ${usuario.name + " " +usuario.apellido}</option>
                    `)
                    console.log(usersRolEmpleado);
                })
            })




            //registrar cita en la base de datos

        $('#citaForm').on('submit', function(e) {
            e.preventDefault();
            console.log($(this));


            let id = $('#id').val();
            let url = id ? `/editar/cita/${id}` : '/RegistroCitaAdmin';
            let method =  id ? 'PUT' : 'POST';
            

            let serviciosSeleccionados = []; 


            $('.multiselect-option.selected').each(function() {


                let servicioId = $(this).data('select-id');
                let tecnicaSeleccionada = $(`#tecnicaSelect${servicioId}`).val();
                serviciosSeleccionados.push({
                    servicioId: servicioId,
                    tecnicaId: tecnicaSeleccionada
                });
            });

          


            console.log('Servicios seleccionados:', serviciosSeleccionados);

            

            $('#serviciosSeleccionados').val(JSON.stringify(serviciosSeleccionados));
            
            let formData = $(this).serialize();
            
            $.ajax({
                url: url,
                method: method,
                data: formData,            
                success: function(response) {
                    console.log(response);
                    limpiarFormulario();                    
                    if(response.message === 'Cita creada con éxito'){

                        alert('cita creada con exito');

                    }else if(response.message === 'Cita actualizada con éxito'){
                        alert('Se edito correctamente');
                    }
                    window.location.href = '/Ver-Citas';
                },
                error: function(xhr) {
                    console.log(xhr);
                    var response = xhr.responseJSON;
                    if (response && response.message) {
                        // Verificar si el mensaje de error es el específico para selección de servicios
                        if (response.message === 'Debe seleccionar al menos un servicio') {
                            alert('Por favor, seleccione al menos un servicio.');
                        }else if(response.message == 'Ya existe una cita para esta fecha y hora'){
                            alert('Ya existe una cita para esta fecha y hora');
                        }else if(response.message === 'Error al actualizar la cita'){
                            alert('Error al actualizar la cita');
                        }
                         else {
                            // Mostrar un mensaje de error genérico para otros mensajes
                            alert('Por favor, complete todos los campos correctamente.');
                        }
                    } else {
                        // Mostrar un mensaje de error genérico si no hay mensaje específico
                        alert('Se ha producido un error en la solicitud.');
                    }
                }
            });

        });

        console.log('Valor del input serviciosSeleccionados:', $('#serviciosSeleccionados').val());


       
        function limpiarFormulario() {
            $('#id').val('');
            $('#citaForm')[0].reset();
            $('.multiselect-option').removeClass('selected');
            $('select[id^="tecnicaSelect"]').hide();
        }

        $('#btnAgregar').on('click', function() {
//limpia el btn de agregar cita y esconde el btn de eliminar y la hora de la cita para que se despliegue cuando seleccionen fecha
            limpiarFormulario();
            $('#horaCita').hide();
            $('#btnEliminar').hide();
        })






    
        // Dashboard toggle
        const body = document.querySelector("body"),
                sidebar = body.querySelector(".sidebar"),
                toggle = body.querySelector(".toggle"),
                overlay = body.querySelector(".overlay");
    
        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if (!sidebar.classList.contains("close")) {
                overlay.style.display = "block";
            } else {
                overlay.style.display = "none";
            }
        });
    
        overlay.addEventListener("click", () => {
            sidebar.classList.add("close");
            overlay.style.display = "none";
        });
    
        // Fin scripts para todas las vistas
    
    
        function botones(){ 
              if (window.innerWidth <= 960) {
                $('.top').css('flex-direction', 'column');
                $('.top').css('gap', '10px');
              } else {
                $('.top').css('gap', '0');
                $('.top').css('flex-direction', '');
              }
          }
          window.addEventListener('resize', botones);
          botones();
    
    
        // Fin document.ready
    });
    
    </script>
</body>
</html>