<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro - Tutti Belli</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFF4F5;
            display: flex;
            justify-content: center;
            background-image: url('/resources/img/Login - Register/low-poly-grid-haikei.svg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            align-items: center;
            min-height: 100vh;
        }

        #contenedor_carga {
            top: 0;
            left: 0;
            background: #ffffff url(/resources/img/home/preloader.gif) no-repeat center center;
            background-size: 20%;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 100;
        }

        .form-container {
            max-width: 600px;
            width: 100%;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin: 1rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
        }
        .form-container h2 {
            margin-bottom: 1.5rem;
            font-weight: bold;
        }
        .form-group label {
            font-weight: bold;
            margin-bottom: 0.5rem;
            display: block;
            text-align: left;
        }
        .form-control {
            border-radius: 5px;
            margin-bottom: 1rem;
            border: 1px solid #ced4da;
            padding: 0.75rem;
        }
        .social-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            color: #000000;
            border: 1px solid #ddd;
            padding: 0.75rem;
            border-radius: 5px;
            margin-bottom: 1rem;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
            width: 100%;
        }
        .btn-light:hover{
      background-color:#fa3284;
    }
        .social-button:hover {
            background-color: #f1f1f1;
        }
        .social-button img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        .alert-danger{
            color:red;
            background-color:white;
            border:0;
        }
        .btn {
            border-radius: 5px;
            padding: 0.75rem;
            font-weight: bold;
            width: 100%;
        }
        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
            }
        }
        @media (max-width: 576px) {
            .form-container {
                padding: 1rem;
            }
            .form-group label {
                font-size: 0.9rem;
            }
            .form-control {
                padding: 0.5rem;
            }
            .social-button {
                padding: 0.5rem;
            }
            .btn {
                padding: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div id="contenedor_carga"></div>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="form-container">
            <h2>Ingrese sus datos</h2>
            <form action="/RegistroUsuario" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-6 col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="{{ old('nombre') }}" required>
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNacimiento" class="form-control" id="fechaNacimiento" value="{{ old('fechaNacimiento') }}" required>
                </div>
                <div class="row g-3">
                    <div class="col-6 col-md-6">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Número de teléfono" value="{{ old('telefono') }}" required oninput="this.value = this.value.slice(0, 10)">
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="genero" class="form-label">Género</label>
                        <select class="form-control" name="genero" id="genero" required>
                            <option value="Hombre" {{ old('genero') == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                            <option selected value="Mujer" {{ old('genero') == 'Mujer' ? 'selected' : '' }}>Mujer</option>
                        </select>
                    </div>
                </div>
                @if (session('error'))
                    <div class="alert alert-danger" id="error-message">{{ session('error') }}</div>
                @endif
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" id="correo" placeholder="Email válido" value="{{ old('email') }}" required>
                </div>
                <hr>
                <div class="mb-3">
                    <label for="contrasena" class="form-label">Crear una contraseña</label>
                    <input type="password" name="password" class="form-control" id="contrasena" placeholder="Crear una contraseña" required minlength="8" pattern=".*[0-9].*" title="Su contraseña debe incluír al menos 1 número">
                </div>
                <div class="mb-3">
                    <label for="confirmarContrasena" class="form-label">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control" id="confirmarContrasena" placeholder="Confirmar contraseña" required minlength="8" pattern=".*[0-9].*" title="Su contraseña debe incluír al menos 1 número">
                </div>
                <div id="mensajePassword" style="color: red; display: none; margin-top:10px; margin-bottom: 10px;">
                    Las contraseñas no coinciden.
                </div>
                <button type="submit" class="btn btn-dark btn-block">Registrar</button>
            </form>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+6/Mni1fEZ+4pGnc5DGeRdhxXwFW2" crossorigin="anonymous"></script>

    <script>

    // Pantalla de carga
    var loader = document.getElementById("contenedor_carga");
    window.addEventListener('load', function() {
        loader.style.display = "none";
    });

    document.addEventListener('DOMContentLoaded', function () {
        const password = document.getElementById('contrasena');
        const passwordConfirm = document.getElementById('confirmarContrasena');
        const mensajePassword = document.getElementById('mensajePassword');
        const form = password.closest('form');

        function validatePassword() {
            if (password.value !== passwordConfirm.value) {
                mensajePassword.style.display = 'block';
                return false;
            } else {
                mensajePassword.style.display = 'none';
                return true;
            }
        }
        

        passwordConfirm.addEventListener('input', validatePassword);

        form.addEventListener('submit', function (event) {
            if (!validatePassword()) {
                event.preventDefault();
            }
        });
    });
    </script>
</body>
</html>
