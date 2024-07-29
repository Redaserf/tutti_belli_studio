<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendar Cita</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            
        /* Google Font Import - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

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
        .form-floating select {
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
            color: #ffffff;
            background-color: #e1b8b8;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
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

        /*Esto es para el select de los servicios*/

            .multiselect-container {
        display: flex;
        flex-direction: column;
        }
        .multiselect-option {
        cursor: pointer;
        padding: 5px;
        }
        .multiselect-option:hover {
        background-color: #f8f9fa;
        }
        .multiselect-option.selected {
        background-color: #0d6efd;
        color: white;
        }

        /*Esto es para el select de los servicios*/


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



    {{-- Agregar cita --}}

<div class="home">

    

  
            <form action="/RegistroCitaAdmin" method="POST" id="citaForm">
                @csrf   
                <div class="col-12">
                    <div class="container container-div">
                        <div class="container full-height d-flex justify-content-center align-items-center">
                            <div class="row w-100">
                                <div class="col-md-12">

                                            <input type="hidden" id='id'><!--id para saber si es editar o crear-->
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="fechaCita" name='fechaCita' placeholder="Fecha de la cita" required>
                                            <label for="appointmentDate">Fecha de la cita</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="time" class="form-control" id="horaCita" name='horaCita' placeholder="Hora de la cita" required>
                                            <label for="appointmentTime">Hora de la cita</label>
                                        </div>
                                        <div >
                                            <div class='container'>
                                                <div id="service" class="form-control multiselect-container form-floating mb-3" required>
                                                </div>
                                            </div>
                                            <!-- <label for="service">Servicio</label> -->
                                            <input type="hidden" id="serviciosSeleccionados" name="serviciosSeleccionados">

                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="usuarioId" id="usuarioId"></select>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="empleadoId" id="empleadoId"></select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="notasCita">Notas de la cita</label>
                                            <textarea class="form-control" id="notasCita" name='notasCita' rows="7"  required></textarea>
                                        </div>
                                    
                                        <button type="submit" href="/Ver-citas" class="btn btn-dark btn-block w-100">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

   


</div>

    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>

// Scripts para todas las vistas

    //     // Pantalla de carga
    //     var loader = document.getElementById("contenedor_carga");
    //     var navbar = document.getElementById("navbar");
    //     window.addEventListener('load', function(){
    //         $('#navbar').css('visibility', 'visible');
    //         loader.style.display = "none";
    //     });

    //     console.log()

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


    //     // function dibujarServiciosTecnicas(){
    //         //dibujar los servicios y sus tecnicas despues de que el servicio es seleccionado desde la DB

    //             $.get('/servicios/tecnicas', function(servicios){//puedo traer las tecnicas con servicios.tecnicas.nombre ex
    //                 console.log(servicios);

    //                 let selectServiciosMul = $('#service');
    //                 selectServiciosMul.empty();

    //                 servicios.forEach(servicio => {
    //                     console.log(servicio.tecnicas);//si lo manda
    //                     selectServiciosMul.append(`

    //                         <div class="multiselect-option form-control" data-value="${servicio.id}" data-select-id="${servicio.id}">${servicio.nombre}</div>

    //                         <div class="form-floating mb-3">
    //                             <select class="form-control" id="tecnicaSelect${servicio.id}" style="display:none" required></select>
    //                         </div>

    //                 `)
    //                 servicio.tecnicas.forEach( tecnica => {
    //                     $(`#tecnicaSelect${servicio.id}`).append(`
    //                     <option value='${tecnica.id}'>-- ${tecnica.nombre} -- ${tecnica.precio}</option>
    //                 `)
    //                 })
                
    //             })
    //             //despliega el select de cada servicio cuando lo seleccionan
    //             $('#service').on('click', '.multiselect-option', function() {
    //                 $(this).toggleClass('selected');
    //                 console.log($(this));


    //                 let selectId = $(this).data('select-id');
    //                 $(`#tecnicaSelect${selectId}`).toggle();
    //                 console.log($(this));
    //            });

               
               
    //         })//Fin de dibujar servicios y sus tecnicas pipipi
    //         console.log($('.multiselect-option'));




    //         //Dibujar usuarios
    //         $.get('/usuarios/rol/usuario', function(usersRolUsuario) {
    //             let selectUsuarios = $('#usuarioId');
    //             selectUsuarios.empty();

    //             usersRolUsuario.forEach(usuario => {
    //                 selectUsuarios.append(`
    //                     <option class="text-center" value="${usuario.id}">Cliente: ${usuario.name + " " +usuario.apellido}</option>
    //                 `)
    //                 console.log(usersRolUsuario);
    //             })
    //         })

    //         //Dibujar empleados
    //         $.get('/usuarios/rol/empleado', function(usersRolEmpleado) {
    //             let selectUsuarios = $('#empleadoId');
    //             selectUsuarios.empty();

    //             usersRolEmpleado.forEach(usuario => {
    //                 selectUsuarios.append(`
    //                     <option class="text-center" value="${usuario.id}">Empleado: ${usuario.name + " " +usuario.apellido}</option>
    //                 `)
    //                 console.log(usersRolEmpleado);
    //             })
    //         })




    //         //registrar cita en la base de datos

    //     $('#citaForm').on('submit', function(e) {
    //         e.preventDefault();
    //         console.log($(this));

    //         let serviciosSeleccionados = []; 


    //         $('.multiselect-option.selected').each(function() {


    //             let servicioId = $(this).data('select-id');
    //             let tecnicaSeleccionada = $(`#tecnicaSelect${servicioId}`).val();
    //             serviciosSeleccionados.push({
    //                 servicioId: servicioId,
    //                 tecnicaId: tecnicaSeleccionada
    //             });
    //         });

          


    //         console.log('Servicios seleccionados:', serviciosSeleccionados);

            

    //         $('#serviciosSeleccionados').val(JSON.stringify(serviciosSeleccionados));
            
    //         let formData = $(this).serialize();
            
    //         $.ajax({
    //             url: '/RegistroCitaAdmin',
    //             method: 'POST',
    //             data: formData,            
    //             success: function(response) {
    //                 console.log(response);
    //                 $('#citaForm')[0].reset();
    //                 $('.multiselect-option').removeClass('selected');
    //                 $('select[id^="tecnicaSelect"]').hide();
    //                 alert('cita creada con exito');
    //                 window.location.href = '/Ver-Citas';
    //             },
    //             error: function(error) {
    //                 console.log(error);
    //                 var response = xhr.responseJSON;
    //                 if (response && response.message == 'Debe seleccionar al menos un servicio') {
    //                     // Mostrar la alerta con el mensaje de error
    //                     alert(response.message);
    //                 } else {
    //                     // Mostrar un mensaje de error genérico si no hay mensaje específico
    //                     alert('Se ha producido un error en la solicitud.');
    //                 }
    //             }
    //         });

    //     });

    //     console.log('Valor del input serviciosSeleccionados:', $('#serviciosSeleccionados').val());


        

        
    //     // Dashboard toggle
    //     const body = document.querySelector("body"),
    //             sidebar = body.querySelector(".sidebar"),
    //             toggle = body.querySelector(".toggle"),
    //             overlay = body.querySelector(".overlay");

    //     toggle.addEventListener("click", () => {
    //         sidebar.classList.toggle("close");
    //         if (!sidebar.classList.contains("close")) {
    //             overlay.style.display = "block";
    //         } else {
    //             overlay.style.display = "none";
    //         }
    //     });

    //     overlay.addEventListener("click", () => {
    //         sidebar.classList.add("close");
    //         overlay.style.display = "none";
    //     });

    //     // Fin scripts para todas las vistas



    });

</script>
</body>
</html>
