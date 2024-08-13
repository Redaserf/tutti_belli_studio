<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Descuentos</title>
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
.tab-content{
    padding: 36px;
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


/* Aquí abajo poner tus estilos */



    .top{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    }
    #mensajeNoTecnicas{
        font-size: 24px;
        color: #000; /* Texto negro */
        background-color: #fff; /* Fondo blanco */
        border: none; /* Sin bordes */
        border-radius: 0; /* Sin bordes redondeados */
        padding: 20px;
        margin-top: 20px;

    }
    #mensajeNoProductos{
        font-size: 24px;
        color: #000; /* Texto negro */
        background-color: #fff; /* Fondo blanco */
        border: none; /* Sin bordes */
        border-radius: 0; /* Sin bordes redondeados */
        padding: 20px;
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
      width: 100%;
      margin-top: 20px;
    }

    /*    css para que las imagenes adapten su tamaño a la hora de dibujar en la tabla*/
    .producto-imagen {
        border-radius: 6px;
        width: 75px;
        height: 75px;
        /* mantener relacion de aspecto*/
        object-fit: cover;
    }



</style>
</head>

<body class="hiddenX">
<div>

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


    {{-- Aquí las cosas con descuento --}}
    @csrf
    <section class="home">
        <div class="top text-center">
            <h2>Descuentos</h2>
            <a class="right" href="/Agregar-Descuento-Producto" style="text-decoration: none; color:black; margin-right:10px"><button class="btn btn-outline-success" style="width: 217px">Descuento en producto<i style="margin-left:6px;" class="fa-solid fa-basket-shopping"></i></button></a>
            <a class="left" href="/Agregar-Descuento-Tecnica" style="text-decoration: none; color:black; margin-left:10px"><button class="btn btn-outline-success" style="width: 215.84px">Descuento en técnica<i style="margin-left:6px;" class="fa-solid fa-eye-dropper"></i></button></a>
        </div>
        <div class="section-divider"></div>


                    <!-- Pestañas de navegación -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="productos-descuento-tab" data-bs-toggle="tab" href="#productos-descuento" role="tab" aria-controls="productos-descuento" aria-selected="true">Productos</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tecnicas-descuento-tab" data-bs-toggle="tab" href="#tecnicas-descuento" role="tab" aria-controls="tecnicas-descuento" aria-selected="false">Técnicas</a>
                        </li>
                    </ul>


                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="productos-descuento" role="tabpanel" aria-labelledby="productos-descuento-tab">
                        <div class="table-container mt-5">
                            <input type="text" class="form-control mb-3" id="buscadorNombreProductoDescuento" placeholder="Buscar por nombre del producto">
                        <div id="mensajeNoProductos" class="alert alert-warning text-center" style="display: none;">
                            No hay productos con descuento para mostrar.
                        </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Inventario</th>
                                            <th scope="col">Descuento</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="Productos">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tecnicas-descuento" role="tabpanel" aria-labelledby="tecnicas-descuento-tab">
                        <div class="table-container mt-5">
                            <input type="text" class="form-control mb-3" id="buscadorNombreTecnicaDescuento" placeholder="Buscar por nombre de la tecnica">
                        <div id="mensajeNoTecnicas" class="alert alert-warning text-center" style="display: none;">
                            No hay técnicas con descuento para mostrar.
                        </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Servicio</th>
                                            <th scope="col">Descuento</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="Tecnicas">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

        </section>


<script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>

// Scripts para todas las vistas, no tocar

    // Pantalla de carga
    var loader = document.getElementById("contenedor_carga");
    var navbar = document.getElementById("navbar");
    window.addEventListener('load', function(){
        $('#navbar').css('visibility', 'visible');
        loader.style.display = "none";
    });

$(document).ready(function(){

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
                $('.right').css('margin-right', '0');
                $('.left').css('margin-left', '0');
              } else {
                $('.top').css('gap', '0');
                $('.top').css('flex-direction', '');
                $('.right').css('margin-right', '10px');
                $('.left').css('margin-left', '10px');
              }
          }
          window.addEventListener('resize', botones);
          botones();

    tablaDescuentosProducto();
    tablaDescuentosTecnicas();

    // Fin document.ready
});

$('#buscadorNombreProductoDescuento').on('keyup', function() {
    var value = $(this).val().toLowerCase();

    $('#Productos tr').filter(function() {
        $(this).toggle($(this).find('td:nth-child(2)').text().toLowerCase().indexOf(value) > -1);
    });
});

function tablaDescuentosProducto() {
    $.ajax({
        url: 'get/productos/cd',
        method: 'GET',
        success: function(data) {
            const tableBody = $('#Productos');
            const mensajeNoProductos = $('#mensajeNoProductos');

            tableBody.empty();

            if (data.length === 0) {
                // Ocultar la tabla y mostrar el mensaje
                tableBody.closest('table').hide();
                mensajeNoProductos.show();
            } else {
                // Mostrar la tabla y ocultar el mensaje
                tableBody.closest('table').show();
                mensajeNoProductos.hide();

                data.forEach(producto => {
                    const row = `<tr>
                                  <td>${producto.id}</td>
                                  <td>${producto.nombre}</td>
                                  <td><img src="/storage/${producto.imagen}" alt="${producto.nombre}" class="producto-imagen"></td>
                                  <td>${producto.precio}</td>
                                  <td>${producto.cantidadEnStock}</td>
                                  <td>${producto.descripcion}</td>
                                  <td>${producto.inventario.nombre}</td>
                                  <td>${producto.descuento.cantidadDescuento} %</td>
                                  <td>
                                      <button class="btn btn-danger" onclick="eliminarDescuentoProducto(${producto.id})"><i class="fa-solid fa-percent icon"></i></button>
                                  </td>
                              </tr>`;
                    tableBody.append(row);
                });
            }
        }
    });
}

$('#buscadorNombreTecnicaDescuento').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#Tecnicas tr').filter(function() {
        $(this).toggle($(this).find('td:nth-child(2)').text().toLowerCase().indexOf(value) > -1);
    });
});

function tablaDescuentosTecnicas() {
    $.ajax({
        url: 'conDescuentoTecnica',
        method: 'GET',
        success: function(data) {
            const tableBody = $('#Tecnicas');
            const mensajeNoTecnicas = $('#mensajeNoTecnicas');

            tableBody.empty();

            if (data.length === 0) {
                // Ocultar la tabla y mostrar el mensaje
                tableBody.closest('table').hide();
                mensajeNoTecnicas.show();
            } else {
                // Mostrar la tabla y ocultar el mensaje
                tableBody.closest('table').show();
                mensajeNoTecnicas.hide();

                data.forEach(tecnica => {
                    const row = `<tr>
                                  <td>${tecnica.id}</td>
                                  <td>${tecnica.nombre}</td>
                                  <td>${tecnica.precio}</td>
                                  <td>${tecnica.descripcion}</td>
                                  <td>${tecnica.servicios.nombre}</td>
                                  <td>${tecnica.descuento.cantidadDescuento} %</td>
                                  <td>
                                      <button class="btn btn-danger" onclick="eliminarDescuentoTecnica(${tecnica.id})"><i class="fa-solid fa-percent icon"></i></button>
                                  </td>
                              </tr>`;
                    tableBody.append(row);
                });
            }
        }
    });
}

//FUncion para elimar descuento de producto
//Modificar para prodcuto
//Investigar como hacer que los descuentos sin productos relacionados se eliminen
function eliminarDescuentoProducto(id){
    if (confirm('¿Estás seguro de que deseas eliminar este descuento?')) {
        // Mostrar la pantalla de carga
        $('#contenedor_carga').css('display', 'block');
    $.ajax({
        url: `/eliminarDescuentoProducto/${id}`,
        method: 'POST',
        data:{

            _token: $('input[name="_token"]').val(),
        },
        success: function(){
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            alert("Descuento eliminado con éxito.");
            tablaDescuentosProducto();
        },
        error: function(error){
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            alert("Error al borrar el descuento.");
            console.log(id)
        }
    });
}
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
//FUncion para elimar descuento de tecnica
//Modificar para prodcuto
//Investigar como hacer que los descuentos sin productos relacionados se eliminen
function eliminarDescuentoTecnica(id){
    if (confirm('¿Estás seguro de que deseas eliminar este descuento?')) {
    // Mostrar la pantalla de carga
    $('#contenedor_carga').css('display', 'block');
    $.ajax({
        url: `/eliminarDescuentoTecnica/${id}`,
        method: 'POST',
        data:{
            _token: $('input[name="_token"]').val(),
        },
        success: function(){
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            alert("Descuento eliminado con éxito.");
            tablaDescuentosTecnicas();

        },
        error: function(error){
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            alert("Error al borrar el descuento.");
            console.log(error)
        }
    });
}
}

</script>

</body>
</html>
