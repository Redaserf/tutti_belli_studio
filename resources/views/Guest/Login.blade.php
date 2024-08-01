<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tutti Belli</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>

body {
    font-family: 'Arial', sans-serif;
    background-color: #fce4ec;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url('/resources/img/Login - Register/low-poly-grid-haikei.svg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

#contenedor_carga {
    background: #ffffff url(/resources/img/home/preloader.gif) no-repeat center center;
    background-size: 20%;
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 100;
}

.login-container {
    background-color: #fff;
    padding: 1rem;
    border-radius: 9px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
    text-align: center;
    width: 100%;
    max-width: 400px;
}
.logo img {
    width: 100%;
    max-width: 250px;
    margin-bottom: 1rem;
}
.google-button {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem;
    border: none;
    border-radius: 4px;
    background-color: #fff;
    font-size: 1rem;
    cursor: pointer;
    width: 100%;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin-bottom: 1rem;
}
.google-button img {
    width: 24px;
    margin-right: 0.5rem;
}
a {
    color: #007bff;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
@media (max-width: 768px) {
    .login-container {
        padding: 1.5rem;
    }
}
@media (max-width: 576px) {
    .login-container {
        padding: 1rem;
    }
    .google-button {
        padding: 0.5rem;
    }
    .google-button img {
        width: 20px;
        margin-right: 0.25rem;
    }
    .btn {
        padding: 0.5rem;
    }
}
@media (max-width: 375px) {
    .login-container {
        padding: 0.5rem;
    }
    .google-button {
        padding: 0.4rem;
    }
    .google-button img {
        width: 18px;
        margin-right: 0.2rem;
    }
    .btn {
        padding: 0.4rem;
    }
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
        /* Alerta bonita */

    </style>

</head>
<body>
    <div id="contenedor_carga"></div>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="login-container">
            <div class="logo">
                <img src="/resources/img/Login - Register/_CON.png" alt="Tutti Belli Studio Logo">
            </div>
            <h2>Ingresa con tu cuenta</h2>
            <p>Ingresa tu email y contraseña para continuar</p>
            <form action="/LoginUsuario" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Correo" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-dark w-100">Ingresar</button>
            </form>
            <p class="mt-3">Si no tienes cuenta <a href="/Registro">Regístrate aquí</a></p>
            <p>Al hacer clic en continuar, aceptas nuestros <a href="#">Términos de servicio</a> y <a href="#">Política de privacidad</a>.</p>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+6/Mni1fEZ+4pGnc5DGeRdhxXwFW2" crossorigin="anonymous"></script>

    <script>

        

            // Pantalla de carga
    var loader = document.getElementById("contenedor_carga");
    window.addEventListener('load', function() {
        loader.style.display = "none";
    });

    $(document).ready(function(){

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


    });

    </script>

</body>
</html>
