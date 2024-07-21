<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar Curso</title>
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
            height: 100vh;
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
            background: #ffffff url(/Integradora/resources/imagenes/preloader.gif) no-repeat center center;
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

        /* Fin Dashboard */



    </style>
</head>


<body class="hiddenX">

    <div id="contenedor_carga"></div>
    <div class="overlay"></div>

        {{-- Sidebar --}}

        <nav class="dashboard-container sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="/resources/img/dashboard-navbar/furina.jpg" alt="">
                    </span>
                    <div class="text header-text">
                        <span class="name">{{ Auth::user()->name }}</span>
                        <span class="rol">Administrador</span>
                    </div>
                </div>
                <i class="fa-solid fa-angle-right toggle"></i>
            </header>

            <div class="menu-bar">
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
            @csrf
            <div class="container container-div">
                <div class="header-section">
                    <h1>Cursos</h1>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="-- Nombre --">
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="cupoLimite" name="cupoLimite" placeholder="-- Cupo Limite --">
                            <label for="cupoLimite">Cupo Limite</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio">
                            <label for="fechaInicio">Fecha de inicio</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="time" class="form-control" id="horaInicio" name="horaInicio" placeholder="-- Hora de inicio del curso --">
                            <label for="horaInicio">Hora de inicio</label>
                        </div>
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
                            <input type="number" class="form-control" id="precio" name="precio" placeholder="-- Precio --">
                            <label for="precio">Precio</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="" class="form-control" id="empleadoId">
                            <option value="" disabled selected>Empleado</option>

                            <!-- Servicios que aparecerán con back-end -->

                        </select>
                        <label for="empleadoId">Empleado de la cita</label>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="-- Descripcion --">
                            <label for="descripcion">Descripción</label>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-dark w-100" id="agregarCurso">Agregar curso</button>
                    </div>

                </div>
            </div>
        </form>


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
            let selectCounter = 0; // Variable contador
            let selectedTecnicas = []; // Lista para mantener las técnicas seleccionadas

            // Dashboard toggle
            const body = document.querySelector("body"),
                sidebar = body.querySelector(".sidebar"),
                toggle = body.querySelector(".toggle"),
                overlay = body.querySelector(".overlay");

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
            });

            loadEmpleados();
            // Fin scripts para todas las vistas

            $('#anadirTecnica').on('click', function(e){
                e.preventDefault();
                // Verificar si hay técnicas disponibles
                $.get('/get/tecnicas', function(tecnicas){
                    let filteredTecnicas = tecnicas.filter(tecnica => !selectedTecnicas.includes(tecnica.id.toString()));
                    if (filteredTecnicas.length === 0) {
                        alert('No hay más técnicas disponibles.');
                        return;
                    }

                    selectCounter++; // Incrementa el contador cada vez que se añade un nuevo select

                    // Crear un nuevo select con un id único
                    var newSelect = $('<select class="form-control mb-3" name="tecnicas[]"></select>');
                    newSelect.attr('id', 'tecnicaSelect' + selectCounter);

                    // Añadir el nuevo select al contenedor
                    $('#contenedoTecnicas').append(newSelect);

                    // Llenar el select con las técnicas, excluyendo las ya seleccionadas
                    filteredTecnicas.forEach(tecnica => {
                        newSelect.append(new Option(tecnica.nombre, tecnica.id));
                    });

                    // Agregar evento para actualizar la lista de técnicas seleccionadas
                    newSelect.on('change', function() {
                        selectedTecnicas = []; // Resetear la lista
                        $('select[name="tecnicas[]"]').each(function() {
                            if ($(this).val()) {
                                selectedTecnicas.push($(this).val());
                            }
                        });
                    });
                });
            });

            //Script para registrar el nuevo curso
            $('#agregarCurso').on('click', function(e) {
                e.preventDefault();

                let courseName = $('#nombre').val();
                let courseLimit = $('#cupoLimite').val();
                let courseDateBegining = $('#fechaInicio').val();
                let courseHourBegining = $('#horaInicio').val();
                let coursePrice = $('#precio').val();
                let courseEmployee = $('#empleadoId').val();

                $.ajax({
                    url: '/RegistroCursoAdmin',
                    type: 'POST',
                    data: {
                        _token: $('input[name="_token"]').val(),
                        nombre: courseName,
                        cupoLimite: courseLimit,
                        fechaInicio: courseDateBegining,
                        horaInicio: courseHourBegining,
                        precio: coursePrice,
                        empleadoId: courseEmployee
                    },
                    success: function(response) {
                        alert("Curso agregado exitosamente");
                        let cursoId = response.cursoId;

                        saveTecnicas(cursoId, selectedTecnicas);

                        $('#nombre').val('');
                        $('#cupoLimite').val('');
                        $('#fechaInicio').val('');
                        $('#horaInicio').val('');
                        $('#precio').val('');
                        $('#empleadoId').val('');
                    },
                    error: function(error) {
                        alert('Ocurrió un error al agregar el Curso');
                        $('#nombre').val('');
                        $('#cupoLimite').val('');
                        $('#fechaInicio').val('');
                        $('#horaInicio').val('');
                        $('#precio').val('');
                        $('#empleadoId').val('');
                    }
                });
            });

            // Fin de script para agregar curso

            // Fin document.ready
        });

        // Función para llenar el select con las técnicas excluyendo las ya seleccionadas
        function loadTecnicas(selectElement, selectedTecnicas){
            $.get('/get/tecnicas', function(tecnicas){
                // Limpia el select antes de llenarlo
                selectElement.empty();

                // Filtra las técnicas para excluir las ya seleccionadas
                let filteredTecnicas = tecnicas.filter(tecnica => !selectedTecnicas.includes(tecnica.id.toString()));

                // Recorre la colección de técnicas y se añaden al select
                filteredTecnicas.forEach(tecnica => {
                    selectElement.append(new Option(tecnica.nombre, tecnica.id));
                });
            });
        }

        // Función para guardar las técnicas seleccionadas
        function saveTecnicas(cursoId, tecnicas) {
            $.ajax({
                url: '/GuardarTecnicasCurso', // Cambia esta URL a la ruta correcta
                type: 'POST',
                data: {
                    _token: $('input[name="_token"]').val(),
                    cursoId: cursoId,
                    tecnicas: tecnicas
                },
                success: function(response) {
                    alert("Técnicas guardadas exitosamente");
                },
                error: function(error) {
                    alert('Ocurrió un error al guardar las técnicas');
                }
            });
        }

        //Script para dibujar los empleados existentes en el select
        //NOTA: PARA QUE FUNCIONE SE DEBE DE TENER REGISTRADOS EMPLEADOS EN LA BASE DE DATOS
        function loadEmpleados(){
            $.get('/get/empleados', function(empleados){
                //se obtiene el select mediante su id para manipularlo
                empleadoSelect = $('#empleadoId');
                empleadoSelect.empty();

                //recorremos la coleccion de empleados y se adieren a el select
                empleados.forEach(empleado => {
                    empleadoSelect.append(new Option(empleado.name, empleado.id));
                });
            });
        }
    </script>

</body>
</html>
