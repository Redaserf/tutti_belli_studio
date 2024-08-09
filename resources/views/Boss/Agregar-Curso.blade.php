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
            background-color: #e1b8b8;
            padding: 30px 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        .header-section h1 {
            color: #ffffff;
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
                        <input type="number" class="form-control" id="cupoLimite" name="cupoLimite" placeholder="-- Cupo Limite --" required>
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
                        Agregar Productos
                    </button>
                </div>
                <div class="form-floating mb-3" id="contenedoTecnicas">


                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <button type="button" id="anadirTecnica" class="btn btn-dark w-100" name="anadirTecnica">
                        <label for="anadirTecnica">Añadir tecnica</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="precio" name="precio" placeholder="-- Precio --" required>
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


        $('#anadirTecnica').on('click', function(e){
            e.preventDefault();

            $.get('/get/tecnicas', function(tecnicas){
                //filtered tecnicas es el arreglos de tecinas que aun no son seleccionadas
                let filteredTecnicas = tecnicas.filter(tecnica => !selectedTecnicas.includes(tecnica.id.toString()));
                //Si no hay mas tecnicas disponibles muestra alerta
                if (filteredTecnicas.length === 0) {
                    alert('No hay más técnicas disponibles.');
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
                newSelect.trigger('change');
            });
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

            $.ajax({
                url: '/RegistroCursoAdmin',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function() {

                    alert("Curso agregado exitosamente");
                    // let cursoId = response.cursoId;
                    console.log(selectedTecnicas)
                    window.location.href = '/Ver-Cursos';

                },
                error: function(error) {

                    alert('Ocurrió un error al agregar el Curso');
                    console.log(selectedTecnicas)

                }
            });
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
                        alert("Productos guardados exitosamente");
                        // location.reload();  // Refresca la página al aceptar el alert
                    },
                    error: function(error) {
                        alert('Ocurrió un error al guardar los productos');
                        // location.reload();  // Refresca la página al aceptar el alert
                    }
                });
        }

        function loadEmpleados(){
            $.get('/get/empleados', function(empleados){
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
                alert('no ha seleccionado ningun producto para el descuento')
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
            url: '/get/productos',
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
            alert('Inserte un valor numérico válido');
        }
    });
</script>

</body>
</html>
