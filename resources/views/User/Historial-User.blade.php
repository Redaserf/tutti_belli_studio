<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial del usuario</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900&display=swap');

        body, html {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('/resources/img/home/low-poly-grid-haikei.svg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            min-height: 100vh;
        }
        .btn-light:hover{
      background-color:#fa3284;
    }

        .hiddenX {
            overflow-x: hidden;
        }

        .vertical-separator {
            display: inline-block;
            width: 1.5px;
            height: 30px;
            background-color: #000;
            margin: 3px 15px;
            vertical-align: middle;
        }

        /* ANIMACION DE CARGA */
        #contenedor_carga{
        background: #ffffff url(/resources/img/home/preloader.gif) no-repeat center center;
        background-size: 20%;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 300000;
        }


        #navbar {
            font-family: "Josefin Sans", sans-serif !important;  
        }

        label, p, input, button, h1, h2, h3 {
            font-family: "Josefin Sans", sans-serif !important;
        }

        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 900px;
        }
        .table-container h2 {
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
        }

        .modal-body table {
            width: 100%;
        }
        .btn-primary {
            background-color: #e83e8c;
            border-color: #e83e8c;
        }
        .btn-primary:hover {
            background-color: #d63384;
            border-color: #d63384;
        }
        .btn-secondary {
            background-color: #f8d7da;
            border-color: #f8d7da;
            color: #000;
        }
        .btn-secondary:hover {
            background-color: #f5c6cb;
            border-color: #f5c6cb;
        }
            #mensajeNoHistorial {
        font-size: 24px;
        color: #000; /* Texto negro */
        background-color: #fff; /* Fondo blanco */
        border: none; /* Sin bordes */
        border-radius: 0; /* Sin bordes redondeados */
        padding: 20px;
        margin-top: 20px;
    }

        .modalInfo{
            padding: 16px;
        }@media (max-width: 480px) {
    .imgnavbar{
        width:200px;
        height: 30px;
    
    }}
    
    </style>
</head>
<body class="hiddenX">
    <div id="contenedor_carga"></div>

    <!-- NAVBAR / ENCABEZADO -->
    <nav style="background: #f8d7da !important;" id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Home-usuario">
                <img src="/resources/img/dashboard-navbar/Letras Tutti.png"class="imgnavbar" alt="Tutti Belli Studio" width="250" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#servicios" style="color: #000000;">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Productos-User" style="color: #000000;">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active texto1" aria-current="page" href="/Cursos-User" style="color: #000000;">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#contacto" style="color: #000000;">Contacto</a>
                    </li>
                    <span id="separador" class="vertical-separator"></span>
                    <li class="nav-item" style="margin-left: 0;">
                        <a class="nav-link active texto1" aria-current="page" href="/Perfil-User" style="color: #000000;">Cuenta <i class="fa-solid fa-user" style="margin-left: 10px;"></i></a>
                    </li>
                    <li class="nav-item" style="">
                        <a class="nav-link active texto1" aria-current="page" href="/Logout" style="color: #000000;">Cerrar sesión<i class="fa-solid fa-arrow-right-from-bracket" style="margin-left: 10px;"></i></a>
                    </li>
                </ul>
                <a id="carrito" style="margin-right: 30px;" class="nav-link active texto1" aria-current="page" href="/Carrito-User" style="color: #000000;"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="/Reservacion-User" style="margin-right:20px;">
                    <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
                </a>
            </div>
        </div>
    </nav>

    <!-- ESTA TABLA ES PARA VER POR ENCIMA EL HISTORIAL ALGO BASICO NO TAN AMONTONADO -->
    <div class="table-container mt-5">
        <h2>Historial</h2>
        <div class="mb-3">
        <label for="tipoHistorial" class="form-label">Filtrar por Tipo</label>
            <select id="tipoHistorial" class="form-select" onchange="dibujarHistorial()">
                <option value="">Todos</option>
                <option value="citas">Citas</option>
                <option value="inscripciones">Inscripciones</option>
                <option value="ventas">Compras</option>
            </select>
        </div>
        <div id="mensajeNoHistorial" class="alert alert-warning text-center" style="display: none;">
            No hay historial disponible para mostrar.
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Realizado</th>
                    <th>Detalles</th>
                </tr>
            </thead>
            <tbody id="bodyHistorial">

            </tbody>
        </table>
        <a href="/Perfil-User" class="btn btn-secondary mt-3">Volver</a>
    </div>

    <!-- Modales -->

    <!-- Modal para citas -->
    <div class="modal fade" id="citaModal" tabindex="-1" aria-labelledby="citaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="citaModalLabel">Detalles de la Cita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="modal-bodyCitas">

                </div>
            </div>
        </div>
    </div>

    <!-- Modal para inscripciones -->
    <div class="modal fade" id="inscripcionModal" tabindex="-1" aria-labelledby="inscripcionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inscripcionModalLabel">Detalles de la Inscripción</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="modal-bodyInscripcion">

                </div>
            </div>
        </div>
    </div>

    <!-- Modal para productos -->
    <div class="modal fade" id="productoModal" tabindex="-1" aria-labelledby="productoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productoModalLabel">Detalles de la Compra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="productoModalBody">

                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script>


        // Dibujar historial

        function dibujarHistorial() {
    const tipoHistorial = $('#tipoHistorial').val(); // Obtener el valor seleccionado
    $.ajax({
        url: `/get/historial?tipo=${tipoHistorial}`, // Enviar el tipo al servidor
        method: 'GET',
        success: function(data) {
            console.log(data);
            const historiales = $('#bodyHistorial');
            const mensajeNoHistorial = $('#mensajeNoHistorial');
            historiales.empty();
            const { citas, inscripciones, ventas } = data;

            // Filtrar los datos según el tipo seleccionado
            let datosFiltrados = [];
            if (tipoHistorial === '' || tipoHistorial === 'citas') {
                datosFiltrados = datosFiltrados.concat(citas.map(cita => ({
                    tipo: 'Cita',
                    precio: cita.venta ? cita.venta.total : 'N/A',
                    fecha: cita.fechaCreacion,
                    id: cita.id
                })));
            }
            if (tipoHistorial === '' || tipoHistorial === 'inscripciones') {
                datosFiltrados = datosFiltrados.concat(inscripciones.map(inscripcion => ({
                    tipo: 'Inscripción',
                    precio: inscripcion.cursos ? inscripcion.cursos.precio : 'N/A',
                    fecha: inscripcion.fechaInscripcion,
                    id: inscripcion.id
                })));
            }
            if (tipoHistorial === '' || tipoHistorial === 'ventas') {
                datosFiltrados = datosFiltrados.concat(ventas.map(venta => ({
                    tipo: 'Compra',
                    precio: venta.total,
                    fecha: venta.fechaCreacion,
                    id: venta.id
                })));
            }

            if (datosFiltrados.length === 0) {
                historiales.closest('table').hide();
                mensajeNoHistorial.show();
            } else {
                historiales.closest('table').show();
                mensajeNoHistorial.hide();
                datosFiltrados.forEach(item => {
                    const fila = `<tr>
                        <td>${item.tipo}</td>
                        <td>${item.precio}</td>
                        <td>${item.fecha}</td>
                        <td>
                            <button class="btn btn-success" onclick="mostrarDetallesModal(${item.id}, '${item.tipo}')"><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>`;
                    historiales.append(fila);
                });
            }
        },
        error: function(error) {
            console.error('Error al obtener el historial', error);
        }
    });
}


function mostrarCitaModal(citaId) {
            $.ajax({
                url: `/get/ServicioTecnica/${citaId}`,
                method: 'GET',
                success: function(data) {
                    const bodyCitas = $('#modal-bodyCitas');
                    bodyCitas.empty();
                    const { citaHasServicios, cita, empleado } = data;
                    if (citaHasServicios.length > 0) {
                citaHasServicios.forEach(item => {
                    const servicios = `<div class="modalInfo">
                        Servicio: ${item.servicio ? item.servicio.nombre : 'N/A'} <br>
                        Técnica: ${item.tecnica ? item.tecnica.nombre : 'N/A'} <br>
                        Costo de la técnica: ${item.tecnica ? item.tecnica.precio : 'N/A'} <br>
                    </div>`;
                    bodyCitas.append(servicios);
                });
            } else {
                bodyCitas.append('<div class="modalInfo">No se encontraron servicios para esta cita.</div>');
            }
            const detalleCita = `
                <div class="modalInfo">
                    Cita programada para el ${cita.fechaCita}
                    a las ${cita.horaCita} con el empleado ${empleado.name}.
            `;
            bodyCitas.append(detalleCita);
            $('#citaModal').modal('show');
        },
        error: function(error) {
            console.error('Error al obtener los detalles de la cita', error);
        }
    });
}

        function mostrarInscripcionModal(inscripcionId) {
            $.ajax({
                url: `/get/inscripcion2/${inscripcionId}`,
                method: 'GET',
                success: function(data) {
                    const inscripcionModal = $('#modal-bodyInscripcion');
                    inscripcionModal.empty();
                    const { curso, empleado, tecnicas, inscripcion } = data;
                    if (inscripcion.estado == 0){
                        inscripcion.estado = "<span style='color: #D5B533;'>Pendiente</span>";
                    } else {
                        inscripcion.estado = "<span style='color: #39BF3D;'>Aceptado</span>";
                    }
                    const detalleInscripcion = `<div class="modalInfo">
                        Inscripción al curso <p class="" style="font-size:17px; font-weight:500; margin:0;">${curso.nombre}.</p> Estado: ${inscripcion.estado}<br> Cupos disponibles: ${curso.cupoLimite} <br><br> Inicia el ${curso.fechaInicio}
                        a las ${curso.horaInicio}. Realiza tu pago dentro de 24 horas para asegurar tu lugar en el curso, posterior a las 24 horas se cancelará la inscripción. <a href="/Home-usuario#contacto">Dirección</a> <br> Instructor oficial: ${empleado.name}
                        
                        <br><br>Técnicas a enseñar en el curso:
                    </div>`;
                    inscripcionModal.append(detalleInscripcion);
                    if (tecnicas.length > 0){
                        tecnicas.forEach(item => {
                            const tecnicasInfo = `<div class="">
                        <li style="padding:0px;margin-left:20px;">${item.tecnicas ? item.tecnicas.nombre : 'N/A'}</li>
                    </div>`;
                    inscripcionModal.append(tecnicasInfo);
                        });
                        inscripcionModal.append("<br>")
                    } else {
                        inscripcionModal.append('<div class="modalInfo">Este curso no cuenta con técnicas para enseñar.</div>');
                        console.log(tecnica);
                    }
                    $('#inscripcionModal').modal('show');
                },
                error: function(error) {
                    console.error('Error al obtener los detalles de la inscripción', error);
                }
            });
        }

        function mostrarProductoModal(ventaId) {
            $.ajax({
                url: `/get/ventaProductos/${ventaId}`,
                method: 'GET',
                success: function(data) {
                    const productoModalBody = $('#productoModalBody');
                    productoModalBody.empty();
                    const { venta, producto } = data;
                    if (producto.length > 0) {
                        producto.forEach (item => {
                            const detalleProducto = `<div class="modalInfo">
                                <img src="/storage/${item.producto.imagen}" alt="Producto" width="80" height="80" style="margin-right:10px">  
                                  ${item.producto.nombre} - $${item.producto.precio}
                                </div>`;
                                productoModalBody.append(detalleProducto);
                                console.log(producto)
                            });
                    } else {
                        productoModalBody.append('<div class="modalInfo">No se encontraron productos para esta venta.</div>');
                    }
                    const infoExtra = `<div class="modalInfo text-center">
                        Compra con ${producto.length} productos.
                        <br>Costo total: $${venta.total}<br>
                    </div>`;
                    productoModalBody.append(infoExtra);
                    $('#productoModal').modal('show');
                },
                error: function(error) {
                    console.error('Error al obtener los detalles del producto', error);
                }
            });
        }


        $(document).ready(function(){

            dibujarHistorial();

            function separadorHidden(){
                var cuentaLi = document.getElementById("cuenta");
                var carrito = document.getElementById("carrito");
                var separador = document.getElementById("separador");
                if (window.innerWidth <= 992) {
                    $('.vertical-separator').css('visibility', 'hidden');
                    $('#carrito').css('marginBottom', '20px');
                } else {
                    $('.vertical-separator').css('visibility', 'visible');
                    $('#carrito').css('marginBottom', '0');
                }
            }
            window.addEventListener('resize', separadorHidden);
            separadorHidden();
        });

        // Pantalla de carga
        var loader = document.getElementById("contenedor_carga");
        var navbar = document.getElementById("navbar");
        window.addEventListener('load', function(){
            $('#navbar').css('visibility', 'visible');
            loader.style.display = "none";
        })
    </script>
</body>
</html>