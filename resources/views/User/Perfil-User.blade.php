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
            z-index: 20000;/* para que este por encima del modal */
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
                              <select class="form-control" id="edit_gender" name="gender">
                                  <option value="Hombre" {{ Auth::user()->gender == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                                  <option value="Mujer" {{ Auth::user()->gender == 'Mujer' ? 'selected' : '' }}>Mujer</option>
                              </select>
                          </div>
                          <div class="form-group" style="margin-top: 10px;">
                              <label for="edit_email">Correo electrónico</label>
                              <input type="email" class="form-control" id="edit_email" name="email" value="{{ Auth::user()->email }}">
                              <span id="emailError"></span> 
                          </div>
                          <div class="form-group" style="margin-top: 10px;">
                              <label for="edit_phone">Número de teléfono</label>
                              <input type="number" class="form-control" id="edit_phone" name="phone" value="{{ Auth::user()->numeroTelefono }}" oninput="validatePhoneNumber(this.value)">
                              <small id="phone_error" class="text-danger"></small>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" id="submitBtn" class="btn btn-primary">Guardar cambios</button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>
  function validatePhoneNumber(phone) {
        const phoneError = document.getElementById('phone_error');
        const submitBtn = document.getElementById('submitBtn');
        if (phone.length !== 10) {
            phoneError.textContent = 'El número de teléfono debe tener 10 dígitos.';
            submitBtn.disabled = true;
        } else {
            phoneError.textContent = '';
            submitBtn.disabled = false;
        }
    }

    document.getElementById('edit_email').addEventListener('input', function() {
        const email = this.value;
        const emailError = document.getElementById('email_error');
        const submitBtn = document.getElementById('submitBtn');

        $.ajax({
            url: '/check-email',
            type: 'POST',
            data: { email: email, _token: '{{ csrf_token() }}' },
            success: function(response) {
                if (response.exists) {
                    emailError.textContent = 'Este correo ya está en uso.';
                    submitBtn.disabled = true;
                } else {
                    emailError.textContent = '';
                    submitBtn.disabled = false;
                }
            }
        });
    });
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
            
            // Mostrar alerta antes de recargar la página
            if (response.success) {
                mostrarAlerta('Perfil actualizado exitosamente.', 'alert-success', 'check-circle-fill');
            } else {
              mostrarAlerta('Hubo un problema al actualziar el perfil.', 'alert-primary', 'info-fill')
            }

            setTimeout(function() {
                    location.reload();
                }, 1500);

            // Actualizar los valores del formulario
            $('#nombre').val(response.user.name);
            $('#apellido').val(response.user.apellidos);
            $('#genero').val(response.user.gender);
            $('#correo').val(response.user.email);
            $('#numeroTelefono').val(response.user.numeroTelefono);
        },
        error: function(error) {
            console.log(error);
            mostrarAlerta('Hubo un error al actualizar el perfil.', 'alert-warning', 'exclamation-triangle-fill');
            $('#emailError').text('Correo ya en uso.');
                $('#emailError').css('display', 'block');
        }
    });
});

$(document).ready(function(){

  $('#carritoxd').empty();
$.get('/carrito/contar-productos', function(data) {
  $('#carrito-count').text(data.cantidad);
});

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
