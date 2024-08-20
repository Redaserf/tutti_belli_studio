<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Servicios</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+FR+Moderne:wght@100..400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

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
    z-index: 2000; /* por encima del modal */
    animation-duration: 0.8s;
}

.custom-alert.show {
    display: block;
    animation-name: slideIn;
}

.custom-alert.hide {
    animation-name: slideOut;
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
            z-index: 300000;
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
        .tab-content{
    padding: 36px;
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


    <section class="home">
        <div class="top text-center">
            <h2>Servicios</h2>
            <a class="right" href="/Agregar-Servicio" style="text-decoration: none; color:black; margin-right:10px">
                <button class="btn btn-outline-success" style="width: auto;">Agregar servicio<i style="margin-left:6px;" class="fa-solid fa-scissors"></i></button>
            </a>
            <a class="left" href="/Agregar-Tecnica" style="text-decoration: none; color:black; margin-left:10px">
                <button class="btn btn-outline-success" style="width: 163.69px;">Agregar técnica<i style="margin-left:6px;" class="fa-solid fa-eye-dropper"></i></button>
            </a>
        </div>
        <div class="section-divider"></div>

        <div class="table-responsive tab-content">

            <input type="text" class="form-control mb-3" id="buscadorNombre" placeholder="Buscar por nombre de servicio">
            <table class="table">
                <thead>
                  <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Servicio</th>
                      <th scope="col">Técnicas</th>
                      <th scope="col">Modificar</th>
                  </tr>
                </thead>
                <tbody id="Servicios">
                    {{-- Servicios mediante JS --}}
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="tecnicasModal" tabindex="-1" aria-labelledby="tecnicasModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tecnicasModalLabel">Técnicas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBody" style="padding: 40px;">
                        <!-- Técnicas mediante JS -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

            <!-- Modal para editar técnicas -->
            <div class="modal fade" id="editarTecnicaModal" tabindex="-1" aria-labelledby="editarTecnicaModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editarTecnicaModalLabel">Editar Técnica</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="editarModalBody">
                            <!-- Formulario de edición mediante JS -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" id="deleteTecnica" >Borrar técnica</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-success" id="saveChanges">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </div>

                        <!-- Modal para editar el servicio -->
                        <div class="modal fade" id="editarServicioModal" tabindex="-1" aria-labelledby="editarTecnicaModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editarTecnicaModalLabel">Editar servicio</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" id="modal2">
                                        <!-- Formulario de edición mediante JS -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-success" id="saveChanges2">Guardar cambios</button>
                                    </div>
                                </div>
                            </div>
                        </div>


        </section>

    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

        // Scripts para todas las vistas
        var loader = document.getElementById("contenedor_carga");
        var navbar = document.getElementById("navbar");
        window.addEventListener('load', function(){
            $('#navbar').css('visibility', 'visible');
            loader.style.display = "none";
        });

        $('#buscadorNombre').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#Servicios tr').filter(function() {
                $(this).toggle($(this).find('td:nth-child(2)').text().toLowerCase().indexOf(value) > -1);
            });
        });

        // Dibujar servicios
        function tablaServicios(){
            $.ajax({
                url: '/get/servicios',
                method: 'GET',
                success: function(data) {
                    const tableBody = $('#Servicios');
                    tableBody.empty();
                    if (data.length === 0) {
                        // Mostrar mensaje si no hay servicios
                        tableBody.append('<tr><td colspan="4" class="text-center">No hay servicios para mostrar</td></tr>');
                    }
                    data.forEach(servicio => {
                        const row = `<tr>
                            <td>${servicio.id}</td>
                            <td>${servicio.nombre}</td>
                            <td>
                                <button class="btn btn-success" data-id="${servicio.id}" onclick="verTecnicas(${servicio.id})" data-bs-toggle="modal" data-bs-target="#tecnicasModal"><i class="fa-solid fa-eye"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-warning" onclick="servicioUpdate(${servicio.id})"><i class="fa-solid fa-pencil"></i></button>
                                <button style="margin-left:2px;" class="btn btn-danger" onclick="servicioDelete(${servicio.id})"><i class="fa-solid fa-delete-left"></i></button>
                            </td>
                        </tr>`;
                        tableBody.append(row);
                    });
                }
            });
        }

        function verTecnicas(servicioId) {
    $.ajax({
        url: `/get/tecnicas/${servicioId}`,
        method: 'GET',
        success: function(data) {
            const modalBody = $('#modalBody');
            modalBody.empty();
            if (data.length > 0) {
                const list = $('<ul></ul>');
                data.forEach(tecnica => {
                    list.append(`<li><p style="font-weight:400;">Técnica: ${tecnica.nombre}<button class="btn" onclick="editarTecnica(${tecnica.id}, ${servicioId})" data-bs-toggle="modal" data-bs-target="#editarTecnicaModal"><i class="fa-solid fa-pen-to-square"></i></button><br>Costo: $${tecnica.precio}<br>Descripción: ${tecnica.descripcion}</p></li>`);
                });
                modalBody.append(list);
            } else {
                modalBody.append('<p>No hay técnicas disponibles para este servicio.</p>');
            }
        },
        error: function(error) {
            const modalBody = $('#modalBody');
            modalBody.empty();
            modalBody.append('<p>Error al cargar las técnicas.</p>');
        }
    });
}


// Modal editar técnicas
function editarTecnica(tecnicaId, servicioId) {
    $.ajax({
        url: `/get/tecnica/${tecnicaId}`,
        method: 'GET',
        success: function(data) {
            const editarModalBody = $('#editarModalBody');
            editarModalBody.empty();
            const form = `
                <form id="editarTecnicaForm">
                    <div class="mb-3">
                        <label for="tecnicaNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="tecnicaNombre" value="${data.nombre}">
                    </div>
                    <div class="mb-3">
                        <label for="tecnicaPrecio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="tecnicaPrecio" value="${data.precio}" min="0">
                    </div>
                    <div class="mb-3">
                        <label for="advertencia" class="form-label" id="advertencia" style="display:none" ></label>
                    </div>
                    <div class="mb-3">
                        <label for="tecnicaDescripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="tecnicaDescripcion">${data.descripcion}</textarea>
                    </div>
                </form>
            `;


            editarModalBody.append(form);

            if(data.descuentoId == null){
                $('#advertencia').hide();
                $('#tecnicaPrecio').val(data.precio);
                $('#tecnicaPrecio').prop('disabled',false);
            }else{
                //Muestra la etiqueta con el css con el que se oculto
                $('#advertencia').show();
                $('#advertencia').text('No es posible editar el precio del producto si este cuenta con un descuento asociado');
                $('#tecnicaPrecio').val(data.precio);
                $('#tecnicaPrecio').prop('disabled',true);
            }
        },
        error: function(error) {
            const editarModalBody = $('#editarModalBody');
            editarModalBody.empty();
            editarModalBody.append('<p>Error al cargar los detalles de la técnica.</p>');
        }
    });

    // Función para guardar cambios de la técnica
    $('#saveChanges').off('click').on('click', function() {

        const precio = parseFloat($('#tecnicaPrecio').val());

        if (precio < 0 ){
            mostrarAlerta('Ingresa valores correctos.', 'alert-warning', 'exclamation-triangle-fill');
        } else {

        // Mostrar la pantalla de carga
        $('#contenedor_carga').css('display', 'block');

        const updatedTecnica = {
            nombre: $('#tecnicaNombre').val(),
            precio: $('#tecnicaPrecio').val(),
            descripcion: $('#tecnicaDescripcion').val()
        };

        $.ajax({
            url: `/update/tecnica/${tecnicaId}`,
            method: 'POST',
            data: updatedTecnica,
            success: function(response) {
                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                mostrarAlerta('Técnica actualizada con éxito', 'alert-success', 'check-circle-fill');
                $('#editarTecnicaModal').modal('hide');
                verTecnicas(servicioId);
            },
            error: function(error) {
                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                mostrarAlerta('Error al actualizar la técnica.', 'alert-danger', 'exclamation-triangle-fill');
            }
        });
    }
    });

    // Borrar técnica
    $('#deleteTecnica').off('click').on('click', function() {
        if (confirm('¿Estás seguro de que deseas eliminar esta técnica?')) {
            // Mostrar la pantalla de carga
        $('#contenedor_carga').css('display', 'block');
            $.ajax({
                url: `/borrar/tecnica/${tecnicaId}`,
                method: 'DELETE',
                success: function(response) {
                    // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                mostrarAlerta('Técnica eliminada con éxito', 'alert-success', 'check-circle-fill');
                    $('#editarTecnicaModal').modal('hide');
                    verTecnicas(servicioId);
                },
                error: function(error) {
                    console.log(error);
                    // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                mostrarAlerta('Actualmente esta técnica se encuentra en uso, eliminala de los sitios en donde se use para poder eliminarla.', 'alert-danger', 'exclamation-triangle-fill');
                }
            });
        }
    });
}

// Actualizar servicio
function servicioUpdate(servicioId) {
    $.ajax({
        url: `/get/servicio/${servicioId}`,
        method: 'GET',
        success: function(data) {
            const modalBody = $('#modal2');
            modalBody.empty();
            const form = `
                <form id="actualizarServicioForm">
                    <div class="mb-3">
                        <label for="servicioNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="servicioNombre" value="${data.nombre}">
                    </div>
                </form>
            `;
            modalBody.append(form);

            // Mostrar el modal para actualizar el servicio
            $('#editarServicioModal').modal('show');

            // Función para guardar cambios del servicio
            $('#saveChanges2').off('click').on('click', function() {

                // Mostrar la pantalla de carga
        $('#contenedor_carga').css('display', 'block');

                const updatedServicio = {
                    nombre: $('#servicioNombre').val()
                };

                $.ajax({
                    url: `/update/servicio/${servicioId}`,
                    method: 'POST',
                    data: updatedServicio,
                    success: function(response) {
                        $('#editarServicioModal').modal('hide');
                        // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                mostrarAlerta('Servicio actualizado con éxito', 'alert-success', 'check-circle-fill');
                        tablaServicios();
                    },
                    error: function(error) {
                        // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                mostrarAlerta('Error al actualizar el servicio.', 'alert-danger', 'exclamation-triangle-fill');
                    }
                });
            });
        },
        error: function(error) {
            mostrarAlerta('Error al cargar los datos del servicio.', 'alert-danger', 'exclamation-triangle-fill');
        }
    });
}

// Borrar servicio
function servicioDelete(servicioId) {
    if (confirm('¿Estás seguro de que deseas eliminar este servicio?')) {
        // Mostrar la pantalla de carga
        $('#contenedor_carga').css('display', 'block');
        $.ajax({
            url: `/borrar/servicio/${servicioId}`,
            method: 'DELETE',
            success: function(response) {
                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                mostrarAlerta('Servicio eliminado con éxito', 'alert-success', 'check-circle-fill');
                tablaServicios();
            },
            error: function(error) {
                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                mostrarAlerta('Error al eliminar el servicio, primero elimina sus técnicas.', 'alert-danger', 'exclamation-triangle-fill');
            }
        });
    }
}
 
function mostrarAlerta(text, alertClass, iconId) {
    $("#alertaTexto").text(text);
    $(".custom-alert")
        .removeClass("alert-primary alert-success alert-warning alert-danger hide")
        .addClass("show " + alertClass)
        .fadeIn();
    $("#alert-icon").html('<use xlink:href="#' + iconId + '"/>');
    setTimeout(function() {
        $(".custom-alert")
            .removeClass("show")
            .addClass("hide")
            .fadeOut();
    }, 6000);
}


        $(document).ready(function(){

            tablaServicios();

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

            // Ajustes de botones en top
            function botones() {
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

        });
    </script>
</body>
</html>
