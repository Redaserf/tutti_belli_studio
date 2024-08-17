<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            background-color: #C8A096;
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
    .footer-pers{
      padding: 40px;
      margin-top:70px;
    }
/* Aquí tus estilos */

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

h1, h2, h3, h4, h5 ,a, li{
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
.custom-alert {
        background-color: #e0e0e0; /* Color rosado */
        border: 1px solid #e0e0e0;
        color: #000000;
        border-radius: 5px;
        padding: 20px;
        font-family: "Josefin Sans", sans-serif;
    }
    .custom-alert .alert-heading {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .custom-alert p {
        font-size: 1.1rem;
        margin-bottom: 0;
    }
    .custom-alert hr {
        border-top: 2px solid #000000;
    }
    .btn-light:hover{
      background-color:#fa3284;
    }
    @media (max-width: 480px) {
    .imgnavbar{
      width:200px;
      height: 45px;
    
    }}


    </style>
</head>
<body class="hiddenX">
  <div id="contenedor_carga"></div>

  <!-- NAVBAR / ENCABEZADO -->
  <nav style="background: #f8d7da !important;" id="navbar" class="fonts3 navbar navbar-expand-lg fixed-top bg-body-tertiary" style="visibility: hidden;">
    <div class="container-fluid">
      <a class="navbar-brand" href="/Home-guest">
        <img src="/resources/img/dashboard-navbar/Letras Tutti.png"class="imgnavbar" alt="Tutti Belli Studio" width="250" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
          <li class="nav-item">
            <a class="nav-link active texto1" aria-current="page" href="/Home-guest#servicios" style="color: #000000;">Servicios</a>
          </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/Productos-Guest" style="color: #000000;">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active texto1" aria-current="page" href="/Home-guest#cursos" style="color: #000000;">Cursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active texto1" aria-current="page" href="/Home-guest#contacto" style="color: #000000;">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active texto1" aria-current="page" href="/Login" style="color: #000000;">Iniciar sesión</a>
              </li>
            </ul>
            <a href="/Login">
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

      </div>

      <br><br><br><br><br><br><br><br><br><br><br><br>

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
                                    <select id="cantidad_${producto.id}"disabled class="form-select cantidad-producto" data-id="${producto.id}" data-stock="${producto.cantidadEnStock}">
                                        ${generarOpcionesSelect(producto.cantidadEnStock)}
                                    </select>
                                </div>
                            </div>
                            <a href="/Login">
                              <button style="margin-bottom: 10px;" type="button" class="btn btn-outline-success">Agregar al carrito</button>
                            </a>
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

                  // Pantalla de carga
                  var loader = document.getElementById("contenedor_carga");
                  var navbar = document.getElementById("navbar");
                  window.addEventListener('load', function(){
                      $('#navbar').css('visibility', 'visible');
                      loader.style.display = "none";
                  });


$(document).ready(function(){

  dibujarProductosCd();


  
  // Fin document.ready
});



</script>
</body>
</html>
