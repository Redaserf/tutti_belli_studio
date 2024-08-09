<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar - Empleado</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

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



        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .container-div {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .form-floating input,
        .form-floating select,
        .form-floating textarea {
            border: 2px solid #000000;
            border-radius: 10px;
        }

        .form-floating label {
            color: #000000;
        }

        .btn-dark {
            background-color: #e1b8b8;
            border-color: #e1b8b8;
        }

        .btn-dark:hover {
            background-color: #ff6699;
            border-color: #ff3366;
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





<div class="home">

    <div class="col-12">
        <div class="container container-div">
            <div class="container full-height d-flex justify-content-center align-items-center">
                <div class="row w-100">
                    <div class="row">
                        <h2>Agregar Empleado</h2>
                    </div>
                    <form action="/RegistroEmpleado" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="employeeName" type="text" class="form-control" id="employeeName" placeholder="Nombre" required>
                                <label for="employeeName">Nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="employeeLastname" type="text" class="form-control" id="employeeLastname" placeholder="Apellidos" required>
                                <label for="employeeLastname">Apellidos</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="employeeGender" class="form-control" id="employeeGender" placeholder="Sexo" required>
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                </select>
                                <label for="employeeGender">Género</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="employeePhone" class="form-control" id="employeePhone" placeholder="Número telefónico" required oninput="this.value = this.value.slice(0, 10)">
                                <label for="employeePhone">Número telefónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="employeeBirthDate" id="employeeBirthDate" placeholder="Fecha de nacimiento" required>
                                <label for="employeeBirthDate">Fecha de nacimiento</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="employeeEmail" type="email" class="form-control" id="employeeEmail" placeholder="Correo electrónico" required>
                                <label for="employeeEmail">Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="employeePassword" type="password" class="form-control" id="employeePassword" placeholder="Contraseña" required minlength="8" pattern=".*[0-9].*" title="Su contraseña debe incluír al menos 1 número">
                                <label for="employeePassword">Contraseña</label>
                            </div>
                            <div>
                                <button type="button" class="btn btn-dark btn-block w-100" id="agregarEmpleado">Agregar Empleado</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
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
    function checkWidth() {
        if ($(window).width() < 786) {  // Si el ancho de la ventana es menor que 480 píxeles
            $('#scrollDash').addClass('table-responsive');  // Agrega la clase esa
        } else {
            $('#scrollDash').removeClass('table-responsive');  
        }
    }
    checkWidth();
    $(window).resize(checkWidth);

    //Script para registrar el nuevo Empleado
    $('#agregarEmpleado').on('click', function(e) {
        e.preventDefault();

                // Mostrar la pantalla de carga
                $('#contenedor_carga').css('display', 'block');

        let employeeName = $('#employeeName').val();
        let employeeLastname = $('#employeeLastname').val();
        let employeeGender = $('#employeeGender').val();
        let employeePhone = $('#employeePhone').val();
        let employeeBirthDate = $('#employeeBirthDate').val();
        let employeeEmail = $('#employeeEmail').val();
        let employeePassword = $('#employeePassword').val();

        $.ajax({
            url: '/RegistroEmpleado',
            type: 'POST',
            data: {
                _token: $('input[name="_token"]').val(),
                name: employeeName,
                apellido: employeeLastname,
                gender: employeeGender,
                numeroTelefono:employeePhone,
                fechaNacimiento:employeeBirthDate,
                email: employeeEmail,
                password: employeePassword,
                rolId: 3
            },
            success: function(response) {
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
                alert("Empleado agregado exitosamente");
                window.location.href = '/Ver-Empleados';
            },
            error: function(error) {
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
                alert('Ocurrió un error al agregar al empleado');
                $('#employeeName').val('');
                $('#employeeLastname').val('');
                $('#employeeGender').val('');
                $('#employeePhone').val('');
                $('#employeeBirthDate').val('');
                $('#employeeEmail').val('');
                $('#employeePassword').val('');
            }
        });
    });
    //Fin script para registrar empleado



    // Fin document.ready
});

</script>
</body>
</html>
