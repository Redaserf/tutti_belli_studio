<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <a style="text-decoration:none; color: #707070;" href="/Perfil-Admin">
                            <span class="name">{{ Auth::user()->name }}<i style="margin-left:6px;" class="fa-solid fa-pen-to-square"></i></span>
                        </a>
                        <span class="rol">Administrador</span>
                    </div>
                </div>
                <i class="fa-solid fa-angle-right toggle"></i>
            </header>

            <div id="scrollDash" class="menu-bar">
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
{{--                                <input type="text" class="form-control mb-3" id="search-productos-servicios" placeholder="Buscar por nombre..." style="width:250px;">--}}
{{--                                <a href="#" class="mayor" style="cursor: pointer; font-size:23px; color:black; margin-left: 15px; margin-bottom:15px">--}}
{{--                                    <i class="fa-solid fa-arrow-up-wide-short"></i>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="menor" style="cursor: pointer; font-size:23px; color:black; margin-left: 17px; margin-bottom:15px">--}}
{{--                                    <i class="fa-solid fa-arrow-down-short-wide"></i>--}}
{{--                                </a>--}}
                            </div>
                            <div class="table-responsive">

                                <table id="productosEnServicios" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th>Editar</th>
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
{{--                                <input type="text" class="form-control mb-3" id="search-productos-ventas" placeholder="Buscar por nombre..." style="width:250px;">--}}
{{--                                <a href="#" class="mayor" style="cursor: pointer; font-size:23px; color:black; margin-left: 15px; margin-bottom:15px">--}}
{{--                                    <i class="fa-solid fa-arrow-up-wide-short"></i>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="menor" style="cursor: pointer; font-size:23px; color:black; margin-left: 17px; margin-bottom:15px">--}}
{{--                                    <i class="fa-solid fa-arrow-down-short-wide"></i>--}}
{{--                                </a>--}}
                            </div>
                            <div class="table-responsive">
                                <table id="productosEnVentas" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th>Editar</th>
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
{{--                                <input type="text" class="form-control mb-3" id="search-productos-curso" placeholder="Buscar por nombre..." style="width:250px;">--}}
{{--                                <a href="#" class="mayor" style="cursor: pointer; font-size:23px; color:black; margin-left: 15px; margin-bottom:15px">--}}
{{--                                    <i class="fa-solid fa-arrow-up-wide-short"></i>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="menor" style="cursor: pointer; font-size:23px; color:black; margin-left: 17px; margin-bottom:15px">--}}
{{--                                    <i class="fa-solid fa-arrow-down-short-wide"></i>--}}
{{--                                </a>--}}
                            </div>
                            <div class="table-responsive">
                                <table id="productosEnCurso" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th>Editar</th>
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

            <!-- Modales -->
            <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProductModalLabel">Editar Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario de edición aquí -->
                        <form id="editProductForm" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="productName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="productName" name="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="productDescription" class="form-label">Descripción</label>
                                <textarea class="form-control" id="productDescription" name="descripcion"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="productQuantity" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="productQuantity" name="cantidad" min="0">
                            </div>
                            <div class="mb-3">
                                <label for="advertencia" class="form-label" id="advertencia" style="display:none" ></label>

                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Precio Unitario</label>
                                <input type="number" class="form-control" id="productPrice" name="precio" min="0">
                            </div>
                            <div class="mb-3">
                                <label for="productImage" class="form-label">Imagen</label>
                                <input type="file" class="form-control" id="productImage" name="imagenProducto">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="saveProductChanges">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

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

function dibujarTodos(){
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
                        '<td> $' + producto.precio + '</td>' +
                        '<td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProductModal" data-id="' + producto.id + '">Editar</button></td>' +
                        '</tr>';
                    targetTable.append(row);
                });
            }

            // Agregar productos a las tablas correspondientes
            agregarProductosATabla('#table-productos-ventas', productosPorInventario[1]);
            agregarProductosATabla('#table-productos-servicios', productosPorInventario[2]);
            agregarProductosATabla('#table-productos-curso', productosPorInventario[3]);

            $('#productosEnServicios').DataTable({
                "paging": true,
                "pageLength": 5,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-MX.json"
                }
            });
            $('#productosEnVentas').DataTable();
            $('#productosEnCurso').DataTable();

        },
        error: function(error) {
            console.error("Error al obtener los productos:", error);
        }
    });
}

$('#editProductModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var productId = button.data('id');
    var modal = $(this);

    // Cargar los datos del producto en el modal
    $.ajax({
        url: '/productos/' + productId,
        method: 'GET',
        success: function(data) {
            modal.find('#productName').val(data.nombre);
            modal.find('#productDescription').val(data.descripcion);
            modal.find('#productQuantity').val(data.cantidadEnStock); // Asegúrate de usar el campo correcto
            if(data.descuentoId == null){
                $('#advertencia').hide();
                modal.find('#productPrice').val(data.precio);
                $('#productPrice').prop('disabled',false);
            }else{
                //Muestra la etiqueta con el css con el que se oculto
                $('#advertencia').show();
                $('#advertencia').text('No es posible editar el precio del producto si este cuenta con un descuento asociado');
                modal.find('#productPrice').val(data.precio)
                $('#productPrice').prop('disabled',true);
            }

            console.log()
            // Muestra la imagen actual si existe
            modal.find('#productImagePreview').attr('src', '/storage/' + data.imagen); // Asume que hay un <img id="productImagePreview"> en el modal
        },
        error: function(error) {
            console.error('Error al obtener el producto:', error);
        }
    });

    // Guardar cambios
    $('#saveProductChanges').off('click').on('click', function() {

        $('#productPrice').prop('disabled',false);
        let precio = parseFloat($('#productPrice').val());
        let cantidad = parseFloat($('#productQuantity').val());
        // $('#productPrice').prop('disabled',true);


        if (precio < 0 || cantidad < 0 ){
            alert("Ingresa valores correctos.")
        } else {

        // Mostrar la pantalla de carga
        $('#contenedor_carga').css('display', 'block');
        var formData = new FormData($('#editProductForm')[0]);
        $.ajax({
            url: '/productos/' + productId,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                alert('Producto actualizado con éxito.');
                $('#editProductModal').modal('hide');
                location.reload(); // Opcional: Recargar la página para reflejar los cambios
            },
            error: function(error) {
                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                console.error('Error al actualizar el producto:', error);
            }
        });
    }
    });
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
                                '<td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProductModal" data-id="' + producto.id + '">Editar</button></td>' +
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

function checkWidth() {
        if ($(window).width() < 786) {  // Si el ancho de la ventana es menor que 480 píxeles
            $('#scrollDash').addClass('table-responsive');  // Agrega la clase esa
        } else {
            $('#scrollDash').removeClass('table-responsive');
        }
    }
    checkWidth();
    $(window).resize(checkWidth);




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

        // $('#productosEnServicios').DataTable().destroy();


        dibujarTodos();



        // Inicializar DataTables para la tabla "Productos en Servicios"



        // Evento al cambiar a la pestaña "Productos en Servicios"
        $('#productos-servicios-tab').on('click', function (){

            if ($.fn.DataTable.isDataTable('#productosEnServicios')) {
                $('#productosEnServicios').DataTable().destroy();
            }

            // dibujarTodos();

            $('#productosEnServicios').DataTable({
                "paging": true,
                "pageLength": 5,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-MX.json"
                }
            });
        });

        // Evento al cambiar a la pestaña "Productos en Ventas"
        $('#productos-ventas-tab').on('click', function (){

            if ($.fn.DataTable.isDataTable('#productosEnVentas')) {
                $('#productosEnVentas').DataTable().destroy();
                // $('#productosEnVentas').empty()
            }
            // dibujarTodos();

            $('#productosEnVentas').DataTable({
                "paging": true,
                "pageLength": 5,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-MX.json"
                }
            });
        });

        // Evento al cambiar a la pestaña "Productos en Curso"
        $('#productos-curso-tab').on('click', function (){

            if ($.fn.DataTable.isDataTable('#productosEnCurso')) {
                $('#productosEnCurso').DataTable().destroy();
            }
            // dibujarTodos();
            $('#productosEnCurso').DataTable({
                "paging": true,
                "pageLength": 5,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-MX.json"
                }
            });
        });



        // Fin document.ready
    });






    </script>

</body>
</html>
