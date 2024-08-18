<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ver reportes</title>
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
        .tab-content{
            padding: 36px;
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

        /* Aquí tus estilos */

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.375rem 0.75rem;
            margin-left: 2px;
            border-radius: 4px;
            border: 1px solid #007bff;
            background-color: #007bff;
            color: white !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background-color: #0056b3;
            border-color: #0056b3;
            /*color: white !important;*/
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
        <h2>Reportes</h2>
        {{-- Aquí abajo hay un botón por si lo quieres usar, solo le cambias las cosas --}}
        {{-- <a class="left" href="/Agregar-Producto" style="text-decoration: none; color:black; margin-left:10px"><button class="btn btn-outline-success" style="width: auto;">Agregar producto<i style="margin-left: 6px" class="fa-solid fa-basket-shopping"></i></button></a> --}}
    </div>
    <br>

    <div class="section-divider"></div>
    <br>
    {{-- Input para buscar por si lo ocupas --}}
    {{-- <input type="text" class="form-control mb-3" id="buscadorNombre" placeholder="Buscar por nombre de producto"> --}}


    <div>

        {{-- Tus cosas --}}
        <!-- Gracias uwu -->
         <!-- PESTAÑAS PARA LA NAVEGACION ENTRE LOS DIFERENTES REPORTES -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="reporte-parcial" data-bs-toggle="tab" href="#reporte-par" role="tab" aria-controls="reporte-par" aria-selected="true">Reporte parcial</a>
                </li>

            </ul>

        @csrf
            <div class="tab-content" id="myTabContent">
                <!-- Pestaña de Reporte Parcial -->
                <div class="tab-pane fade show active" id="reporte-par" role="tabpanel" aria-labelledby="reporte-parcial">
                    <div class="table-container mt-5">
                        <h2 class="text-center" style="margin: 0;">Reportes</h2>
                        <div class="flex-container">
                            <div class="info-box" style="border: 1px solid #ddd; padding: 10px; border-radius: 5px; display: inline-block; margin-right: 15px;">
                                <label for="info-label" style="font-weight: bold;">Información</label>
                            </div>

                            <label for="info-label" style="font-weight: 5;">Desde: </label>
                            <input type="date" class="form-control" id="fechaInicio" style="width:250px; display: inline-block; margin-right: 15px;">

                            <label for="info-label" style="font-weight: 5;">Hasta: </label>
                            <input type="date" class="form-control" id="fechaFin" style="width:250px; display: inline-block; margin-right: 15px;">

                            <button id="botonBuscar" class="btn btn-success"> Buscar <i class="fa-solid fa-magnifying-glass"></i></button>

                            <label for="info-label" style="font-weight: 5;">Total del periodo: </label>
                            <label id="etiquetaTotal" for="info-label" style="font-weight: 5;"> </label>
                            <br>
                            <select class="form-control mb-3" id="select-empleado" style="width:250px; display: inline-block; margin-right: 15px;">
                                <option value="">Seleccionar Empleado</option>
                                <!-- porsiacaso -->
                            </select>
                            <select class="form-control mb-3" id="select-opcion" style="width:250px; display: inline-block;">
                                <option value="null">Seleccionar opción</option>
                                <option value="producto">Productos</option>
                                <option value="cita">Citas</option>
                                <option value="inscripcion">Inscripciones</option>
                            </select>

                            <button id="botonPdf" class="btn btn-danger"> Generar <PDF></PDF> <i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Fecha de Venta</th>
                                        <th>Empleado</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody id="table-reporte-parcial">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
    </div>


</section>


{{-- Aquí otras cosas como modals y todo eso --}}


<script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>

    // Scripts para todas las vistas

    // Pantalla de carga
    var loader = document.getElementById("contenedor_carga");
    var navbar = document.getElementById("navbar");
    window.addEventListener('load', function(){
        $('#navbar').css('visibility', 'visible');
        loader.style.display = "none";
    });


    // Inicia el document.ready
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
        function checkWidth() {
            if ($(window).width() < 786) {  // Si el ancho de la ventana es menor que 480 píxeles
                $('#scrollDash').addClass('table-responsive');  // Agrega la clase esa
            } else {
                $('#scrollDash').removeClass('table-responsive');
            }
        }
        checkWidth();
        $(window).resize(checkWidth);

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
        // Fin scripts para todas las vistas

        //Ajax para dibujara los empleados en los select
        $.ajax({
            url: '/get/empleado-admin',
            method: 'GET',
            success: function (empleados) {
                let select = $('#select-empleado');
                select.empty(); // Limpiar el select
                select.append(`<option value="">Seleccione un empleado</option>`);
                empleados.forEach(empleado =>{

                    select.append(`<option value="${empleado.id}">` + empleado.name + '</option>');
                })

            }
        });




        // dibujarParcial();

        $('#select-empleado').prop('disabled',true);
        $('#select-opcion').prop('disabled',true);
        $('#botonPdf').prop('disabled',true);

// Fin document.ready
    });

    let fechaSeleccionadaInicial;
    let fechaSeleccionadaFinal;
    let empleadoSeleccionado;
    let ventaSeleccionada;
    let valorPdf = 0;

    $('#botonPdf').on('click',function (){
        switch (valorPdf){
            case 0:
                // $.ajax({
                //     url: '/Pdf-valor_cero',
                //     method: 'POST',
                //     data:{
                //         _token: $('input[name="_token"]').val(),
                //         fechaInicio: fechaSeleccionadaInicial,
                //         fechaFin: fechaSeleccionadaFinal
                //     },
                //     success: function (){
                //
                //     }
                // });
                let url = '/Pdf-valor_cero?' +
                    'fechaInicio=' + encodeURIComponent(fechaSeleccionadaInicial) +
                    '&fechaFin=' + encodeURIComponent(fechaSeleccionadaFinal) +
                    '&_token=' + encodeURIComponent($('input[name="_token"]').val());

                window.location.href = url;
                break;
            case 1:
                // $.ajax({
                //     url: '/Pdf-valor_uno',
                //     method: 'POST',
                //     data:{
                //         _token: $('input[name="_token"]').val(),
                //         empleadoSeleccionado: empleadoSeleccionado,
                //         ventaSeleccionada:ventaSeleccionada,
                //         fechaInicio: fechaSeleccionadaInicial,
                //         fechaFin: fechaSeleccionadaFinal
                //     },
                //     success: function (){
                //
                //     }
                // });

                 let url1 = '/Pdf-valor_uno?' +
                    'fechaInicio=' + encodeURIComponent(fechaSeleccionadaInicial) +
                    '&fechaFin=' + encodeURIComponent(fechaSeleccionadaFinal) +
                    '&empleadoSeleccionado=' + encodeURIComponent(empleadoSeleccionado)+
                    '&ventaSeleccionada='+ encodeURIComponent(ventaSeleccionada)+
                    '&_token=' + encodeURIComponent($('input[name="_token"]').val());

                window.location.href = url1;
                break;
            case 2:

                // $.ajax({
                //     url: '/Pdf-valor_dos',
                //     method: 'POST',
                //     data:{
                //         _token: $('input[name="_token"]').val(),
                //         empleadoSeleccionado: empleadoSeleccionado,
                //         fechaInicio: fechaSeleccionadaInicial,
                //         fechaFin: fechaSeleccionadaFinal
                //     },
                //     success: function (){
                //
                //     }
                // });

                let url2 = '/Pdf-valor_dos?' +
                    'fechaInicio=' + encodeURIComponent(fechaSeleccionadaInicial) +
                    '&fechaFin=' + encodeURIComponent(fechaSeleccionadaFinal) +
                    '&empleadoSeleccionado=' + encodeURIComponent(empleadoSeleccionado)+
                    '&_token=' + encodeURIComponent($('input[name="_token"]').val());

                window.location.href = url2;
                break;
            case 3:

                // $.ajax({
                //     url: '/Pdf-valor_tres',
                //     method: 'POST',
                //     data:{
                //         _token: $('input[name="_token"]').val(),
                //         ventaSeleccionada:ventaSeleccionada,
                //         fechaInicio: fechaSeleccionadaInicial,
                //         fechaFin: fechaSeleccionadaFinal
                //     },
                //     success: function (){
                //
                //     }
                // });

                let url3 = '/Pdf-valor_tres?' +
                    'fechaInicio=' + encodeURIComponent(fechaSeleccionadaInicial) +
                    '&fechaFin=' + encodeURIComponent(fechaSeleccionadaFinal) +
                    '&ventaSeleccionada='+ encodeURIComponent(ventaSeleccionada)+
                    '&_token=' + encodeURIComponent($('input[name="_token"]').val());

                window.location.href = url3;
                break;
        }
    });

    $('#botonBuscar').on('click',function (){

         fechaSeleccionadaInicial = $('#fechaInicio').val();
         fechaSeleccionadaFinal = $('#fechaFin').val();

        console.log(fechaSeleccionadaInicial);
        console.log(fechaSeleccionadaFinal);

        if(fechaSeleccionadaInicial > fechaSeleccionadaFinal ){
            alert('La fecha inicial debe de ser anterior a la fecha final');
        }
        else
        {
            //$ajax que nos trae las ventas emtre esas fechas
            $.ajax({
                url:'ventas-periodo',
                method:'GET',
                data:{
                    fechaInicio: fechaSeleccionadaInicial,
                    fechaFin: fechaSeleccionadaFinal
                },
                success: function (ventas){
                    console.log("Ventas recibidas:", ventas);
                    let total = 0;

                    let tablaRaiz = $('#table-reporte-parcial');
                    tablaRaiz.empty();

                    if ($.fn.DataTable.isDataTable('.table')) {
                        $('.table').DataTable().clear().destroy();
                    }

                    // Vaciar la tabla
                    tablaRaiz.empty();

                    ventas.forEach(venta => {

                        let contenido = `<tr>
                        <td>${venta.tipoVenta}</td>
                        <td>${venta.fechaVenta}</td>
                        <td>${venta.empleadoNombre}</td>
                        <td>${venta.total}</td>
                        </tr>`;
                        tablaRaiz.append(contenido);

                        total += venta.total
                    });

                    valorPdf=0;
                    $('#etiquetaTotal').text(total);
                    $('#select-empleado').prop('disabled',false);
                    $('#select-opcion').prop('disabled',false);
                    $('#botonPdf').prop('disabled',false);


                        $('.table').DataTable({
                            "dom": '<"top"i>rt<"bottom"flp><"clear">',
                            "pagingType": "full_numbers",
                            "language": {
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Último",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                }
                            },
                            "pageLength": 10, // Número de registros por página
                            "lengthChange": false, // Oculta el selector de "Show entries"
                            "info": false, // Oculta la información de "Showing X to Y of Z entries"
                            "searching": false, // Oculta el campo de búsqueda
                        });
                }
            });
        }
    });

    $('#select-empleado').on('change',function (){
        empleadoSeleccionado = $('#select-empleado').val();
        ventaSeleccionada = $('#select-opcion').val();

        let tablaRaiz = $('#table-reporte-parcial');
        tablaRaiz.empty();

        if(ventaSeleccionada === 'null' && empleadoSeleccionado === "" ){
            document.getElementById('botonBuscar').click();
        }else{
            if(ventaSeleccionada !== 'null' && empleadoSeleccionado === "" ){
                $.ajax({
                    url:'/get/filtro-tres',
                    method: 'GET',
                    data: {
                        ventaSeleccionada:ventaSeleccionada,
                        fechaInicio: fechaSeleccionadaInicial,
                        fechaFin: fechaSeleccionadaFinal
                    },
                    success: function (ventas){
                        let total = 0;
                        console.log("Ventas recibidas:", ventas);
                        console.log(empleadoSeleccionado);
                        console.log(ventaSeleccionada);
                        if ($.fn.DataTable.isDataTable('.table')) {
                            $('.table').DataTable().clear().destroy();
                        }

                        // Vaciar la tabla
                        tablaRaiz.empty();

                        ventas.forEach(venta => {

                            console.log("Datos de venta individual:", venta);

                            let contenido = `<tr>
                                <td>${venta.tipoVenta}</td>
                                <td>${venta.fechaVenta}</td>
                                <td>${venta.empleadoNombre}</td>
                                <td>${venta.total}</td>
                                </tr>`;
                            tablaRaiz.append(contenido);
                            total += venta.total
                        });
                        valorPdf = 3;
                        $('#etiquetaTotal').text(total);


                        $('.table').DataTable({
                            "dom": '<"top"i>rt<"bottom"flp><"clear">',
                            "pagingType": "full_numbers",
                            "language": {
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Último",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                }
                            },
                            "pageLength": 10, // Número de registros por página
                            "lengthChange": false, // Oculta el selector de "Show entries"
                            "info": false, // Oculta la información de "Showing X to Y of Z entries"
                            "searching": false, // Oculta el campo de búsqueda
                        });

                    }
                });
            }else{
                if(ventaSeleccionada === 'null' && empleadoSeleccionado !== "" ){
                    $.ajax({
                        url:'/get/filtro-dos',
                        method: 'GET',
                        data: {
                            empleadoSeleccionado: empleadoSeleccionado,
                            fechaInicio: fechaSeleccionadaInicial,
                            fechaFin: fechaSeleccionadaFinal
                        },
                        success: function (ventas){
                            let total = 0
                            console.log("Ventas recibidas:", ventas);
                            console.log(empleadoSeleccionado);
                            console.log(ventaSeleccionada);
                            if ($.fn.DataTable.isDataTable('.table')) {
                                $('.table').DataTable().clear().destroy();
                            }

                            // Vaciar la tabla
                            tablaRaiz.empty();
                            ventas.forEach(venta => {

                                console.log("Datos de venta individual:", venta);

                                let contenido = `<tr>
                                <td>${venta.tipoVenta}</td>
                                <td>${venta.fechaVenta}</td>
                                <td>${venta.empleadoNombre}</td>
                                <td>${venta.total}</td>
                                </tr>`;
                                tablaRaiz.append(contenido);
                                total += venta.total
                            });
                            valorPdf = 2;
                            $('#etiquetaTotal').text(total);

                            $('.table').DataTable({
                                "dom": '<"top"i>rt<"bottom"flp><"clear">',
                                "pagingType": "full_numbers",
                                "language": {
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Último",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "pageLength": 10, // Número de registros por página
                                "lengthChange": false, // Oculta el selector de "Show entries"
                                "info": false, // Oculta la información de "Showing X to Y of Z entries"
                                "searching": false, // Oculta el campo de búsqueda
                            });
                        }
                    });
                }else{
                    console.log('FRECUANCIIA DE PAPU')
                    $.ajax({
                        url:'/get/filtro-uno',
                        method: 'GET',
                        data: {
                            empleadoSeleccionado: empleadoSeleccionado,
                            ventaSeleccionada:ventaSeleccionada,
                            fechaInicio: fechaSeleccionadaInicial,
                            fechaFin: fechaSeleccionadaFinal
                        },
                        success: function (ventas){
                            let total = 0;
                            console.log("Ventas recibidas:", ventas);
                            console.log(empleadoSeleccionado);
                            console.log(ventaSeleccionada);
                            if ($.fn.DataTable.isDataTable('.table')) {
                                $('.table').DataTable().clear().destroy();
                            }

                            // Vaciar la tabla
                            tablaRaiz.empty();

                            ventas.forEach(venta => {

                                console.log("Datos de venta individual:", venta);

                                let contenido = `<tr>
                                <td>${venta.tipoVenta}</td>
                                <td>${venta.fechaVenta}</td>
                                <td>${venta.empleadoNombre}</td>
                                <td>${venta.total}</td>
                                </tr>`;
                                tablaRaiz.append(contenido);
                                total += venta.total
                            });
                            valorPdf=1;
                            $('#etiquetaTotal').text(total);


                            $('.table').DataTable({
                                "dom": '<"top"i>rt<"bottom"flp><"clear">',
                                "pagingType": "full_numbers",
                                "language": {
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Último",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "pageLength": 10, // Número de registros por página
                                "lengthChange": false, // Oculta el selector de "Show entries"
                                "info": false, // Oculta la información de "Showing X to Y of Z entries"
                                "searching": false, // Oculta el campo de búsqueda
                            });


                        }
                    });
                }
            }

        }



    });

    $('#select-opcion').on('change',function (){
        empleadoSeleccionado = $('#select-empleado').val();
        ventaSeleccionada = $('#select-opcion').val();

        let tablaRaiz = $('#table-reporte-parcial');
        tablaRaiz.empty();

        if(ventaSeleccionada === 'null' && empleadoSeleccionado === "" ){
            document.getElementById('botonBuscar').click();
        }else{
            if(ventaSeleccionada !== 'null' && empleadoSeleccionado === "" ){
                $.ajax({
                    url:'/get/filtro-tres',
                    method: 'GET',
                    data: {
                        ventaSeleccionada:ventaSeleccionada,
                        fechaInicio: fechaSeleccionadaInicial,
                        fechaFin: fechaSeleccionadaFinal
                    },
                    success: function (ventas){
                        let total = 0;
                        console.log("Ventas recibidas:", ventas);
                        console.log(empleadoSeleccionado);
                        console.log(ventaSeleccionada);

                        if ($.fn.DataTable.isDataTable('.table')) {
                            $('.table').DataTable().clear().destroy();
                        }

                        valorPdf = 3
                        tablaRaiz.empty();

                        ventas.forEach(venta => {

                            console.log("Datos de venta individual:", venta);

                            let contenido = `<tr>
                                <td>${venta.tipoVenta}</td>
                                <td>${venta.fechaVenta}</td>
                                <td>${venta.empleadoNombre}</td>
                                <td>${venta.total}</td>
                                </tr>`;
                            tablaRaiz.append(contenido);
                            total += venta.total
                        });
                        $('#etiquetaTotal').text(total);

                        $('.table').DataTable({
                            "dom": '<"top"i>rt<"bottom"flp><"clear">',
                            "pagingType": "full_numbers",
                            "language": {
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Último",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                }
                            },
                            "pageLength": 10, // Número de registros por página
                            "lengthChange": false, // Oculta el selector de "Show entries"
                            "info": false, // Oculta la información de "Showing X to Y of Z entries"
                            "searching": false, // Oculta el campo de búsqueda
                        });
                    }
                });
            }else{
                if(ventaSeleccionada === 'null' && empleadoSeleccionado !== "" ){
                    $.ajax({
                        url:'/get/filtro-dos',
                        method: 'GET',
                        data: {
                            empleadoSeleccionado: empleadoSeleccionado,
                            fechaInicio: fechaSeleccionadaInicial,
                            fechaFin: fechaSeleccionadaFinal
                        },
                        success: function (ventas){
                            let total = 0;
                            console.log("Ventas recibidas:", ventas);
                            console.log(empleadoSeleccionado);
                            console.log(ventaSeleccionada);
                            if ($.fn.DataTable.isDataTable('.table')) {
                                $('.table').DataTable().clear().destroy();
                            }

                            valorPdf = 2;
                            tablaRaiz.empty();

                            ventas.forEach(venta => {

                                console.log("Datos de venta individual:", venta);

                                let contenido = `<tr>
                                <td>${venta.tipoVenta}</td>
                                <td>${venta.fechaVenta}</td>
                                <td>${venta.empleadoNombre}</td>
                                <td>${venta.total}</td>
                                </tr>`;
                                tablaRaiz.append(contenido);
                                total += venta.total;
                            });
                            $('#etiquetaTotal').text(total);


                            $('.table').DataTable({
                                "dom": '<"top"i>rt<"bottom"flp><"clear">',
                                "pagingType": "full_numbers",
                                "language": {
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Último",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "pageLength": 10, // Número de registros por página
                                "lengthChange": false, // Oculta el selector de "Show entries"
                                "info": false, // Oculta la información de "Showing X to Y of Z entries"
                                "searching": false, // Oculta el campo de búsqueda
                            });
                        }
                    });
                }else{
                    console.log('FRECUANCIIA DE PAPU')
                    $.ajax({
                        url:'/get/filtro-uno',
                        method: 'GET',
                        data: {
                            empleadoSeleccionado: empleadoSeleccionado,
                            ventaSeleccionada:ventaSeleccionada,
                            fechaInicio: fechaSeleccionadaInicial,
                            fechaFin: fechaSeleccionadaFinal
                        },
                        success: function (ventas){
                            let total = 0;
                            console.log("Ventas recibidas:", ventas);
                            console.log(empleadoSeleccionado);
                            console.log(ventaSeleccionada);
                            if ($.fn.DataTable.isDataTable('.table')) {
                                $('.table').DataTable().clear().destroy();
                            }

                            valorPdf = 1;
                            tablaRaiz.empty();

                            ventas.forEach(venta => {

                                console.log("Datos de venta individual:", venta);
                                let contenido = `<tr>
                                <td>${venta.tipoVenta}</td>
                                <td>${venta.fechaVenta}</td>
                                <td>${venta.empleadoNombre}</td>
                                <td>${venta.total}</td>
                                </tr>`;
                                tablaRaiz.append(contenido);
                                total += venta.total
                            });
                            $('#etiquetaTotal').text(total);



                            $('.table').DataTable({
                                "dom": '<"top"i>rt<"bottom"flp><"clear">',
                                "pagingType": "full_numbers",
                                "language": {
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Último",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "pageLength": 10, // Número de registros por página
                                "lengthChange": false, // Oculta el selector de "Show entries"
                                "info": false, // Oculta la información de "Showing X to Y of Z entries"
                                "searching": false, // Oculta el campo de búsqueda
                            });
                        }
                    });
                }
            }

        }

    });

    //Ajax y filtros para el historial de reportes


</script>
</body>
</html>
