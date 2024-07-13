<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tutti Belli Studio</title>
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

    </style>

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="login-container">
            <div class="logo">
                <img src="/resources/img/Login - Register/_CON.png" alt="Tutti Belli Studio Logo">
            </div>
            <h2>Ingresa con tu cuenta</h2>
            <p>Ingresa tu email y contraseña para continuar</p>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Correo" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-dark w-100">Ingresar</button>
            </form>
            <p class="mt-3">o ingresa con</p>
            <button class="google-button">
                <img src="/resources/img/Login - Register/google-icon-1.png" alt="Google Logo"> Google
            </button>
            <p class="mt-3">Si no tienes cuenta <a href="#">Regístrate aquí</a></p>
            <p>Al hacer clic en continuar, aceptas nuestros <a href="#">Términos de servicio</a> y <a href="#">Política de privacidad</a>.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+6/Mni1fEZ+4pGnc5DGeRdhxXwFW2" crossorigin="anonymous"></script>

    <script>



    </script>

</body>
</html>
