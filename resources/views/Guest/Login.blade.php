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
.btn-light:hover{
      background-color:#fa3284;
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
@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
}

.shake {
    animation: shake 0.5s;
}
.alert{
    margin-top:20px;
    background-color:white;
    color:red;
    border:0;

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
            <form action="{{ route('loginUsuario') }}" method="POST" id="login-form">
                @csrf
                @if(session('error'))
                <div class="alert alert-danger" id="error-message">{{ session('error') }}</div>
                @endif
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Correo" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-dark w-100">Ingresar</button>
                <br>
                
            </form>
            <p class="mt-3">Si no tienes cuenta <a href="/Registro">Regístrate aquí</a></p>
            <p>Al hacer clic en continuar, aceptas nuestros <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Términos de servicio</a> y <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Política de privacidad</a>.</p>
        </div>
    </div>
    <!-- Modal de Términos y Condiciones -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="termsModalLabel">Términos y Condiciones</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Aquí puedes agregar el texto de términos y condiciones -->
              <p>Términos y Condiciones de Tutti Beli Studio
                  Bienvenido a Tutti Beli Studio. Al utilizar nuestros servicios, usted acepta y se compromete a cumplir con los siguientes términos y condiciones. Por favor, léalos detenidamente.
                  En Tutti Beli Studio, nos esforzamos por ofrecerle los mejores tratamientos y técnicas para el cuidado de su belleza. Sin embargo, es fundamental que usted, como cliente, siga las recomendaciones y cuidados proporcionados por nuestro personal profesional.
                  Nuestros tratamientos están diseñados para proporcionarle los mejores resultados posibles. Para garantizar la efectividad y seguridad de los mismos, es crucial que siga las indicaciones y cuidados recomendados por nuestros especialistas. Tutti Beli Studio no se hace responsable de ningún problema, daño o efecto adverso que pueda surgir si usted no sigue las instrucciones proporcionadas por nuestro personal.
                  Cada técnica aplicada en nuestro estudio viene con una serie de cuidados específicos que deben ser seguidos rigurosamente para mantener los resultados y asegurar su bienestar. Tutti Beli Studio no se hace responsable de cualquier complicación, efecto adverso o disminución en la calidad de los resultados si no se siguen las recomendaciones de cuidado posterior proporcionadas por nuestros profesionales.
                  Al aceptar recibir un tratamiento o técnica en Tutti Beli Studio, usted declara haber sido informado de los cuidados necesarios y de las posibles consecuencias de no seguir dichas indicaciones. Además, reconoce y acepta que cualquier desviación de las recomendaciones proporcionadas será bajo su propio riesgo y responsabilidad.
                  Tutti Beli Studio se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Cualquier cambio será comunicado oportunamente y se considerará aceptado si continúa utilizando nuestros servicios.
                  Para cualquier consulta o información adicional sobre nuestros términos y condiciones, por favor contáctenos a través de nuestro correo electronico o numero de telefono
                  Al utilizar los servicios de Tutti Beli Studio, usted reconoce haber leído, entendido y aceptado estos términos y condiciones.
                                    
                  Agradecemos su confianza en Tutti Beli Studio y esperamos brindarle la mejor experiencia y resultados en cada visita.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Política de Privacidad -->
    <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="privacyModalLabel">Política de Privacidad</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Política de Privacidad de Tutti Beli Studio
            En Tutti Beli Studio, nos tomamos muy en serio su privacidad y la protección de sus datos personales. Esta política de privacidad describe cómo recopilamos, usamos, y protegemos su información personal.
            Información que recopilamos: Podemos recopilar información personal como su nombre, dirección de correo electrónico, número de teléfono, y otros datos necesarios para proporcionarle nuestros servicios.
            Uso de la información: Utilizamos su información personal para proporcionarle nuestros servicios, comunicarnos con usted, y mejorar nuestros productos y servicios. No compartiremos su información personal con terceros sin su consentimiento, excepto cuando sea necesario para cumplir con la ley o proteger nuestros derechos.
            Protección de la información: Implementamos medidas de seguridad adecuadas para proteger su información personal contra el acceso no autorizado, la alteración, divulgación o destrucción de datos.
            Sus derechos: Usted tiene derecho a acceder, corregir o eliminar su información personal. También puede oponerse al procesamiento de sus datos personales en determinadas circunstancias.
            Cambios en la política de privacidad: Nos reservamos el derecho de modificar esta política de privacidad en cualquier momento. Cualquier cambio será comunicado a través de nuestro sitio web.
            Contacto: Si tiene alguna pregunta o inquietud sobre nuestra política de privacidad, por favor contáctenos a través de nuestro correo electrónico o número de teléfono.
            Al utilizar los servicios de Tutti Beli Studio, usted reconoce haber leído, entendido y aceptado esta política de privacidad.
            Gracias por confiar en Tutti Beli Studio. Estamos comprometidos a proteger su privacidad y a ofrecerle los mejores servicios posibles.
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </div>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
            if ($('#error-message').length) {
        var loginContainer = $('.login-container');
        loginContainer.addClass('shake');
        setTimeout(function() {
            loginContainer.removeClass('shake');
        }, 500);
    }


    });

    </script>

</body>
</html>
