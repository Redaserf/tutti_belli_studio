<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar - Servicio</title>
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
        .tab-content{
    padding: 36px;
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
            height: 100vh;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .image-label img {
            padding-bottom: 20px;
            border-radius: 15px;

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

.hidden{
    display: none;
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

            <div class="menu-bar table-responsive">
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
    @csrf
    <div class="col-12">
        <div class="container container-div">
            <div class="container full-height d-flex justify-content-center align-items-center">
                <div class="row w-100">
                    <div class="row ">
                        <H2>Agregar Servicio</H2>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre del servicio">
                            <label for="AddServiceName">Nombre del Servicio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <button id="agregarTecnica" type="button" class="btn btn-dark btn-block w-100" onclick="">
                                Agregar Tecnica
                            </button>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Tecnicas -->
    <div class="modal fade modal-xl" data-bs-backdrop="static" id="tecnicasModal" tabindex="-1" aria-labelledby="tecnicasModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tecnicasModalLabel">Tecnica</h5>
                </div>
                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombreTecnica" placeholder="nombre de la técnica">
                        <label for="nombreTecnica">Nombre de la técnica</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="precioTecnica" placeholder="precio de la técnica" min="0">
                        <label for="precioTecnica">Precio de la técnica</label>
                    </div>

                    <div class="mb-3">
                        <label for="descripcionTecnica">Descripción de la técnica</label>
                        <textarea class="form-control" id="descripcionTecnica" rows="7" style="resize: none;"></textarea>
                    </div>
                    <div class="mb-3">
                        <button id="botonProductos" class="btn btn-dark btn-block w-100">Productos utilizados en la tecnica</button>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="cerrarTecnica" class="btn btn-secondary" data-bs-dismiss="modal" onclick="cerrar()">Cerrar</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Productos -->
    <div class="modal fade modal-xl" data-bs-backdrop="static" id="productosModal" tabindex="-1" aria-labelledby="productosModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="productosModalLabel">Productos</h5>
                </div>
                <div class="modal-body product-container" id="contenedorProductos">

                </div>
                <div class="modal-footer">
                    <button type="button" id="cerrarProductos" class="btn btn-secondary" data-bs-dismiss="modal" onclick="">Cerrar</button>
                    <button type="button" id="guardarProductos" class="btn btn-primary">Guardar</button>
                </div>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>

    $('#productosModal').on('hide.bs.modal', function (e) {
        console.log('El modal está a punto de cerrarse');
    });

    let selectedProducts = [];
    let cantidadesProducts = [];
    var nombreServicio;
    let tecnicas = [];
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

    dibujarProductos();

    // Fin scripts para todas las vistas


    //Script para agregar las tecnias
    $('#agregarTecnica').on('click',function (){
        nombreServicio = $('#nombre').val();
        console.log(nombreServicio)

        if(nombreServicio.length >0){
            $('#tecnicasModal').modal('show');
        }else{
            alert('Debes agregar nombre para la tecnica')
        }
    });

    $('#guardarTecnica').on('click', function (){
        if($('#nombreTecnica').val() !== "" && $('#precioTecnica').val() >0 && $('#descripcionTecnica').val() !== "" && selectedProducts.length > 0){
            let tecnicaPorGuardar = {nombre: $('#nombreTecnica').val(),precio: $('#precioTecnica').val(),descripcion: $('#descripcionTecnica').val()};
            console.log(tecnicaPorGuardar);
            tecnicas.push(tecnicaPorGuardar);

            console.log(nombreServicio);

            $('#nombre').val('');
            $('#precioTecnica').val('');
            $('#descripcionTecnica').val('');

            $('#agregarTecnica').prop('disabled', true);
            $('#agregarTecnica').text('tecnica seleccionada');

            $('#guardarTecnica').modal('hide');

        }
        else{

            alert('completa los campos faltantes')
        }

    });




    //Script para agregar servicio
    $('#AddServiceButon').on('click', function(e) {
        e.preventDefault();

        let serviceName = $('#nombre').val();

        $.ajax({
            url: '/RegistroServicio',
            type: 'POST',
            data: {
                _token: $('input[name="_token"]').val(),
                nombre: serviceName
            },
            success: function(response) {
                // alert("Servicio agregado exitosamente");
                window.location.href = '/Agregar-Tecnica';
                // $('#nombre').val('');
            },
            error: function(error) {
                alert('Ocurrió un error al agregar el servicio');
                $('#nombre').val('');
            }
        });
    });
    // Fin script para agregar servicios

    // Fin document.ready
});

    function dibujarProductos() {
        $.ajax({
            url: '/productosCitas',
            method: 'GET',
            success: function(data) {
                const productos = $('#contenedorProductos');
                productos.empty();
                data.forEach(producto => {
                    let cont = producto.id;
                    let idDinamico = 'cantidad' + cont;
                    // let idBoton = 'boton'+cont;
                    const card = `
                    <div class="product-card">
                        <img src="/storage/${producto.imagen}" alt="${producto.nombre}" class="product-image">
                        <div class="product-info">
                            <h2 class="product-title">${producto.nombre}</h2>
                            <p class="product-description">${producto.descripcion}</p>
                            <p class="product-price">$${producto.precio}</p>
                            <p class="product-stock">Stock: ${producto.cantidadEnStock}</p>
<!--                            obtiene como data-stock el valor del stock del producto-->
                            <input style="margin-bottom:10px;" type="number" class="form-control" id="${idDinamico}" name="cantidadUtilizar" data-stock="${producto.cantidadEnStock}" min="0">
                            <label for="${idDinamico}">Cantidad a utilizar</label>
                        </div>
                        <button type="button" style="margin-bottom: 10px;" id="seleccionar" name="seleccionarBoton"  class="btn btn-outline-primary" data-id="${producto.id}">Seleccionar para añadir a la tecnica</button>
                    </div>
                `;
                    productos.append(card);
                });
            }
        });
    }

    $('#cerrarProductos').on('click',function (){
        $('#nombreTecnica').val('');
        $('#precioTecnica').val('');
        $('#descripcionTecnica').val('');

        selectedProducts = [];
        cantidadesProducts = [];
        tecnicas = [];

        // Reiniciar todos los campos de cantidad
        $('input[name="cantidadUtilizar"]').val('');
        // Habilitar todos los botones de seleccionar
        $('button[name="seleccionarBoton"]').prop('disabled', false).text('Seleccionar para añadir a la técnica');
    });

    function cerrar() {
        nombreServicio = "";

        $('#nombre').val('');
        $('#nombreTecnica').val('');
        $('#precioTecnica').val('');
        $('#descripcionTecnica').val('');

        selectedProducts = [];
        cantidadesProducts = [];
        tecnicas = [];

        // Reiniciar todos los campos de cantidad
        $('input[name="cantidadUtilizar"]').val('');
        // Habilitar todos los botones de seleccionar
        $('button[name="seleccionarBoton"]').prop('disabled', false).text('Seleccionar para añadir a la técnica');

    }


    $('#guardarProductos').on('click', function() {
        if(selectedProducts.length > 0) {

            // Mostrar la pantalla de carga
        $('#contenedor_carga').css('display', 'block');

            // $('#agregarTecnica').prop('disabled', true);
            // $('#agregarTecnica').text('Productos seleccionados');
            //
            // console.log(selectedProducts);
            //
            // $('#productosModal').modal('hide');
            // $('#tecnicasModal').modal('hide');

            if($('#nombreTecnica').val() !== "" && $('#precioTecnica').val() > 0 && $('#descripcionTecnica').val() !== "" && selectedProducts.length > 0){
                let tecnicaPorGuardar = {
                    nombre: $('#nombreTecnica').val(),
                    precio: $('#precioTecnica').val(),
                    descripcion: $('#descripcionTecnica').val()
                };
                // console.log(tecnicaPorGuardar);
                // tecnicas.push(tecnicaPorGuardar);
                // console.log(tecnicas);

                // console.log(nombreServicio);

                $('#nombreTecnica').val('');
                $('#precioTecnica').val('');
                $('#descripcionTecnica').val('');

                console.log(nombreServicio)
                console.log(tecnicaPorGuardar)
                console.log(selectedProducts)
                console.log(cantidadesProducts)

                $.ajax({
                    url: '/crearServicioConTecnicas',
                    type: 'POST',
                    data: {
                        _token: $('input[name="_token"]').val(),
                        nombreServicio: nombreServicio,
                        tecnica: tecnicaPorGuardar,
                        arregloProductos: selectedProducts,
                        arregloCantidades: cantidadesProducts,
                    },
                    success: function(response) {
                    // Ocultar la pantalla de carga
                    $('#contenedor_carga').css('display', 'none');
                        alert("Servicio junto con su técnica agregado con éxtio.");
                        // location.reload();  // Refresca la página al aceptar el alert
                        window.location.href = '/Ver-Servicios';
                    },
                    error: function(error) {
                    // Ocultar la pantalla de carga
                    $('#contenedor_carga').css('display', 'none');
                        console.log(error)
                        alert('Parece que hubo un error, vuelve a intentarlo más tarde.');
                        // location.reload();  // Refresca la página al aceptar el alert
                    }
                });

                $('#guardarTecnica').modal('hide');
            } else {
                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                alert('Completa los campos faltantes');
            }

            // Reiniciar todos los campos de cantidad
            $('input[name="cantidadUtilizar"]').val('');
            // Habilitar todos los botones de seleccionar
            $('[name="seleccionar"]').prop('disabled', false).text('Seleccionar para añadir a la técnica');

        } else {
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            alert('Completa los datos correctamente');
        }
    });

    $(document).on('click', '#seleccionar', function() {
        //obtener id dinamico
        let productId = $(this).data('id');
        let idDinamico = 'cantidad' + productId;
        let cantidad = $('#' + idDinamico).val();

        let stock = $('#' + idDinamico).data('stock');  // Obtener el stock del atributo data-stock

        // Comprobar que la cantidad ingresada sea mayor que 0 y menor o igual a la cantidad en stock
        if (cantidad > 0 && cantidad <= stock) {
            selectedProducts.push(productId);
            cantidadesProducts.push(cantidad);

            $(this).prop('disabled', true);
            $(this).text('Seleccionado');

            console.log(selectedProducts);
            console.log(cantidadesProducts);
        } else {
            alert('Inserte una cantidad válida que sea menor o igual al stock disponible');
        }
    });



    $('#botonProductos').on('click',function (){
        if($('#nombreTecnica').val() !== "" && $('#precioTecnica').val() >0 && $('#descripcionTecnica').val() !== ""){
            $('#productosModal').modal('show');

        }
        else{

            alert('completa los campos faltantes')
        }
    });

</script>
</body>
</html>
