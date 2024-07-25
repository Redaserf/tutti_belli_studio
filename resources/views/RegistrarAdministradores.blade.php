<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar - Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        /* Dashboard */

    /* Google Font Import - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');


    * {
        margin: 0;
        padding: 0;
    }

    .menu-links-custom {
        margin: 0;
        padding: 0;
        padding-left: 0;
    }

    ul{
        padding-left: 0;
    }

    .hiddenX {
        overflow-x: hidden;
    }

    #contenedor_carga {
        background: #ffffff url(/Integradora/resources/imagenes/preloader.gif) no-repeat center center;
        background-size: 20%;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 100;
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

    body {
        height: 100vh;
        background: var(--body-color);
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

    /* Fin Dashboard */



        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .container-div {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .form-floating input,
        .form-floating select,
        .form-floating textarea {
            border: 2px solid #000000;
            border-radius: 10px;
        }

        .form-floating label {
            color: #000000;
        }

        .btn-dark {
            background-color: #e1b8b8;
            border-color: #e1b8b8;
        }

        .btn-dark:hover {
            background-color: #ff6699;
            border-color: #ff3366;
        }

        h2 {
            color: #ffffff;
            background-color: #e1b8b8;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="hiddenX">

    <div id="contenedor_carga"></div>
    <div class="overlay"></div>




<div class="home">

    <div class="col-12">
        <div class="container container-div">
            <div class="container full-height d-flex justify-content-center align-items-center">
                <div class="row w-100">
                    <div class="row">
                        <h2>Agregar Administrador</h2>
                    </div>
                    <form action="/RegistroEmpleado" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="adminName" type="text" class="form-control" id="adminName" placeholder="Nombre" required>
                                <label for="adminName">Nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="adminLastname" type="text" class="form-control" id="adminLastname" placeholder="Apellidos" required>
                                <label for="adminLastname">Apellidos</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="adminGender" class="form-control" id="adminGender" placeholder="Sexo" required>
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                </select>
                                <label for="adminGender">Género</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="adminPhone" class="form-control" id="adminPhone" placeholder="Número telefónico" required oninput="this.value = this.value.slice(0, 10)">
                                <label for="adminPhone">Número telefónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="adminBirthDate" id="adminBirthDate" placeholder="Fecha de nacimiento" required>
                                <label for="adminBirthDate">Fecha de nacimiento</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="adminEmail" type="email" class="form-control" id="adminEmail" placeholder="Correo electrónico" required>
                                <label for="adminEmail">Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="adminPassword" type="password" class="form-control" id="adminPassword" placeholder="Contraseña" required minlength="8" pattern=".*[0-9].*" title="Su contraseña debe incluír al menos 1 número">
                                <label for="adminPassword">Contraseña</label>
                            </div>
                            <div>
                                <button type="button" class="btn btn-dark btn-block w-100" id="agregarAdmin">Agregar Administrador</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>

// Scripts para todas las vistas

    // Pantalla de carga
    var loader = document.getElementById("contenedor_carga");
    var navbar = document.getElementById("navbar");
    window.addEventListener('load', function(){
        $('#navbar').css('visibility', 'visible');
        loader.style.display = "none";
    });

$(document).ready(function(){

    //Script para registrar el nuevo Empleado
    $('#agregarAdmin').on('click', function(e) {
        e.preventDefault();

        let adminName = $('#adminName').val();
        let adminLastname = $('#adminLastname').val();
        let adminGender = $('#adminGender').val();
        let adminPhone = $('#adminPhone').val();
        let adminBirthDate = $('#adminBirthDate').val();
        let adminEmail = $('#adminEmail').val();
        let adminPassword = $('#adminPassword').val();

        $.ajax({
            url: '/RegistroAdmin',
            type: 'POST',
            data: {
                _token: $('input[name="_token"]').val(),
                name: adminName,
                apellido: adminLastname,
                gender: adminGender,
                numeroTelefono:adminPhone,
                fechaNacimiento:adminBirthDate,
                email: adminEmail,
                password: adminPassword,
                rolId: 4
            },
            success: function(response) {
                alert("Administrador agregado exitosamente");
                window.location.href = '/Home-administrador';
            },
            error: function(error) {
                alert('Ocurrió un error al agregar al administrador');
                $('#adminName').val('');
                $('#adminLastname').val('');
                $('#adminGender').val('');
                $('#adminPhone').val('');
                $('#adminBirthDate').val('');
                $('#adminEmail').val('');
                $('#adminPassword').val('');
            }
        });
    });
    //Fin script para registrar empleado



    // Fin document.ready
});

</script>
</body>
</html>
