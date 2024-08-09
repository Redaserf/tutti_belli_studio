<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Administrador</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
         /* Google Font Import - Poppins */
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
        html {
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

        body{
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

        .hiddenX{
            overflow-x: hidden;
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

        h1, h2, h3,h4,h5,a,select,option,label,input{
        font-family: "Josefin Sans", sans-serif !important;
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

        .profile-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 630px;
            width: 630px;
        }
        .profile-container h2 {
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            color: #ff66a3;
        }
        .form-control {
            background-color: #ffe6f0;
            border: 1px solid #ff99cc;
        }
        
            /* Dashboard */

    .sidebar.close .header-text {
    display: none;
    }


        * {
            margin: 0;
            padding: 0;
        }

        .menu-links-custom {
            margin: 0;
            padding: 0;
            padding-left: 0;
            box-sizing: border-box;
        }

        ul{
            padding-left: 0;
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
        .tab-content{
    padding: 36px;
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

        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
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




            {{-- Modal para editar perfil --}}

<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form id="editProfileForm" enctype="multipart/form-data">
              @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="editProfileModalLabel">Editar Perfil</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <input type="hidden" id="edit_user_id" name="id" value="{{ Auth::user()->id }}">
                  <div class="form-group">
                      <label for="edit_name">Nombre</label>
                      <input type="text" class="form-control" id="edit_name" name="name" value="{{ Auth::user()->name }}">
                  </div>
                  <div class="form-group" style="margin-top: 10px;">
                      <label for="edit_apellidos">Apellidos</label>
                      <input type="text" class="form-control" id="edit_apellidos" name="apellidos" value="{{ Auth::user()->apellido }}">
                  </div>
                  <div class="form-group" style="margin-top: 10px;">
                    <label for="edit_gender">Género</label>
                    <select class="form-control" id="edit_gender" name="gender" >
                        <option value="Hombre" {{ Auth::user()->gender == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                        <option value="Mujer" {{ Auth::user()->gender == 'Mujer' ? 'selected' : '' }}>Mujer</option>
                    </select>
                </div>
                  <div class="form-group" style="margin-top: 10px;">
                      <label for="edit_email">Correo electrónico</label>
                      <input type="email" class="form-control" id="edit_email" name="email" value="{{ Auth::user()->email }}">
                  </div>
                  <div class="form-group" style="margin-top: 10px;">
                      <label for="edit_phone">Número de teléfono</label>
                      <input type="number" class="form-control" id="edit_phone" name="phone" value="{{ Auth::user()->numeroTelefono }}" oninput="this.value = this.value.slice(0, 10)">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar cambios</button>
              </div>
          </form>
      </div>
  </div>
</div>



<!-- <div class="home"> -->

    
    <div class="profile-container">
      <div class="flex-container">
        <h2>Administrador</h2>
        <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#editProfileModal">Editar perfil<i style="margin-left: 8px; font-size: 20px;" class="fa-solid fa-user-pen"></i></a>
      </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="{{ Auth::user()->name }}" readonly>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="nombre" value="{{ Auth::user()->apellido }}" readonly>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="text" class="form-control" id="genero" value="{{ Auth::user()->gender }}" readonly>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" value="{{ Auth::user()->email }}" readonly>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Número de teléfono</label>
            <input type="text" class="form-control" id="numero" value="{{ Auth::user()->numeroTelefono }}" readonly>
        </div>
    </div>
    

<!-- </div> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    
    <script>

$('#editProfileForm').on('submit', function(e) {
    e.preventDefault();

    // Mostrar la pantalla de carga
    $('#contenedor_carga').css('display', 'block');

    let formData = new FormData(this);
    formData.append('_token', $('input[name="_token"]').val());

    $.ajax({
        url: '/ActualizarPerfil',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            $('#editProfileModal').modal('hide');
            alert('Perfil actualizado con éxito.');
            location.reload();
            $('#nombre').val(response.user.name);
            $('#apellido').val(response.user.apellidos);
            $('#genero').val(response.user.gender);
            $('#correo').val(response.user.email);
            $('#numeroTelefono').val(response.user.numeroTelefono);
        },
        error: function(error) {
            // Ocultar la pantalla de carga
            $('#contenedor_carga').css('display', 'none');
            console.log(error);
            alert('Hubo un error al actualizar el perfil');
        }
    });
});
        
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

        $('body').on('click', '.edit-profile', function() {
        $('#editProfileModal').modal('show');
    });

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