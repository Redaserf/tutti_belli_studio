<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuenta de usuario</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');


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

h1, h2, h3, option, select, a{
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
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 630px;
            width: 630px;
            margin-top: 66px;
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
        .btn-historial {
            background-color: #ff66a3;
            color: #fff;
            font-weight: bold;
            width: 100%;
        }
        .btn-historial:hover {
            background-color: #ff99cc;
            color: #fff;
        }

        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        @media (max-width: 480px) {
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
      <img src="/resources/img/dashboard-navbar/Letras Tutti.png"class="imgnavbar alt="Tutti Belli Studio" width="250" height="50">
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

          <br>


    <div class="profile-container">
      <div class="flex-container">
        <h2>Mi cuenta</h2>
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
  <a href="/Historial-User">
    <button type="button" class="btn btn-historial mt-3">Historial</button> 
    <!-- BOTON PARA REDIRIGIRLO A VISTA DONDE MUESTRE HISTORIAL DE COMPRAS O CITAS DE SU PERFIL -->
  </a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>

$('#editProfileForm').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);
    formData.append('_token', $('input[name="_token"]').val());

    $.ajax({
        url: '/ActualizarPerfil',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            $('#editProfileModal').modal('hide');
            alert('Perfil actualizado exitosamente');
            location.reload();
            $('#nombre').val(response.user.name);
            $('#apellido').val(response.user.apellidos);
            $('#genero').val(response.user.gender);
            $('#correo').val(response.user.email);
            $('#numeroTelefono').val(response.user.numeroTelefono);
        },
        error: function(error) {
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


    $('body').on('click', '.edit-profile', function() {
        $('#editProfileModal').modal('show');
    });


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
