<!DOCTYPE html>
<html lang="es">
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
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&display=swap');

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
    background: #ffffff url(/resources/img/home/preloader.gif) no-repeat center center;
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

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .home {
                margin-left: 0 !important;
            }
            .sidebar {
                display: none;
            }
            .sidebar.open {
                display: block;
                width: 250px;
            }
            .sidebar-btn {
                display: block;
            }
            .sidebar header .toggle {
                display: none; 
            }
        }

        .sidebar-btn {
            display: none;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 99;
            background: var(--primary-color);
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            color: white;
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

        /*jajaja*/

        .jajaja {
            background-color: red;
        }

          /* modal de citas, es para que este por encima de cualquier otro modal */
          #citasModal {
            z-index: 2000; /* Ajusta este valor según sea necesario */
        }
        .custom-checkbox-input {
            width: 20px;
            height: 20px;
            border: 2px solid #000000; /* Cambia el color del borde */
            background-color: #fff; /* Cambia el color de fondo */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Agrega sombra */
        }

        .custom-modal-content {
        font-family: "Josefin Sans", sans-serif !important;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .custom-modal-header {
        background-color: #ffb6c1;
        color: black;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .custom-modal-header .modal-title {
        font-weight: 600;
    }

    .custom-modal-body {
        background-color: #fff;
        padding: 20px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .btn-danger{
        margin: 4px;
    }
    .btn-success{
        margin-left: 5px !important;
    }

    .custom-modal-footer {
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

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .modal-header .btn-close {
        filter: invert(1);
    }

    .custom-input {
        border: 2px solid #e83e8c;
        border-radius: 5px;
        padding: 10px;
        font-size: 1rem;
    }

    .custom-input:focus {
        border-color: #e83e8c;
        box-shadow: 0 0 5px rgba(232, 62, 140, 0.5);
    }

    .custom-select {
        border: 2px solid #e83e8c;
        border-radius: 5px;
        padding: 10px;
        font-size: 1rem;
        background-color: white;
    }

    .custom-select:focus {
        border-color: #e83e8c;
        box-shadow: 0 0 5px rgba(232, 62, 140, 0.5);
    }
        /*estilos pa los modales pq pusiste jajaja hugo nmms xd*/
    </style>

</head>

<body class="">
    
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    
    <div id="contenedor_carga"></div>
    <div class="overlay"></div>
    <button style="border-radius: 15px;" class="sidebar-btn">☰</button>

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
            <div class="top text-center Titulo-mamalon">

            <button id='btnVerCitas' class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#verCitasModal"  style="width: curso; margin-right:20px;">
                Citas pendientes<i style="margin-left: 6px" class="fa-solid fa-calendar-plus"></i>
            </button>

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
                        <div class="modal-content custom-modal-content">
                            <form id="citaForm">
                                @csrf   
                                <div class="modal-header custom-modal-header">
                                    <h5 class="modal-title" id="labelcitasModal">Crear Cita</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body custom-modal-body">
                                    <input type="hidden" id='id'>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control custom-input" id="fechaCita" name='fechaCita' placeholder="Fecha de la cita" required>
                                        <label for="fechaCita" id="labelFechaCita">Fecha de la cita</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                    <select style='display: none' class='form-control custom-select' id="horaCita" name="horaCita" required>
                                    
                                    </select>
                                    </div>
                                    <div>
                                        <div class='container'>
                                            <div id="service" class="form-control multiselect-container form-floating mb-3 custom-select" required></div>
                                        </div>
                                        <input type="hidden" id="serviciosSeleccionados"  class="custom-input" name="serviciosSeleccionados">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-control custom-select" name="usuarioId" id="usuarioId"></select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control custom-input" type="email" id="emailUsuario">
                                        <label for="fechaCita" id="labelFechaCita">Correo electrónico</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-control custom-select" name="empleadoId" id="empleadoId"></select>
                                    </div>
                                    <div style="display:none" id="msg"></div>
                                    <div class="mb-3">
                                        <label for="notasCita">Notas de la cita</label>
                                        <textarea class="form-control" id="notasCita" name='notasCita' rows="7" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" style='display:none' id='btnEliminar' data-bs-dismiss="modal" class='btn btn-danger'>Eliminar</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-pink">Confirmar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

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



            <!-- modal ver citas que aun no son aceptadas -->

            <div class="modal fade" id="verCitasModal" tabindex="-1" aria-labelledby="labelVerCitasModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl"> <!-- modal-lg para un modal más grande -->
        <div class="modal-content custom-modal-content">
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title" id="labelVerCitasModal">Citas pendientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-modal-body">
                <div class="table-responsive"> <!-- Agregar clase table-responsive -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Fecha de la cita</th>
                                <th>Hora de la cita</th>
                                <th>Nombre del cliente</th>
                                <th>Número de telefono</th>
                                <th>Correo electronico</th>
                                <th>Nombre del empleado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tablaCitas">
                            <!-- Aquí se llenarán las filas de la tabla -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-pink">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<!-- modal para rechazar cita -->

<div class="modal fade" id="eliminarCita" tabindex="-1" aria-labelledby="labelEliminarCitasModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"> <!-- modal-lg para un modal más grande -->
        <div class="modal-content custom-modal-content">
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title" id="labelEliminarCitasModal">Rechazar Cita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-modal-body">
                ¿Estás seguro de eliminar la cita?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" id="rechazarCita" data-cita-id="" class="btn btn-pink">Confirmar</button>
            </div>
        </div>
    </div>
</div>





    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/i18n/datepicker-es.min.js"></script>
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
                }, 6500);
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

//establecer fecha al minDate si el dia de hoy ya son mas de las 6 pues que muestre el dia siguiente si no pues que muestre el dia de hoy


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

                    actualizarOpcionesSelect(fechaSeleccionada);

                    let select = $('#horaCita');
                    select.show();
               
                }
            });

            function esMismaFecha(fecha1, fecha2) {//compara si es el mismo anño, mes y dia
                return fecha1.getFullYear() === fecha2.getFullYear() &&
                fecha1.getMonth() === fecha2.getMonth() &&
                fecha1.getDate() === fecha2.getDate();
            }

        function actualizarOpcionesSelect(date) {
                let dia = date.getDay();
                console.log('fecha: ',date);
                console.log('Hoy: ', new Date());
                let select = $('#horaCita');

                select.empty();

                let hoy = new Date();
                hoy.setHours(0, 0, 0, 0);

                if(esMismaFecha(date, hoy)) {// si el dia es hoy
                    console.log(date, hoy);
                    
                let horaInicio;
                let horaFin;
                if(dia>=1 && dia<=5){// lunes a viernes
                    horaInicio = new Date().getHours() + 2;//solo puede hacer citas 2 horas despues
                    console.log('hora Actual mas dos horas: ', horaInicio);
                    horaFin = 21;
                    if(horaInicio > horaFin) {
                        mostrarAlerta('Ya no hay horarios disponibles por hoy.', 'alert-primary', 'info-fill')
                    }
                }else if(dia === 0 || dia === 6){//sabados y domingos
                    horaInicio = new Date().getHours() + 2;
                    console.log('hora hoy sabado 27 de julio: ', horaInicio);
                    horaFin = 21;
                    if(horaInicio > horaFin) {
                        mostrarAlerta('Ya no hay horarios disponibles por hoy.', 'alert-primary', 'info-fill')
                    }
                }

                for (let hora = horaInicio; hora < horaFin; hora++) {
                    const valorTiempo = `${String(hora).padStart(2, '0')}:00:00`;
                    console.log('horas del dia de hoy: ',valorTiempo);
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
                horaInicio = 9;
                horaFin = 21;
            }

            for (let hora = horaInicio; hora < horaFin; hora++) {
                const valorTiempo = `${String(hora).padStart(2, '0')}:00:00`;
                console.log(valorTiempo);
                select.append(new Option(valorTiempo, valorTiempo));
            }

        }

        // verificar fechas y horas ya seleccionadas

        //para que el fullcalendar se vaya actualizando  y no pueda hacer citas que no sean despues de dos horas de la hora actual muajaj

        let fechaAhora = new Date();
        let dosHorasDespues = new Date(fechaAhora.getTime() + 2 * 60 * 60 *1000);
        console.log('Fecha con dos horas despues: ', dosHorasDespues);
        let fechaInicio2horas = dosHorasDespues.toISOString().split('T')[0];
        console.log('dos horas despues: ',fechaInicio2horas);

        

        let horasActuales = new Date(fechaAhora.getTime());
        console.log(horasActuales);
        let fechaHoraActual = horasActuales.toISOString().split('T')[0];

        console.log(fechaHoraActual);

        const eventos = @json($events);

        // console.log("eventos", eventos);

        //calendario
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            initialDate: new Date().toISOString().split('T')[0],
            slotMinTime: '09:00:00',
            slotMaxTime: '21:00:00',
            slotDuration: '01:00:00',
            slotLabelInterval: '01:00:00',
            validRange: {
                start: fechaHoraActual,
                end: new Date(new Date().setMonth(new Date().getMonth() + 3)).toISOString().split('T')[0]
            },
            events: eventos,//variable de eventos que agarra el arreglo events de el controlador
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

                var fechaSeleccionada = new Date(info.event.start);


                console.log(citaId);
                actualizarOpcionesSelect(fechaSeleccionada);

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
                console.log('fecha y hora: ', fechaHora);

                


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

                // Fecha actual en formato (YYYY-MM-DD)
                var anioActual = new Date().getFullYear();
                var mesActual = String(new Date().getMonth() + 1).padStart(2, '0');
                var diaActual = String(new Date().getDate()).padStart(2, '0');
                var fechaActualJA = `${anioActual}-${mesActual}-${diaActual}`;

                if(fechaFormatoDeseado === fechaActualJA) {

                    if (fechaHora.getHours() < dosHorasDespues.getHours()) {
                        mostrarAlerta('Las citas solo se pueden hacer con al menos 2 horas de anticipación.', "alert-primary", "info-fill");
                        return;
                    }

                }

                console.log('Fecha:', fechaFormatoDeseado);
                console.log('Hora:', tiempoFormatoDeseado);
                
                $('#fechaCita').val(fechaFormatoDeseado); 
                console.log($('#fechaCita').val());
                actualizarOpcionesSelect(info.date);
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


        // function recargarEventos() {
        //     $.get('/cita/obtener/eventos', function(response) {
        //         // Eliminar todos los eventos actuales
        //         calendar.removeAllEvents();
        //         // Agregar los nuevos eventos obtenidos desde el backend
        //         calendar.addEventSource(response.events);
        //         // Re-renderizar el calendario
        //         calendar.render();
        //     });
        // }



        function eliminarCita(id){
            $.ajax({
                url: `/eliminar/cita/${id}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'DELETE',
                success: function(response){
                    console.log(response);
                    // $('#citaForm').hide();
                    window.location.href = '/Ver-Citas';


                    mostrarAlerta('Se eliminó con éxito la cita.', 'alert-success', 'check-circle-fill')
                     // Guardar el mensaje de alerta en localStorage
                    // localStorage.setItem('alertMessage', 'Se eliminó con éxito');
                    // localStorage.setItem('alertClass', 'alert-danger');
                    // localStorage.setItem('alertIcon', 'exclamation-triangle-fill');
                    
                    // Redirigir después de un breve retraso para asegurarse de que la alerta se muestre
                    // setTimeout(function() {
                    //     window.location.href = '/Ver-Citas';
                    // }, 100); 
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

                console.log('Datos recibidos:', citasServicios); 
                console.log(`Id de la cita: `, citasServicios.cita.id);

                

                $('#btnEliminar').show();
                
                    $('#id').val(citasServicios.cita.id);
                    $('#fechaCita').val(citasServicios.cita.fechaCita);
                   

                    const citaDate = new Date(citasServicios.cita.fechaCita);
                    $('#horaCita').show();
                    console.log('hora de la cita: ', citasServicios.cita.horaCita);

                    // actualizarOpcionesSelect(citaDate);//no actualiza las fechas a la hora de editar
                    if ($('#horaCita').find(`option[value="${citasServicios.cita.horaCita}"]`).length === 0)
                    {
                        $('#horaCita').append(new Option(citasServicios.cita.horaCita, citasServicios.cita.horaCita));
                    }
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

                   
                    let opcion = $('#usuarioId').find('option:selected');
                    let emailInput = $('#emailUsuario');

                    if (citasServicios.cita.usuarioId === 1) {
                        emailInput.val('UsuarioNoregistrado@example.com');
                    } else {
                        // Aquí asumo que el email del usuario está incluido en citasServicios.cita.emailUsuario
                        let email = opcion.data('email-usuario');
                        emailInput.val(email);
                    }


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
                let email = $('#emailUsuario');
                email.empty();

                usersRolUsuario.forEach(usuario => {
                    selectUsuarios.append(`
                        <option class="text-center" data-email-usuario="${usuario.email}" value="${usuario.id}">Cliente: ${usuario.name + " " +usuario.apellido}</option>
                    `)
                    console.log(usersRolUsuario);
                })

                selectUsuarios.change(function() {
                    let opcionSelected = selectUsuarios.find('option:selected');
                    let value = $(this).val();

                    if(value === "1"){
                        email.val('');
                        email.prop('readonly', false);
                    }else{
                        let emailUsuario = opcionSelected.data('email-usuario');
                        email.val(emailUsuario);
                        email.prop('readonly', true);
                    }
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


            $('.multiselect-option.selected').each(function() {//ousheo servicios y tecnicas


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
                    let alertMessage = '';
                    let alertClass = '';
                    let alertIcon = '';

                    if(response.message === 'Cita creada con éxito'){
                        alertMessage = 'Cita creada con éxito.';
                        alertClass = "alert-success";
                        alertIcon = "check-circle-fill";
                    } else if(response.message === 'Cita actualizada con éxito'){
                        alertMessage = 'Cita actualizada con éxito.';
                        alertClass = "alert-success";
                        alertIcon = "check-circle-fill";
                    }
                    if (alertMessage) {
                        localStorage.setItem('alertMessage', alertMessage);
                        localStorage.setItem('alertClass', alertClass);
                        localStorage.setItem('alertIcon', alertIcon);
                    }
                    window.location.href = '/Ver-Citas';
                },
                error: function(xhr) {
                        console.log(xhr);
                        var response = xhr.responseJSON;
                        let alertMessage = '';
                        let alertClass = 'alert-danger'; // clase predeterminada para errores
                        let alertIcon = 'exclamation-triangle-fill'; //icono de danger

                        if (response && response.message) {
                            if (response.message === 'Debe seleccionar al menos un servicio') {
                                alertMessage = 'Por favor, selecciona al menos un servicio.';
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
                            alertMessage = 'Se ha producido un error en la solicitud verifique los campos.';
                        }

                        if (alertMessage) {
                            mostrarAlerta(alertMessage, alertClass, alertIcon);
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



        //dibujar citas no aceptadas
        function citasNoAceptadas(){

            $.get('/cita/usuario/empleado', function(citas) {
                let tabla = $('#tablaCitas');
                tabla.empty();
                
                citas.forEach(cita => {
                    console.log(cita.id);
                    tabla.append(`
                        <tr>
                            <td>${cita.fechaCita}</td>
                            <td>${cita.horaCita}</td>
                            <td>${cita.usuario.clienteNombreCompleto}</td>
                            <td>${cita.usuario.numeroTelefono}</td>
                            <td>${cita.usuario.email}</td>
                            <td>${cita.usuario_empleado.empleadoNombreCompleto}</td>
                            <td>
                                <button class="btn btn-danger eliminar-cita-btn" data-cita-id="${cita.id}">Eliminar cita<i style="margin-left:9px;" class="fa-solid fa-trash"></i></button>
                                <button class="btn btn-success aceptar-cita" data-cita-id="${cita.id}" id="aceptarCita${cita.id}">Aceptar cita<i style="margin-left:9px;" class="fa-solid fa-check"></i></button>

                            </td>
                        </tr>
                    `);
                });
            });

        }

        citasNoAceptadas();      
        
        $(document).on('click', '.aceptar-cita', function() {
            let citaId = $(this).data('cita-id');
            editarCita(citaId);
        })


        $(document).on('click', '.eliminar-cita-btn', function() {
            let citaId = $(this).data('cita-id');
            console.log(citaId);
            $('#rechazarCita').data('cita-id', citaId);
            // $('#verCitasModal').hide();//cerrar el modal de citas pendientes
            $('#eliminarCita').modal('show');
        });

        $('#rechazarCita').on('click', function() {
            let citaId = $(this).data('cita-id');
            console.log(citaId);
            eliminarCita(citaId);
            citasNoAceptadas();
            //cerrar el modal
            $('#eliminarCita').modal('hide');
        });




    
            // Dashboard toggle
            const body = document.querySelector("body"),
                sidebar = body.querySelector(".sidebar"),
                toggle = body.querySelector(".toggle"),
                overlay = body.querySelector(".overlay"),
                sidebarBtn = body.querySelector(".sidebar-btn");

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
                sidebar.classList.remove("open");
            });

            sidebarBtn.addEventListener("click", () => {
                sidebar.classList.toggle("open");
                if (sidebar.classList.contains("open")) {
                    sidebar.classList.remove("close");
                    overlay.style.display = "block";
                } else {
                    sidebar.classList.add("close");
                    overlay.style.display = "none";
                }
            });

                        // Botón sidebar
                        function botonSidebar() { 
                if (window.innerWidth <= 768) {
                    $('.sidebar-btn').css('display', 'block');
                } else {
                    $('.sidebar-btn').css('display', 'none');
                }
            }
            window.addEventListener('resize', botonSidebar);
            botonSidebar();
    
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