<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial del usuario</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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

        .modalInfo{
            padding: 16px;
        }@media (max-width: 480px) {
    .imgnavbar{
        width:200px;
        height: 45px;
    
    }}

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
    

            /* Carrito css */

@media (max-width: 768px) {
  #carrito {
    font-size: 0.9rem;
    margin-right: 15px;
  }

  #carrito-count {
    top: 0;
    right: 0;
    transform: translate(50%, -50%);
    font-size: 12px;
  }
}

@media (min-width: 769px) {
  #carrito {
    font-size: 1rem;
    margin-right: 30px;
  }

  #carrito-count {
    top: -10px;
    right: -15px;
    font-size: 13px;
  }
}

    /* Fin carrito css */
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

                <a id="carrito" style="margin-right: 30px; position: relative;" class="nav-link active texto1" aria-current="page" href="/Carrito-User" style="color: #000000;">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span id="carrito-count" style="">
                        <!-- Aquí se insertará la cantidad de productos -->
                    </span>
                  </a>
        
                <a href="/Reservacion-User" style="margin-right:20px;">
                    <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
                </a>
            </div>
        </div>
    </nav>

    <!-- ESTA TABLA ES PARA VER POR ENCIMA EL HISTORIAL ALGO BASICO NO TAN AMONTONADO -->
    <div class="table-container mt-5">
        <h2>Historial</h2>
        <table id="tablaHistorial" class="table table-striped">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Fecha</th>
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
                    <h5 class="modal-title" id="productoModalLabel">Detalles de la compra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="productoModalBody">

                </div>
            </div>
        </div>
    </div>
     <!-- alerta -->

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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script>


        // Dibujar historial

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
            //alertas

            function dibujarHistorial() {
            $.ajax({
                url: '/get/historial',
                method: 'GET',
                success: function(data) {
                    const tabla = $('#tablaHistorial').DataTable();
                    tabla.clear(); // Limpiar la tabla antes de agregar nuevas filas
                    const { citas, inscripciones, ventas } = data;

                    if (citas.length === 0 && inscripciones.length === 0 && ventas.length === 0) {
                        tabla.row.add([
                            '<td colspan="3" class="text-center">No hay historial disponible.</td>'
                        ]).draw();
                    } else {
                        citas.forEach(cita => {
                            let venta;
                            cita.citas_has_servicios.forEach(servicio => {
                                venta = servicio.venta;
                            });
                            let color = '';
                            if (cita.estadoCita == null) {
                                color = '#A81416'; // Rojo para expiradas
                            } else if (cita.estadoCita == 1) {
                                color = '#39BF3D'; // Verde para aceptadas
                            } else {
                                color = '#D5B533'; // Amarillo para pendientes
                            }
                            const infoCitas = `<tr>
                                <td><span style='color: ${color}; font-weight:600;'>Cita</span></td>
                                <td>$${venta ? venta.total : 'N/A'}</td>
                                <td>${cita ? cita.fechaCita : 'N/A'}</td>
                                <td>
                                    <button class="btn btn-success" onclick="mostrarCitaModal(${cita.id})"><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>`;
                            tabla.row.add($(infoCitas)).draw(false);
                        });

                        inscripciones.forEach(inscripcion => {
                            let estadoClase = '';
                            let color = '';
                            if (inscripcion.estado == null && inscripcion.canceladoPorAdmin == 1) {
                                estadoClase = 'Inscripción';
                                color = '#A81416'; // Rojo (Inscripción cancelada por administrador)
                            } else if (inscripcion.estado == null && inscripcion.canceladoPorAdmin == null) {
                                estadoClase = 'Inscripción';
                                color = '#39BF3D'; // Verde (curso finalizado y pagado)
                            } else if (inscripcion.estado == 1) {
                                estadoClase = 'Inscripción';
                                color = '#39BF3D'; // Verde para aceptadas
                            } else {
                                estadoClase = 'Inscripción';
                                color = '#D5B533'; // Amarillo para pendientes
                            }
                            const infoInscripciones = `<tr>
                                <td><span style='color: ${color}; font-weight:600;'>${estadoClase}</span></td>
                                <td>$${inscripcion.cursos ? inscripcion.cursos.precio : 'N/A'}</td>
                                <td>${inscripcion ? inscripcion.fechaInscripcion : 'N/A'}</td>
                                <td>
                                    <button class="btn btn-success" onclick="mostrarInscripcionModal(${inscripcion.id})"><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>`;
                            tabla.row.add($(infoInscripciones)).draw(false);
                        });

                        ventas.forEach(venta => {
                            let estadoVentaClase = '';
                            let color = '';
                            if (venta.estadoVenta == 0) {
                                estadoVentaClase = 'Compra';
                                color = '#A81416'; // Rojo para canceladas
                            } else if (venta.estadoVenta == 1) {
                                estadoVentaClase = 'Compra';
                                color = '#39BF3D'; // Verde para aceptadas
                            } else {
                                estadoVentaClase = 'Compra';
                                color = '#D5B533'; // Amarillo para pendientes
                            }
                            const infoVentas = `<tr>
                                <td><span style='color: ${color}; font-weight:600;'>${estadoVentaClase}</span></td>
                                <td>$${venta.total}</td>
                                <td>${venta ? venta.fechaVenta : 'N/A'}</td>
                                <td>
                                    <button class="btn btn-success" onclick="mostrarProductoModal(${venta.id})"><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>`;
                            tabla.row.add($(infoVentas)).draw(false);
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
                    const { citaHasServicios, cita, empleado, venta } = data;
                    if (citaHasServicios.length > 0) {
                citaHasServicios.forEach(item => {
                    const servicios = `<div class="modalInfo">
                        Servicio: ${item.servicio ? item.servicio.nombre : 'N/A'} <br>
                        Técnica: ${item.tecnica ? item.tecnica.nombre : 'N/A'} <br>
                        Costo de la técnica: $${item.tecnica ? item.tecnica.precio : 'N/A'} <br>
                    </div>`;
                    bodyCitas.append(servicios);
                });
            } else {
                bodyCitas.append('<div class="modalInfo">No se encontraron servicios para esta cita.</div>');
            }

            let detalleCita = '';
            if (cita.estadoCita == 1 && venta && venta.estadoVenta == 1) {
                detalleCita = `
                <div class="modalInfo">
                    Su cita programada para el ${cita.fechaCita}
                    a las ${cita.horaCita} con el empleado ${empleado.name} <span style='color: #39BF3D; font-weight:600;'>ha finalizado con éxito.</span><br><br>
                </div>`;
                console.log("Cita:", cita);
                console.log("Venta:", venta);
            } else if (cita.estadoCita == 1) {
                detalleCita = `
                <div class="modalInfo">
                    Cita programada para el ${cita.fechaCita}
                    a las ${cita.horaCita} con el empleado ${empleado.name}. <br><br>
                    <span style='color: #39BF3D; font-weight:600;'>Su cita ha sido aceptada.</span> Lo esperamos en la sucursal a la fecha y hora acordada.
                </div>`;
                console.log("Cita:", cita);
                console.log("Venta:", venta);
            } else if (cita.estadoCita == null) {
                detalleCita = `
                <div class="modalInfo">
                    <span style='color: #A81416; font-weight:600;'>Su cita ha sido cancelada.</span> Para más información, ponte en contacto con nosotros mediante WhatsApp.
                </div>`;
            } else {
                detalleCita = `
                <div class="modalInfo">
                    Cita programada para el ${cita.fechaCita}
                    a las ${cita.horaCita} con el empleado ${empleado.name}. <br><br>
                    <span style='color: #D5B533; font-weight:600;'>Su cita está pendiente de ser aceptada.</span> Para más información, ponte en contacto con nosotros mediante WhatsApp.
                </div>`;
            }

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

                    if (curso.activo == 0 && inscripcion.estado == null) {
                        const cursoFinalizado = `<div class="modalInfo">
                            Curso ${curso.nombre}.<br> <p syles="font-weight:600;">Finalizado.</p> Tuvo comienzo el pasado ${curso.fechaInicio}
                        a las ${curso.horaInicio}. Para más información al respecto, ponte en <a href="/Home-usuario#contacto">contacto con nosotros</a> 
                        <br><br>Técnicas enseñadas en el curso:
                        </div>`;

                    inscripcionModal.append(cursoFinalizado);
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
                    }
                    else if (curso.activo == 1 && inscripcion.estado == null) {
                        const inscripcionCancelada = `<div class="modalInfo">
                            Curso ${curso.nombre}.<br> <p syles="font-weight:600;">Inscripción cancelada.</p> Para más información al respecto, ponte en <a href="/Home-usuario#contacto">contacto con nosotros.</a> 
                        </div>`;

                    inscripcionModal.append(inscripcionCancelada);
                    }
                    else {
                        if (inscripcion.estado == 0){
                            inscripcion.estado = "<span style='color: #D5B533;'>Pendiente</span>";
                        } else {
                            inscripcion.estado = "<span style='color: #39BF3D;'>Aceptado</span>";
                        }
                        const detalleInscripcion = `<div class="modalInfo">
                            Inscripción al curso <p class="" style="font-size:17px; font-weight:500; margin:0;">${curso.nombre}.</p> Estado: ${inscripcion.estado}<br> Cupos disponibles: ${curso.cupoLimite} <br><br> Inicia el ${curso.fechaInicio}
                            a las ${curso.horaInicio}. Realiza tu pago dentro de 24 horas para asegurar tu lugar en el curso, posterior a las 24 horas se cancelará la inscripción. <a href="/Home-usuario#contacto">Dirección</a> <br> Instructor oficial: ${empleado ? empleado.name : 'No asignado'}
                            
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
                    let productosYaDibujados = []; // Para rastrear los productos ya dibujados
                    let productosUnificados = {}; // Para unificar cantidades
                    let totalProductos = 0;

                    // Unificar productos por ID y acumular cantidades
                    producto.forEach(item => {
                        if (productosUnificados[item.producto.id]) {
                            productosUnificados[item.producto.id].cantidad += 1; // Incrementar la cantidad
                        } else {
                            productosUnificados[item.producto.id] = {
                                ...item.producto,
                                cantidad: 1
                            };
                        }
                        totalProductos += 1;
                    });

                    if (producto.length > 0) {
                    // Dibujar productos unificados
                    for (let id in productosUnificados) {
                        const item = productosUnificados[id];
                        const detalleProducto = `<div class="modalInfo">
                            <img src="/storage/${item.imagen}" alt="Producto" width="80" height="80" style="margin-right:10px">  
                            ${item.nombre} - $${item.precio} |
                            Cantidad: ${item.cantidad}
                        </div>`;
                        productoModalBody.append(detalleProducto);
                    }
                    } else {
                        productoModalBody.append('<div class="modalInfo">No se encontraron productos para esta venta.</div>');
                    }
                    const infoExtra = `<div class="modalInfo text-center">
                        Compra con un total de ${totalProductos} productos.
                        <br>Costo total: $${venta.total}<br>
                    </div>`;
                    productoModalBody.append(infoExtra);
                    if (venta.estadoVenta == null) {
                        const pendienteRecoger = `<div class="modalInfo text-center">
                        <span style='color: #D5B533; font-weight:600;'>Pendiente de recoger.</span> Para más información acceda al correo que se le generó anteriormente.
                    </div>`;
                    productoModalBody.append(pendienteRecoger);
                    } else if (venta.estadoVenta == 1) {
                        const compraAceptada = `<div class="modalInfo text-center">
                        <span style='color: #39BF3D; font-weight:600;'>Compra aceptada y entregada con éxito.</span> Si no se le entregó su pedido o hubo algún problema con este, favor de ponerse en contacto con nosotros.
                    </div>`;
                    productoModalBody.append(compraAceptada);
                    } else {
                        const compraRechazada = `<div class="modalInfo text-center">
                        <span style='color: #A81416; font-weight:600;'>Compra cancelada.</span>
                    </div>`;
                    productoModalBody.append(compraRechazada);
                    }
                    $('#productoModal').modal('show');
                },
                error: function(error) {
                    console.error('Error al obtener los detalles del producto', error);
                }
            });
        }


        $(document).ready(function(){

            $('#carritoxd').empty();
            $.get('/carrito/contar-productos', function(data) {
            $('#carrito-count').text(data.cantidad);
            });

            let tabla = $('#tablaHistorial').DataTable({
                "pageLength": 8, // Número de filas por página
                "searching": true, // Activa la búsqueda
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontró historial",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });


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