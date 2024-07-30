<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Administrador</title>
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

        h1, h2, h3{
        font-family: "Josefin Sans", sans-serif !important;
        }

        /* ANIMACION DE CARGA */

        #contenedor_carga{
                background: #ffffff url(/resources/img/home/preloader.gif) no-repeat center center;
                background-size: 20%;
                height: 100vh;
                width: 100%;
                position: fixed;
                z-index: 100;
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
        /*AQUI PON TU DASHBOARD QUE NO LO PUDE PONER BIEN @angel*/
                
    </style>
</head>
<body class="hiddenX">
<div id="contenedor_carga"></div>
        <div class="profile-container">
                <h2>Administrador</h2>
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