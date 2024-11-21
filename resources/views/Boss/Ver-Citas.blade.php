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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

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
    z-index: 300000;
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

    .sidebar.close .header-text {
    display: none;
    }
    .tab-content{
    padding: 36px;
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
    #mensajeNoCitas{
        font-size: 24px;
        color: #000; /* Texto negro */
        background-color: #fff; /* Fondo blanco */
        border: none; /* Sin bordes */
        border-radius: 0; /* Sin bordes redondeados */
        padding: 20px;
        margin-top: 20px;
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
        word-wrap: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .custom-select:focus {
        border-color: #e83e8c;
        box-shadow: 0 0 5px rgba(232, 62, 140, 0.5);
    }
    .custom-select-tec{
        border: 2px solid #00ffff;
        border-radius: 5px;
        padding: 10px;
        font-size: 1rem;
        background-color: white;
        word-wrap: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .custom-select-tec:focus {
        border-color: #00ffff;
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
                        <a style="text-decoration:none; color: #707070;" href="/Perfil-Admin">
                            <span class="name">{{ Auth::user()->name }}<i style="margin-left:6px;" class="fa-solid fa-pen-to-square"></i></span>
                        </a>
                        <span class="rol">Administrador</span>
                    </div>
                </div>
                <i class="fa-solid fa-angle-right toggle"></i>
            </header>
    
            <div class="menu-bar "id="scrollDash">
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
                          <li class="nav-link">
                          <a href="/Ver-Ventas">
                              <i class="fa-solid fa-money-bill-trend-up icon"></i>
                            <span class="text nav-text">Ventas</span>
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
                                    <select class='form-control custom-select' id="horaCita" name="horaCita">
                                    
                                    </select>
                                    </div>
                                    <div>
                                        <div class='container'>
                                            <div id="service" class="form-control multiselect-container form-floating mb-3" required></div>
                                        </div>
                                        <input type="hidden" id="serviciosSeleccionados"  class="custom-input" name="serviciosSeleccionados">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="hidden" class="form-control" name="usuarioId" id="usuarioId" readonly>
                                        <input type="text" id="nombreUsuario" class="form-control" style="display: none" readonly>
                                        <label for="nombreUsuario" id="nombreUsuarioLabel" style="display: none">Cliente</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control custom-input" type="number" id="telefonoUsuario" style="display: none" readonly>
                                        <label for="telefonoUsuario" id="labelTelefono" style="display: none">Telefono</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="hidden" class="form-control" name="empleadoId" value="{{ Auth::user()->id }}" id="empleadoId" readonly>
                                        <input type="hidden" id="estadoCita" name="estadoCita" value="true">
                                        <!-- <label for="empleadoId">Empleado</label> -->
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
                                    <button type="button" id="aceptarCitaa" data-cita-id="" style="display: none" class="btn btn-pink">Confirmar</button>
                                    <button type="submit" id="mandarCita" class="btn btn-pink">Confirmar</button>
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
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
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
                        <div id="mensajeNoCitas" class="alert alert-warning text-center mensajeNoCitas" style="display: none;">
                            No hay citas para mostrar
                        </div>
                        <div class="row mb-3">
                            </div>
                            <div class="table-responsive"> <!-- Agregar clase table-responsive -->
                                <table id="tablaCitas" class="table table-hover">
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




    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/i18n/datepicker-es.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
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
        $('#tablaCitas').DataTable({
        "pageLength": 5, // Número de filas por página
        "searching": true, // Activa la búsqueda
        "language": {
            "lengthMenu": "Mostrar _MENU_ citas por página",
            "zeroRecords": "No se encontraron citas",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ citas",
            "infoEmpty": "No hay citas disponibles",
            "infoFiltered": "(filtrado de _MAX_ citas totales)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
    $('#filtroFecha').on('keyup change', function() {
        table.column(0).search(this.value).draw();
    });

    // Filtrar por usuario
    $('#filtroUsuario').on('keyup change', function() {
        table.column(2).search(this.value).draw();
    });
        


        var valorActual = $('#usuarioId').val();

        $('#usuarioId').on('focus', function() {
            valorActual = $(this).val();
        }).on('change', function() {
            $(this).val(valorActual);
        });

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

            const alertMessage = localStorage.getItem('alertMessage');
            const alertClass = localStorage.getItem('alertClass');
            const alertIcon = localStorage.getItem('alertIcon');

            if (alertMessage) {
                mostrarAlerta(alertMessage, alertClass, alertIcon);

                localStorage.removeItem('alertMessage');
                localStorage.removeItem('alertClass');
                localStorage.removeItem('alertIcon');
            }



//             $("#fechaCita").datepicker({//cada que le pica al input de fechaCita se actualiza el select de horas y se muestra un calendario 
//                 dateFormat: 'yy-mm-dd',
//                 minDate: 0, // No permite seleccionar fechas anteriores a hoy
//                 maxDate: "+3M -1D",//permite hacer citas a de hoy a un mes y diez dias
//                 regional: "es",// no agarra el español
//                 onSelect: function(dateText) {

//                     console.log(dateText)
// // separa la fecha de dateText ya que si da la fecha bien pero al ponerla asi actualizarOpciones(new Date(dateText)) muestra una fecha anterior
//                     var partes = dateText.split('-');
//                     var anio = parseInt(partes[0], 10);
//                     var mes = parseInt(partes[1], 10) - 1; 
//                     var dia = parseInt(partes[2], 10);
                    
                 
//                     var fechaSeleccionada = new Date(anio, mes, dia);

//                     console.log('Fecha seleccionada:', fechaSeleccionada);

//                     let select = $('#horaCita');
//                     select.show();
//                     // actualizarOpcionesSelect(fechaSeleccionada);

//                 },
//                 beforeShowDay: function(fecha) {
//                     var dia = fecha.getDay();
//                     if (dia === 0) {//domingo
//                         return [false, "", "Domingo no disponible"];
//                     }
//                     var hoy = new Date();
//                     console.log('hoy: ',hoy)
//                     if (fecha.toDateString() === hoy.toDateString()) {
//                         if (hoy.getHours() >= 16) {//bloquea despues de las 4 de la tarde o sea 16:00:00
//                             return [false, "", "No se pueden seleccionar citas después de las 16:00"];
//                         }
//                     }
//                     return [true, "", ""];
//                 }
//             });

            // $("#fechaCita").on('input', function() {
            //     var fechaTexto = $(this).val();
            //         var partes = fechaTexto.split('-');
            //         var anio = parseInt(partes[0], 10);
            //         var mes = parseInt(partes[1], 10) - 1; 
            //         var dia = parseInt(partes[2], 10);
                    
            //         var fechaSeleccionada = new Date(anio, mes, dia);
            //             // actualizarOpcionesSelect(fechaSeleccionada);
            // });

            function esMismaFecha(fecha1, fecha2) {//compara si es el mismo anño, mes y dia
                return fecha1.getFullYear() === fecha2.getFullYear() &&
                fecha1.getMonth() === fecha2.getMonth() &&
                fecha1.getDate() === fecha2.getDate();
            }

        // function actualizarOpcionesSelect(date) {
        //         let dia = date.getDay();
        //         console.log('fecha: ',date);
        //         console.log('Hoy: ', new Date());
        //         let select = $('#horaCita');

        //         select.empty();

        //         let hoy = new Date();
        //         hoy.setHours(0, 0, 0, 0);

        //         if(esMismaFecha(date, hoy)) {// si el dia es hoy\
        //             console.log(date, hoy);
                    
        //         let horaInicio;
        //         let horaFin;
        //         if(dia>=1 && dia<=5){// lunes a viernes
        //             horaInicio = new Date().getHours() + 2;//solo puede hacer citas 2 horas despues
        //             console.log('hora Actual mas dos horas: ', horaInicio);
        //             horaFin = 21;
                    
        //         }else if(dia === 0 || dia === 6){//sabados y domingos
        //             horaInicio = new Date().getHours() + 2;
        //             console.log('hora hoy sabado 27 de julio: ', horaInicio);
        //             horaFin = 21;
        //         }
                    
        //         if(horaInicio > horaFin) {
        //             select.hide();
        //             mostrarAlerta('Ya no hay horarios disponibles por hoy.', 'alert-primary', 'info-fill')
        //         }
                

        //         for (let hora = horaInicio; hora < horaFin; hora++) {
        //             const valorTiempo = `${String(hora).padStart(2, '0')}:00:00`;
        //             console.log('JAJAJJA: ',valorTiempo);
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
        //         horaInicio = 9;
        //         horaFin = 21;
        //     }

        //     for (let hora = horaInicio; hora < horaFin; hora++) {
        //         const valorTiempo = `${String(hora).padStart(2, '0')}:00:00`;
        //         console.log(valorTiempo);
        //         select.append(new Option(valorTiempo, valorTiempo));
        //     }

        // }

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

        let fechaAhoraJAJA = new Date();
        console.log('Fecha de hoyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy:', fechaAhoraJAJA);



        let horarios = [];
        let empleado = [];
        $.ajax({
    url: `/horario/empleado`,
    method: 'GET',
    success: function(data) {
        empleado = data[0];
        horarios = empleado.horarios;

        const workingDays = horarios.map(horario => parseInt(horario.diaSemana));
        const allDays = [0, 1, 2, 3, 4, 5, 6];
        const hiddenDays = allDays.filter(day => !workingDays.includes(day));
        const businessHours = horarios.map(horario => {
            return {
                daysOfWeek: [parseInt(horario.diaSemana)],
                startTime: horario.horaInicio,
                endTime: horario.horaFin
            };
        });

        const slotMinTime = horarios.reduce((min, horario) => {
            return horario.horaInicio < min ? horario.horaInicio : min;
        }, horarios[0].horaInicio);

        const slotMaxTime = horarios.reduce((max, horario) => {
            return horario.horaFin > max ? horario.horaFin : max;
        }, horarios[0].horaFin);

        
        let cursosFechas = data.fechasCursos;
        console.log('cursosssssssssssssssssssssss: ', cursosFechas);

        
        function deshabilitarFechaPorCurso(fecha, fechasCursos) {
            const fechaMoment = moment(fecha).format('YYYY-MM-DD');

            for (let curso of fechasCursos) {
                if (
                    fechaMoment === curso.primeraFecha ||
                    fechaMoment === curso.segundaFecha ||
                    fechaMoment === curso.terceraFecha
                ) {
                    return [false, "", "Fecha de curso"]; 
                }
            }

            return [true, "", ""];
        }

        
        function deshabilitarFecha(fecha) {
            const fechaMoment = moment(fecha);
            const diaSemana = fechaMoment.day();
            const horarioDia = horarios.find(horario => parseInt(horario.diaSemana) === diaSemana);

            if (!horarioDia) return false;

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
                if (!horasOcupadas.includes(horaTexto)) {
                    return true; //si hay una hora minimo
                }
                horaInicio.add(1, 'hour');
            }

            return false; //deshabilita la fecha en el datepicker
        }

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

        let limiteHora = new Date();
        let dosHorasDespues = moment().add(2, 'hours');

        while (horaInicio.isBefore(horaFin)) {
            let horaTexto = horaInicio.format('HH:mm:ss');

            if (!horasOcupadas.includes(horaTexto)) {
                if (fechaMoment.isSame(hoy, 'day')) {
                    if (horaInicio.isAfter(dosHorasDespues)) {
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
            mostrarAlerta('No hay horas disponibles para la fecha seleccionada.', 'alert-primary', 'info-fill');
            $('#citasModal').modal('hide');
        }
    }
}

        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            initialDate: fechaAhoraJAJA,
            slotMinTime: slotMinTime,
            slotMaxTime: slotMaxTime,
            allDaySlot: false,
            slotDuration: '01:00:00',
            slotLabelInterval: '01:00:00',
            validRange: {
                start: fechaAhoraJAJA,
                end: new Date(new Date().setMonth(new Date().getMonth() + 3)).toISOString().split('T')[0]
            },
            events: eventos,
            hiddenDays: hiddenDays,
            businessHours: businessHours,
            selectable: true,
            selectOverlap: function(event) {
                return event.display !== 'background';
            },
            eventClick: function(info) {
                info.jsEvent.preventDefault();
                var citaId = info.event.id;
                var fechaSeleccionada = new Date(info.event.start);
                console.log(citaId);
                editarCita(citaId);
            },
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: 'timeGridWeek,timeGridDay'
            },
            locales: ['es'],
            locale: 'es',
            slotLabelFormat: {
                hour: 'numeric',
                minute: '2-digit',
                hour12: false
            },
            titleFormat: {
                month: 'numeric',
                year: 'numeric',
                day: 'numeric',
                hour: 'numeric',
                minute: '2-digit',
                hour12: false
            },
            dateClick: function(info) {
                dibujarGuest();

                var fechaHora = info.date;
                var hoy = new Date();

                let fechaMoment = moment(fechaHora);
                let diaSemana = fechaMoment.day();
                let horarioDia = horarios.find(horario => parseInt(horario.diaSemana) === diaSemana);

                if (!horarioDia) {
                    mostrarAlerta('El día seleccionado no está dentro de tu horario laboral.', 'alert-primary', 'info-fill');
                    return;
                }

                let cursoAsignado;

                if (!cursosFechas || !Array.isArray(cursosFechas) || cursosFechas.length === 0) {
                    console.log('El empleado no tiene cursos asignados');
                } else {
                    cursoAsignado = cursosFechas.some(curso => {
                        return (
                            fechaMoment.isSame(moment(curso.primeraFecha, 'YYYY-MM-DD'), 'day') ||
                            fechaMoment.isSame(moment(curso.segundaFecha, 'YYYY-MM-DD'), 'day') ||
                            fechaMoment.isSame(moment(curso.terceraFecha, 'YYYY-MM-DD'), 'day')
                        );
                    });

                    if (cursoAsignado) {
                        mostrarAlerta('Ya tienes un curso asignado en la fecha seleccionada.', 'alert-primary', 'info-fill');
                        return;
                    }
                }



                let horaSeleccionadaHorarioLaboral = fechaHora.getHours() + ':' + fechaHora.getMinutes() + ':' + fechaHora.getSeconds();
                
                let horaInicio = moment(horarioDia.horaInicio, 'HH:mm:ss');
                let horaFin = moment(horarioDia.horaFin, 'HH:mm:ss').subtract(1, 'hours');
                let horaSeleccionadaMoment = moment(horaSeleccionadaHorarioLaboral, 'HH:mm:ss');

                if (horaSeleccionadaMoment.isBefore(horaInicio) || horaSeleccionadaMoment.isAfter(horaFin)) {
                    mostrarAlerta('La hora seleccionada está fuera de tu horario laboral.', 'alert-primary', 'info-fill');
                    return;
                }


                var limiteHora = new Date(hoy.getTime() + 2 * 60 * 60 * 1000);

                let fechaSeleccionada = moment(fechaHora);
                let citasEmpleados = empleado.citas_empleados || []; // Asegurarse de que sea un array

                let citaExistente = citasEmpleados.some(cita => {
                    let mismaFecha = moment(cita.fechaCita, 'YYYY-MM-DD').isSame(fechaSeleccionada, 'day');
                    
                    let mismaHora = moment(cita.horaCita, 'HH:mm:ss').format('HH:mm:ss') === fechaSeleccionada.format('HH:mm:ss');
                    
                    return mismaFecha && mismaHora;
                });

                if (citaExistente) {
                    mostrarAlerta('Ya existe una cita para esta fecha y hora.', 'alert-primary', 'info-fill');
                    return;
                }

                if (fechaHora.toDateString() === hoy.toDateString() && fechaHora.getTime() < limiteHora.getTime()) {
                    mostrarAlerta('No se pueden hacer citas con menos de 2 horas de anticipación.', 'alert-primary', 'info-fill');
                    return;
                }

                $('#telefonoUsuario').hide();
                $('#labelTelefono').hide();
                $('#nombreUsuario').hide();
                $('#nombreUsuarioLabel').hide();

                limpiarFormulario();

                console.log('Fecha y hora seleccionada:', fechaHora);

                actualizarOpcionesHora(fechaHora);
                $('#horaCita').show();

                let horaSeleccionada = fechaHora.toTimeString().substring(0, 8);

                let select = $('#horaCita');
                select.val(horaSeleccionada);

                var anio = fechaHora.getFullYear();
                var mes = String(fechaHora.getMonth() + 1).padStart(2, '0');
                var dia = String(fechaHora.getDate()).padStart(2, '0');
                var fechaFormatoDeseado = `${anio}-${mes}-${dia}`;

                $('#fechaCita').val(fechaFormatoDeseado);
                $('#btnEliminar').hide();
                $('#citasModal').modal('show');
            }
        });
        calendar.render();

        $("#fechaCita").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0,
            maxDate: "+3M -1D", 
            regional: "es",
            beforeShowDay: function(fecha) {
                var dia = fecha.getDay();

                if(cursosFechas === null){
                    console.log('El empleado no tiene cursos asignados')
                }else{
                    var resultadoCurso = deshabilitarFechaPorCurso(fecha, cursosFechas);
                    console.log('JAJJAJA: ', resultadoCurso[0]);
                    if (resultadoCurso[0] === false) {
                        return resultadoCurso;
                    }
                }

                if (hiddenDays.includes(dia)) {
                    return [false, "", "Día no laborable"];
                }

                if (!deshabilitarFecha(fecha)) {//si no hay horas en el select se deshabilita la fecha
                    return [false, "", "No hay horas disponibles"];
                }

                var hoy = new Date();
                if (fecha.toDateString() === hoy.toDateString()) {
                    const horaInicioLimite = new Date(hoy.getTime() + 2 * 60 * 60 * 1000);
                    const horaFinHoy = horarios.find(horario => parseInt(horario.diaSemana) === dia)?.horaFin || '16:00:00';
                    const horaFinHoyParts = horaFinHoy.split(':');
                    hoy.setHours(horaFinHoyParts[0], horaFinHoyParts[1], 0, 0);

                    if (horaInicioLimite >= hoy) {
                        return [false, "", `Las citas deben ser al menos 2 horas después de la hora actual`];
                    }
                }

                return [true, "", ""];
            },
            onSelect: function(dateText) {
                var partes = dateText.split('-');
                var anio = parseInt(partes[0], 10);
                var mes = parseInt(partes[1], 10) - 1;
                var dia = parseInt(partes[2], 10);

                var fechaSeleccionada = new Date(anio, mes, dia);

                console.log('Fecha seleccionada:', fechaSeleccionada);

                actualizarOpcionesHora(fechaSeleccionada);
                $('#horaCita').show();
            }
        });

        $("#fechaCita").on('input', function() {
            var fechaText = $(this).val();
            if (fechaText) {
                var partes = fechaText.split('-');
                var anio = parseInt(partes[0], 10);
                var mes = parseInt(partes[1], 10) - 1;
                var dia = parseInt(partes[2], 10);

                var fechaSeleccionada = new Date(anio, mes, dia);

                console.log('Fecha seleccionada:', fechaSeleccionada);

                actualizarOpcionesHora(fechaSeleccionada);
                $('#horaCita').show();
            }
        });

        $.datepicker.setDefaults($.datepicker.regional['es']);
    },
    error: function(err) {
        console.error('Error al cargar los horarios:', err);
    }
});




function actualizarOpcionesHora(fechaHora) {
    let select = $('#horaCita');
    select.empty();

    let fechaMoment = moment(fechaHora);
    let hoy = moment();
    let diaSemana = fechaMoment.day();
    let horarioDia = horarios.find(horario => parseInt(horario.diaSemana) === diaSemana);

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

        let limiteHora = hoy.clone().add(1, 'hour');

        let horasOcupadas = empleado.citas_empleados
            .filter(cita => moment(cita.fechaCita).isSame(fechaMoment, 'day'))
            .map(cita => moment(cita.horaCita, 'HH:mm:ss').format('HH:mm:ss'));

        while (horaInicio.isBefore(horaFin)) {
            let horaTexto = horaInicio.format('HH:mm:ss');

            if (fechaMoment.isSame(hoy, 'day')) {
                if (horaInicio.isAfter(limiteHora)) {
                    if (!horasOcupadas.includes(horaTexto)) {
                        let option = new Option(horaTexto, horaTexto);
                        select.append(option);
                    }
                }
            } else {
                if (!horasOcupadas.includes(horaTexto)) {
                    let option = new Option(horaTexto, horaTexto);
                    select.append(option);
                }
            }

            horaInicio.add(1, 'hour');
        }

        console.log('Opciones agregadas:', select.children('option').length);

        // if (select.children('option').length > 0) {
        //     select.val(select.children('option').first().val());
        // } else {
        //     alert('No hay horas disponibles para la fecha seleccionada.');
        //     $('#citasModal').modal('hide');
        // }
    }
}



    function rechazarCita(id){//para cuando se elimina una cita ya aceptada
        $('#contenedor_carga').css('display', 'block');

        $.ajax({
            url: `/rechazar/cita/${id}`,
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                $('#contenedor_carga').css('display', 'none');
                    console.log(response);
                    // $('#citaForm').hide();
                    localStorage.setItem('alertMessage', 'Se eliminó con éxito la cita.');
                    localStorage.setItem('alertClass', 'alert-success');
                    localStorage.setItem('alertIcon', 'check-circle-fill');

                    window.location.href = '/Ver-Citas';
                },
                error: function(error) {
                    // Ocultar la pantalla de carga
                    $('#contenedor_carga').css('display', 'none');
                    mostrarAlerta("Hubo un error al tratar de eliminar la cita.", 'alert-danger', 'exclamation-triangle-fill');
                    console.log(error);
                }
        })
    }


    function rechazarCitaNoAceptada(id){//cuando se rechaza una cita no aceptada
        $('#contenedor_carga').css('display', 'block');

        $.ajax({
            url: `/rechazar/cita/${id}`,
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                $('#contenedor_carga').css('display', 'none');
                    console.log(response);
                    // $('#citaForm').hide();

                    mostrarAlerta('Se elimino con éxito la cita', 'alert-success', 'check-circle-fill');    
                    citasNoAceptadas();
                    // ESTO NO LE FUNCIONA A ANGEL, PROBAR SI JALA A TODOS YA FINAL
                },
                error: function(error) {
                    // Ocultar la pantalla de carga
                    $('#contenedor_carga').css('display', 'none');
                    mostrarAlerta("Hubo un error al tratar de eliminar la cita.", 'alert-danger', 'exclamation-triangle-fill');
                    console.log(error);
                }
        })
    }

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



        // function eliminarCita(id){
        //     // Mostrar la pantalla de carga
        // $('#contenedor_carga').css('display', 'block');
        //     $.ajax({
        //         url: `/eliminar/cita/${id}`,
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         method: 'DELETE',
        //         success: function(response){
        //             // Ocultar la pantalla de carga
        //             $('#contenedor_carga').css('display', 'none');
        //             console.log(response);
        //             // $('#citaForm').hide();
        //             localStorage.setItem('alertMessage', 'Se eliminó con éxito la cita.');
        //             localStorage.setItem('alertClass', 'alert-success');
        //             localStorage.setItem('alertIcon', 'check-circle-fill');

        //             window.location.href = '/Ver-Citas';


        //              // Guardar el mensaje de alerta en localStorage
        //             // localStorage.setItem('alertMessage', 'Se eliminó con éxito');
        //             // localStorage.setItem('alertClass', 'alert-danger');
        //             // localStorage.setItem('alertIcon', 'exclamation-triangle-fill');
                    
        //             // Redirigir después de un breve retraso para asegurarse de que la alerta se muestre
        //             // setTimeout(function() {
        //             //     window.location.href = '/Ver-Citas';
        //             // }, 100); 
        //         },
        //         error: function(error) {
        //             // Ocultar la pantalla de carga
        //             $('#contenedor_carga').css('display', 'none');
        //             alert("Hubo un error al tratar de eliminar la cita.")
        //             console.log(error);
        //         }
        //     })
        // }

        $('#btnEliminar').on('click', function() {
            rechazarCita($('#id').val());
        })

        

        function editarCita(id) {
    limpiarFormulario();

    $.get(`/cita/servicios/tecnica/${id}`, function(citasServicios) {

        console.log('Datos recibidos:', citasServicios); 
        console.log(`Id de la cita: `, citasServicios.cita.id);

        $('#btnEliminar').show();
        
        $('#id').val(citasServicios.cita.id);
        $('#fechaCita').val(citasServicios.cita.fechaCita);

        const citaDate = moment(citasServicios.cita.fechaCita + ' ' + citasServicios.cita.horaCita, 'YYYY-MM-DD HH:mm:ss');

        console.log('Número del día: ', citaDate.day());
        console.log('Hora de la cita: ', citasServicios.cita.horaCita);

        actualizarOpcionesHora(citaDate);

        if ($('#horaCita').find(`option[value="${citasServicios.cita.horaCita}"]`).length === 0) {
            $('#horaCita').append(new Option(citasServicios.cita.horaCita, citasServicios.cita.horaCita));
        }

        $('#horaCita').val(citasServicios.cita.horaCita).show();

        citasServicios.servicios.forEach(servicio => {
            let selectMultipleServicios = $('#service');
            let opcion = selectMultipleServicios.find(`div[data-select-id="${servicio.id}"]`);
            
            if (opcion.length > 0) {
                opcion.addClass('selected');
                selectMultipleServicios.data('value', servicio.id);
            }
        });

        citasServicios.cita.servicios.forEach(servicio => {
            servicio.tecnicas.forEach(tecnica => {
                $('.multiselect-option.selected').each(function() {
                    $(`#tecnicaSelect${servicio.id}`).val(tecnica.id);
                    $(`#tecnicaSelect${servicio.id}`).show();
                });
            });
        });

        $('#nombreUsuario').val(citasServicios.cita.usuario.name + ' ' + citasServicios.cita.usuario.apellido);
        $('#usuarioId').val(citasServicios.cita.usuarioId);
        $('#empleadoId').val(citasServicios.cita.empleadoId);

        let opcion = $('#usuarioId').find('option:selected');
        let telefonoInput = $('#telefonoUsuario');
        let labelTelefono = $('#labelTelefono');

        if (citasServicios.cita.usuarioId === 1) { // Usuario default
            telefonoInput.hide();
            $('#nombreUsuario').hide();
            $('#nombreUsuarioLabel').hide();
            telefonoInput.hide();
            labelTelefono.hide();
        } else {
            $('#nombreUsuario').show();
            $('#nombreUsuarioLabel').show();
            telefonoInput.show();
            labelTelefono.show();
            telefonoInput.val(citasServicios.cita.usuario.numeroTelefono);
        }

        $('#notasCita').val(citasServicios.cita.notasCita);

        $('#citasModal').modal('show');
    });
}




            $.get('/servicios/tecnicas', function(servicios){//puedo traer las tecnicas con servicios.tecnicas.nombre ex
                    console.log(servicios);

                    let selectServiciosMul = $('#service');
                    selectServiciosMul.empty();

                    servicios.forEach(servicio => {
                        console.log(servicio.tecnicas);//si lo manda
                        selectServiciosMul.append(`

                            <div class="multiselect-option form-control custom-select" data-value="${servicio.id}" data-select-id="${servicio.id}">${servicio.nombre}</div>

                            <div class="form-floating mb-3">
                                <select class="form-control custom-select-tec" id="tecnicaSelect${servicio.id}" style="display: none" required></select>
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

            // //Dibujar usuarios
            // $.get('/usuarios/rol/usuario', function(usersRolUsuario) {
            //     let selectUsuarios = $('#usuarioId');
            //     selectUsuarios.empty();
            //     let telefono = $('#emailUsuario'); 
            //     telefono.empty();

            //     usersRolUsuario.forEach(usuario => {
            //         selectUsuarios.append(`
            //             <option class="text-center" data-telefono-usuario="${usuario.numeroTelefono}" value="${usuario.id}">${usuario.name + " " +usuario.apellido}</option>
            //         `)
            //         console.log(usersRolUsuario);
            //     })

            //     selectUsuarios.change(function() {
            //         let opcionSelected = selectUsuarios.find('option:selected');
            //         let value = $(this).val();

            //         if(value === "1"){
            //             telefono.hide();
            //         }else{
            //             let telefonoUsuario = opcionSelected.data('telefono-usuario');
            //             telefono.val(telefonoUsuario);
            //             telefono.show()
            //             $('#labelTelefono').show();
            //         }
            //     })
            // })

            function dibujarGuest(){//asignarle al input usuario el id de guest
                $.get('/usuario/guest', function(guest) {
                    let inputUsuario = $('#usuarioId');
                    let guestDefault = guest[0];
                    inputUsuario.empty();
                    inputUsuario.val(guestDefault.id);
                });
            }

            //Dibujar empleados
            $.get('/usuario/empleado', function(usersRolEmpleado) {//solo se trae el empleado logeado
                let usuarios = $('#empleadoId');
                let empleado = usersRolEmpleado[0];
                usuarios.val(empleado.id);
                console.log('id del usuario: ', empleado.id);
            })




        //registrar cita en la base de datos

        $('#citaForm').on('submit', function(e) {
            e.preventDefault();
            console.log($(this));

            // Mostrar la pantalla de carga
            $('#contenedor_carga').css('display', 'block');

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

            console.log(formData);
            
            $.ajax({
                url: url,
                method: method,
                data: formData,            
                success: function(response) {
                    // Ocultar la pantalla de carga
                    $('#contenedor_carga').css('display', 'none');
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
                        alertMessage = 'Cambios confirmados';
                        alertClass = "alert-success";
                        alertIcon = "check-circle-fill";
                    }
                    if (alertMessage) {
                        localStorage.setItem('alertMessage', alertMessage);
                        localStorage.setItem('alertClass', alertClass);
                        localStorage.setItem('alertIcon', alertIcon);
                    }
                    
                    setTimeout(function() {
                        window.location.href = '/Ver-Citas';
                    }, 200); // Retraso de 200 ms
                },
                error: function(xhr) {
                    // Ocultar la pantalla de carga
                    $('#contenedor_carga').css('display', 'none');
                        console.log('error', xhr);
                        var response = xhr.responseJSON;
                        let alertMessage = '';
                        let alertClass = 'alert-danger'; // clase predeterminada para errores
                        let alertIcon = 'exclamation-triangle-fill'; //icono de danger
                        if (xhr.readyState === 4 && xhr.responseJSON) {
                            if (xhr.responseJSON.error) {
                                mostrarAlerta(`Error: ${xhr.responseJSON.error}`, 'alert-danger', 'exclamation-triangle-fill');
                            } 
                            else if (xhr.responseJSON.message) {
                                let alertMessage = '';
                                let alertClass = 'alert-danger';
                                let alertIcon = 'exclamation-triangle-fill';

                                if (xhr.responseJSON.message === 'Debe seleccionar al menos un servicio') {
                                    alertMessage = 'Por favor, selecciona al menos un servicio.';
                                    alertClass = 'alert-warning';
                                } else if (xhr.responseJSON.message === 'Ya existe una cita para esta fecha y hora') {
                                    alertMessage = 'Ya existe una cita para esta fecha y hora.';
                                    alertClass = 'alert-warning';
                                } else if (xhr.responseJSON.message === 'La fecha debe ser hoy o posterior.') {
                                    alertMessage = 'La fecha debe ser hoy o posterior.';
                                } else if (xhr.responseJSON.message === 'The fecha cita field must be a valid date.') {
                                    alertMessage = 'Error: Ingrese correctamente la fecha.';
                                } else {
                                    alertMessage = `Error: ${xhr.responseJSON.message}`;
                                }

                                mostrarAlerta(alertMessage, alertClass, alertIcon);
                            }
                        } else {
                            mostrarAlerta('Error desconocido. Por favor, inténtelo de nuevo.', 'alert-danger', 'exclamation-triangle-fill');
                        }


                        if (alertMessage) {
                            mostrarAlerta(alertMessage, alertClass, alertIcon);
                        }
                    }
            });
        });

        console.log('Valor del input serviciosSeleccionados:', $('#serviciosSeleccionados').val());

        $('#verCitasModal').on('hidden.bs.modal', function() {
            $('#contenedor_carga').css('display', 'block');

            setTimeout(function() {
                window.location.href = '/Ver-Citas';
            }, 500);
        });

       
        function limpiarFormulario() {
            $('#id').val('');
            $('#citaForm')[0].reset();
            $('.multiselect-option').removeClass('selected');
            $('select[id^="tecnicaSelect"]').hide();
        }

        $('#btnAgregar').on('click', function() {
//limpia el btn de agregar cita y esconde el btn de eliminar y la hora de la cita para que se despliegue cuando seleccionen fecha
            dibujarGuest();
            
            limpiarFormulario();
            $('#horaCita').hide();
            $('#btnEliminar').hide();
            $('#telefonoUsuario').hide();
                $('#labelTelefono').hide();
                $('#nombreUsuario').hide();
                $('#nombreUsuarioLabel').hide();
        })

          //dibujar citas no aceptadas
          function citasNoAceptadas() {
            $.get('/cita/por/empleado', function(citas) {
                let tabla = $('#tablaCitas').DataTable();
                tabla.clear(); // Limpiar la tabla

                citas.forEach(cita => {
                    tabla.row.add([
                        cita.fechaCita,
                        cita.horaCita,
                        cita.usuario.clienteNombreCompleto,
                        cita.usuario.numeroTelefono,
                        cita.usuario.email,
                        cita.usuario_empleado.empleadoNombreCompleto,
                        `<button class="btn btn-danger eliminar-cita-btn" data-cita-id="${cita.id}">Eliminar cita<i style="margin-left:9px;" class="fa-solid fa-trash"></i></button>
                        <button class="btn btn-success aceptar-cita" data-cita-id="${cita.id}" id="aceptarCitaa">Aceptar cita<i style="margin-left:9px;" class="fa-solid fa-check"></i></button>`
                    ]).draw(false);
                });

                // Volver a vincular el evento click al botón "Aceptar cita"
                $('#aceptarCitaa').off('click').on('click', function() {
                    let id = $(this).data('cita-id');

                    $('#contenedor_carga').css('display', 'block');

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

                    let formData = $('#citaForm').serialize();

                    $.ajax({
                        url: `/editar/cita/${id}`,
                        method: 'PUT',
                        data: formData,
                        success: function(response) {
                            $('#contenedor_carga').css('display', 'none');
                            console.log(response);
                            $('#citasModal').modal('hide');
                            $('#aceptarCitaa').hide();
                            $('#mandarCita').show();

                            limpiarFormulario();

                            let alertMessage = '';
                            let alertClass = '';
                            let alertIcon = '';

                            if (response.message === 'Cita actualizada con éxito') {
                                alertMessage = 'Cambios confirmados';
                                alertClass = "alert-success";
                                alertIcon = "check-circle-fill";
                            }

                            mostrarAlerta(alertMessage, alertClass, alertIcon);

                            citasNoAceptadas();

                            if ($.fn.DataTable.isDataTable('#tablaCitas')) {
                                $('#tablaCitas').DataTable().clear().destroy();
                            }
                        },
                        error: function(xhr) {
                            $('#contenedor_carga').css('display', 'none');
                            console.log(xhr);
                            var response = xhr.responseJSON;
                            let alertMessage = '';
                            let alertClass = 'alert-danger';
                            let alertIcon = 'exclamation-triangle-fill';

                            if (xhr.readyState === 4 && xhr.responseJSON) {
                                if (xhr.responseJSON.error) {
                                    mostrarAlerta(`Error: ${xhr.responseJSON.error}`, 'alert-danger', 'exclamation-triangle-fill');
                                } else if (xhr.responseJSON.message) {
                                    if (xhr.responseJSON.message === 'Debe seleccionar al menos un servicio') {
                                        alertMessage = 'Por favor, selecciona al menos un servicio.';
                                        alertClass = 'alert-warning';
                                    } else if (xhr.responseJSON.message === 'Ya existe una cita para esta fecha y hora') {
                                        alertMessage = 'Ya existe una cita para esta fecha y hora.';
                                        alertClass = 'alert-warning';
                                    } else if (xhr.responseJSON.message === 'La fecha debe ser hoy o posterior.') {
                                        alertMessage = 'La fecha debe ser hoy o posterior.';
                                    } else if (xhr.responseJSON.message === 'The fecha cita field must be a valid date.') {
                                        alertMessage = 'Error: Ingrese correctamente la fecha.';
                                    } else {
                                        alertMessage = `Error: ${xhr.responseJSON.message}`;
                                    }

                                    mostrarAlerta(alertMessage, alertClass, alertIcon);
                                }
                            } else {
                                mostrarAlerta('Error desconocido. Por favor, inténtelo de nuevo.', 'alert-danger', 'exclamation-triangle-fill');
                            }
                        }
                    });
                });
            });
        }

citasNoAceptadas();

        // //dibujar citas no aceptadas
        // function citasNoAceptadas(){

        //     $.get('/cita/por/empleado', function(citas) {
        //         console.log('lasc iatas no acpetasdas: ', citas);
        //         let tabla = $('#tablaCitas');
        //         let mensajeNoCitas = $('#mensajeNoCitas');
                
        //         tabla.empty(); // Vaciar la tabla
                
        //         if (citas.length === 0) {
        //             // Ocultar la tabla y mostrar el mensaje
        //             tabla.closest('table').hide();
        //             mensajeNoCitas.show();
        //         } else {
        //             // Mostrar la tabla y ocultar el mensaje
        //             tabla.closest('table').show();
        //             mensajeNoCitas.hide();
                    
        //             citas.forEach(cita => {
        //                 tabla.append(`
        //                     <tr>
        //                         <td>${cita.fechaCita}</td>
        //                         <td>${cita.horaCita}</td>
        //                         <td>${cita.usuario.clienteNombreCompleto}</td>
        //                         <td>${cita.usuario.numeroTelefono}</td>
        //                         <td>${cita.usuario.email}</td>
        //                         <td>${cita.usuario_empleado.empleadoNombreCompleto}</td>
        //                         <td>
        //                             <button class="btn btn-danger eliminar-cita-btn" data-cita-id="${cita.id}">Eliminar cita<i style="margin-left:9px;" class="fa-solid fa-trash"></i></button>
        //                             <button class="btn btn-success aceptar-cita" data-fecha-cita="${cita.fechaCita}" data-cita-id="${cita.id}" id="aceptarCita${cita.id}">Aceptar cita<i style="margin-left:9px;" class="fa-solid fa-check"></i></button>
        //                         </td>
        //                     </tr>
        //                 `);
        //             });
        //         }
        //     });

        // }

        // citasNoAceptadas();     
        
        $('#btnVerCitas').on('click', function() {
            citasNoAceptadas(); 
        })
        
        $(document).on('click', '.aceptar-cita', function() {
            let citaId = $(this).data('cita-id');
            $('#aceptarCitaa').data('cita-id', citaId);
            let fechaCita = $('#fechaCita').val();
            $('#nombreUsuario').show();
            $('#nombreUsuarioLabel').show();

            $('#aceptarCitaa').show();
            $('#mandarCita').hide();

            let telefonoInput = $('#telefonoUsuario');
            let labelTelefono = $('#labelTelefono');
            telefonoInput.show();
            labelTelefono.show();
            editarCita(citaId);
        })
        

    //     $('#aceptarCitaa').on('click', function() {
    //         let id = $('#id').val();

    //         $('#contenedor_carga').css('display', 'block');


    //         let serviciosSeleccionados = []; 


    //         $('.multiselect-option.selected').each(function() {//ousheo servicios y tecnicas


    //             let servicioId = $(this).data('select-id');
    //             let tecnicaSeleccionada = $(`#tecnicaSelect${servicioId}`).val();
    //             serviciosSeleccionados.push({
    //                 servicioId: servicioId,
    //                 tecnicaId: tecnicaSeleccionada
    //             });
    //         });




    //         console.log('Servicios seleccionados:', serviciosSeleccionados);



    //         $('#serviciosSeleccionados').val(JSON.stringify(serviciosSeleccionados));

    //         let formData = $('#citaForm').serialize();
            
    //         $.ajax({
    //             url: `/editar/cita/${id}`,
    //             method: 'PUT',
    //             data: formData,
    //             success: function(response) {
    //                 // Ocultar la pantalla de carga
    //                 $('#contenedor_carga').css('display', 'none');
    //                 console.log(response);
    //                 $('#citasModal').modal('hide');
    //                 $('#aceptarCitaa').hide();
    //                 $('#mandarCita').show();

    //                 limpiarFormulario();                    
    //                 let alertMessage = '';
    //                 let alertClass = '';
    //                 let alertIcon = '';


    //                 if(response.message === 'Cita actualizada con éxito'){
    //                     alertMessage = 'Cambios confirmados';
    //                     alertClass = "alert-success";
    //                     alertIcon = "check-circle-fill";
    //                 }

    //                 mostrarAlerta(alertMessage, alertClass, alertIcon);
                    
    //                 citasNoAceptadas();
    //             },
    //             error: function(xhr) {
    //                 // Ocultar la pantalla de carga
    //                 $('#contenedor_carga').css('display', 'none');
    //                     console.log(xhr);
    //                     var response = xhr.responseJSON;
    //                     let alertMessage = '';
    //                     let alertClass = 'alert-danger'; // clase predeterminada para errores
    //                     let alertIcon = 'exclamation-triangle-fill'; //icono de danger
    //                     if (xhr.readyState === 4 && xhr.responseJSON) {
    //                         if (xhr.responseJSON.error) {
    //                             mostrarAlerta(`Error: ${xhr.responseJSON.error}`, 'alert-danger', 'exclamation-triangle-fill');
    //                         } 
    //                         else if (xhr.responseJSON.message) {
    //                             let alertMessage = '';
    //                             let alertClass = 'alert-danger';
    //                             let alertIcon = 'exclamation-triangle-fill';

    //                             if (xhr.responseJSON.message === 'Debe seleccionar al menos un servicio') {
    //                                 alertMessage = 'Por favor, selecciona al menos un servicio.';
    //                                 alertClass = 'alert-warning';
    //                             } else if (xhr.responseJSON.message === 'Ya existe una cita para esta fecha y hora') {
    //                                 alertMessage = 'Ya existe una cita para esta fecha y hora.';
    //                                 alertClass = 'alert-warning';
    //                             } else if (xhr.responseJSON.message === 'La fecha debe ser hoy o posterior.') {
    //                                 alertMessage = 'La fecha debe ser hoy o posterior.';
    //                             } else if (xhr.responseJSON.message === 'The fecha cita field must be a valid date.') {
    //                                 alertMessage = 'Error: Ingrese correctamente la fecha.';
    //                             } else {
    //                                 alertMessage = `Error: ${xhr.responseJSON.message}`;
    //                             }

    //                             mostrarAlerta(alertMessage, alertClass, alertIcon);
    //                         }
    //                     } else {
    //                         mostrarAlerta('Error desconocido. Por favor, inténtelo de nuevo.', 'alert-danger', 'exclamation-triangle-fill');
    //                     }


    //                     if (alertMessage) {
    //                         mostrarAlerta(alertMessage, alertClass, alertIcon);
    //                     }
                
    //         }
    //     });
    // });




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
            rechazarCitaNoAceptada(citaId);
            // citasNoAceptadas();
            // //cerrar el modal
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


function checkWidth() {
        if ($(window).width() < 786) {  // Si el ancho de la ventana es menor que 480 píxeles
            $('#scrollDash').addClass('table-responsive');  // Agrega la clase esa
        } else {
            $('#scrollDash').removeClass('table-responsive');  
        }
    }
    checkWidth();
    $(window).resize(checkWidth);
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