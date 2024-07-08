<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>

        .vertical-separator {
            display: inline-block;
            width: 1.5px;
            height: 30px;
            background-color: #C8A096;
            margin: 3px 15px;
            vertical-align: middle;
        }

    </style>
    @yield('styles')
</head>
<body>

    <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/resources/img/navbar/Letras Tutti.png" alt="Tutti Belli Studio" width="300" height="60">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
              <li class="nav-item">
                <a class="nav-link active texto1" aria-current="page" href="#" style="color: #C8A096;">Servicios</a>
              </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="color: #C8A096;">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active texto1" aria-current="page" href="#" style="color: #C8A096;">Cursos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active texto1" aria-current="page" href="#" style="color: #C8A096;">Contacto</i></a>
                  </li>
                  <span class="vertical-separator"></span>
                  <li class="nav-item" style="margin-left: 0;">
                    <a class="nav-link active texto1" aria-current="page" href="#" style="color: #C8A096;">Cuenta <i class="fa-solid fa-user" style="margin-left: 10px;"></i></a>
                  </li>
                  </li>
                </ul>
                <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
              </div>
            </div>
          </nav>
    @yield('body')

    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>