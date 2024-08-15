<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



<!-- datePicker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- datePicker -->


<style>

@import url('https://fonts.googleapis.com/css2?family=Playwrite+FR+Moderne:wght@100..400&display=swap');
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

        ul {
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

    .sidebar.close .header-text {
    display: none;
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

        .container-full {
            min-height: calc(94vh - 6rem);
            margin-top: -50px;
            margin: 100px;
            box-shadow: 1px 4px 8px rgba(0, 0, 0, 0.5);
            border-radius: 20px;
        }

        .citas {
            font-family: "Playwrite FR Moderne";
        }

        .top {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }


        .top a {
            margin-left: 0px;
        }

        .top h2 {
            font-family: "Playwrite FR Moderne";
            margin-right: 20px;
        }

        .section-divider {
            height: 3px;
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            margin-top: 20px;
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
        /* estilo de la tabla */
        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 0 auto;
            width: 0 auto;
        }
        .table-container h2 {
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
        }

        .modal-body table {
            width: 0 auto;
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

/* Fin Dashboard */



                .container-full{
                    min-height: calc(94vh - 6rem);
                    margin-top: -50px;
                    margin: 100px;
                    box-shadow: 1px 4px 8px rgba(0, 0, 0, 0.5);
                    border-radius: 20px;
                }

                .citas{
                    font-family: "Playwrite FR Moderne"
                }



            /* #fechaFiltroEmpleado {
                z-index: 2000;
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


.btnMayorMenor {
    background-color: #e60073;
    color: white;
    border: none;
}

.btnMayorMenor:hover {
    background-color: #cc005f;
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


</style>

</head>

<meta name="csrf-token" content="{{ csrf_token() }}">


<body class="hiddenX">

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

            <!-- {{-- Fin Sidebar --}} -->

            @csrf
            <section class="home">
            <div class="top text-center">
                    <h2>Ventas</h2>
                <a class="left" href="/Ver-Reportes" style="text-decoration: none; color:black; margin-left:10px">
                <button class="btn btn-outline-success" style="width: auto;">Reportes de venta<i style="margin-left:6px;" class="fa-solid fa-money-bill-trend-up"></i></button>
                </a>
                </div>
                <div class="section-divider"></div>

                <br>
                    <!-- Navegación de pestañas -->
                    <ul class="nav nav-tabs" id="ventasTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="ventas-compras-tab" data-bs-toggle="tab" data-bs-target="#ventasComprasContent" type="button" role="tab" aria-controls="ventasComprasContent" aria-selected="true">Compras</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ventas-citas-tab" data-bs-toggle="tab" data-bs-target="#ventasCitasContent" type="button" role="tab" aria-controls="ventasCitasContent" aria-selected="false">Citas</button>
    </li>

</ul>

<!-- Contenido de las pestañas -->
<div class="tab-content" id="ventasTabContent">
    <!-- Pestaña General -->
    <div class="tab-pane fade" id="generalSalesContent" role="tabpanel" aria-labelledby="generalSales-tab">
        <div class="table-container mt-5">
            <h2>VENTAS</h2>
            <div  class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Precio</th>
                            <th>Día</th>
                            <th>Detalles</th>
                            <th>Rechazar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Citas</td>
                            <td>$50</td>
                            <td>2024-07-01</td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModal">Ver detalles</button></td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="">Rechazar</button></td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAppointmentModalCit">Editar</button></td>
                        </tr>
                        <tr>
                            <td>Compra</td>
                            <td>$100</td>
                            <td>2024-07-03</td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModalProducts">Ver detalles</button></td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="">Rechazar</button></td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAppointmentProductsModal">Editar</button></td>
                        </tr>
                        <tr>
                            <td>Curso</td>
                            <td>$2000</td>
                            <td>2024-07-03</td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModalCursos">Ver detalles</button></td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="">Rechazar</button></td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCourseProductsModal">Editar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pestaña Citas -->
    <div class="tab-pane fade" id="ventasCitasContent" role="tabpanel" aria-labelledby="ventas-citas-tab">
        <ul class="nav nav-tabs" id="citasNavTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="citas-totales-tab" data-bs-toggle="tab" data-bs-target="#citasTotalesContent" type="button" role="tab" aria-controls="citasTotalesContent" aria-selected="true">Citas de todos los empleados</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="citas-aceptadas-tab" data-bs-toggle="tab" data-bs-target="#citasAceptadasContent" type="button" role="tab" aria-controls="citasAceptadasContent" aria-selected="false">Ventas de todos los empleados</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="mis-citas-tab" data-bs-toggle="tab" data-bs-target="#misCitasContent" type="button" role="tab" aria-controls="misCitasContent" aria-selected="false">Mis Citas</button>
            </li>
        </ul>

        <div class="tab-content mt-3">
            <!-- Contenido de Citas de todos los empleados -->
            <div class="tab-pane fade show active" id="citasTotalesContent" role="tabpanel" aria-labelledby="citas-totales-tab">
                <div class="table-container mt-5">
                    <h2>CITAS</h2>
                    <div class="filtros mt-3">
                        <div class="form-floating mb-3">
                            <input type="input" id="fechaFiltro" class="form-select">
                            <label for="fechaFiltro">Fecha:</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select id="horaFiltro" class="form-select">
                                <option value="">-- Seleccionar una hora --</option>
                                <option value="09:00:00">09:00:00</option>
                                <option value="10:00:00">10:00:00</option>
                                <option value="11:00:00">11:00:00</option>
                                <option value="12:00:00">12:00:00</option>
                                <option value="13:00:00">13:00:00</option>
                                <option value="14:00:00">14:00:00</option>
                                <option value="15:00:00">15:00:00</option>
                                <option value="16:00:00">16:00:00</option>
                                <option value="17:00:00">17:00:00</option>
                                <option value="18:00:00">18:00:00</option>
                                <option value="19:00:00">19:00:00</option>
                                <option value="20:00:00">20:00:00</option>
                            </select>
                            <label for="horaFiltro">Hora:</label>
                        </div>
                        <div class="form-floating mb-3 row">
                            <button id="filtrarCitas" class="btn btn-light mt-2 col-6 col-md-12 col-sm-12" style="border: 2px solid black"><i class="fa-solid fa-magnifying-glass"></i>  Buscar.. por fecha Y/U hora </button>
                            <button id="mostrarTodasCitas" class="btn btn-dark mt-2 col-6 col-md-12 col-sm-12"><i class="fa-regular fa-eye"></i>  Ver todas las Citas</button>
                            <button id="ordenarAsc" class="btn btn-pink mt-2 col-6 col-md-12 col-sm-12"><i class="fa-solid fa-arrow-down-wide-short"></i>  Menor a mayor</button>
                            <button id="ordenarDesc" class="btn btnMayorMenor mt-2 col-6 col-md-12 col-sm-12"><i class="fa-solid fa-arrow-up-short-wide"></i>  Mayor a menor </button>
                        </div>
                    </div>
                    <div  class="table-responsive">
                        <table class="table table-striped" style="margin-top: 30px">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Total</th>
                                    <th>Día</th>
                                    <th>Hora</th>
                                    <th>Detalles</th>
                                    <th>No llevada a cabo</th>
                                    <th>Aceptar</th>
                                </tr>
                            </thead>
                            <tbody id="dibujarVenta">
                                <!-- Aquí se insertarán las filas de citas pendientes -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Contenido de Ventas de todos los empleados -->
            <div class="tab-pane fade" id="citasAceptadasContent" role="tabpanel" aria-labelledby="citas-aceptadas-tab">
                <div class="table-container mt-5">
                    <h2>VENTAS DE CITAS ACEPTADAS</h2>
                    <div class="form-floating mb-3">
                        <input type="text" id="nombreEmpleadoFiltro" class="form-control" placeholder="Nombre del empleado">
                        <label for="nombreEmpleadoFiltro">Buscar ventas del empleado:</label>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Total</th>
                                    <th>Día</th>
                                    <th>Hora</th>
                                    <th>Empleado</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>
                            <tbody id="dibujarVentasAceptadas">
                                <!-- Aquí se insertarán las filas de las ventas aceptadas -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4"></td>
                                    <td id="totalVentasAceptadas"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Contenido de Mis Citas -->
            <div class="tab-pane fade" id="misCitasContent" role="tabpanel" aria-labelledby="mis-citas-tab">
                <div class="table-container mt-5">
                    <h2>MIS CITAS</h2>
                    <div class="filtros mt-3">
                        <div class="form-floating mb-3">
                            <input type="input" id="fechaFiltroEmpleado" class="form-select">
                            <label for="fechaFiltroEmpleado">Fecha:</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select id="horaFiltroEmpleado" class="form-select">
                                <option value="">-- Seleccionar una hora</option>
                                <option value="09:00:00">09:00:00</option>
                                <option value="10:00:00">10:00:00</option>
                                <option value="11:00:00">11:00:00</option>
                                <option value="12:00:00">12:00:00</option>
                                <option value="13:00:00">13:00:00</option>
                                <option value="14:00:00">14:00:00</option>
                                <option value="15:00:00">15:00:00</option>
                                <option value="16:00:00">16:00:00</option>
                                <option value="17:00:00">17:00:00</option>
                                <option value="18:00:00">18:00:00</option>
                                <option value="19:00:00">19:00:00</option>
                                <option value="20:00:00">20:00:00</option>
                            </select>
                            <label id="labelHoraFiltroEmpleado" for="horaFiltroEmpleado">Hora:</label>
                        </div>
                        <div class="form-floating mb-3 row">
                            <button id="filtrarCitasEmpleado" class="btn btn-light mt-2 col-6 col-md-12 col-sm-12" style="border: 2px solid black"><i class="fa-solid fa-magnifying-glass"></i>  Buscar.. por fecha Y/U hora </button>
                            <button id="mostrarTodasCitasEmpleado" class="btn btn-dark mt-2 col-6 col-md-12 col-sm-12"><i class="fa-regular fa-eye"></i>  Ver todas las Citas</button>
                            <button id="ordenarAscEmpleado" class="btn btn-pink mt-2 col-6 col-md-12 col-sm-12"><i class="fa-solid fa-arrow-down-wide-short"></i>  Menor a mayor</button>
                            <button id="ordenarDescEmpleado" class="btn btnMayorMenor mt-2 col-6 col-md-12 col-sm-12"><i class="fa-solid fa-arrow-up-short-wide"></i>  Mayor a menor </button>
                        </div>
                    </div>
                    <div  class="table-responsive">
                        <table class="table table-striped" style="margin-top: 30px">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Total</th>
                                    <th>Día</th>
                                    <th>Hora</th>
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

    <div class="tab-content" id="comprasTabContent">
        <!-- Pestaña Compras -->
        <div class="tab-pane fade show active" id="ventasComprasContent" role="tabpanel" aria-labelledby="ventas-compras-tab">
            <!-- Navegación de pestaña de compras -->
            <ul class="nav nav-tabs" id="comprasNavTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="compras-totales-tab-btn" data-bs-toggle="tab" data-bs-target="#comprasTotalesContent" type="button" role="tab" aria-controls="comprasTotalesContent" aria-selected="true">Compras Totales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="compras-aceptadas-tab-btn" data-bs-toggle="tab" data-bs-target="#comprasAceptadasContent" type="button" role="tab" aria-controls="comprasAceptadasContent" aria-selected="false">Compras Aceptadas</button>
                </li>
            </ul>

            <br>

            <input type="text" class="form-control mb-3" id="buscadorIdCompra" placeholder="Buscar por id de venta">

            <div class="tab-content" id="comprasTabContent">
                <!-- Pestaña compras totales -->
                <div class="tab-pane fade show active" id="comprasTotalesContent" role="tabpanel" aria-labelledby="compras-totales-tab-btn">
                    <div class="table-container mt-5">
                        <h2>TODAS LAS COMPRAS</h2>
                        <div  class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Id de compra</th>
                                        <th>Total</th>
                                        <th>Día</th>
                                        <th>Detalles</th>
                                        <th>Aceptar</th>
                                        <th>Rechazar</th>
                                    </tr>
                                </thead>
                                <tbody id="ventasProductosTable">
                                    <!-- Contenido de la tabla -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Pestaña compras aceptadas -->
                <div class="tab-pane fade" id="comprasAceptadasContent" role="tabpanel" aria-labelledby="compras-aceptadas-tab-btn">
                    <div class="table-container mt-5">
                        <h2>COMPRAS CONFIRMADAS</h2>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Id de compra</th>
                                        <th>Total</th>
                                        <th>Día</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                <tbody id="ventasConfirmadasTable">
                                    <!-- Contenido de la tabla -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                    <!-- Modales -->
                    <!-- ESTE MODAL SERA PARA LAS CITAS DETALLES -->
                    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Detalles</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>servicio</th>
                                                <th>tecnica</th>
                                                <th>empleado</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dibujarDetalles">
                                            <!-- <tr>
                                                <td>cejas,ojos,labios</td>
                                                <td>tec1,tec2,tec3</td>
                                                <td>anyelo</td>
                                                <td>Pendiente</td>

                                            </tr> -->
                                            <!-- ESTE MODAL CON TABLA ESTA ECHO PRO SI QUIERES SER MAS ESPECIFICO EN CADA DETALLE DEL HISTORIAL YA DEPENDE DE COMO LO VEAN -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ESTE MODAL ES PARA EDITAR PRODUCTOS DE UN CURSO -->
                    <div class="modal fade" id="editCourseProductsModal" tabindex="-1" aria-labelledby="editCourseProductsModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCourseProductsModalLabel">Productos del Curso</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nombre del Producto</th>
                                                <th>Cantidad</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="courseProductsTableBody">
                                            <tr>
                                                <td><input type="text" class="form-control" value="Producto 1" readonly></td>
                                                <td><input type="number" class="form-control product-quantity" value="1"></td>
                                                <td><button type="button" class="btn btn-danger btn-sm remove-product">Eliminar</button></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" value="Producto 2" readonly></td>
                                                <td><input type="number" class="form-control product-quantity" value="2"></td>
                                                <td><button type="button" class="btn btn-danger btn-sm remove-product">Eliminar</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <button type="button" class="btn btn-primary">Guardar Cambios</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ESTE MODAL ES PARA EDITAR LOS ELEMENTOS DE UNA COMPRA -->
                    <div class="modal fade" id="editAppointmentProductsModal" tabindex="-1" aria-labelledby="editAppointmentProductsModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editAppointmentProductsModalLabel">Editar Productos de Compra</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nombre del Producto</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="appointmentProductsTableBody">
                                            <tr>
                                                <td><input type="text" class="form-control"  value="Producto 1" readonly></td>
                                                <td><input type="number" class="form-control product-quantity"  value="1"></td>
                                                <td><input type="number" class="form-control product-price"  value="1000" readonly></td>
                                                <td><button type="button" class="btn btn-danger btn-sm remove-product">Eliminar</button></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control"  value="Producto 2" readonly></td>
                                                <td><input type="number" class="form-control product-quantity"  value="2"></td>
                                                <td><input type="number" class="form-control product-price" value="1000" readonly></td>
                                                <td><button type="button" class="btn btn-danger btn-sm ">Eliminar</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-primary me-2">Guardar Cambios</button>
                                        </div>
                                        <div class="me-3">
                                            <label for="totalAmount" class="form-label">Total:</label>
                                            <input type="text" id="totalAmount" class="form-control form-control-sm" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ESTE MODALS SON PARA CITAS EDITAR -->
                    <div class="modal fade" id="editAppointmentModalCit" tabindex="-1" aria-labelledby="editAppointmentModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editAppointmentModalLabel">Editar Cita</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Técnica</th>
                                                <th>Productos</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dibujarDetalleTecnicas">
                                            <!-- <tr>
                                                <td>Micropigmentación de Cejas</td>
                                                <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProductsModal1">Productos</button></td>
                                            </tr>
                                            <tr>
                                                <td>Micropigmentación de Labios</td>
                                                <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProductsModal2">Productos</button></td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-primary" id="aceptarCita">Aceptar cita</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ESTE ES EJEMPLO CUANDO PIQUE A PRODUCTOS DE UNA TECNICA EN CITAS-->
                    <div class="modal fade" id="editProductsModal1" tabindex="-1" aria-labelledby="editProductsModal1Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProductsModal1Label">Micropigmentación de Cejas - Productos</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Cantidad</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dibujarProductos">
                                            <!-- <tr>
                                                <td>Pigmento</td>
                                                <td><input type="number" class="form-control" value="1"></td>
                                            </tr>
                                            <tr>
                                                <td>Aguja</td>
                                                <td><input type="number" class="form-control" value="1"></td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal">Cerrar</button>
                                    <button type="sumbit" class="btn btn-primary editarDetalleTecnica" id="guardarCambios">Guardar Cambios</button>
                                    <button type="button" id="abrirTecnicas" class="btn btn-secondary" data-bs-toggle="modal">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>





                    <!-- ESTE MODAL SERA PARA LOS PRODUCTOS DETALLES -->
                    <div class="modal fade" id="detailsModalProducts" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Detalles</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>nombre</th>
                                                <th>descripcion</th>
                                                <th>precio</th>
                                                <th>cantidad de productos</th>
                                            </tr>
                                        </thead>
                                        <tbody id="detallesIndividualProducto">
                                            <tr>

                                            </tr>
                                            <!-- ESTE MODAL CON TABLA ESTA ECHO PRO SI QUIERES SER MAS ESPECIFICO EN CADA DETALLE DEL HISTORIAL YA DEPENDE DE COMO LO VEAN -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{--                        MODAL DE ACEPTACION DE COMPRA--}}
                    <div class="modal" tabindex="-1" id="confirmModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">CONFIRMAR</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p id="modal-body-text">Deseas confirmar que la compra de los productos se ha realizado exitosamente</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="modal-confirm-btn">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--MODAL DE RECHAZO DE COMPRA--}}
                {{--MODAL DE RECHAZO DE COMPRA--}}
                <div class="modal" tabindex="-1" id="rejectModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">RECHAZAR COMPRA</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="modal-reject-body-text">Deseas rechazar la compra de los productos</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-danger" id="modal-reject-btn">Rechazar</button>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- ESTE MODAL ESTA ECHO PARA LOS CURSOS  DETALLES Y RECHAZAR-->

                    <div class="modal fade" id="detailsModalCursos" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Detalles</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Angela</td>
                                                <td><button type="button" class="btn btn-danger">Rechazar</button></td>
                                            </tr>
                                            <tr>
                                                <td>Aaron</td>
                                                <td><button type="button" class="btn btn-danger">Rechazar</button></td>
                                            </tr>
                                            <tr>
                                                <td>Hugo</td>
                                                <td><button type="button" class="btn btn-danger">Rechazar</button></td>
                                            </tr>
                                            <!-- ESTE MODAL CON TABLA ESTA ECHO PRO SI QUIERES SER MAS ESPECIFICO EN CADA DETALLE DEL HISTORIAL YA DEPENDE DE COMO LO VEAN -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                        <!-- modal para eliminarCita -->
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
            </section>



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
    <!-- <script src="https://code.jquery.com/ui/1.12.1/i18n/datepicker-es.min.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/i18n/jquery-ui-i18n.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
//         $(document).ready(function() {
//     // Cuando se cierra el modal 'detailsModalProducts'
//     dibujarCitasVentasTecnicasProductos();
//     $('#detailsModalProducts').on('hidden.bs.modal', function () {
//         $('#editAppointmentModalCit').modal('show');
//     });

//     // Al hacer clic en el botón de regresar dentro de 'detailsModalProducts'
//     $('#detailsModalProducts .btn-close').on('click', function() {
//         $('#editAppointmentModalCit').modal('show');
//     });

//     // Al hacer clic fuera del modal 'detailsModalProducts'
//     $('#detailsModalProducts').on('click', function(event) {
//         if ($(event.target).hasClass('modal')) {
//             $('#editAppointmentModalCit').modal('show');
//         }
//     });
// });
$(document).ready(function() {
    $('#fechaFiltro').datepicker({
        dateFormat: 'yy-mm-dd',
        maxDate: 0,
        changeMonth: true,
        changeYear: true
    });

    $("#fechaFiltroEmpleado").datepicker({
        dateFormat: 'yy-mm-dd',
        maxDate: 0,
        changeMonth: true,
        changeYear: true
    });

    $('#citas-totales-tab').on('click', function() {
        dibujarCitasVentasTecnicasProductos();
    });

});

let citasVentasGlobal = [];
let citasVentasEmpleado = [];
let citasVentasAceptadas = [];


    function calcularTotalVentas(citas) {
        return citas.reduce((total, cita) => total + cita.venta.total, 0);
    }

    function dibujarCitasVentasTecnicasProductos() {
    $.get('/venta/citas', function (citasVentas) {
        console.log('Respuesta de /venta/citas:', citasVentas); // Añade esta línea para verificar la respuesta

        citasVentasGlobal = [];

        $.each(citasVentas, function(index, cita) {
            citasVentasGlobal.push({
                id: cita.id,
                fechaCita: cita.fechaCita,
                horaCita: cita.horaCita,
                venta: cita.venta,
                servicios: cita.servicios,
                usuario_empleado: cita.usuario_empleado
            });
        });

        console.log('Todas las citas procesadas:', citasVentasGlobal);
        mostrarCitas(citasVentasGlobal);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error('Error al obtener /venta/citas:', textStatus, errorThrown); // Añade esto para manejar errores
    });
}

    dibujarCitasVentasTecnicasProductos();


    function dibujarCitasVentasTecnicasProductosEmpleado() {
        $.get('/venta/citas/empleado', function (citasVentas) {

            citasVentasEmpleado =[];

            $.each(citasVentas, function(index, cita) {
                citasVentasEmpleado.push({
                    id: cita.id,
                    fechaCita: cita.fechaCita,
                    horaCita: cita.horaCita,
                    venta: cita.venta,
                    servicios: cita.servicios,
                    usuario_empleado: cita.usuario_empleado
                });
            });

            console.log(citasVentasEmpleado);
            mostrarCitasEmpleado(citasVentasEmpleado);
        });
    }

    $('#mis-citas-tab').on('click', function() {
        dibujarCitasVentasTecnicasProductosEmpleado();
    })


    function dibujarCitasVentasTecnicasProductosAceptados() {
    $.get('/venta/citas/aceptadas', function (citasVentas) {
        console.log('Respuesta de /venta/citas/aceptadas:', citasVentas); // Añade esta línea para verificar la respuesta
        citasVentasAceptadas = [];


        $.each(citasVentas, function(index, cita) {
            citasVentasAceptadas.push({
                id: cita.id,
                fechaCita: cita.fechaCita,
                horaCita: cita.horaCita,
                venta: cita.venta,
                servicios: cita.servicios,
                usuario_empleado: cita.usuario_empleado
            });
        });

        console.log('Citas aceptadas procesadas:', citasVentasAceptadas);
        mostrarCitasAceptadas(citasVentasAceptadas);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error('Error al obtener /venta/citas/aceptadas:', textStatus, errorThrown); // Añade esto para manejar errores
    });
}

$('#citas-aceptadas-tab').on('click', function() {
    dibujarCitasVentasTecnicasProductosAceptados();
})



    $('#citas-aceptadas-tab').on('click', function() {
        dibujarCitasVentasTecnicasProductosAceptados();
    });


    function mostrarCitasAceptadas(citas) {
    let tablaVenta = $('#dibujarVentasAceptadas');
    tablaVenta.empty();

    if (citas.length === 0) {
        tablaVenta.append('<tr><td colspan="6">No hay citas aceptadas para mostrar.</td></tr>');
        return;
    }

    $.each(citas, function (index, citaData) {
        let cita = citaData;
        let venta = citaData.venta;

        tablaVenta.append(`
            <tr>
                <td>Cita ${cita.id}</td>
                <td>${venta.total}</td>
                <td>${venta.fechaVenta}</td>
                <td>${cita.horaCita}</td>
                <td>${cita.usuario_empleado.name + " " + cita.usuario_empleado.apellido}</td>
                <td><button class="btn btn-primary ver-detalles" data-cita-id="${cita.id}" data-bs-toggle="modal" data-bs-target="#detailsModal"><i class="fa-solid fa-eye"></i> Detalles</button></td>
            </tr>
        `);
    });

    let totalVentas = calcularTotalVentas(citas);
    $('#totalVentasAceptadas').text('Total Vendido: ' + totalVentas.toFixed(2));

    manejarEventosCitaAceptada();
}



    function mostrarCitas(citas) {
    let tablaVenta = $('#dibujarVenta');
    tablaVenta.empty();

    if (citas.length === 0) {
        tablaVenta.append('<tr><td colspan="7">No hay citas para mostrar.</td></tr>');
        return;
    }

    $.each(citas, function (index, citaData) {
        let cita = citaData;
        let venta = citaData.venta;

        tablaVenta.append(`
            <tr>
                <td>Cita ${cita.id}</td>
                <td>${venta.total}</td>
                <td>${venta.fechaVenta}</td>
                <td>${cita.horaCita}</td>
                <td><button class="btn btn-primary ver-detalles" data-cita-id="${cita.id}" data-bs-toggle="modal" data-bs-target="#detailsModal"><i class="fa-solid fa-eye"></i></button></td>
                <td><button data-cita-id="${cita.id}" id="delete" data-bs-toggle="modal" data-bs-target="#eliminarCita" class="btn btn-danger eliminarCita"><i class="fa-solid fa-trash"></i></button></td>
                <td><button class="btn btn-success modificarProductos" data-venta-id="${venta.id}" data-cita-id="${cita.id}" data-bs-toggle="modal" data-bs-target="#editAppointmentModalCit"><i class="fa-solid fa-check"></i></button></td>
            </tr>
        `);
    });

    manejarEventos();
}

    function manejarEventos() {
        $(document).off('click', '.ver-detalles').on('click', '.ver-detalles', function () {
            let citaId = $(this).data('cita-id');
            console.log('TODOOOOOOOOO: ',citasVentasGlobal);
            let citaData = citasVentasGlobal.find(cita => cita.id === citaId);

            let tablaDetalles = $('#dibujarDetalles');
            tablaDetalles.empty();
            console.log('servicios: ', citaData);

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
            let citaData = citasVentasGlobal.find(cita => cita.id === citaId);

            let ventaId = $(this).data('venta-id');
            $('#aceptarCita').attr('data-venta-id', ventaId);

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
                let ventaId = $(this).data('venta-id');
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
                        dibujarCitasVentasTecnicasProductos();
                        mostrarAlerta('Cantidades actualizadas correctamente.', 'alert-success', 'check-circle-fill');
                    },
                    error: function (xhr) {
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
    }


    function manejarEventosCitaAceptada() {
        $(document).off('click', '.ver-detalles').on('click', '.ver-detalles', function () {
            let citaId = $(this).data('cita-id');
            let citaData = citasVentasAceptadas.find(cita => cita.id === citaId);
            console.log(citaData);

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
    }

    function manejarEventosEmpleado() {
        $(document).off('click', '.ver-detalles').on('click', '.ver-detalles', function () {
            let citaId = $(this).data('cita-id');
            let citaData = citasVentasEmpleado.find(cita => cita.id === citaId);


            let tablaDetalles = $('#dibujarDetalles');
            tablaDetalles.empty();
            // console.log('servicios: ', citaData.servicios);

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
            let citaData = citasVentasEmpleado.find(cita => cita.id === citaId);

            let ventaId = $(this).data('venta-id');
            $('#aceptarCita').attr('data-venta-id', ventaId);

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
                let ventaId = $(this).data('venta-id');
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
                        }
                        mostrarAlerta(`Error: ${xhr.responseJSON.message}`, 'alert-danger', 'exclamation-triangle-fill');

                    }
                });
            });
        });
    }


    function mostrarCitasEmpleado(citas) {
        let tablaVenta = $('#dibujarVentaEmpleado');
        tablaVenta.empty();

        $.each(citas, function (index, citaData) {
            let cita = citaData;
            let venta = citaData.venta;
            console.log('citas de empleados: ', citaData);
            tablaVenta.append(`
                <tr>
                    <td>Cita ${cita.id}</td>
                    <td>${venta.total}</td>
                    <td>${venta.fechaVenta}</td>
                    <td>${cita.horaCita}</td>
                    <td><button class="btn btn-primary ver-detalles" data-cita-id="${cita.id}" data-bs-toggle="modal" data-bs-target="#detailsModal"><i class="fa-solid fa-eye"></i> Detalles</button></td>
                    <td><button data-cita-id="${cita.id}" id="delete" data-bs-toggle="modal" data-bs-target="#eliminarCita" class="btn btn-danger eliminarCita"><i class="fa-solid fa-trash"></i> No asistió</button></td>
                    <td><button class="btn btn-success modificarProductos" data-venta-id="${venta.id}" data-cita-id="${cita.id}" data-bs-toggle="modal" data-bs-target="#editAppointmentModalCit"><i class="fa-solid fa-check"></i> Aceptar</button></td>
                </tr>
            `);
        });

        manejarEventosEmpleado  ();
    }

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

    $('#filtrarCitas').on('click', function () {
        let fechaFiltro = $('#fechaFiltro').val();
        let horaFiltro = $('#horaFiltro').val();

        let citasFiltradas = citasVentasGlobal.filter(cita => {
            let coincideFecha = !fechaFiltro || cita.venta.fechaVenta === fechaFiltro;
            let coincideHora = !horaFiltro || cita.horaCita.startsWith(horaFiltro);

            return coincideFecha && coincideHora;
        });

        mostrarCitas(citasFiltradas);
        $('#fechaFiltro').val('');
        $('#horaFiltro').val('');
    });


    $('#nombreEmpleadoFiltro').on('input', function() {
        let nombreEmpleadoFiltro = $('#nombreEmpleadoFiltro').val().toLowerCase();
        let citasFiltradas = citasVentasAceptadas.filter(cita => {
            let coincideNombreEmpleado = !nombreEmpleadoFiltro || (cita.usuario_empleado && (cita.usuario_empleado.name + " " + cita.usuario_empleado.apellido).toLowerCase().includes(nombreEmpleadoFiltro));

            return coincideNombreEmpleado;
        });

        mostrarCitasAceptadas(citasFiltradas);
    });

    function ordenarCitas(orden) {
        let citasOrdenadas = citasVentasGlobal.slice();
        citasOrdenadas.sort(function(a, b) {
            let fechaA = new Date(a.venta.fechaVenta + 'T' + a.horaCita);
            let fechaB = new Date(b.venta.fechaVenta + 'T' + b.horaCita);

            if (orden === 'asc') {
                return fechaA - fechaB;
            } else if (orden === 'desc') {
                return fechaB - fechaA;
            }
        });
        mostrarCitas(citasOrdenadas);
    }

    function ordenarCitasEmpleado(orden) {
        let citasOrdenadas = citasVentasEmpleado.slice();
        citasOrdenadas.sort(function(a, b) {
            let fechaA = new Date(a.venta.fechaVenta + 'T' + a.horaCita);
            let fechaB = new Date(b.venta.fechaVenta + 'T' + b.horaCita);

            if (orden === 'asc') {
                return fechaA - fechaB;
            } else if (orden === 'desc') {
                return fechaB - fechaA;
            }
        });
        mostrarCitasEmpleado(citasOrdenadas);
    }



    $('#mostrarTodasCitas').on('click', function() {
        $('#fechaFiltro').val('');
        $('#horaFiltro').val('');
        dibujarCitasVentasTecnicasProductos();
    });



    $('#mostrarTodasCitasEmpleado').on('click', function() {
        $('#fechaFiltroEmpleado').val('');
        $('#horaFiltroEmpleado').val('');
        dibujarCitasVentasTecnicasProductosEmpleado();
    });


    // $('#mis-citas-tab').on('click', function() {
    //     dibujarCitasVentasTecnicasProductosEmpleado();
    // })

    // $('#compras-totales-tab-citas').on('click', function() {
    //     dibujarCitasVentasTecnicasProductos();
    // });

    //$('#compras-aceptadas-tab').on('click', function() {
    // Mostrar la pestaña de Compras Aceptadas
    //$('#comprasAceptadas').addClass('show active');
    // Ocultar la pestaña de Compras Totales
    //$('#comprasTotales').removeClass('show active');
//});

//$('#compras-totales-tab').on('click', function() {
    // Mostrar la pestaña de Compras Totales
    //$('#comprasTotales').addClass('show active');
    // Ocultar la pestaña de Compras Aceptadas
    //$('#comprasAceptadas').removeClass('show active');
  //  dibujarCompras();  // Asegúrate de que esta función esté definida y funcione correctamente
//});

    $('#ordenarAsc').on('click', function() {
        ordenarCitas('asc');
    });

    $('#ordenarDesc').on('click', function() {
        ordenarCitas('desc');
    });

    $('#ordenarAscEmpleado').on('click', function() {
        ordenarCitasEmpleado('asc');
    });

    $('#ordenarDescEmpleado').on('click', function() {
        ordenarCitasEmpleado('desc');
    });



function aceptarVenta() {
    $(document).on('click', '#aceptarCita', function() {
        let ventaId = $(this).data('venta-id');
        console.log('Venta ID en Aceptar:', ventaId);

        $.ajax({
            url: '/venta/actualizar',
            method: 'PUT',
            data: {
                ventaId: ventaId,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log(response);
                dibujarCitasVentasTecnicasProductosEmpleado();
                dibujarCitasVentasTecnicasProductosAceptados();
                dibujarCitasVentasTecnicasProductos();
                $('#editAppointmentModalCit').modal('hide');

                alert('Se aceptó con éxito');
            },
            error: function(error) {
                console.log(error);
                alert('Hubo un error al aceptar la venta');
            }
        });
    });
}

aceptarVenta();


$(document).on('click', '.eliminarCita', function() {
    let citaId = $(this).data('cita-id');
    $('#rechazarCita').attr('data-cita-id', citaId);
});

$('#rechazarCita').on('click', function() {
    let citaId = $(this).data('cita-id');

    eliminarCita(citaId);
});

function eliminarCita(id){
    $.ajax({
        url: `/eliminar/cita/${id}`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'DELETE',
        success: function(response){
            console.log(response);
            dibujarCitasVentasTecnicasProductos();
            dibujarCitasVentasTecnicasProductosEmpleado();
            $('#eliminarCita').modal('hide');
            mostrarAlerta('Se eliminó con éxito la cita.', 'alert-success', 'check-circle-fill');
        },
        error: function(error) {
            console.log(error);
        }
    });
}

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




    // Scripts para todas las vistas

        // Pantalla de carga
        var loader = document.getElementById("contenedor_carga");
        var navbar = document.getElementById("navbar");
        window.addEventListener('load', function(){
            $('#navbar').css('visibility', 'visible');
            loader.style.display = "none";
        });

    $(document).ready(function(){


        $('a[data-bs-target="#editProductsModal1"]').click(function(e){
            e.preventDefault();
            $('#editProductsModal1').modal('show');
        });


        $('#editProductsModal1').on('hidden.bs.modal', function () {
            $('#editAppointmentModalCit').modal('show');
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

        $('#buscadorIdCompra').on('keyup', function() {
            var value = $(this).val();

            // Filtra en la tabla de Todas las Compras
            $('#ventasProductosTable tr').filter(function() {
                $(this).toggle($(this).find('th').text().indexOf(value) > -1);
            });

            // Filtra en la tabla de Compras Aceptadas
            $('#ventasConfirmadasTable tr').filter(function() {
                $(this).toggle($(this).find('th').text().indexOf(value) > -1);
            });

            // Filtra en la tabla de Compras Rechazadas
            $('#ventasRechazadas tr').filter(function() {
                $(this).toggle($(this).find('th').text().indexOf(value) > -1);
            });
        });

        // Fin scripts para todas las vistas
        dibujarCompras();
        dibujarCompraConfirmada();




        // Fin document.ready
    });



    //script para vista de ventas de compra
    function dibujarCompras() {
        $.ajax({
            url: '/get/compras',
            method: 'GET',
            success: function (data) {
                $('#ventasProductosTable').empty(); // Limpiar la tabla antes de agregar nuevas filas
                data.forEach(venta => {
                    const detallesCompra = $('#ventasProductosTable');
                    const fila = `
                        <tr>
                            <td>Compra</td>
                            <th>${venta.id}</th>
                            <td>${venta.total}</td>
                            <td>${venta.fechaVenta}</td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModalProducts" onclick="dibujarTicket(${venta.id})">Ver detalles</button></td>
                            <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#confirmModal" onclick="prepararConfirmacion(${venta.id})">Aceptar</button></td>
                            <td><button class="btn btn-danger" id="eliminacion${venta.id}" data-bs-toggle="modal" data-bs-target="#rejectModal" onclick="prepararRechazo(${venta.id})">Rechazar</button></td>
                        </tr>
                    `;
                    detallesCompra.append(fila);
                });
            }
        });
    }
    dibujarCompras();

    function dibujarCompraConfirmada(){
        $.ajax({
            url: '/get/compras/confirmadas',
            method: 'GET',
            success: function (data) {
                var cont = 0;
                const detallesCompra = $('#ventasConfirmadasTable');
                detallesCompra.empty();
                data.forEach(venta => {
                        cont = venta.id;
                        const fila = `
                        <tr>
                            <td>Compra</td>
                            <th>${venta.id}</th>
                            <td>${venta.total}</td>
                            <td>${venta.fechaVenta}</td>
                            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModalProducts" onclick="dibujarTicket(${venta.id})">Ver detalles</button></td>
                        </tr>
                    `;
                        detallesCompra.append(fila);
                });
            }
        });
    }
    dibujarCompraConfirmada();


    function prepararConfirmacion(ventaId) {
        $('#modal-body-text').text(`Deseas confirmar que la compra de los productos con ID ${ventaId} se ha realizado exitosamente`);
        $('#modal-confirm-btn').attr('onclick', `confirmarCompra(${ventaId})`);
    }

    function prepararRechazo(ventaId) {
        $('#modal-reject-body-text').text(`Deseas rechazar la compra de los productos con ID ${ventaId}`);
        $('#modal-reject-btn').attr('onclick', `rechazarCompra(${ventaId})`);
    }

    var detallesYaDibujados = [];
    //Contador para el numero de veces que se repite el producto en la lista seleccionada
    var cont2;

    let ticketsDibujado;
    function dibujarTicket(id){
        $.ajax({
            url:'/get/compras/'+id,
            method: 'GET',
            success: function (data){
                //si ticket aun no se encuentra dentro del arreglo de ticekts dibujados
                if (ticketsDibujado !== id) {
                    const detallesIndividualProducto = $('#detallesIndividualProducto');
                    detallesIndividualProducto.empty();


                    data.forEach(detalle=> {
                        //Limpia el modal para que se puedan dibujar los elementos del ticket seleccionado
                        cont2 = 1
                        let idCantidad = 'cantidad' + detalle.productoId;
                        console.log(detalle.productoId);

                        if(!detallesYaDibujados.includes(detalle.productoId)){
                            detallesYaDibujados.push(detalle.productoId);
                            const fila =`
                            <tr class="fila-dinamica">
                               <td>${detalle.nombre}</td>
                               <td>${detalle.descripcion}</td>
                               <td>${detalle.precio}</td>
                               <td id="${idCantidad}"> 1 </td>
                            </tr>
                        `;
                            detallesIndividualProducto.append(fila);
                        }else{
                            cont2 = parseInt($('#' + idCantidad).text()) + 1;
                            $('#' + idCantidad).text(cont2);
                        }
                    });
                    ticketsDibujado = id;
                    detallesYaDibujados = [];
                }
                detallesYaDibujados = [];
            }
        })
    }

    function confirmarCompra($id){
        $.ajax({

            url: '/confirmarCompra/' + $id,
            method: 'POST',
            data:{
                _token: $('input[name="_token"]').val(),
            },
            success: function (){
                alert('Compra confirmada');

                dibujarCompras();
                dibujarCompraConfirmada();


                // dibujarCompras();
                $('#confirmModal').modal('hide');

            },
            error: function (error){
                console.log(error)
            }
        });
    }

    function rechazarCompra($id){
        $.ajax({

            url: '/rechazarCompra/' + $id,
            method: 'POST',
            data:{
                _token: $('input[name="_token"]').val(),
            },
            success: function (){
                alert('Compra Rechazada')

                dibujarCompras();
                dibujarCompraConfirmada();
                $('#rejectModal').modal('hide');
            },
            error: function (error){
                console.log(error)
            }
        });
    }
    function checkWidth() {
        if ($(window).width() < 786) {  // Si el ancho de la ventana es menor que 480 píxeles
            $('#scrollDash').addClass('table-responsive');  // Agrega la clase esa
        } else {
            $('#scrollDash').removeClass('table-responsive');
        }
    }


    checkWidth();
    $(window).resize(checkWidth);
</script>
</body>
</html>
