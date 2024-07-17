<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro - Tutti Belli</title>
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
        .social-button:hover {
            background-color: #f1f1f1;
        }
        .social-button img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
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
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="form-container">
            <h2>Ingrese sus datos</h2>
            <form>
                <div class="row g-3">
                    <div class="col-6 col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNacimiento">
                </div>
                <div class="row g-3">
                    <div class="col-6 col-md-6">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" placeholder="Correo Electrónico">
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="genero" class="form-label">Género</label>
                        <select class="form-control" id="genero">
                            <option selected disabled>Escoge tu genero</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="social-button mt-3">
                    <img src="/resources/img/Login - Register/google-icon-1.png" alt="Google logo">
                    Continuar con Google
                </button>
                <hr>
                <div class="mb-3">
                    <label for="contrasena" class="form-label">Crear una contraseña</label>
                    <input type="password" class="form-control" id="contrasena" placeholder="Crear una contraseña">
                </div>
                <div class="mb-3">
                    <label for="confirmarContrasena" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="confirmarContrasena" placeholder="Confirmar contraseña">
                </div>
                <button type="submit" class="btn btn-dark btn-block">Registrar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+6/Mni1fEZ+4pGnc5DGeRdhxXwFW2" crossorigin="anonymous"></script>
</body>
</html>