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
    </style>
</head>
<body class="hiddenX">
    <div id="contenedor_carga"></div>

    <!-- NAVBAR / ENCABEZADO -->
    <nav style="background: #f8d7da !important;" id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Home-usuario">
                <img src="/resources/img/dashboard-navbar/Letras Tutti.png" alt="Tutti Belli Studio" width="300" height="60">
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
                        <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#cursos" style="color: #000000;">Cursos</a>
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
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Día</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Servicio A</td>
                    <td>$50</td>
                    <td>2024-07-01</td>
                    <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModal">Ver detalles</button></td>
                </tr>
                <tr>
                    <td>Servicio B</td>
                    <td>$75</td>
                    <td>2024-07-02</td>
                    <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModal">Ver detalles</button></td>
                </tr>
                <tr>
                    <td>Compra</td>
                    <td>$100</td>
                    <td>2024-07-03</td>
                    <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailsModalProducts">Ver detalles</button></td>
                </tr>
            </tbody>
        </table>
        <a href="/Perfil-User" class="btn btn-secondary mt-3">Volver</a>
    </div>

    <!-- Modales -->
     <!-- ESTE MODAL SERA PARA LAS CITAS -->
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Detalles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>servicio</th>
                                <th>tecnica</th>
                                <th>empleado</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>cejas,ojos,labios</td>
                                <td>tec1,tec2,tec3</td>
                                <td>anyelo</td>
                                <td>finalizada</td>

                            </tr>
                            <!-- ESTE MODAL CON TABLA ESTA ECHO PRO SI QUIERES SER MAS ESPECIFICO EN CADA DETALLE DEL HISTORIAL YA DEPENDE DE COMO LO VEAN -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- ESTE MODAL SERA PARA LOS PRODUCTOS -->
    <div class="modal fade" id="detailsModalProducts" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Detalles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>imagen</th>
                                <th>descripcion</th>
                                <th>cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>aqui ira la imagen</td>
                                <td>ajfbsjabfjklsabf</td>
                                <td>2</td>
                            </tr>
                            <!-- ESTE MODAL CON TABLA ESTA ECHO PRO SI QUIERES SER MAS ESPECIFICO EN CADA DETALLE DEL HISTORIAL YA DEPENDE DE COMO LO VEAN -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
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