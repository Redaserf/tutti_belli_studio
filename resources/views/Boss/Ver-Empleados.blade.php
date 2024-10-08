<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

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
        #mensajeNoEmpleados{
            font-size: 24px;
            color: #000; /* Texto negro */
            background-color: #fff; /* Fondo blanco */
            border: none; /* Sin bordes */
            border-radius: 0; /* Sin bordes redondeados */
            padding: 20px;
            margin-top: 20px;
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

            {{-- Fin Sidebar --}}


            <section class="home">
                <div class="top text-center">
                    <h2>Empleados</h2>
                    <a class="left" href="/Agregar-Empleado" style="text-decoration: none; color:black; margin-left:10px"><button class="btn btn-outline-success" style="width: auto;">Registrar empleado<i style="margin-left: 6px" class="fa-solid fa-user-plus"></i></button></a>
                    <a class="left" href="/Ver-citas-emp" style="text-decoration: none; color:black; margin-left:10px"><button class="btn btn-outline-success" style="width: auto;">Ver citas de empleados<i style="margin-left: 6px" class="fa-solid fa-eye"></i></button></a>
                </div>
                <div class="section-divider"></div> 

                <div class="table-responsive tab-content">
                    <input type="text" class="form-control mb-3" id="buscadorNombre" placeholder="Buscar por nombre de empleado">
                    <div id="mensajeNoEmpleados" class="alert alert-warning text-center" style="display: none;">
                        No hay empleados para mostrar.
                    </div>

                    <table class="table">
                        <thead>
                          <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Apellidos</th>
                              <th scope="col">Fecha de nacimiento</th>
                              <th scope="col">Género</th>
                              <th scope="col">Correo</th>
                              <th scope="col">Teléfono</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody id="Empleados">

                        {{-- Empleados mediante JS --}}

                    </tbody>
                      </table>

                    </div>

                </section>

{{-- Modal para editar perfil --}}

<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editProfileForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Editar perfil del empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_user_id" name="id" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <label for="edit_name">Nombre</label>
                        <input type="text" class="form-control" id="edit_name" name="name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                        <label for="edit_apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="edit_apellidos" name="apellidos" value="{{ Auth::user()->apellido }}">
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                      <label for="edit_gender">Género</label>
                      <select class="form-control" id="edit_gender" name="gender" >
                          <option value="Hombre" {{ Auth::user()->gender == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                          <option value="Mujer" {{ Auth::user()->gender == 'Mujer' ? 'selected' : '' }}>Mujer</option>
                      </select>
                  </div>
                  <div class="form-group" style="margin-top: 10px;">
                        <label for="edit_email">Correo electrónico</label>
                        <input type="email" class="form-control" id="edit_email" name="email" value="{{ Auth::user()->email }}">
                        <span id="emailError"></span> 
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                        <label for="edit_phone">Número de teléfono</label>
                        <input type="number" class="form-control" id="edit_phone" name="phone" value="{{ Auth::user()->numeroTelefono }}" oninput="this.value = this.value.slice(0, 10)">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
  </div>



                <!-- Modal para editar horario del empleado -->
       <div class="modal fade" id="editarHorarioModal" tabindex="-1" aria-labelledby="editarHorarioModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarHorarioModalLabel">Crear Nuevo Horario del Empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editarHorarioForm">
                    @csrf
                    <div class="modal-body">
                    <input type="hidden" id="nuevoEmpleadoId" name="empleadoId">

                    <div class="mb-3">
                        <label for="nuevoHoraInicio" class="form-label">Hora de Inicio</label>
                        <select class="form-select" id="nuevoHoraInicio" name="horaInicio">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nuevoHoraFin" class="form-label">Hora de Fin</label>
                        <select class="form-select" id="nuevoHoraFin" name="horaFin">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Días de la Semana</label>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="nuevoLunes">
                        <label class="form-check-label" for="nuevoLunes">Lunes</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" id="nuevoMartes">
                        <label class="form-check-label" for="nuevoMartes">Martes</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3" id="nuevoMiercoles">
                        <label class="form-check-label" for="nuevoMiercoles">Miércoles</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" id="nuevoJueves">
                        <label class="form-check-label" for="nuevoJueves">Jueves</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="5" id="nuevoViernes">
                        <label class="form-check-label" for="nuevoViernes">Viernes</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="6" id="nuevoSabado">
                        <label class="form-check-label" for="nuevoSabado">Sábado</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="0" id="nuevoDomingo">
                        <label class="form-check-label" for="nuevoDomingo">Domingo</label>
                        </div>
                        <!-- <div>
                            <input type="hidden" id="dias" name="dias">
                            <input type="hidden" id="horaInicio" name="horaInicioHorario">
                            <input type="hidden" id="horaFin" name="horaFinHorario">
                        </div> -->
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" id="editarEmpleadoHorario" class="btn btn-success">Guardar Horario</button>
                    </div>
                </form>
                </div>
            </div>
            </div>


                <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

                <script>

                    // Scripts para todas las vistas

                    // Pantalla de carga
        var loader = document.getElementById("contenedor_carga");
        var navbar = document.getElementById("navbar");
        window.addEventListener('load', function(){
            $('#navbar').css('visibility', 'visible');
            loader.style.display = "none";
        });


    $('#buscadorNombre').on('keyup', function() {
        var value = $(this).val().toLowerCase();


        $('#Empleados tr').filter(function() {
            $(this).toggle($(this).find('td:nth-child(2)').text().toLowerCase().indexOf(value) > -1);
        });
    });

        // Dibujar empleados
        function tablaEmpleados() {
    $.ajax({
        url: '/get/empleados',
        method: 'GET',
        success: function(data) {
            const tableBody = $('#Empleados');
            const mensajeNoEmpleados = $('#mensajeNoEmpleados');

            tableBody.empty();

            if (data.length === 0) {
                // Ocultar la tabla y mostrar el mensaje
                tableBody.closest('table').hide();
                mensajeNoEmpleados.show();
            } else {
                // Mostrar la tabla y ocultar el mensaje
                tableBody.closest('table').show();
                mensajeNoEmpleados.hide();

                data.forEach(empleado => {
                    const row = `<tr>
                        <td>${empleado.id}</td>
                        <td>${empleado.name}</td>
                        <td>${empleado.apellido}</td>
                        <td>${empleado.fechaNacimiento}</td>
                        <td>${empleado.gender}</td>
                        <td>${empleado.email}</td>
                        <td>${empleado.numeroTelefono}</td>
                        <td>
                            <button class="btn btn-warning" onclick="cargarEmpleado(${empleado.id})" data-bs-toggle="modal" data-bs-target="#editProfileModal"><i class="fa-solid fa-user-pen"></i></button>
                            <button class="btn btn-danger" onclick="employeeDelete(${empleado.id})"><i class="fa-solid fa-user-xmark"></i></button>
                            <button class="btn btn-primary" onclick="editarHorario(${empleado.id})" data-bs-toggle="modal" data-bs-target="#editarHorarioModal"><i class="fa-regular fa-calendar"></i></button>
                        </td>
                    </tr>`;
                    tableBody.append(row);
                });

                // Destruye la instancia anterior de DataTables si existe
                if ($.fn.DataTable.isDataTable('.table')) {
                    $('.table').DataTable().destroy();
                }

                // Inicializar DataTables
                $('.table').DataTable({
                    "pageLength": 10,
                    "searching": false, // Desactivar la búsqueda
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ registros por página",
                        "zeroRecords": "No se encontraron resultados",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                        "infoEmpty": "No hay registros disponibles",
                        "infoFiltered": "(filtrado de _MAX_ registros totales)",
                        "paginate": {
                            "first": "Primero",
                            "last": "Último",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        }
                    }
                });
            }
        }
    });
}

        // editar horario

        const horaInicioSelect = $('#nuevoHoraInicio');
const horaFinSelect = $('#nuevoHoraFin');

function generarOpciones(startHour, endHour) {
    let options = '';
    for (let hora = startHour; hora <= endHour; hora++) {
        options += `<option value="${hora}:00:00">${hora}:00:00</option>`;
    }
    return options;
}

horaInicioSelect.html(generarOpciones(9, 13));
horaFinSelect.html(generarOpciones(13, 21));

horaInicioSelect.on('change', function() {
    const horaInicio = parseInt($(this).val().split(':')[0], 10);
    const horaFinStart = horaInicio + 4;
    const horaFinEnd = Math.min(horaInicio + 12, 21);
    horaFinSelect.html(generarOpciones(horaFinStart, horaFinEnd));
});

function editarHorario(id) {
    $.get(`/un/empleado/horarios/citas/${id}`, function(empleadoJA) {
        let empleado = empleadoJA[0];
        console.log('empleado: ', empleado);
        let selectInicio = $('#nuevoHoraInicio');
        let selectFin = $('#nuevoHoraFin');

        selectInicio.html(generarOpciones(9, 13));
        selectFin.html(generarOpciones(13, 21));

        $('#editarHorarioForm').attr('data-empleado-id', id);
        $('#nuevoLunes, #nuevoMartes, #nuevoMiercoles, #nuevoJueves, #nuevoViernes, #nuevoSabado, #nuevoDomingo').prop('checked', false);

        empleado.horarios.forEach(horario => {
            if (selectInicio.find(`option[value="${horario.horaInicio}"]`).length) {
                selectInicio.val(horario.horaInicio);
            }

            const horaInicio = parseInt(horario.horaInicio.split(':')[0], 10);
            const horaFinStart = horaInicio + 4;
            const horaFinEnd = Math.min(horaInicio + 12, 21);
            selectFin.html(generarOpciones(horaFinStart, horaFinEnd));

            if (selectFin.find(`option[value="${horario.horaFin}"]`).length) {
                selectFin.val(horario.horaFin);
            }

            $(`input[type='checkbox']`).each(function() {
                if ($(this).val() === horario.diaSemana) {
                    $(this).prop('checked', true);
                }
            });
        });
    });
}

$('#editarHorarioForm').on('submit', function(e) {
    e.preventDefault();
    let empleadoId = $(this).data('empleado-id');

    let arregloDias = [];
    $(`input[type='checkbox']:checked`).each(function() {
        arregloDias.push($(this).val());

        $('#editarHorarioForm').append(
            $('<input>').attr({
                type: 'hidden',
                name: 'opcionesCheckbox[]',
                value: $(this).val(),
                class: 'opcionCheckbox'
            })
        );
    });

    let formData = $(this).serialize();

    $.ajax({
        url: `/editar/horario/empleado/${empleadoId}`,
        method: 'PUT',
        data: formData,
        success: function(response) {
            console.log(response);
            mostrarAlerta('Horario editado con éxito', 'alert-success', 'check-circle-fill');
            $('#editarHorarioModal').modal('hide');
        },
        error: function(error){
            mostrarAlerta('Error al editar el horario', 'alert-danger', 'exclamation-triangle-fill');
            console.log(error);
        }
    });
});


       

        // function mostrarHorario(){
        //     $(document).off('click', '#editarHorarioModal').on('click', '#editarHorarioModal', function() {
                
        //         let selectInicio = $('#horaInicio');
        //         let selectFin = $('#horaFin');

        //         empleadoHorario.forEach(horario => {
        //             console.log('dia del horario: ',horario.diaSemana);
                  
        //         })
        //     })

        // }



        // Eliminar empleados
        function employeeDelete(id){
    if (confirm('¿Estás seguro de que deseas eliminar este empleado?')) {
        // Mostrar la pantalla de carga
        $('#contenedor_carga').css('display', 'block');
        $.ajax({
            url: `/empleado/eliminar/${id}`,
            method: 'GET',
            success: function(){
                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                mostrarAlerta('Empleado eliminado con éxito', 'alert-success', 'check-circle-fill');

                // Destruir la instancia anterior de DataTables si existe
                if ($.fn.DataTable.isDataTable('.table')) {
                    $('.table').DataTable().destroy();
                }

                // Recargar la tabla de empleados
                tablaEmpleados();
            },
            error: function(error){
                if (error.status === 500) {
                    // Ocultar la pantalla de carga
                    $('#contenedor_carga').css('display', 'none');
                    alert('Este empleado se encuentra actualmente asignado a algo, intentalo más tarde.');
                } else {
                    // Ocultar la pantalla de carga
                    $('#contenedor_carga').css('display', 'none');
                    alert('Ocurrió un error al eliminar el empleado.');
                }
                console.log(error);
            }
        });
    }
}

        function cargarEmpleado(id) {
    $.ajax({
        url: `/empleado/${id}`,
        method: 'GET',
        success: function(data) {
            $('#edit_user_id').val(data.id);
            $('#edit_name').val(data.name);
            $('#edit_apellidos').val(data.apellido);
            $('#edit_gender').val(data.gender);
            $('#edit_email').val(data.email);
            $('#edit_phone').val(data.numeroTelefono);
        },
        error: function(error) {
            console.error('Error al cargar los datos del empleado:', error);
            alert('Hubo un error al cargar los datos del empleado.');
        }
    });
}

$('#editProfileForm').on('submit', function(e) {
    e.preventDefault();

    // Mostrar la pantalla de carga
    $('#contenedor_carga').css('display', 'block');

    let formData = new FormData(this);
    formData.append('_token', $('input[name="_token"]').val());

    const empleadoId = $('#edit_user_id').val();

    $.ajax({
        url: `/ActualizarPerfilEmpleado/${empleadoId}`,
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            $('#editProfileModal').modal('hide');
            mostrarAlerta('Perfil actualizado con éxito', 'alert-success', 'check-circle-fill');
            $('#emailError').text('Correo ya en uso.');
                $('#emailError').css('display', 'none');

                // Destruye la instancia anterior de DataTables si existe
                if ($.fn.DataTable.isDataTable('.table')) {
                $('.table').DataTable().destroy();
                }

            tablaEmpleados();
        },
        error: function(error) {
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            console.error('Error al actualizar el perfil:', error);
            alert('Hubo un error al actualizar el perfil');
            $('#emailError').text('Correo ya en uso.');
                $('#emailError').css('display', 'block');
        }
    });
});
document.getElementById('edit_phone').addEventListener('input', function() {
    const phoneInput = this.value;
    const submitButton = document.querySelector('#editProfileForm button[type="submit"]');
    
    if (phoneInput.length === 10) {
        submitButton.disabled = false;
    } else {
        submitButton.disabled = true;
    }
});

// Inicialmente deshabilita el botón si el valor actual del campo de teléfono no tiene 10 dígitos
document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('edit_phone').value;
    const submitButton = document.querySelector('#editProfileForm button[type="submit"]');
    
    if (phoneInput.length !== 10) {
        submitButton.disabled = true;
    }
});
document.getElementById('edit_email').addEventListener('blur', function() {
    const email = this.value;
    const emailError = document.getElementById('emailError');

    if (email) {
        fetch(`/check-email?email=${email}`)
            .then(response => response.json())
            .then(data => {
                if (data.exists) {
                    emailError.textContent = 'Este correo ya está en uso. Por favor, utiliza otro correo.';
                    emailError.style.color = 'red';
                    document.querySelector('#editProfileForm button[type="submit"]').disabled = true;
                } else {
                    emailError.textContent = '';
                    document.querySelector('#editProfileForm button[type="submit"]').disabled = false;
                }
            })
            .catch(error => console.error('Error:', error));
    }
});

        $(document).ready(function(){


            tablaEmpleados();

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

    
    // Función para mostrar alertas bonitas
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
        }, 6000);
    }

    // Ejemplo de llamadas a la función
    // mostrarAlerta('Este es un mensaje de advertencia.', 'alert-warning', 'exclamation-triangle-fill');
    // mostrarAlerta('¡Operación exitosa!', 'alert-success', 'check-circle-fill');

    // Mostrar alerta guardada en localStorage para que no se quite cuando reinicies la página
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


    </script>
</body>
</html>