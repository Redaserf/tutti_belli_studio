<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Productos</title>
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



/* Aquí tus estilos */

.fonts3{
  font-family: "Josefin Sans", sans-serif !important;
}

#navbar{
  font-family: "Josefin Sans", sans-serif !important;
}

label{
  font-family: "Josefin Sans", sans-serif !important;
}
p{
  font-family: "Josefin Sans", sans-serif !important;
}
input{
  font-family: "Josefin Sans", sans-serif !important;
}
button{
  font-family: "Josefin Sans", sans-serif !important;
}
select{
  font-family: "Josefin Sans", sans-serif !important;
}
option{
  font-family: "Josefin Sans", sans-serif !important;
}

h1, h2, h3, h4, h5 ,a, li{
  font-family: "Josefin Sans", sans-serif !important;
}

.custom-alert{
  font-family: "Josefin Sans", sans-serif !important;
}

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Ubuntu';
    margin: 0 auto;
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
    width: 300px;
    text-align: center;
}

.product-image {
  border-radius: 20px;
    width: 50%;
    height: 200px; /* Ajusta esta altura según tus necesidades */
    object-fit:contain; /* Mantiene la proporción de la imagen y recorta si es necesario */
}

.product-info {
    padding: 16px;
}

.product-title {
    font-size: 1.5em;
    margin: 0 0 10px 0;
}

.product-description {
    font-size: 1em;
    color: #666;
    margin: 0 0 10px 0;
}

.product-price {
    font-size: 1.2em;
    color: #333;
    font-weight: bold;
}




/*Footer*/
.footer {
    background-color: #000000;
    color: white;

    width: 100%;
}
.footer-pers{
      padding: 20px;
      margin-top:70px;
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
    .btn-light:hover{
      background-color:#fa3284;
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
        @media (max-width: 480px) {
    .imgnavbar{
        width:200px;
        height: 45px;

    }}
    @media(max-width:768px){
      .vertical-separator {
      background-color: #0000;
           }
    }
        /* Alerta bonita */
        #buscadorId:focus {
    outline: none;
    box-shadow: none;
}

/* También puedes añadir esto para suavizar el borde si lo deseas */
#buscadorId {
    border: 1px solid #ced4da; /* Cambia este color según tus preferencias */
    border-radius: 25px;
    padding: 5px 10px;
}


        /* Fin alerta bonita */

    </style>
</head>
<body class="hiddenX">
  <div id="contenedor_carga"></div>


<!-- NAVBAR / ENCABEZADO -->
<nav style="background: #f8d7da !important;" id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Home-usuario">
      <img src="/resources/img/dashboard-navbar/Letras Tutti.png" class="imgnavbar"alt="Tutti Belli Studio" width="250" height="50">
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
        <a id="carrito" style="margin-right: 30px;" class="nav-link active texto1" aria-current="page" href="/Carrito-User" style="color: #000000;"><i class="fa-solid fa-cart-shopping"></i></a>
          <a href="/Reservacion-User" style="margin-right:20px;">
            <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
          </a>
      </div>
  </div>
</nav>

  <br><br><br><br><br><br>

  <div class="container mt-5">
  <div class="input-group mb-3" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 25px; padding: 10px;">
    <input type="text" class="form-control" id="buscadorId" placeholder="Buscar por nombre de producto" style="border: none; background-color: transparent;">
    <div class="input-group-append" >
      <span class="input-group-text" id="basic-addon2" style="background-color: transparent; border: none;">
        <i class="fas fa-search" style="color: #6c757d;"></i>
      </span>
    </div>
  </div>
  <div class="dropdown mb-3">
    <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; border: 1px solid #ced4da; border-radius: 25px; color: #495057;">
      Filtrar por precio
    </button>
    <ul class="dropdown-menu dropdown-menu-end p-3 shadow-sm" aria-labelledby="dropdownMenuButton" style="background-color: white; border-radius: 15px; border: 1px solid #ced4da;">
      <li class="mb-2">
        <input type="checkbox" class="form-check-input precio-filtro" id="menos50" value="menos50">
        <label class="form-check-label ms-2" for="menos50">Menor que $50</label>
      </li>
      <li class="mb-2">
        <input type="checkbox" class="form-check-input precio-filtro" id="menos100" value="menos100">
        <label class="form-check-label ms-2" for="menos100">Menor que $100</label>
      </li>
      <li class="mb-2">
        <input type="checkbox" class="form-check-input precio-filtro" id="menos200" value="menos200">
        <label class="form-check-label ms-2" for="menos200">Menor que $200</label>
      </li>
      <li>
        <input type="checkbox" class="form-check-input precio-filtro" id="mas200" value="mas200">
        <label class="form-check-label ms-2" for="mas200">Mayor que $200</label>
      </li>
    </ul>
  </div>

  <div class="row">
    <div id="productoscd" class="product-container">
      <!-- Aquí van los productos -->
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
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

        <!-- fin alerta -->


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



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>

  // Crear función alertas (esto va por encima de todo para que funcione)

  
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
    }, 1500);
  }

  // Dibujar productos
  function dibujarProductosCd() {
    $.ajax({
        url: '/get/productos/cd',
        method: 'GET',
        success: function(data) {
            const productos = $('#productoscd');
            productos.empty();

            // Priorizar productos con descuento
            data.sort((a, b) => b.descuentoId - a.descuentoId);

            // Obtener valor del buscador
            const busqueda = $('#buscadorId').val().toLowerCase();

            // Obtener valores seleccionados del filtro de precios (checkboxes)
            const filtrosPrecio = [];
            $('.precio-filtro:checked').each(function() {
                filtrosPrecio.push($(this).val());
            });

            // Filtrar productos por nombre y por precio
            const productosFiltrados = data.filter(producto => {
                let cumpleBusqueda = producto.nombre.toLowerCase().includes(busqueda);

                let cumpleFiltroPrecio = filtrosPrecio.length === 0 || filtrosPrecio.some(filtro => {
                    switch (filtro) {
                        case 'menos50':
                            return producto.precio <= 50;
                        case 'menos100':
                            return producto.precio <= 100;
                        case 'menos200':
                            return producto.precio <= 200;
                        case 'mas200':
                            return producto.precio > 200;
                    }
                });

                return cumpleBusqueda && cumpleFiltroPrecio;
            });

            // Separar productos con stock y sin stock
            const productosConStock = productosFiltrados.filter(producto => producto.cantidadEnStock > 0);
            const productosSinStock = productosFiltrados.filter(producto => producto.cantidadEnStock <= 0);

            if (productosFiltrados.length === 0) {
                // Si no hay productos filtrados, agregar 5 <br> para empujar el footer hacia abajo
                productos.append(`
                    <div class="col-12 text-center my-5">
                        <h4 class="alert-heading">No se encontraron productos que coincidan con el filtro seleccionado.</h4>
                        ${'<br>'.repeat(5)}
                    </div>
                `);
            } else {
                const renderProducto = (producto) => {
                    function generarOpcionesSelect(cantidadEnStock) {
                        let opciones = '';
                        let maxCantidad = cantidadEnStock > 99 ? 10 : 10;

                        for (let i = 1; i <= maxCantidad && i <= cantidadEnStock; i++) {
                            opciones += `<option class="text-center" value="${i}">${i}</option>`;
                        }

                        return opciones;
                    }

                    const card = `
                        <div class="product-card">
                            <img src="/storage/${producto.imagen}" alt="${producto.nombre}" class="product-image">
                            <div class="product-info">
                                <h2 class="product-title">${producto.nombre}</h2>
                                <p class="product-description">${producto.descripcion}</p>
                                ${producto.descuentoId ? `
                                    <div style="width:100%">
                                        <p style="color:black;" class="product-description">Producto a precio especial</p>
                                        <p style="color:gray; text-decoration: line-through 1.5px;" class="product-description">$${producto.precioAntiguo}</p>
                                        <p style="color:black;"class="product-price" >$${producto.precio}</p>
                                    </div>
                                ` : `
                                    <p class="product-price">$${producto.precio}</p>
                                `}
                                <div class="mb-3">
                                    <label for="cantidad_${producto.id}" class="form-label">Selecciona la cantidad</label>
                                    <select id="cantidad_${producto.id}" class="form-select cantidad-producto" data-id="${producto.id}" data-stock="${producto.cantidadEnStock}">
                                        ${generarOpcionesSelect(producto.cantidadEnStock)}
                                    </select>
                                </div>
                            </div>
                            <button id="boton_${producto.id}" style="margin-bottom: 10px;" type="button" class="btn btn-outline-success agregar-carrito" data-id="${producto.id}" data-stock="${producto.cantidadEnStock}">Agregar al carrito</button>
                        </div>
                    `;
                    productos.append(card);

                    // Desactivar el botón si no hay stock
                    if (producto.cantidadEnStock <= 0) {
                        $('#boton_' + producto.id).prop('disabled', true);
                        $('#boton_' + producto.id).attr('class', 'btn btn-secondary');
                        $('#boton_' + producto.id).text('Producto fuera de existencia');
                        $('#cantidad_' + producto.id).prop('disabled', true);
                    }

                    // Manejo del cambio de cantidad
                    $(`#cantidad_${producto.id}`).on('change', function() {
                        console.log(`Valor seleccionado para el producto ${producto.id}: ${$(this).val()}`);
                    });
                };

                // Renderizar primero los productos con stock
                productosConStock.forEach(renderProducto);

                // Renderizar después los productos sin stock
                productosSinStock.forEach(renderProducto);

                $('.agregar-carrito').click(function() {
                    const productId = $(this).data('id');
                    agregarAlCarrito(productId);
                });
            }
        }
    });
}
$('.precio-filtro').on('change', function() {
    $('.precio-filtro').not(this).prop('checked', false);
    dibujarProductosCd();
});
// Llamar a la función dibujarProductosCd cuando se use el buscador o el filtro de precios
$('#buscadorId').on('input', dibujarProductosCd);
$('.precio-filtro').on('change', dibujarProductosCd)
//   function dibujarProductos() {
//     $.ajax({
//         url: '/get/productos/sd',
//         method: 'GET',
//         success: function(data) {
//             const productos = $('#productos');
//             const buscadorproducto =$('#buscadorId');
//             productos.empty();
//             function generarOpcionesSelect(cantidadEnStock) {
//                     let opciones = '';
//                     let maxCantidad = cantidadEnStock > 99 ? 30 : 10;

//                     for (let i = 1; i <= maxCantidad && i <= cantidadEnStock; i++) {
//                         opciones += `<option class="text-center" value="${i}">${i}</option>`;
//                     }

//                     return opciones;
//                 }   
//             if (data.length === 0) {
//             buscadorId.hide();
//             productos.append(`
//               <div class="col-12 text-center my-5">
//                 <div class="custom-alerts">
//                   <h4 class="alert-heading">¡No hay productos disponibles en este momento!</h4>
//                   <p>Actualmente no hay productos. Vuelve más tarde para ver si hay productos disponibles.</p>
//                   <hr>
//                   <p class="mb-0">Mientras tanto, puedes explorar otros servicios que ofrecemos.</p>
//                 </div>
//                 <br>
//                 <br>
//                 <br>
//                 <br>
//                 <br>
//                 <br>
//                 <br>
//                 <br>
//                 <br>
//               </div>
//             `);
//           }
//             data.forEach(producto => {               
//                 const card = `
//                     <div class="product-card">
//                         <img src="/storage/${producto.imagen}" alt="${producto.nombre}" class="product-image">
//                         <div class="product-info">
//                             <h2 class="product-title">${producto.nombre}</h2>
//                             <p class="product-description">${producto.descripcion}</p>
//                             <p class="product-description">En stock: ${producto.cantidadEnStock}</p>
//                             <p class="product-price" >$${producto.precio}</p>
//                             <div class="mb-3">
//                                 <label for="cantidad_${producto.id}" class="form-label">Selecciona la cantidad</label>
//                                 <select id="cantidad_${producto.id}" class="form-select  cantidad-producto" data-id="${producto.id}" data-stock="${producto.cantidadEnStock}">
//                                     <!-- Opciones se generarán dinámicamente aquí -->
//                                     ${generarOpcionesSelect(producto.cantidadEnStock)}
//                                 </select>
//                             </div>
//                         </div>
                        
//                         <button id="cantidad_${producto.id}" style="margin-bottom: 10px;" type="button" class="btn btn-outline-success agregar-carrito" data-id="${producto.id}" data-stock="${producto.cantidadEnStock}">Agregar al carrito</button>
//                     </div>
//                 `;
//                 productos.append(card);
                
                


//                 if ($('#cantidad_' + producto.id).data('stock') <= 0) {
//                     $('#cantidad_' + producto.id).prop('disabled', true);
//                     $('#cantidad_' + producto.id).attr('class', 'btn btn-secondary agregar-carrito');
//                     $('#cantidad_' + producto.id).text('Producto fuera de existencia');
//                 }
//             });

//             // $('.agregar-carrito').click(function() {
//             //     const productId = $(this).data('id');
//             //     agregarAlCarrito(productId);
//             // });
//         }
//     });
// }


  //Ejecuta el codigo cada vez que una tecla se pulsa
  $('#buscadorId').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    // obtiene todos los productos con clase .product-card y los filtra
    $('#productoscd .product-card').filter(function() {
        // Encuentra el nombre del producto con .product-title
        var text = $(this).find('.product-title').text().toLowerCase();

        // Verifica si value se encuentra dentro de text, de ser asi lo muestra con toggle, de lo contrario lo oculta
        $(this).toggle(text.indexOf(value) > -1);
    });
});

  // // Llama a la función para dibujar los productos al cargar la página
  // dibujarProductos();

  function agregarAlCarrito(productId, descuentoId = null) {
    let cantidad = parseInt($('#cantidad_' + productId).val()); // Obtener la cantidad seleccionada

    // Si el producto tiene descuento, dividir la cantidad entre 2
    // if (descuentoId > 0) {
    //     cantidad = Math.ceil(cantidad / 2);
    // }

    $.ajax({
        url: '/carrito/agregar',
        method: 'POST',
        data: {
            productId: productId,
            cantidad: cantidad, // Enviar la cantidad ajustada
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            mostrarAlerta('Producto agregado al carrito', 'alert-success', 'check-circle-fill');
        },
        error: function(error) {
            console.log(error);
            mostrarAlerta('Hubo un error al agregar el producto al carrito', 'alert-danger', 'exclamation-triangle-fill');
        }
    });
}

$('.agregar-carrito').click(function() {
    const productId = $(this).data('id');
    const descuentoId = $(this).data('descuentoId'); // Asumiendo que hay un atributo data para el descuentoId
    agregarAlCarrito(productId, descuentoId);
});

                  // Pantalla de carga
                  var loader = document.getElementById("contenedor_carga");
                  var navbar = document.getElementById("navbar");
                  window.addEventListener('load', function(){
                    $('#navbar').css('visibility', 'visible');
                    loader.style.display = "none";
                  })

                  $(document).ready(function(){
                    dibujarProductosCd();             
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


            // Alertas Document.ready

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

            //Fin alertas


                      // Scripts aquí

                  });

</script>
</body>
</html>
