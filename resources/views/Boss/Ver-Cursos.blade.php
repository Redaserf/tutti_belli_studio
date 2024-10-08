<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cursos</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
    background: #ffffff url(/resources/img/home/preloader.gif) no-repeat center center;
    background-size: 20%;
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 500000;
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
.tab-content{
    padding: 36px;
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
        /*FIN ESTILOS DE LAS CARTAS DE INSCRIPCION*/

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
            padding: 16px;
        }
        .product-card {
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 200px; /* Reducido para que quepan más tarjetas */
            text-align: center;
            margin: 10px; /* Añadido margen para separar las tarjetas */
        }

        .product-image {
            border-radius: 10px; /* Reducido el radio del borde */
            width: 100%; /* Ajustado al 100% del ancho de la tarjeta */
            height: 150px; /* Altura reducida */
            object-fit: contain;
        }

        .product-info {
            padding: 10px; /* Reducido el padding */
        }

        .product-title {
            font-size: 1.2em; /* Reducido el tamaño de la fuente */
            margin: 0 0 8px 0; /* Reducido el margen inferior */
        }

        .product-description {
            font-size: 0.9em; /* Reducido el tamaño de la fuente */
            color: #666;
            margin: 0 0 8px 0; /* Reducido el margen inferior */
        }

        .product-price {
            font-size: 1em; /* Reducido el tamaño de la fuente */
            color: #333;
            font-weight: bold;
        }
    </style>

</head>

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

            <div class="menu-bar" id="scrollDash">
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


                        {{-- Modal para editar curso --}}

                        <div class="modal fade" id="editCursoModal" tabindex="-1" aria-labelledby="editCursoModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="editCursoForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editCursoModalLabel">Editar Curso</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" id="edit_id" name="id">
                                            <div class="form-group">
                                                <label for="edit_nombre">Nombre</label>
                                                <input type="text" class="form-control" id="edit_nombre" name="nombre">
                                            </div>
                                            <div class="form-group" style="margin-top: 10px;">
                                                <label for="edit_descripcion">Descripción</label>
                                                <input type="text" class="form-control" id="edit_descripcion" name="descripcion">
                                            </div>
                                            <div class="form-group" style="margin-top: 10px;">
                                                <label for="edit_date">Fecha de inicio</label>
                                                <input type="date" class="form-control" id="edit_date" name="date">
                                            </div>
                                            <div class="form-group" style="margin-top: 10px;">
                                                <label for="edit_hour">Hora de inicio</label>
                                                <input type="time" class="form-control" id="edit_hour" name="hour">
                                            </div>
                                            <div class="form-group" style="margin-top: 10px;">
                                                <label for="edit_empleadoId">Empleado a cargo</label>
                                                <select class="form-control" id="edit_empleadoId" name="empleadoId">
                                                </select>
                                            </div>
                                            <div class="form-group" style="margin-top: 10px;">
                                                <label for="edit_precio">Precio</label>
                                                <input type="number" class="form-control" id="edit_precio" name="precio" min="0">
                                                <label style="margin-top:10px;" for="edit_imagenProducto">Imagen</label>
                                            </div>
                                            <div class="form-group" style="display:flex; justify-content: center; align-items:center; flex-direction:column">
                                                <input type="file" class="form-control" id="edit_imagenProducto" name="imagenCurso">
                                                <img id="edit_imagenCurso_preview" src="#" alt="Imagen del producto" style="width: 30%; margin-top: 10px;" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="deleteCursoBtn" class="btn btn-danger">Finalizar curso</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

{{--                        MODAL PARA MOTSTRAR FECHAS A LOS DIAS--}}
                        <div class="modal fade" id="agregarDiasModal" tabindex="-1" aria-labelledby="editCursoModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" >Agregar Dias</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="agregarDiasCurso">

{{--                                            <div class="form-group" id="fechasEstablecidas">--}}

{{--                                            </div>--}}

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button id="AgregarFC" type="button" class="btn btn-primary">Agregar nueva fecha</button>
                                        </div>
                                </div>
                            </div>
                        </div>

{{--                    MODAL PARA AGREGAR LA FECHA    --}}
                        <div class="modal fade" id="agregarNuevoDiaModal" tabindex="-1" aria-labelledby="editCursoModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" >Agregar Dias</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" id="agregarDiasCurso">
                                        <label> Proxima fecha de sesion</label> <br>
                                        <input id="nuevaFecha" type="date"> <br><br>
                                        <label> Hora de inicio </label> <br>
                                        <input id="nuevaHora" type="time">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button id="GuardarFC" type="button" class="btn btn-primary">Guardar Fecha</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                {{-- HOME --}}
            <section class="home">
                <div class="top text-center">
                    <h2>Cursos</h2>
                    <a class="left" href="/Agregar-Curso" style="text-decoration: none; color:black; margin-left:10px"><button class="btn btn-outline-success" style="width: auto;">Crear curso<i style="margin-left: 6px;" class="fa-solid fa-pencil"></i></button></a>
                </div>

                <div class="section-divider"></div>
        

                        <!-- Pestañas de navegación -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="cursos-activos-tab" data-bs-toggle="tab" href="#cursos-activos" role="tab" aria-controls="cursos-activos" aria-selected="true">Cursos activos</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="cursos-inactivos-tab" data-bs-toggle="tab" href="#cursos-inactivos" role="tab" aria-controls="cursos-inactivos" aria-selected="false">Cursos finalizados</a>
                        </li>
                    </ul>


                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="cursos-activos" role="tabpanel" aria-labelledby="cursos-activos-tab">
                            <div class="table-container mt-5">
                                <input type="text" class="form-control mb-3" id="buscadorNombre" placeholder="Buscar por nombre de curso">
    
                            <div class="container mt-1 pt-5">
                                <div id="cursos" class="row">
                                  {{-- Cursos mediante backend --}}
                                </div>
                            </div>


                            </div>
                        </div>
                    <div class="tab-pane fade" id="cursos-inactivos" role="tabpanel" aria-labelledby="cursos-inactivos-tab">
                    <div class="table-container mt-5">

                        <div class="container mt-1 pt-5">
                            <div id="cursosInactivos" class="row">
                                {{-- Cursos mediante backend --}}
                            </div>
                        </div>

                    </div>
                    </div>
                </div>


            </section>

            <br>

            {{-- Modal para ver inscripciones --}}
            <div class="modal fade" id="inscripcionesModal" tabindex="-1" aria-labelledby="inscripcionesModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="inscripcionesModalLabel">Inscripciones del Curso</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-bodyInscripciones" style="padding:35px;">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal para ver inscripciones de cursos finalizados -->
            <div class="modal fade" id="inscripcionesNullModal" tabindex="-1" aria-labelledby="inscripcionesNullModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="inscripcionesNullModalLabel">Inscripciones del Curso Finalizado</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-bodyInscripcionesNull" style="padding:35px;">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


    {{-- Modal para editar una inscripción --}}
    <div class="modal fade" id="inscripcionModal" tabindex="-1" aria-labelledby="inscripcionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inscripcionModalLabel">Editar Inscripción</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editarInscripcionForm">
                        <div class="mb-3">
                            <label for="inscripcionNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="inscripcionNombre" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="inscripcionFecha" class="form-label">Fecha de inscripción</label>
                            <input type="date" class="form-control" id="inscripcionFecha" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="inscripcionEstado" class="form-label">Estado</label>
                            <select class="form-control" id="inscripcionEstado" disabled>
                                <option value="0">Pendiente</option>
                                <option value="1">Aceptado</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="botonCerrar">Cerrar</button>
                    <button type="button" class="btn btn-danger" id="eliminarInscripcion">Eliminar</button>
                    <button type="button" class="btn btn-warning" id="rembolsarInscripcion" style="display: block">Rembolsar</button>
                    <button type="button" class="btn btn-success" id="saveChanges">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal para mostrar los productos--}}
    <div class="modal fade modal-xl" data-bs-backdrop="static" id="productosModal" tabindex="-1" aria-labelledby="productosModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="productosModalLabel">Productos</h5>
                </div>
                <div class="modal-body product-container" id="contenedorProductos">

                </div>
                <div class="modal-footer">
                    <button type="button" id="cerrarProductos" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                        <div class="alert" role="alert">
                            <h4 class="alert-heading">¡No hay cursos disponibles en este momento!</h4>
                        </div>
                    </div>
                `);
      } else {
        data.forEach(curso => {
          const tecnicas = curso.tecnicas.map(tecnica => tecnica.nombre).join(', ');
          const card = `
            <div class="col-md-6 col-lg-4 ">
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
                        <button style="margin-bottom: 10px;" type="button" class="btn btn-outline-warning editar-curso" data-id="${curso.id}">Editar curso<i style="margin-left: 6px" class="fa-solid fa-pen-to-square"></i></button>
                        <button style="margin-bottom: 10px;" type="button" class="btn btn-outline-info ver-inscripciones" data-id="${curso.id}">Ver inscripciones<i style="margin-left: 6px" class="fa-solid fa-user"></i></button>
                        <button style="margin-bottom: 10px;" type="button" class="btn btn-outline-dark" data-id="${curso.id}" onclick="dibujarProductosUsados(${curso.id})">Ver Productos utilizados<i style="margin-left: 6px" class="fa-solid fa-box"></i></button>

                </div>
              </div>
            </div>
          `;
          cursos.append(card);
        });

        $('.editar-curso').click(function() {
                const cursoId = $(this).data('id');
                modalEditar(cursoId);
            });

            $('.borrar-curso').click(function() {
                const cursoId = $(this).data('id');
                cursoDelete(cursoId);
            });

            $('.ver-inscripciones').click(function() {
                    const cursoId = $(this).data('id');
                    mostrarInscripciones(cursoId);
                });
            }
        },
        error: function(error) {
            console.error('Error al obtener los cursos:', error);
        }
    });
}


// Cursos inactivos
function dibujarCursosInactivos() {
    $.ajax({
        url: '/get/cursosInactivos',
        method: 'GET',
        success: function(data) {
            console.log(data);
            const cursosInactivos = $('#cursosInactivos');
            cursosInactivos.empty();
            if (data.length === 0) {
                cursosInactivos.append(`
                    <div class="col-12 text-center my-5">
                        <div class="alert" role="alert">
                            <h4 class="alert-heading">¡No hay cursos inactivos disponibles en este momento!</h4>
                        </div>
                    </div>
                `);
            } else {
                data.forEach(curso => {
                    const tecnicas = curso.tecnicas.map(tecnica => tecnica.nombre).join(', ');
                    const card = `
                        <div class="col-md-6 col-lg-4">
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
                                    <button style="margin-bottom: 10px;" type="button" class="btn btn-outline-info ver-inscripciones-finalizadas" data-id="${curso.id}">Ver inscripciones finalizadas<i style="margin-left: 6px" class="fa-solid fa-user"></i></button>
                                </div>
                            </div>
                        </div>
                    `;
                    cursosInactivos.append(card);
                });


                $('.ver-inscripciones-finalizadas').click(function() {
                const cursoId = $(this).data('id');
                mostrarInscripcionesNull(cursoId);
                });
            }
        },
        error: function(error) {
            console.error('Error al obtener los cursos inactivos:', error);
        }
    });
}



function mostrarInscripciones(cursoId) {

    $.ajax({
        url: `/get/inscripciones/${cursoId}`,
        method: 'GET',
        success: function(response) {
            const inscripciones = response.inscripciones;
            const curso = response.curso;
            let inscripcionesHtml = `<h5 style="margin-bottom:30px;">${curso.nombre}</h5><ul>`;
                let filtroId = `<input style="width:160px;" type="number" id="buscadorId" class="form-control mb-3" placeholder="Busqueda por ID" ></input>`; //Aún por implementar la lógica, es un boceto
                inscripcionesHtml += filtroId;
            inscripciones.forEach(inscripcion => {
                if (inscripcion.estado == 0){
                    inscripcionesHtml += `<li class="buscar" data-id="${inscripcion.id}" >
                        Inscripción ID #${inscripcion.id}<br>
                        ${inscripcion.usuarios.name} ${inscripcion.usuarios.apellido}<br>
                        Estado: <span style='color: #D5B533; font-weight:600;'>Pendiente</span><button class="btn" onclick="editarInscripcion(${inscripcion.id})" data-bs-toggle="modal" data-bs-target="#inscripcionModal"><i style="margin-left:-5px;" class="fa-solid fa-eye"></i></button>
                        </li>`;
                }
                else {
                    inscripcionesHtml += `<li class="buscar" data-id="${inscripcion.id}" >
                        Inscripción ID #${inscripcion.id}<br>
                        ${inscripcion.usuarios.name} ${inscripcion.usuarios.apellido}<br>
                        Estado: <span style='color: #39BF3D; font-weight:600;'>Inscrito</span><button class="btn" onclick="editarInscripcion(${inscripcion.id})" data-bs-toggle="modal" data-bs-target="#inscripcionModal"><i style="margin-left:-5px;" class="fa-solid fa-eye"></i></button>
                        </li>`;
                }
            });
            inscripcionesHtml += '</ul>';
            $('#inscripcionesModal .modal-bodyInscripciones').html(inscripcionesHtml);
            $('#inscripcionesModal').modal('show');

            $('#buscadorId').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('.buscar').filter(function() {
                    var text = $(this).data('id').toString().toLowerCase();
                    $(this).toggle(text.indexOf(value) > -1);
                });
            });
        },
        error: function(error) {
            console.error('Error al obtener las inscripciones:', error);
        }
    });
}


function mostrarInscripcionesNull(cursoId) {
    $.ajax({
        url: `/get/inscripcionesNull/${cursoId}`,
        method: 'GET',
        success: function(response) {
            const inscripciones = response.inscripciones;
            const curso = response.curso;
            let inscripcionesHtml = `<h5 style="margin-bottom:30px;">${curso.nombre}</h5><ul>`;
            let filtroId = `<input style="width:160px;" type="number" id="buscadorIdNull" class="form-control mb-3" placeholder="Busqueda por ID" ></input>`;
            inscripcionesHtml += filtroId;

            inscripciones.forEach(inscripcion => {
                inscripcionesHtml += `<li class="buscar" data-id="${inscripcion.id}">
                    Inscripción ID #${inscripcion.id}<br>
                    ${inscripcion.usuarios.name} ${inscripcion.usuarios.apellido}<br>
                    ${inscripcion.usuarios.numeroTelefono}<br>
                    Estado: <span style='color: #6c757d; font-weight:600;'>Finalizado</span>
                    </li>`;
            });

            inscripcionesHtml += '</ul>';
            $('#inscripcionesNullModal .modal-bodyInscripcionesNull').html(inscripcionesHtml);
            $('#inscripcionesNullModal').modal('show');

            $('#buscadorIdNull').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('.buscar').filter(function() {
                    var text = $(this).data('id').toString().toLowerCase();
                    $(this).toggle(text.indexOf(value) > -1);
                });
            });
        },
        error: function(error) {
            console.error('Error al obtener las inscripciones:', error);
        }
    });
}



    //
    //
    var cursoActual;
    // function mostrarDias(id){
    //     cursoActual = id
    //         $('#agregarDiasModal').modal('show');
    //         let divDias = $('#agregarDiasCurso');
    //         divDias.empty();

    //         $.ajax({
    //             url: '/diaCurso/' + id,
    //             method: 'GET',
    //             success: function (response){

    //                 let cursos = response.curso;
    //                 let proximosDias = response.dias


    //                 let inicial = `<label> fecha Inicial: ${cursos.fechaInicio}</label> <br>
    //                            <label> hora de Inicio: ${cursos.horaInicio}</label>`;

    //                 divDias.append(inicial);

    //                 let des = `<h5> Dias proximos </h5>`;

    //                 divDias.append(des);

    //                 proximosDias.forEach(dia =>{
    //                     let nuevoDia = `<li>
    //                       <label> Fecha: ${dia.fechaContinuacion} </label>
    //                       <label> Hora: ${dia.horaContinuacion} </label>
    //                      </li>`

    //                     divDias.append(nuevoDia);
    //                 })



    //             },
    //             error: function (){

    //             }
    //         });

    // }

    // $('#AgregarFC').on('click', function (){
    //     $("#agregarNuevoDiaModal").modal('show');
    //     $('#agregarDiasModal').modal('hide');
    // });

    // $('#GuardarFC').on('click',function (id){
    //     let fecha = $('#nuevaFecha').val();
    //     let hora = $('#nuevaHora').val();

    //     console.log(fecha);
    //     console.log(hora);

    //     $.ajax({
    //        url: '/nuevaFecha/' + cursoActual,
    //        method: 'POST',
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //        data:{
    //            fecha: fecha,
    //            hora: hora
    //        },
    //        success: function (response){
    //            alert(response)
    //            mostrarDias(cursoActual);
    //            $("#agregarNuevoDiaModal").modal('hide');
    //            $('#agregarDiasModal').modal('show');
    //        },
    //        error: function (response){
    //             console.log(response);
    //        }
    //     });
    // });





function editarInscripcion(inscripcionId){
            $.ajax({
                url: `/get/inscripcion/${inscripcionId}`,
                method: 'GET',
                success: function(data) {
                    $('#inscripcionNombre').val(`${data.usuarios.name} ${data.usuarios.apellido}`);
                    $('#inscripcionFecha').val(data.fechaInscripcion);
                    $('#inscripcionEstado').val(data.estado);

                    $('#botonCerrar').off('click').on('click', function() {
                        $('#inscripcionModal').modal('hide');
                        mostrarInscripciones(data.cursoId);
                    })

                    if (data.estado === 1) {
                        $('#saveChanges').prop('disabled', true);
                        $('#eliminarInscripcion').prop('disabled', true);
                        $('#rembolsarInscripcion').prop('disabled', false);
                        $('#saveChanges').text('Usuario aceptado');
                    } else {
                        $('#saveChanges').prop('disabled', false);
                        $('#rembolsarInscripcion').prop('disabled', true);
                        $('#eliminarInscripcion').prop('disabled', false);
                        $('#saveChanges').text('Aceptar usuario');
                    }

                    $('#saveChanges').off('click').on('click', function() {
                        if (confirm("¿Quieres aceptar al usuario en este curso?")) {
                        const updatedInscripcion = {
                            estado: $('#inscripcionEstado').val(),
                            _token: $('meta[name="csrf-token"]').attr('content')
                        };
                        // Mostrar la pantalla de carga
                         $('#contenedor_carga').css('display', 'block');
                        $.ajax({
                            url: `/update/inscripcion/${inscripcionId}`,
                            method: 'POST',
                            data: updatedInscripcion,
                            success: function(response) {
                                // Ocultar la pantalla de carga
                                $('#contenedor_carga').css('display', 'none');
                                alert(response);
                                $('#inscripcionModal').modal('hide');
                                mostrarInscripciones(data.cursoId);

                                console.log(response);
                            },
                            error: function(error) {
                                // Ocultar la pantalla de carga
                                $('#contenedor_carga').css('display', 'none');
                                alert('Error al actualizar la inscripción.');
                            }
                        });
                    }
                    });

                    $('#rembolsarInscripcion').off('click').on('click', function() {
                        const updatedInscripcion = {
                            estado: $('#inscripcionEstado').val(),
                            _token: $('meta[name="csrf-token"]').attr('content')
                        };
                        if(confirm("¿Quieres devolver los productos de esta inscripción al inventario?")) {
                            $.ajax({
                                url: `/rembolso/inscripcion/${inscripcionId}`,
                                method: 'POST',
                                data: updatedInscripcion,
                                success: function(response) {
                                    alert("Los productos se han regresado con éxito al inventario.");
                                    $('#inscripcionModal').modal('hide');
                                    mostrarInscripciones(data.cursoId);
                                    console.log(data.estado);
                                },
                                error: function(error) {
                                    alert('Error al rembolsar la inscripción');
                                }
                            });
                        }
                        });

                            $('#eliminarInscripcion').off('click').on('click', function() {
                            const updatedInscripcion = {
                                estado: $('#inscripcionEstado').val(),
                                _token: $('meta[name="csrf-token"]').attr('content')
                            };
                        if (confirm('¿Estás seguro de que deseas eliminar esta inscripción?')) {
                            $.ajax({
                            url: `/inscripcion/eliminar/${inscripcionId}`,
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(){
                                alert('Inscripción eliminada exitosamente.');
                                $('#inscripcionModal').modal('hide');
                                mostrarInscripciones(data.cursoId);
                            },
                            error: function(error){
                                alert('Hubo un error al eliminar la inscripción');
                                console.log(error);
                                console.log(data);
                            }
                            });
                        }
                    });
                    },
                    error: function(error) {
                        alert('Error al cargar los detalles de la inscripción.');
                    }
                });
            }



// Eliminar un curso
function cursoDelete(id) {
    if (confirm('¿Estás seguro de que deseas eliminar este curso?')) {
        $.ajax({
            url: `/cursos/eliminar/${id}`,
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.error) {
                    // Muestra el mensaje de error personalizado desde el controlador
                    alert(response.error);
                } else {
                    alert('Curso finalizado exitosamente.');
                    $('#editCursoModal').modal('hide');
                    dibujarCursosInactivos();
                    dibujarCursos();
                }
            },
            error: function(xhr) {
                // Muestra el mensaje de error desde la respuesta del servidor
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    alert(xhr.responseJSON.error);
                } else {
                    alert('Hubo un error al eliminar el curso');
                }
                console.log(xhr);
            }
        });
    }
}

function modalEditar(id) {
    $.ajax({
        url: `/get/curso/${id}`,
        method: 'GET',
        success: function(data) {
            const curso = data.curso;
            const empleados = data.empleados;
            const inscripciones = data.inscripcion || [];

            $('#edit_id').val(curso.id);
            $('#edit_nombre').val(curso.nombre);
            $('#edit_descripcion').val(curso.descripcion);
            $('#edit_date').val(curso.fechaInicio);
            $('#edit_hour').val(curso.horaInicio);
            $('#edit_precio').val(curso.precio);
            $('#edit_imagenCurso_preview').attr('src', `/storage/${curso.imagen}`);

            // Llenar el select de empleados
            const empleadoSelect = $('#edit_empleadoId');
            empleadoSelect.empty();
            empleados.forEach(empleado => {
                const selected = empleado.id === curso.empleadoId ? 'selected' : '';
                empleadoSelect.append(`<option value="${empleado.id}" ${selected}>${empleado.name}</option>`);
            });

            // Verificar si el curso tiene inscripciones con estado 1 o 0
            const tieneInscripciones = inscripciones.some(inscripcion => inscripcion.estado === 1 || inscripcion.estado === 0);

            // Verificar si la terceraFecha ya pasó
            const hoy = new Date();
            const terceraFecha = new Date(curso.terceraFecha);
            console.log("Hoy: " + hoy + ", tercera fecha: " + terceraFecha);

            if (tieneInscripciones) {
                $('#deleteCursoBtn').prop('disabled', true);
                if (hoy >= terceraFecha){
                    $('#deleteCursoBtn').prop('disabled', false);
                }
                $('#edit_precio').prop('readonly', true);
                $('#edit_date').prop('readonly', true);
                $('#edit_hour').prop('readonly', true);
            } else {
                $('#deleteCursoBtn').prop('disabled', false);
                $('#edit_precio').prop('readonly', false);
                $('#edit_date').prop('readonly', false);
                $('#edit_hour').prop('readonly', false);
            }

            // Asignar el ID del curso al botón de borrar
            $('#deleteCursoBtn').off('click').on('click', function() {
                cursoDelete(curso.id);
            });

            $('#editCursoModal').modal('show');
        },
        error: function(error) {
            console.log(error);
            alert('Hubo un error al obtener los datos del curso');
        }
    });
}

$('#editCursoForm').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);
    formData.append('_token', $('input[name="_token"]').val());

    const precio = parseFloat($('#edit_precio').val());

    if (precio < 0){
        alert("Ingresa valores correctos.");
    } else {
        $.ajax({
            url: `/cursos/actualizar/${$('#edit_id').val()}`,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response.error) {
                    alert(response.error);
                } else {
                    $('#editCursoModal').modal('hide');
                    dibujarCursos();
                    alert('Curso actualizado exitosamente');
                }
            },
            error: function(xhr) {
                if(xhr.status === 403 || xhr.status === 400) { // Verifica si el código de estado es 403 o 400
                    alert(xhr.responseJSON.error);
                } else {
                    alert('Hubo un error al actualizar el curso');
                }
            }
        });
    }
});


    function dibujarProductosUsados(id){
        $('#productosModal').modal('show');
        $.ajax({
            url:'/curso/productos/'+ id,
            method: 'GET',
            success: function (data){

                const productos = $('#contenedorProductos');
                productos.empty();
                data.forEach(producto => {


                    // const cantidadPorUsar =  producto.productoHasCurso.cantidadPorUsar;
                    let cont = producto.id;
                    let idDinamico = 'cantidad' + cont;

                    const cantidadPorUsar = producto.cantidadPorUsar;
                    const card = `
                        <div class="product-card">
                            <img src="/storage/${producto.imagen}" alt="${producto.nombre}" class="product-image">
                            <div class="product-info">
                                <h2 class="product-title">${producto.nombre}</h2>
                                <p class="product-description">${producto.descripcion}</p>
                                <p class="product-price">$${producto.precio}</p>
                                <p class="product-stock">Stock: ${producto.cantidadEnStock}</p>
                                <p class="product-usage">Cantidad por Usar: ${cantidadPorUsar}</p>
                            </div>
                        </div>
                    `;
                    productos.append(card);
                });
            },
            error: function (){

            }
        });
    }

$('#edit_imagenProducto').on('change', function() {
    const [file] = this.files;
    if (file) {
        $('#edit_imagenCurso_preview').attr('src', URL.createObjectURL(file));
    }
})

$('#buscadorNombre').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#cursos .card').filter(function() {
        $(this).toggle($(this).find('.card-title').text().toLowerCase().indexOf(value) > -1);
    });
});


    $(document).ready(function(){

        dibujarCursosInactivos();
        dibujarCursos();

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


          function checkWidth() {
        if ($(window).width() < 786) {  // Si el ancho de la ventana es menor que 480 píxeles
            $('#scrollDash').addClass('table-responsive');  // Agrega la clase esa
        } else {
            $('#scrollDash').removeClass('table-responsive');
        }
    }
    checkWidth();
    $(window).resize(checkWidth);


        // Fin document.ready
    });

    </script>
</body>
</html>
