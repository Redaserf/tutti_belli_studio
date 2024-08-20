<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


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
.top h2{
    font-family: "Playwrite FR Moderne";
    margin-right: 20px;
    }
.custom-select-tec:focus {
    border-color: #00ffff;
    box-shadow: 0 0 5px rgba(232, 62, 140, 0.5);
}



.btnMayorMenor {
    background-color: #e60073; 
    color: white;
    border: none;
}

.btnMayorMenor:hover {
    background-color: #cc005f; 
} 
.table-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;

            max-width: 0 auto;
            width: 0 auto;
        }
        .table-container h2 {
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
        }
        .tab-content{
            padding:36px;
        }
    /*estilos pa los modales pq pusiste jajaja hugo nmms xd*/
</style>
</head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<body>
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
                <span class="rol">Empleado</span>
            </div>
        </div>
        <i class="fa-solid fa-angle-right toggle"></i>
    </header>

    <div class="menu-bar "id="scrollDash">
        <div class="menu">
          <ul class="menu-links-custom">
            <li class="nav-link">
                <a href="/Home-empleado">
                    <i class="fa-solid fa-house icon"></i>
                    <span class="text nav-text">Inicio</span>
                </a>
            </li>
            <li class="nav-link">
                <a href="/Ver-Citas-Empleado">
                    <i class="fa-regular fa-calendar icon"></i>
                    <span class="text nav-text">Citas Pendientes</span>
                </a>
            </li>
            <li class="nav-link">
                <a href="/Ver-Productos-Empleado">
                    <i class="fa-solid fa-bag-shopping icon"></i>
                    <span class="text nav-text">Productos</span>
                </a>
            </li>
            <li class="nav-link">
                  <a href="/Ver-ventas-empleado">
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
        
<section class="home">
    <div class="text-center">
        <div class=" table-responsive" id="misCitas" aria-labelledby="mis-citas-tab">
            <div class="container mt-5">
                <h2>MIS CITAS</h2>
                <div class="table-container table-responsive mt-4">
                    <div class="table-responsive tab-content">
                        <table id="tablaVenta" class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Total</th>
                                    <th>Día</th>
                                    <th>Hora</th>
                                    <th>Usuario</th>
                                    <th>Detalles</th>
                                    <th>No llevada a cabo</th>
                                    <th>Aceptar</th>
                                </tr>
                            </thead>
                            <tbody id="dibujarVentaEmpleado">
                                <!-- Aquí se insertarán las filas de citas pendientes -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para detalles de citas -->
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Detalles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Servicio</th>
                                    <th>Técnica</th>
                                    <th>Empleado</th>
                                </tr>
                            </thead>
                            <tbody id="dibujarDetalles">
                                <!-- Aquí se insertarán las filas de detalles -->
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar citas -->
    <div class="modal fade" id="editAppointmentModalCit" tabindex="-1" aria-labelledby="editAppointmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAppointmentModalLabel">Editar Cita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Técnica</th>
                                    <th>Productos</th>
                                </tr>
                            </thead>
                            <tbody id="dibujarDetalleTecnicas">
                                <!-- Aquí se insertarán las filas de técnicas -->
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-success" id="aceptarCita">Aceptar cita</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para productos de una técnica -->
    <div class="modal fade" id="editProductsModal1" tabindex="-1" aria-labelledby="editProductsModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductsModal1Label">Micropigmentación de Cejas - Productos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody id="dibujarProductos">
                                <!-- Aquí se insertarán las filas de productos -->
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="guardarCambios">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para eliminar cita -->
    <div class="modal fade" id="eliminarCita" tabindex="-1" aria-labelledby="labelEliminarCitasModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="labelEliminarCitasModal">Rechazar Cita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de eliminar la cita?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" id="rechazarCita" data-cita-id="" class="btn btn-pink">Confirmar</button>
                </div>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/i18n/datepicker-es.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    
<script>

// Scripts para todas las vistas, no tocar

    // Pantalla de carga
    var loader = document.getElementById("contenedor_carga");
    var navbar = document.getElementById("navbar");
    window.addEventListener('load', function(){
        $('#navbar').css('visibility', 'visible');
        loader.style.display = "none";
    });

    $(document).ready(function() {
    // Mostrar el modal de productos cuando se hace clic en el botón correspondiente
    $('a[data-bs-target="#editProductsModal1"]').click(function(e){
        e.preventDefault();
        $('#editProductsModal1').modal('show');
    });

    // Cuando el modal de productos se oculta, mostrar nuevamente el modal de edición de citas
    $('#editProductsModal1').on('hidden.bs.modal', function () {
        $('#editAppointmentModalCit').modal('show');    
    });

    // Toggle del sidebar
    const body = document.querySelector("body"),
        sidebar = body.querySelector(".sidebar"),
        toggle = body.querySelector(".toggle"),
        overlay = body.querySelector(".overlay"),
        sidebarBtn = body.querySelector(".sidebar-btn");

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        overlay.style.display = !sidebar.classList.contains("close") ? "block" : "none";
    });

    overlay.addEventListener("click", () => {
        sidebar.classList.add("close");
        overlay.style.display = "none";
    });

    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        sidebar.classList.contains("open") ? sidebar.classList.remove("close") : sidebar.classList.add("close");
        overlay.style.display = sidebar.classList.contains("open") ? "block" : "none";
    });

    // Verifica si la pantalla es menor a 786px para agregar o quitar la clase de responsive en el sidebar
    function checkWidth() {
        $('#scrollDash').toggleClass('table-responsive', $(window).width() < 786);
    }
    checkWidth();
    $(window).resize(checkWidth);

    // Inicialización del datepicker
    $("#fechaFiltroEmpleado").datepicker({
        dateFormat: 'yy-mm-dd',
        maxDate: 0, 
        changeMonth: true,
        changeYear: true
    });

    // Mostrar alerta
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

    // Dibujar citas, ventas, técnicas y productos para el empleado
    function dibujarCitasVentasTecnicasProductosEmpleado() {
        $.get('/venta/citas/empleado', function (citasVentas) {
            citasVentasEmpleado = [];

            $.each(citasVentas, function(index, cita) {
                citasVentasEmpleado.push({
                    id: cita.id,
                    fechaCita: cita.fechaCita,
                    horaCita: cita.horaCita,
                    venta: cita.venta,
                    servicios: cita.servicios,
                    usuario_empleado: cita.usuario_empleado,
                    usuario: cita.usuario
                });
            });

            mostrarCitasEmpleado(citasVentasEmpleado);
        });
    }

    // Llamar a la función para dibujar las citas al cargar la página
    dibujarCitasVentasTecnicasProductosEmpleado();

    // Mostrar las citas del empleado
    function mostrarCitasEmpleado(citas) {
        let tablaVenta = $('#dibujarVentaEmpleado');
        tablaVenta.empty();

        $.each(citas, function (index, citaData) {
            let cita = citaData;
            let venta = citaData.venta;

            tablaVenta.append(`
                <tr>
                    <td>Cita ${cita.id}</td>
                    <td>${venta.total}</td>
                    <td>${venta.fechaVenta}</td>
                    <td>${cita.horaCita}</td>
                    <td>${cita.usuario.name + " " + cita.usuario.apellido}</td>
                    <td><button class="btn btn-primary ver-detalles" data-cita-id="${cita.id}" data-bs-toggle="modal" data-bs-target="#detailsModal"><i class="fa-regular fa-eye"></i>  Detalles</button></td>
                    <td><button data-cita-id="${cita.id}" id="delete" data-bs-toggle="modal" data-bs-target="#eliminarCita" class="btn btn-danger eliminarCita"><i class="fa-solid fa-trash"></i> No asistió</button></td>
                    <td><button class="btn btn-success modificarProductos" data-venta-id="${venta.id}" data-cita-id="${cita.id}" data-bs-toggle="modal" data-bs-target="#editAppointmentModalCit"><i class="fa-solid fa-check"></i> Aceptar</button></td>
                </tr>
            `);
        });

        $('#tablaVenta').DataTable({
            destroy: true,
            "pageLength": 5,
            "searching": true,
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

        manejarEventos();
    }

    // Manejar eventos
    function manejarEventos() {
        $(document).off('click', '.ver-detalles').on('click', '.ver-detalles', function () {
            let citaId = $(this).data('cita-id');
            let citaData = citasVentasEmpleado.find(cita => cita.id === citaId);

            let tablaDetalles = $('#dibujarDetalles');
            tablaDetalles.empty();

            if (citaData && citaData.servicios) {
                citaData.servicios.forEach(servicio => {
                    servicio.tecnicas.forEach(tecnica => {
                        let empleadoNombre = citaData.usuario_empleado ? (citaData.usuario_empleado.name + " " + citaData.usuario_empleado.apellido) : 'No asignado';

                        tablaDetalles.append(`
                            <tr>
                                <td>${servicio.nombre}</td>
                                <td>${tecnica.nombre}</td>
                                <td>${empleadoNombre}</td>
                            </tr>
                        `);
                    });
                });
            }
        });

        $(document).off('click', '.modificarProductos').on('click', '.modificarProductos', function () {
            let citaId = $(this).data('cita-id');
            let ventaId = $(this).data('venta-id');
            let citaData = citasVentasEmpleado.find(cita => cita.id === citaId);

            $(document).off('click', '#aceptarCita').on('click', '#aceptarCita', function () {
                $.ajax({
                    url: `/venta/actualizar`,
                    method: 'PUT',
                    data: {
                        ventaId: ventaId,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#editAppointmentModalCit').modal('hide');
                        dibujarCitasVentasTecnicasProductosEmpleado();
                        mostrarAlerta('La venta fue aceptada y el stock actualizado con éxito.', 'alert-success', 'check-circle-fill');
                        setTimeout(function() {
                            location.reload();
                        }, 1500);
                    },
                    error: function(xhr) {
                        let errorMessage = xhr.responseJSON ? xhr.responseJSON.message : 'Error inesperado';
                        mostrarAlerta(`Error: ${errorMessage}`, 'alert-danger', 'exclamation-triangle-fill');
                        console.error(xhr);
                    }
                });
            });

            let tablaModificar = $('#dibujarDetalleTecnicas');
            tablaModificar.empty();

            let tablaDetallesTecnicas = $('#dibujarProductos');

            let cambios = {};

            if (citaData && citaData.servicios) {
                citaData.servicios.forEach(servicio => {
                    servicio.tecnicas.forEach(tecnica => {
                        tablaModificar.append(`
                            <tr>
                                <td>${tecnica.nombre}</td>
                                <td><button type="button" data-venta-id="${ventaId}" data-cita-id="${citaId}" data-servicio-id="${servicio.id}" data-tecnica-id="${tecnica.id}" class="btn btn-primary btn-sm productos" data-bs-toggle="modal" data-bs-target="#editProductsModal1">Productos/Modificar Cantidades</button></td>
                            </tr>
                        `);
                    });
                });
            }

            $(document).off('click', '.productos').on('click', '.productos', function () {
                let tecnicaId = $(this).data('tecnica-id');
                let citaId = $(this).data('cita-id');
                let servicioId = $(this).data('servicio-id');
                let servicio = citaData.servicios.find(s => s.id === servicioId);

                let tecnica = servicio.tecnicas.find(t => t.id === tecnicaId);

                if (tecnica) {
                    tablaDetallesTecnicas.empty();
                    tecnica.productos.forEach(producto => {
                        producto.detalleTecnicaProducto.forEach(detalle => {
                            tablaDetallesTecnicas.append(`
                                <tr>
                                    <td>${producto.nombre}</td>
                                    <td><input type="number" min="1" data-tecnica-id="${tecnicaId}" data-cita-id="${citaId}" required id="cantidadInput${detalle.id}" value="${detalle.cantidadProducto}" data-detalle-id="${detalle.id}" class="form-control cantidadProducto"></td>
                                </tr>
                            `);
                        });
                    });
                }
            });

            $(document).off('input', '.cantidadProducto').on('input', '.cantidadProducto', function () {
                let detalleTecnicaId = $(this).data('detalle-id');
                let citaId = $(this).data('cita-id');
                let tecnicaId = $(this).data('tecnica-id');

                let nuevaCantidad = $(this).val();

                $('#guardarCambios').attr('data-cita-id', citaId);
                $('#guardarCambios').attr('data-tecnica-id', tecnicaId);
                cambios[detalleTecnicaId] = nuevaCantidad;
            });

            $(document).off('click', '#guardarCambios').on('click', '#guardarCambios', function () {
                let citaId = $(this).data('cita-id');
                let tecnicaId = $(this).data('tecnica-id');

                $.ajax({
                    url: `/detalleTecnica/actualizar`,
                    method: 'PUT',
                    data: {
                        changes: cambios,
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        citaId: citaId,
                        tecnicaId: tecnicaId
                    },
                    success: function (response) {
                        $('#editProductsModal1').modal('hide');
                        dibujarCitasVentasTecnicasProductosEmpleado();
                        mostrarAlerta('Cantidades actualizadas correctamente.', 'alert-success', 'check-circle-fill');
                    },
                    error: function (xhr) {
                        console.log(xhr);
                        var response = xhr.responseJSON;
                        if (response.message === 'Arreglo vacio') {
                            mostrarAlerta('No se hizo ningun cambio.', 'alert-primary', 'info-fill');
                        } else {
                            mostrarAlerta(`Error: ${xhr.responseJSON.message}`, 'alert-danger', 'exclamation-triangle-fill');
                        }
                    }
                });
            });
        });

        $(document).on('click', '.eliminarCita', function() {
            let citaId = $(this).data('cita-id');
            $('#rechazarCita').attr('data-cita-id', citaId);
        });

        $('#rechazarCita').on('click', function() {
            let citaId = $(this).data('cita-id');
            eliminarCita(citaId);
        });

        function eliminarCita(id) {
            $.ajax({
                url: `/eliminar/cita/${id}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'DELETE',
                success: function(response){
                    console.log(response);
                    dibujarCitasVentasTecnicasProductosEmpleado();
                    $('#eliminarCita').modal('hide');
                    mostrarAlerta('Se eliminó con éxito la cita.', 'alert-success', 'check-circle-fill');
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        $('#mostrarTodasCitasEmpleado').on('click', function() {
            dibujarCitasVentasTecnicasProductosEmpleado();
        });
    }

    // Filtros para citas
    $('#filtrarCitasEmpleado').on('click', function () {
        let fechaFiltro = $('#fechaFiltroEmpleado').val();
        let horaFiltro = $('#horaFiltroEmpleado').val();

        let citasFiltradas = citasVentasEmpleado.filter(cita => {
            let coincideFecha = !fechaFiltro || cita.venta.fechaVenta === fechaFiltro;
            let coincideHora = !horaFiltro || cita.horaCita.startsWith(horaFiltro);

            return coincideFecha && coincideHora;
        });

        mostrarCitasEmpleado(citasFiltradas);
        $('#fechaFiltroEmpleado').val('');
        $('#horaFiltroEmpleado').val('');
    });

    // Ordenar citas por fecha y hora
    function ordenarCitasEmpleado(orden) {
        let citasOrdenadas = citasVentasEmpleado.slice();
        citasOrdenadas.sort(function(a, b) {
            let fechaA = new Date(a.venta.fechaVenta + 'T' + a.horaCita);
            let fechaB = new Date(b.venta.fechaVenta + 'T' + b.horaCita);

            return orden === 'asc' ? fechaA - fechaB : fechaB - fechaA;
        });
        mostrarCitasEmpleado(citasOrdenadas);
    }

    $('#ordenarAscEmpleado').on('click', function() {
        ordenarCitasEmpleado('asc');
    });

    $('#ordenarDescEmpleado').on('click', function() {
        ordenarCitasEmpleado('desc');
    });

});



</script>
</body>
</html>
