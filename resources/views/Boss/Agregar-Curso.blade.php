<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Agregar Curso</title>
        <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>

            /* Google Font Import - Poppins */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .container-div {
            height: auto;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .header-section {

            padding: 30px 0;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
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
        .header-section h1 {

        }
        h1 {
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

        .form-floating input,
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



    /* Dashboard */

    .sidebar.close .header-text {
    display: none;
    }


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
            z-index: 100;
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

        /* Fin Dashboard */
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



<div class="home">

    <form action="/RegistroCursoAdmin" method="POST">
{{--        @csrf--}}
        <div class="container container-div">
            <div class="header-section">
                <h1>Cursos</h1>
            </div>

            <div class="row">
                <div class="col-md-12" style="display: flex; justify-content:center;align-items:center;">
                    <div class="image-label">
                        <input style="" type="file" class="form-control" id="imagenCurso" name="imagenCurso" required>
                        <img style="margin-top: 10px;margin-bottom:20px; border-radius: 12px;" src="https://via.placeholder.com/300" class="img-fluid" alt="Imagen del curso" id="image">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="-- Nombre --" required>
                        <label for="nombre">Nombre del curso</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="cupoLimite" name="cupoLimite" placeholder="-- Cupo Limite --" required min="0">
                        <label for="cupoLimite">Cupo límite</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" required>
                        <label for="fechaInicio">Fecha de inicio</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="time" class="form-control" id="horaInicio" name="horaInicio" placeholder="-- Hora de inicio del curso --"required>
                        <label for="horaInicio">Hora de inicio</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <button id="agregarProductos" type="button" class="btn btn-dark btn-block w-100" data-bs-toggle="modal" data-bs-target="#productosModal" onclick="dibujarProductos()">
                        Agregar productos
                    </button>
                </div>


                <div class="form-floating mb-3" id="contenedoTecnicas">


                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <button type="button" id="anadirTecnica" class="btn btn-dark w-100" name="anadirTecnica">
                        <label for="anadirTecnica">Añadir técnica</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="precio" name="precio" placeholder="-- Precio --" required min="0">
                        <label for="precio">Costo de inscripción</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <select name="" class="form-control" id="empleadoId" required>
                        <option value="" disabled selected>Empleado</option>

                        <!-- Empleados que aparecerán con back-end -->

                    </select>
                    <label for="empleadoId">Instructor a cargo del curso</label>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="-- Descripcion --" required>
                        <label for="descripcion">Descripción</label>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-dark w-100" id="agregarCurso">Agregar curso</button>
                </div>

            </div>
        </div>
    </form>

    <!-- Modal -->
    <div class="modal fade modal-xl" data-bs-backdrop="static" id="productosModal" tabindex="-1" aria-labelledby="productosModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="productosModalLabel">Selecciona los productos que se utilizaran en el curso</h5>
                </div>
                <div class="modal-body">
                    <br>
                    <input type="text" class="form-control mb-3" id="buscadorNombre" placeholder="Buscar por nombre de producto">
                    <div id="productos" class="product-container">

                    </div>

                </div>
                <div class="modal-footer">
                    <button id="cerrar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button id="guardar" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                </div>

            </div>
        </div>
    </div>


</div>

<script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    let selectedProducts = [];
    let cantidadesProducts = [];

    // Scripts para todas las vistas

    // Pantalla de carga
    var loader = document.getElementById("contenedor_carga");
    var navbar = document.getElementById("navbar");
    window.addEventListener('load', function(){
        $('#navbar').css('visibility', 'visible');
        loader.style.display = "none";
    });

    function mostrarAlerta(text, alertClass, iconId) {
    $("#alertaTexto").text(text);
    $(".custom-alert")
        .removeClass("alert-primary alert-success alert-warning alert-danger hide")
        .addClass(`show ${alertClass}`)
        .fadeIn();
    $("#alert-icon").html(`<use xlink:href="#${iconId}"></use>`);
    setTimeout(function() {
        $(".custom-alert")
            .removeClass("show")
            .addClass("hide")
            .fadeOut();
    }, 6000);
}
// Mostrar alerta guardada en localStorage para que no se quite cuando reinicies la pagina
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
    
    $(document).ready(function(){
        let selectCounter = 0; // Variable contador
        let selectedTecnicas = []; // Lista para mantener las técnicas ya seleccionadas


        $(document).on('click', '.btn-danger', function() {
            console.log('holaa');
            let selectId = $(this).data('select-tecnica');
            console.log(selectId);
            let selectTecnica = $(`#${selectId}`);
            selectTecnica.remove();
            $(this).parent().remove(); // Eliminar el contenedor del select y el botón
            updateTecnicasSelects();
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

        loadEmpleados();


        function updateTecnicasSelects() {
        // se obtienen las técnicas que ya están seleccionadas
        selectedTecnicas = [];
        $('select[name="tecnicas[]"]').each(function() {
            if ($(this).val()) {
                selectedTecnicas.push($(this).val());
            }
        });

        // se actualizan las opciones en cada select
        $('select[name="tecnicas[]"]').each(function() {
        const currentSelect = $(this);
        const currentValue = currentSelect.val();

        // guardamos la opción seleccionada actualmente y limpiamos las opciones
        currentSelect.empty();

        // obtenemos las tecnicas disponibles para este select
        $.get('/get/tecnicas', function(tecnicas) {
            tecnicas.forEach(tecnica => {
                if (!selectedTecnicas.includes(tecnica.id.toString()) || tecnica.id.toString() === currentValue) {
                    currentSelect.append(new Option(tecnica.nombre, tecnica.id));
                }
            });

            // restauramos la opcion seleccionada si aun es valida
            currentSelect.val(currentValue);
        });
    });
}


        $('#anadirTecnica').on('click', function(e){
            e.preventDefault();

            $.get('/get/tecnicas', function(tecnicas){
                //filtered tecnicas es el arreglos de tecinas que aun no son seleccionadas
                let filteredTecnicas = tecnicas.filter(tecnica => !selectedTecnicas.includes(tecnica.id.toString()));
                //Si no hay mas tecnicas disponibles muestra alerta
                if (filteredTecnicas.length === 0) {
                    mostrarAlerta('No hay más técnicas disponibles.', 'alert-warning', 'exclamation-triangle-fill');
                    return;
                }

                //Contador dinamico para los id de los select
                selectCounter++;

                //crae el nuevo select al pulsar el boton de añadir y le pone su id
                let newDiv = $('<div style="display:flex; flex-direction:row" ></div>');
                var newSelect = $(`<select id="tecnicaSelect${selectCounter}" class="form-control mb-3" name="tecnicas[]"></select>`);
                var newButton = $(`<button id="botonEliminar" data-select-tecnica="tecnicaSelect${selectCounter}" style="width: 15%" class="btn btn-danger mb-3"><i style="font-size:25px" class="fa-solid fa-delete-left"></i></button>`);
                // newSelect.attr('id', 'tecnicaSelect' + selectCounter);



                //lo adhiere al div donde apareceran los select dinamicos

                newDiv.append(newSelect);
                newDiv.append(newButton);
                $('#contenedoTecnicas').append(newDiv);


                //Dibuja en el select las opciones que todavia no han sido seleccionadas
                filteredTecnicas.forEach(tecnica => {
                    newSelect.append(new Option(tecnica.nombre, tecnica.id));
                });

                // Selecciona el primer valor por defecto
                newSelect.val(filteredTecnicas[0].id);

                newSelect.on('change', function() {
                    selectedTecnicas = [];
                    $('select[name="tecnicas[]"]').each(function() {
                        if ($(this).val()) {
                            selectedTecnicas.push($(this).val());
                        }
                    });
                });

                // Fuerza la actualización de la lista de técnicas seleccionadas.
                updateTecnicasSelects();
            });
        });

        $(document).on('change', 'select[name="tecnicas[]"]', function() {
            updateTecnicasSelects();
        });


        // $('.btn-danger').on('click', function() {
        //     console.log('holaa');
        //     let selectId = $(this).data('select-tecnica');
        //     console.log(selectId);
        //     let selectTecnica = $(`#${selectId}`);
        //     selectTecnica.remove();
        //     $(this).remove();
        // });



        $('#agregarCurso').on('click', function(e) {
            e.preventDefault();


            let formData = new FormData();
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            formData.append('nombre', $('#nombre').val());
            formData.append('cupoLimite', $('#cupoLimite').val());
            formData.append('fechaInicio', $('#fechaInicio').val());
            formData.append('horaInicio', $('#horaInicio').val());
            formData.append('precio', $('#precio').val());
            formData.append('imagenCurso', $('#imagenCurso')[0].files[0]);
            formData.append('descripcion', $('#descripcion').val());
            formData.append('empleadoId', $('#empleadoId').val());
            formData.append('tecnicas', JSON.stringify(selectedTecnicas));
            formData.append('productos', JSON.stringify(selectedProducts));
            formData.append('cantidadesProductos', JSON.stringify(cantidadesProducts));

            const precio = parseFloat($('#precio').val());
            const cupo = parseFloat($('#cupoLimite').val());

            if (precio < 0 || cupo < 0 ){
                mostrarAlerta("Ingresa valores correctos.", 'alert-warning', 'exclamation-triangle-fill');
        } else {

            $.ajax({
                url: '/RegistroCursoAdmin',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {

                    mostrarAlerta(response, 'alert-success', 'check-circle-fill');
                    // let cursoId = response.cursoId;
                    console.log(selectedTecnicas)
                    window.location.href = '/Ver-Cursos';

                },
                error: function(error) {
                    if (error.status === 400 && error.responseJSON && error.responseJSON.message) {
                        mostrarAlerta(error.responseJSON.message, 'alert-danger', 'exclamation-triangle-fill'); // Muestra el mensaje de error personalizado
                    } else {
                        mostrarAlerta('Ocurrió un error al agregar el Curso', 'alert-danger', 'exclamation-triangle-fill');
                    }
                    console.error("Error en la petición:", error);
                }
            });
        }
        });

        // function loadTecnicas(selectElement, selectedTecnicas){
        //     $.get('/get/tecnicas', function(tecnicas){
        //         selectElement.empty();
        //
        //         let filteredTecnicas = tecnicas.filter(tecnica => !selectedTecnicas.includes(tecnica.id.toString()));
        //
        //         filteredTecnicas.forEach(tecnica => {
        //             selectElement.append(new Option(tecnica.nombre, tecnica.id));
        //         });
        //     });
        // }

        function saveTecnicas(cursoId, tecnicas) {
            $.ajax({
                url: '/GuardarTecnicasCurso',
                type: 'POST',
                data: {

                    cursoId: cursoId,
                    tecnicas: tecnicas
                },
                success: function(response) {
                    // alert("Curso guardadas exitosamente");
                    // location.reload();  // Refresca la página al aceptar el alert
                },
                error: function(error) {
                    // alert('Ocurrió un error al guardar el curso');
                    // location.reload();  // Refresca la página al aceptar el alert
                }
            });
        }

        function saveProductos(cursoId, productos,cantidades){
                $.ajax({
                    url: '/productosCursos',
                    type: 'POST',
                    data: {

                        cursoId: cursoId,
                        productos: productos,
                        cantidades: cantidades
                    },
                    success: function(response) {
                        mostrarAlerta("Productos guardados exitosamente", 'alert-success', 'check-circle-fill');
                        // location.reload();  // Refresca la página al aceptar el alert
                    },
                    error: function(error) {
                        mostrarAlerta('Ocurrió un error al guardar los productos', 'alert-danger', 'exclamation-triangle-fill');
                        // location.reload();  // Refresca la página al aceptar el alert
                    }
                });
        }



        // ========= QUIZÁ CAMBIAR ESTA RUTA ========= NO YA NO

        function loadEmpleados(){
            $.get('/usuarios/rol/empleado', function(empleados){
                empleadoSelect = $('#empleadoId');
                empleadoSelect.empty();

                empleados.forEach(empleado => {
                    empleadoSelect.append(new Option(empleado.name, empleado.id));
                });

                // Selecciona el primer valor por defecto
                empleadoSelect.val(empleados[0].id);
            });
        }

        $('#cerrar').on('click',function (){
            selectedProducts = [];
            cantidadesProducts = [];
        });

        $('#guardar').on('click',function (){
            if(selectedProducts.length > 0) {
                $('#agregarProductos').prop('disabled', true);
                $('#agregarProductos').text('Productos seleccionados');
                // console.log(selectedProducts);
            }else{
                mostrarAlerta('No has seleccionado ningún producto para el descuento', 'alert-warning', 'exclamation-triangle-fill');
            }
        })

                // Mostrar la imagen seleccionada
                document.getElementById('imagenCurso').addEventListener('change', function() {
            const [file] = this.files;
            if (file) {
                document.getElementById('image').src = URL.createObjectURL(file);
            }
        });

        //fin document ready
    });



    //Script para dibujar los productos
    function dibujarProductos() {
        $.ajax({
            url: '/productosCursos',
            method: 'GET',
            success: function(data) {
                const productos = $('#productos');
                productos.empty();
                data.forEach(producto => {
                    let cont = producto.id;
                    let idDinamico = 'cantidad' + cont;
                    const card = `
                    <div class="product-card">
                        <img src="/storage/${producto.imagen}" alt="${producto.nombre}" class="product-image">
                        <div class="product-info">
                            <h2 class="product-title">${producto.nombre}</h2>
                            <p class="product-description">${producto.descripcion}</p>
                            <p class="product-price">$${producto.precio}</p>
                            <input style="margin-bottom:10px;" type="number" class="form-control" id="${idDinamico}" name="cantidadUtilizar">
                            <label for="${idDinamico}">Cantidad a utilizar</label>
                        </div>
                        <button style="margin-bottom: 10px;" id="seleccionar" type="button" class="btn btn-outline-primary" data-id="${producto.id}">Seleccionar para el curso</button>
                    </div>
                `;
                    productos.append(card);
                });
            }
        });
    }

    $('#buscadorNombre').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#productos .product-card').filter(function() {
            $(this).toggle($(this).find('.product-title').text().toLowerCase().indexOf(value) > -1);
        });
    });

    $(document).on('click', '#seleccionar', function() {
        let productId = $(this).data('id');
        let idDinamico = 'cantidad' + productId;
        let cantidad = $('#' + idDinamico).val();

        // Comprobamos si cantidad es mayor que 0
        if (cantidad > 0) {
            selectedProducts.push(productId);
            cantidadesProducts.push(cantidad);

            $(this).prop('disabled', true);
            $(this).text('Seleccionado');

            console.log(selectedProducts);
            console.log(cantidadesProducts);
        } else {
            mostrarAlerta('Inserte un valor numérico válido', 'alert-warning', 'exclamation-triangle-fill');
        }
    });
</script>

</body>
</html>
