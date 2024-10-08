<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');


body, html {
    margin: 0;
    padding: 0;
    background-image: url('/resources/img/home/low-poly-grid-haikei.svg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    min-height: 100vh;
    overflow-x: hidden;
}


#navbar {
    font-family: "Josefin Sans", sans-serif !important;
}

label, p, input, button, h1, h2, h3, a, h4, h5, li{
    font-family: "Josefin Sans", sans-serif !important;
}

.hiddenX{
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
    .custom-alerts {
        background-color: #e0e0e0; /* Color rosado */
        border: 1px solid #e0e0e0;
        color: #000000;
        border-radius: 5px;
        padding: 20px;
        font-family: "Josefin Sans", sans-serif;
    }
    .custom-alerts .alert-heading {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .custom-alerts p {
        font-size: 1.1rem;
        margin-bottom: 0;
    }
    .custom-alerts hr {
        border-top: 2px solid #000000;
    }
    .main-container {
            font-family: "Josefin Sans", sans-serif !important;
            display: flex;
            justify-content: space-between;
            padding: 50px;
        }

        .table-container {
            flex: 3;
            padding: 16px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .summary-container {
            flex: 1;
            padding: 16px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .footer-pers{
      padding: 40px;
      margin-top:70px;
    }

        .total-price {
            font-size: 1.5em;
            color: #000;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }

        .table-container img {
            width: 70px; /* Ajusta esta anchura según tus necesidades */
            height: auto; /* Mantiene la proporción de la imagen */
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .btn-buy {
            margin-top: 20px;
            font-size: 1.2em;
            padding: 10px 20px;
        }


        /*Footer*/
.footer {
    background-color: #000000;
    color: white;

    width: 100%;
}
.footer a {
    color: white;
}
.footer .links,
.footer .horario {
    list-style: none;
    padding: 0;
}
.footer .icons a {
    margin: 0 10px;
    color: white;
    font-size: 24px;
}
.footer .row > div {
    margin-bottom: 20px;
}
.footer .container-fluid {
    padding: 0 40px;
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
        .btn-light:hover{
      background-color:#fa3284;
    }
    @media (max-width: 480px) {
    .imgnavbar{
        width:200px;
        height: 30px;

    }}
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
              <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#contacto" style="color: #000000;">Contacto</i></a>
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

<br><br><br><br>
  @csrf

  <div class="row">
    <div class="col-12 d-flex flex-column">
        <div id="mensajeCarritoVacio" class="text-center custom-alerts" style="display: none;">
            <h4 class="alert-heading">¡No hay productos agregados a tu carrito actualmente!</h4>
            <p>Actualmente no tienes productos en tu carrito. Agrega productos para poder ver tu carrito.</p>
            <hr>
            <p class="mb-0">Mientras tanto, puedes explorar otros servicios y productos que ofrecemos.</p>
                <br>
                <br>
                <br>
                <br>
                <br>
        </div>
        <div id="buscadoridcarrito" class="input-group mb-3" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 25px; padding: 10px;">
            <input type="text" class="form-control" id="buscadorId" placeholder="Buscar por nombre de producto" style="border: none; background-color: transparent;">
            <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2" style="background-color: transparent; border: none;">
                <i class="fas fa-search" style="color: #6c757d;"></i>
            </span>
            </div>
        </div>
        <div class="table-responsive table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Cantidad seleccionada</th>
                        <th scope="col">Cantidad disponible</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody id="carritoTabla">
                    <!-- Aquí se llenarán los datos de la tabla -->
                </tbody>
            </table>
        </div>
        <div class="summary-container mt-3">
            <div id="costo-total" class="total-price"></div>
            <button id="comprar" class="btn btn-success btn-buy">Comprar</button>
            <button class="btn btn-danger" style="margin-top:15px;" id="borrarTodo">Eliminar todo <i class="fa-solid fa-trash"></i></button>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      <!-- FOOTER -->
      <footer id="contacto" class="footer" class="fonts3">
        <div style="background-color: black !important; margin-bottom: -30px;" class="col-12 text-center mt-2">
        <div class="icons">
            <a href="https://www.facebook.com/profile.php?id=100066839301986" class=""><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/tutti_belli_trc_studio/" class=""><i class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/5218713826767" class=""><i class="fa-brands fa-whatsapp"></i></a>
        </div>
          <p style="margin-bottom: 30px;">&copy;Copyright Tutti Belli Studio. Todos los derechos reservados
          <br>Diseñada y desarrollada by Deiters</p>
      </div>
    </footer>

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
            <div id="alertaTexto">La cantidad maxima para comprar es de 249 productos por venta.</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>
    var total = 0;
    var productosComprados = [];
    var productosYaDibujados = [];
    //Contador para el numero de veces que se repite el producto en la lista seleccionada
    var cont2;
    //Contador para id dinamico
    // var cont1;
    
   
    
    function dibujarCarrito() {
    $.ajax({
        url: '/get/carrito',
        method: 'GET',
        success: function(data) {
            const carrito = $('#carritoTabla');
            const costoTotal = $('#costo-total');
            const resumen = $('.summary-container');
            const tabla = $('.table-container');
            const mensajeVacio = $('#mensajeCarritoVacio');
            const buscador = $('#buscadorId');
            const buscadorocultar= $('#buscadoridcarrito');
            

            carrito.empty();

            if (data.length === 0) {
                tabla.hide();
                resumen.hide();
                mensajeVacio.show();
                buscadorocultar.hide();
                
            } else {
                tabla.show();
                resumen.show();
                mensajeVacio.hide();
                buscadorocultar.show();
                

                let cont2 = 0;

                // Función para filtrar productos según el valor del buscador
                function filtrarProductos() {
                    let filtro = buscador.val().toLowerCase();
                    let productosFiltrados = data.filter(producto => 
                        producto.nombre.toLowerCase().includes(filtro)
                    );

                    renderizarProductos(productosFiltrados);
                }

                function renderizarProductos(productos) {
                    carrito.empty();
                    productosComprados = [];
                    productosYaDibujados = [];
                    total = 0;

                    productos.forEach(producto => {
                        cont2 = 1;
                        let idCantidad = 'cantidad' + producto.id;

                        productosComprados.push({
                            id: producto.id,
                            nombre: producto.nombre,
                            descripcion: producto.descripcion,
                            precio: producto.precio
                        });

                        if (!productosYaDibujados.includes(producto.id)) {
                            productosYaDibujados.push(producto.id);

                            const item = `
                            <tr>
                                <td><img src="/storage/${producto.imagen}" alt="${producto.nombre}"></td>
                                <td>${producto.nombre}</td>
                                <td>${producto.descripcion}</td>
                                <td>$${producto.precio}</td>
                                <td id="${idCantidad}">1</td>
                                <td>${producto.cantidadEnStock}</td>
                                <td>
                                    <input type="number" min="1" id="cantidad_input_${producto.pivot.id}" value="1">
                                    <button class="btn btn-danger" onclick="carritoDelete(${producto.pivot.id})"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>`;
                            carrito.append(item);
                            $('#cantidad_input_' + producto.pivot.id).on('input', function() {
                                const max = parseInt($('#' + idCantidad).text());
                                if (parseInt($(this).val()) > max) {
                                    $(this).val(max);
                                }
                            });
                        } else {
                            cont2 = parseInt($('#' + idCantidad).text()) + 1;
                            $('#' + idCantidad).text(cont2);
                        }

                        total += producto.precio;
                    });

                    costoTotal.text('Costo Total: $' + total);
                }

                // Inicializar con todos los productos
                renderizarProductos(data);

                // Añadir evento de búsqueda
                buscador.on('input', filtrarProductos);
            }
        },
        error: function(error) {
            console.log(error);
            alert('Hubo un error al obtener los productos del carrito');
        }
    });
}
 function carritoDelete(pivotId) {
    const cantidadEliminar = parseInt($(`#cantidad_input_${pivotId}`).val(), 10); // Obtener la cantidad del input

    console.log(`Solicitando eliminar ${cantidadEliminar} unidades del producto con pivotId: ${pivotId}`);

    if (cantidadEliminar > 0) {
        $.ajax({
            url: `/carrito/eliminar/${pivotId}`,
            method: 'POST', // Usamos POST como método de solicitud
            data: {
                _token: $('input[name="_token"]').val(), // Incluimos el token CSRF para seguridad
                cantidad: cantidadEliminar // Enviamos la cantidad a eliminar
            },
            success: function(response){
                console.log("Respuesta del servidor:", response);
                location.reload(); // Recargar la página para reflejar los cambios
            },
            error: function(error){
                console.log("Error al eliminar producto:", error);
            }
        });
    } else {
        console.log("Cantidad a eliminar es inválida:", cantidadEliminar);
        alert("La cantidad a eliminar debe ser mayor a 0.");
    }
}


            // Pantalla de carga
            var loader = document.getElementById("contenedor_carga");
            var navbar = document.getElementById("navbar");
            window.addEventListener('load', function(){
                $('#navbar').css('visibility', 'visible');
                loader.style.display = "none";
            });

$(document).ready(function(){

    $('#carritoxd').empty();
$.get('/carrito/contar-productos', function(data) {
  $('#carrito-count').text(data.cantidad);
});

  dibujarCarrito();

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

    // Función para obtener la fecha y hora actual en formato DATETIME y zona horaria de México
    function obtenerFechaHoraActualMexico() {
        // Crear una nueva instancia de la fecha actual
        let fechaActual = new Date();

        // Convertir la fecha actual a la zona horaria de México
        let opciones = {
            timeZone: 'America/Mexico_City',
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
        };
        let fechaHoraMexico = fechaActual.toLocaleString('en-CA', opciones);

        // Formatear la fecha y hora en formato DATETIME
        let [fecha, hora] = fechaHoraMexico.split(', ');
        let [anio, mes, dia] = fecha.split('-');
        let fechaHoraFormatoDATETIME = `${anio}-${mes}-${dia} ${hora}`;

        return fechaHoraFormatoDATETIME;
    }

// Guardar la fecha y hora actual en una variable
    let fechaHoraActualMexico = obtenerFechaHoraActualMexico();

// Mostrar la fecha y hora actual en formato DATETIME y zona horaria de México
    console.log(fechaHoraActualMexico);
    // Scripts aquí
    const randomDateTime = '2023-08-02 14:35:47';

    

    $('#comprar').on('click',function (){
    // Mostrar la pantalla de carga
        console.log(productosComprados);
    $('#contenedor_carga').css('display', 'block');
        if(productosComprados.length > 0){
            $.ajax({
                url:'/crearCompra',
                method: 'POST',
                data:
                    {
                        _token: $('input[name="_token"]').val(),
                        total: total,
                        productosComprados: productosComprados,
                        // fechaVenta: fechaHoraActualMexico
                        fechaVenta: fechaHoraActualMexico
                    },
                success: function (response){
                // Ocultar la pantalla de carga
                    console.log(response)
                $('#contenedor_carga').css('display', 'none');
                    mostrarAlerta('Compra realizada exitosamente.', 'alert-success','check-circle-fill')
                    productosComprados = [];
                    total = 0;
                    dibujarCarrito();
                    setTimeout(function() {
                        window.location.href = '/Historial-User';
                    }, 1500);
                },
                error: function (response){
                    console.log(response);
                    var mensajeError = response.responseJSON.message;
                    mostrarAlerta(mensajeError, 'alert-danger','exclamation-triangle-fill')

                // Ocultar la pantalla de carga
                $('#contenedor_carga').css('display', 'none');
                }
            })
        }else{
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            mostrarAlerta('Debes de agregar productos al carrito.', 'alert-warning','exclamation-triangle-fill')
        }

    });



    $('#borrarTodo').on('click', function() {
    if (confirm('¿Estás seguro de que quieres eliminar todos los productos del carrito?')) {
        $.ajax({
            url: '/carrito/eliminar-todo',
            method: 'POST',
            data: {
                _token: $('input[name="_token"]').val()
            },
            success: function(response) {
                console.log(response);
                mostrarAlerta('Todos los productos han sido eliminados del carrito.', 'alert-success', 'check-circle-fill');
                setTimeout(function() {
                    location.reload();
                }, 1400); 
            },
            error: function(error) {
                console.log(error);
                mostrarAlerta('Hubo un error al eliminar los productos del carrito.', 'alert-danger', 'exclamation-triangle-fill');
            }
        });
    }
});

});



</script>
</body>
</html>
