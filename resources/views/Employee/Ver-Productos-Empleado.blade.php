<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
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
.tab-content{
    padding: 36px;
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


.flex-container {
    display: flex;
    align-items:center;
    justify-content:left;
}

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
                h2 {
    color: #000000; /* Letra negra */
    background-color: #ffffff; /* Fondo blanco */
    padding: 10px 20px;
    border-radius: 10px;
    border: 2px solid #000000; /* Borde negro */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-family: 'Arial', sans-serif;
    margin-bottom: 20px;
}

                .section-divider {
                height: 3px;
                background-color: rgba(0, 0, 0, 0.8);
                min-width: 100%;
                margin-top: 20px;
                }
                .table-responsive{
                    
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
                    <a href="/Agregar-Cita-Empleado">
                        <i class="fa-solid fa-pencil icon"></i>
                        <span class="text nav-text">Agendar Cita</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="/Ver-Productos-Empleado">
                        <i class="fa-solid fa-box icon"></i>
                        <span class="text nav-text">Inventario</span>
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
    <div class="top text-center">
        <h2>Inventario</h2>
    </div>
    <div class="section-divider"></div>

    <!-- Pestañas de navegación -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="productos-servicios-tab" data-bs-toggle="tab" href="#productos-servicios" role="tab" aria-controls="productos-servicios" aria-selected="true">Productos en Servicios</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="productos-ventas-tab" data-bs-toggle="tab" href="#productos-ventas" role="tab" aria-controls="productos-ventas" aria-selected="false">Productos en Ventas</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="productos-curso-tab" data-bs-toggle="tab" href="#productos-curso" role="tab" aria-controls="productos-curso" aria-selected="false">Productos en Curso</a>
        </li>
    </ul>

    <!-- Contenido de las pestañas -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="productos-servicios" role="tabpanel" aria-labelledby="productos-servicios-tab">
            <div class="table-container mt-5">
                    <h2 class="text-center" style="margin: 0;">Productos en Servicios</h2>
                <div class="flex-container">
                    <input type="text" class="form-control mb-3" id="search-productos-servicios" placeholder="Buscar por nombre..." style="width:250px;">
                    <a href="#" class="mayor" style="cursor: pointer; font-size:23px; color:black; margin-left: 15px; margin-bottom:15px">
                        <i class="fa-solid fa-arrow-up-wide-short"></i>
                    </a>
                    <a href="#" class="menor" style="cursor: pointer; font-size:23px; color:black; margin-left: 17px; margin-bottom:15px">
                        <i class="fa-solid fa-arrow-down-short-wide"></i>
                    </a>
                </div>
                <div class="table-responsive">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                            </tr>
                        </thead>
                        <tbody id="table-productos-servicios">
                            <!-- Los productos serán insertados aquí por jQuery -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="productos-ventas" role="tabpanel" aria-labelledby="productos-ventas-tab">
            <div class="table-container mt-5">
                <h2 class="text-center">Productos en Ventas</h2>
                <div class="flex-container">
                    <input type="text" class="form-control mb-3" id="search-productos-ventas" placeholder="Buscar por nombre..." style="width:250px;">
                    <a href="#" class="mayor" style="cursor: pointer; font-size:23px; color:black; margin-left: 15px; margin-bottom:15px">
                        <i class="fa-solid fa-arrow-up-wide-short"></i>
                    </a>
                    <a href="#" class="menor" style="cursor: pointer; font-size:23px; color:black; margin-left: 17px; margin-bottom:15px">
                        <i class="fa-solid fa-arrow-down-short-wide"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                            </tr>
                        </thead>
                        <tbody id="table-productos-ventas">
                            <!-- Los productos serán insertados aquí por jQuery -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="productos-curso" role="tabpanel" aria-labelledby="productos-curso-tab">
            <div class="table-container mt-5">
                <h2 class="text-center">Productos en Curso</h2>
                <div class="flex-container">
                    <input type="text" class="form-control mb-3" id="search-productos-curso" placeholder="Buscar por nombre..." style="width:250px;">
                    <a href="#" class="mayor" style="cursor: pointer; font-size:23px; color:black; margin-left: 15px; margin-bottom:15px">
                        <i class="fa-solid fa-arrow-up-wide-short"></i>
                    </a>
                    <a href="#" class="menor" style="cursor: pointer; font-size:23px; color:black; margin-left: 17px; margin-bottom:15px">
                        <i class="fa-solid fa-arrow-down-short-wide"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                            </tr>
                        </thead>
                        <tbody id="table-productos-curso">
                            <!-- Los productos serán insertados aquí por jQuery -->
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

              // Dibujar productos

              $.ajax({
    url: '/get/productos',
    method: 'GET',
    success: function(data) {
        // Limpiar las tablas
        $('#productos-servicios tbody').empty();
        $('#productos-ventas tbody').empty();
        $('#productos-curso tbody').empty();

        // Agrupar los productos por inventario_id
        var productosPorInventario = {
            1: [], // Productos en ventas
            2: [], // Productos en servicios
            3: []  // Productos en curso
        };

        data.forEach(function(producto) {
            if (productosPorInventario.hasOwnProperty(producto.inventarioId)) {
                productosPorInventario[producto.inventarioId].push(producto);
            } else {
                console.error('ID de inventario no reconocido:', producto.inventarioId);
            }
        });

        // Función para agregar productos a una tabla
        function agregarProductosATabla(tablaSelector, productos) {
            var targetTable = $(tablaSelector);
            if(productos.length === 0){
                targetTable.append('<tr><td colspan="6" class="text-center">No hay nada para mostrar</td></tr>');
            }
            productos.forEach(function(producto) {
            var color = '';
                if (producto.cantidadEnStock <= 0) {
                    color = 'red';
            } else if (producto.cantidadEnStock <= 20) {
                    color = 'rgb(248, 208, 76)';
                }

                var row = '<tr>' +
                    '<td><img src="/storage/' + producto.imagen + '" alt="' + producto.nombre + '" width="50"></td>' +
                    '<td>' + producto.nombre + '</td>' +
                    '<td>' + producto.descripcion + '</td>' +
                    '<td style="color:' + color + '; font-weight: 500;">' + producto.cantidadEnStock + '</td>' +
                    '<td>' + producto.precio + '</td>' +
                    '</tr>';
                targetTable.append(row);
            });
        }

        // Agregar productos a las tablas correspondientes
        agregarProductosATabla('#table-productos-ventas', productosPorInventario[1]);
        agregarProductosATabla('#table-productos-servicios', productosPorInventario[2]);
        agregarProductosATabla('#table-productos-curso', productosPorInventario[3]);
    },
    error: function(error) {
        console.error("Error al obtener los productos:", error);
    }
});

        // Función para cargar y mostrar los productos ordenados
        function cargarProductosOrdenados(url, tablaVentas, tablaCitas, tablaCursos) {
        $.ajax({
            url: url,
            method: 'GET',
            success: function(data) {
                // Limpiar las tablas antes de agregar los nuevos datos
                $(tablaVentas).empty();
                $(tablaCitas).empty();
                $(tablaCursos).empty();

                // Función para agregar productos a una tabla
                function agregarProductosATabla(tablaSelector, productos) {
                    if (productos.length === 0) {
                        $(tablaSelector).append('<tr><td colspan="6" class="text-center">No hay productos disponibles</td></tr>');
                    } else {
                        productos.forEach(function(producto) {
                        var color = '';
                        if (producto.cantidadEnStock <= 0) {
                        color = 'red';
                        } else if (producto.cantidadEnStock <= 20) {
                        color = 'rgb(214, 185, 52)';
                        }
                            var row = '<tr>' +
                                '<td><img src="/storage/' + producto.imagen + '" alt="' + producto.nombre + '" width="50"></td>' +
                                '<td>' + producto.nombre + '</td>' +
                                '<td>' + producto.descripcion + '</td>' +
                                '<td style="color:' + color + '; font-weight: 500;">' + producto.cantidadEnStock + '</td>' +
                                '<td>' + producto.precio + '</td>' +
                                '</tr>';
                            $(tablaSelector).append(row);
                        });
                    }
                }

                // Agregar productos a las tablas correspondientes
                agregarProductosATabla(tablaVentas, data.venta);
                agregarProductosATabla(tablaCitas, data.cita);
                agregarProductosATabla(tablaCursos, data.cursos);
            },
            error: function(error) {
                console.error("Error al cargar los productos ordenados:", error);
            }
        });
    }

    // Eventos de clic para ordenar productos
    $('.mayor').click(function() {
        cargarProductosOrdenados('/mayor', '#table-productos-ventas', '#table-productos-servicios', '#table-productos-curso');
    });

    $('.menor').click(function() {
        cargarProductosOrdenados('/menor', '#table-productos-ventas', '#table-productos-servicios', '#table-productos-curso');
    });


    function searchTable(inputId, tableId) {
        $('#' + inputId).on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $('#' + tableId + ' tr').filter(function () {
                $(this).toggle($(this).children('td').eq(1).text().toLowerCase().indexOf(value) > -1);
            });
        });
    }

    // Inicializar búsqueda para cada tabla
    searchTable('search-productos-servicios', 'table-productos-servicios');
    searchTable('search-productos-ventas', 'table-productos-ventas');
    searchTable('search-productos-curso', 'table-productos-curso');

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
            function checkWidth() {
        if ($(window).width() < 786) {  // Si el ancho de la ventana es menor que 480 píxeles
            $('#scrollDash').addClass('table-responsive');  // Agrega la clase esa
        } else {
            $('#scrollDash').removeClass('table-responsive');  
        }
    }
    checkWidth();
    $(window).resize(checkWidth);

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