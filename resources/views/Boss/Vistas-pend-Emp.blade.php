<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Citas de empleados</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <section class="home">
        <div class="top text-center">
                <h2>Citas de empleados</h2>
        </div>
        <div class="section-divider"></div>

        <div class="container mt-5">

            <!-- Input para buscar por nombre -->

            
                 <input type="text" class="form-control mb-3" id="buscadorNombreEmpleado" placeholder="Buscar por nombre de empleado">


            <!-- Input para buscar por fecha -->

                        
            <div class="input-group mb-3">
            <input type="date" class="form-control mb-3" id="buscadorFechaCita" placeholder="Buscar por fecha de cita">

                <div class="input-group-append">
                    <button class="btn btn-info" id="clearFecha">
                        <i class="fas fa-redo"></i>
                    </button>
                </div>
            </div>

            <!-- Input para buscar por hora -->

            
            <div class="input-group mb-3">
                <select class="form-control" id="buscadorHoraCita">
                    <option value="">Selecciona una hora</option>
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
                    <option value="21:00:00">21:00:00</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-info" id="clearHora">
                        <i class="fas fa-redo"></i>
                    </button>
                </div>
            </div>

            <div class="input-group mb-3">
                <select class="form-control" id="filtroEstadoCita">
                    <option value="">Filtrar por estado</option>
                    <option value="pendiente">Pendiente</option>
                    <option value="rechazada">Rechazada</option>
                    <option value="aceptada">Aceptada</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-info" id="clearEstadoCita">
                        <i class="fas fa-redo"></i>
                    </button>
                </div>
            </div>

            <div class="table-container mt-4">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Empleado</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Estado</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody id="citasEmpleadosTable">
                            <!-- Contenido de la tabla -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

    <!-- Modal para ver detalles -->
<div class="modal fade" id="verDetalles" tabindex="-1" aria-labelledby="verDetallesLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verDetallesLabel">Detalles de la Cita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong></strong> <span id="detalleEmpleado"></span></p>
        <p><strong></strong> <span id="detalleFecha"></span></p>
        <p><strong></strong> <span id="detalleHora"></span></p>
        <p><strong></strong> <span id="detalleEstado"></span></p>
        <p><strong></strong> <span id="detalleUsuario"></span></p>
        <p><strong></strong> <span id="detalleNota"></span></p>

        <table class="table table-striped">
          <thead>
            <tr>
              <th>Servicio</th>
              <th>Técnica</th>

            </tr>
          </thead>
          <tbody id="detalleServiciosTable">
            <!-- Aquí se agregarán las filas dinámicamente -->
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Pantalla de carga
        var loader = document.getElementById("contenedor_carga");
        var navbar = document.getElementById("navbar");
        window.addEventListener('load', function(){
            $('#navbar').css('visibility', 'visible');
            loader.style.display = "none";
        });
        $(document).ready(function(){

    function dibujarCitas() {
        $.get('/citas/empleados', function(citas) {
            console.log(citas);
            
            let tablaEmpleado = $('#citasEmpleadosTable');
            tablaEmpleado.empty(); 

            $.each(citas, function(key, cita) {
                let estadoNombre;
                let estadoColor;
                
                if (cita.estadoCita === null) {
                    estadoNombre = "Rechazada";
                    estadoColor = "red";
                } else if (cita.estadoCita === 1) {
                    estadoNombre = "Aceptada";
                    estadoColor = "green";
                } else {
                    estadoNombre = "Pendiente";
                    estadoColor = "yellow";
                }

                tablaEmpleado.append(`
                    <tr class="cita-row" data-nombre="${cita.usuarioEmpleado.name} ${cita.usuarioEmpleado.apellido}"
                    data-fecha="${cita.fechaCita}" data-hora="${cita.horaCita}" data-estado="${estadoNombre.toLowerCase()}">
                        <td>${cita.usuarioEmpleado.name} ${cita.usuarioEmpleado.apellido}</td>
                        <td>${cita.fechaCita}</td>
                        <td>${cita.horaCita}</td>
                        <td><div class="text-center" style="background-color: ${estadoColor}; padding: 10px; border-radius: 5px;">${estadoNombre}</div></td>
                        <td><button data-cita-id="${cita.citaId}" class="btn btn-primary ver-detalles" data-bs-target="#verDetalles" data-bs-toggle="modal">Ver Detalles</button></td>
                    </tr>
                `);
            });

            $('#citasEmpleadosTable').on('click', '.ver-detalles', function() {
                const citaId = $(this).data('cita-id');
                const cita = citas[citaId];

                $('#detalleServiciosTable').empty();

                $('#detalleEmpleado').html(`
                    <div style="background-color: yellow">

                        <p><strong>Empleado:</strong>${cita.usuarioEmpleado.name} ${cita.usuarioEmpleado.apellido}</p>
                        <p><strong>Email:</strong> ${cita.usuarioEmpleado.email}</p>
                        <p><strong>Teléfono:</strong> ${cita.usuarioEmpleado.numeroTelefono}</p>
                    </div>
                `);

                if(cita.notasCita === null){
                    $('#detalleUsuario').html(
                    `
                    <div style="background-color: lightblue">
                        <p><strong style="margin-right: 15px">Usuario:</strong>${cita.usuario.name} ${cita.usuario.apellido}</p>
                        <p><strong style="margin-right: 15px>Email:</strong> ${cita.usuario.email}</p>
                        <p><strong style="margin-right: 15px>Teléfono:</strong> ${cita.usuario.numeroTelefono}</p>
                        <p><strong style="margin-right: 15px>Nota:</strong>Sin notas</p>
                    </div>
                `);
                }else{
                    $('#detalleUsuario').html(`
                    <div style="background-color: lightblue">
                        <p><strong>Usuario:</strong><div style="background-color: lightblue"> ${cita.usuario.name} ${cita.usuario.apellido}</div></p>
                        <p><strong>Email:</strong> ${cita.usuario.email}</p>
                        <p><strong>Teléfono:</strong> ${cita.usuario.numeroTelefono}</p>
                        <p><strong>Nota: </strong>${cita.notasCita}</p>
                    </div>
                `);
                }
                

                cita.servicios.forEach(servicio => {
                    servicio.tecnicas.forEach(tecnica => {
                        $('#detalleServiciosTable').append(`
                            <tr>
                                <td>${servicio.nombreServicio}</td>
                                <td>${tecnica.nombre}</td>
                            </tr>
                        `);
                    });
                });

                $('#verDetalles').modal('show');
            });

        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.error("Error en la solicitud AJAX:", textStatus, errorThrown);
        });
    }
            dibujarCitas();

            function filtrarCitas() {
                let nombre = $('#buscadorNombreEmpleado').val().toLowerCase();
                let fecha = $('#buscadorFechaCita').val();
                let hora = $('#buscadorHoraCita').val();
                let estado = $('#filtroEstadoCita').val().toLowerCase();

                $('.cita-row').each(function() {
                    let row = $(this);
                    let rowNombre = row.data('nombre').toLowerCase();
                    let rowFecha = row.data('fecha');
                    let rowHora = row.data('hora');
                    let rowEstado = row.data('estado').toLowerCase();

                    let mostrar = true;

                    if (nombre && !rowNombre.includes(nombre)) {
                        mostrar = false;
                    }
                    if (fecha && rowFecha !== fecha) {
                        mostrar = false;
                    }
                    if (hora && rowHora !== hora) {
                        mostrar = false;
                    }
                    if (estado && rowEstado !== estado) {
                        mostrar = false;
                    }

                    if (mostrar) {
                        row.show();
                    } else {
                        row.hide();
                    }
                });
            }

            $('#clearFecha').on('click', function() {
                $('#buscadorFechaCita').val('');
                filtrarCitas();
            })

            $('#clearHora').on('click', function() {
                $('#buscadorHoraCita').val('');
            })
            $('#clearEstadoCita').on('click', function() {
                $('#filtroEstadoCita').val('');
            })//resetear filtros
            $('#buscadorNombreEmpleado').on('input', filtrarCitas);
            
            $('#buscadorFechaCita').on('change', filtrarCitas);
            $('#buscadorHoraCita').on('change', filtrarCitas);
            $('#filtroEstadoCita').on('change', filtrarCitas);

            dibujarCitas();


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
