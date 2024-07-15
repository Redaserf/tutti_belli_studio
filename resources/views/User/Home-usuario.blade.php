<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutti Belli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

body, html {
    margin: 0;
    padding: 0;
    background-image: url('/resources/img/home/low-poly-grid-haikei.svg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.hiddenX{
    overflow-x: hidden;
}
/* Carrusel principal */
#carouselExampleIndicators {
    margin-left: 0px;
    margin-top: 65px;
    max-height: 520px; /* Ajusta esta altura según tus necesidades */
    overflow: hidden;
  }
  
  #carouselExampleIndicators .carousel-inner {
    max-height: 520px; /* Debe coincidir con la altura del carrusel */
  }
  
  #carouselExampleIndicators .carousel-item img {
    object-fit: cover; /* Ajusta las imágenes para que cubran el contenedor */
    height: 520px; /* Debe coincidir con la altura del carrusel */
    width: 100%;
  }
  
  .carousel-caption {
    position: absolute;
    top: 50%;
    left: -90%; /* Ajusta este valor según sea necesario */
    transform: translateY(-90%);
    text-align: left;
    max-width: 25%; /* Ajusta el ancho según sea necesario */
  }
  
  .carousel-caption .info-box {
    background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
    padding: 20px;
    border-radius: 20px;
  }
  
  .carousel-caption .info-box h5 {
    font-family: 'Yaldevi', sans-serif;
    font-size: 24px;
    font-weight: bold;
    color: black;
    margin-bottom: 15px;
  }
  
  .carousel-caption .info-box p {
    font-family: 'Yaldevi', sans-serif;
    font-size: 18px;
    margin-bottom: 20px;
    color: gray;
  }
  
  .carousel-caption .info-box .btn {
    font-size: 16px;
    font-weight: bold;
    background: #ffebed;
    color:rgb(109, 95, 95);
  }
  .image-section {
    position: relative;
    width: 100%;
    overflow: hidden;
  }
  
  .image-section img {
    width: 100%;
    height: 600px;
    display: block;
  }
  
  .overlay {
    position: relative;
    width: 100%;
  }
  
  .dark-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Fondo negro semi-transparente para aplicar el filtro oscuro */
    z-index: 1;
  }
  
  .overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    padding: 20px;
    z-index: 2; /* Asegura que el texto esté sobre el filtro oscuro */
  }
  
  .overlay-text h2 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
  }
  
  .overlay-text p {
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  .overlay-text .btn {
    font-size: 16px;
    font-weight: bold;
  }
  .img-horario{
    width: 350px;
    height: 500px;
    margin-left: 100px;
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

/* FIN ANIMACION DE CARGA */

footer {
    margin: 0;
    padding: 0;
  }
  

section{
    padding: 20px 0;
}
/* .Pink_background_for_services_section{

    background-color:#FEECED ;
} */

.Color_del_footer_xd{
    background-color: #1E1B1B;
}

/* SERVICIOS PARTE DE AARON */
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap:30px;
    padding: 20px;
}
.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    width: 300px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    transition: transform 0.2s;
}
.card:hover {
    transform: scale(1.05);
}
.card img {
    width: 50px; /* Ajusta el tamaño según sea necesario */
    height: 50px; /* Ajusta el tamaño según sea necesario */
    display: block;
    margin: 0 auto;
}
.card p {
    text-align: justify,center;
    text-justify: inter-word;
}
@media (max-width: 768px) {
    .card {
        width: 45%;
    }
}
@media (max-width: 480px) {
    .card {
        width: 90%;
    }
}
/* FIN DE SERVICIOS DE AARON */
/* GALERIA */

.img-galeria{
width: 300px; 
height: 300px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
border: 4px solid rgb(255, 255, 255); 
transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.img-galeria:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  
  #galeria {
    padding: 50px 0;
  }
  
  #galeria p {
    margin-bottom: 40px;
  }
  
  @media (max-width: 768px) {
    .img-galeria {
      margin-bottom: 20px;
    }
  }

/*FOOTER AARON*/
.footer {
    background-color: #000000;
    color: white;
    
    width: 100%;
}
.footer a {
    color: white;
}
.footer .links,
.footer .horario {
    list-style: none;
    padding: 0;
}
.footer .icons a {
    margin: 0 10px;
    color: white;
    font-size: 24px;
}
.footer .row > div {
    margin-bottom: 20px;
}
.footer .container-fluid {
    padding: 0 40px;
}

/* CARRUSEL DE LA PANTALLA PRINCIPAL */
.carousel-right {
    width: 100vh;
    height: 100vh;
    position: relative;
}
.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
/*Cursos*/
.card-img-top {
    width: 250px;
    height: 250px;
    object-fit: cover;
  }
  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  }
  .card-img-top {
    height: 250px; /* Aumenta la altura de la imagen */
    object-fit: cover; /* Ajusta la imagen para cubrir el área */
}
.card {
    margin-bottom: 20px; /* Añade espacio entre las tarjetas */
}
.card-2 {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    width: 300px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    transition: transform 0.2s;
}
.card-2:hover {
    transform: scale(1.05);
}
.card-2 img {
    width: 0 auto; /* Ajusta el tamaño según sea necesario */
    height: 0 auto; /* Ajusta el tamaño según sea necesario */
    display: block;
    margin: 0 auto;
    object-fit: cover;
}
.card-2 p {
    text-align: justify,center;
    text-justify: inter-word;
}
@media (max-width: 768px) {
    .card-2 {
        width: 45%;
    }
}
@media (max-width: 480px) {
    .card-2 {
        width: 90%;
    }
}

    </style>
</head>


<body class="hiddenX">

  <div id="contenedor_carga"></div>


  <section>

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/resources/img/home/imagenejemplo2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div class="info-box">
              <img src="/resources/img/home/_CON.png" alt="" style="height: 60%; width: 60%;">
              <h5>¡Súper promoción!</h5>
              <p>Elige 2 de los tratamientos seleccionados por solo $2,500</p>
              <button class="btn btn-light">Me interesa la promoción</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/resources/img/home/imagenejemplo4.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div class="info-box">
              <img src="/resources/img/home/_CON.png" alt="" style="height: 60%; width: 60%;">
              <h5>¡Oferta especial!</h5>
              <p>Descuento en todos los tratamientos faciales</p>
              <button class="btn btn-light">Más información</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/resources/img/home/imagenejemplo2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div class="info-box">
              <img src="/resources/img/home/_CON.png" alt="" style="height: 60%; width: 60%;">
              <h5>Nueva promoción</h5>
              <p>Tratamientos de belleza a mitad de precio</p>
              <button class="btn btn-light">Ver detalles</button>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    

  </section>

  <!-- NAVBAR / ENCABEZADO -->
      <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/resources/img/dashboard-navbar/Letras Tutti.png" alt="Tutti Belli Studio" width="300" height="60">
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

      <br><br><br>

      <!-- IMAGEN PRINCIPAL -->
      <br>
      <br>
      <br>
      <!--INFORMACION-->
      <section id="--INFORMACION--">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-4">
              <img src="/resources/img/home/horariotutti.jpg" alt="Horarios" class="img-fluid img-horario">
            </div>
            <div class="col-md-6">
              <h2>Conoce tu centro de micropigmentación</h2>
              <p>Micropigmentación Arte, surge de la necesidad en la región de un centro que fusione todo lo que una persona busca para el cuidado de su imagen, en un ambiente cómodo y profesional, todo en un solo lugar desde el 2020.</p>
              <br>
              <h3>Profesionales</h3>
              <p>Ofrecemos un servicio profesional de excelente calidad, con el mejor reclutamiento de especialistas en la región. El profesionalismo de nuestros expertos y el alto nivel de nuestros productos y equipo caracterizan nuestro gran servicio al cliente.</p>
              <br>
              <h3>Ahorra tiempo</h3>
              <p>Nuestro sistema de citas permite a nuestros clientes recibir su servicio en cuestión de minutos, maximizando el ahorro de tiempo en esta época en la que es tan valioso.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- SERVICIOS-->
      <section id="servicios" class="">
        <p class="text-uppercase text-center" style="font-size: 50px;">Servicios</p>
        <div class="container">
          <div class="card">
            <br>
              <img style="width: 80px;height: 80px;" src="/resources/img/home/servicios/LABIOS_TARJETA.png" alt="labios">
              <br>
              <h3>Labios</h3>
              <p>En labios hacemos una pequeña limpieza para después anestesiarlos y aplicarles el color que gustes. Nuestro objetivo es dejarlos bellos y sensuales, realzando tu belleza natural con técnicas personalizadas y productos de alta calidad.</p>
          </div>
          <div class="card">
            <br>
              <img style="width: 80px;height: 80px;" src="/resources/img/home/servicios/OJOS_TARJETA.png" alt="Ojos">
              <br>
              <h3>Ojos</h3>
              <p>En ojos manejamos diferentes tipos de delineado, haciendo que tu mirada resalte aún más. Ofrecemos opciones permanentes y semipermanentes, adaptándonos a tus preferencias para lograr el look que deseas de manera segura y precisa.</p>
          </div>
          <div class="card">
            <br>
              <img style="width: 70px;height: 50px;" src="/resources/img/home/servicios/CEJA_TARJETA.png" alt="Ceja">
              <br>
              <br>
              <h3>Cejas</h3>
              <p>La ceja es el marco de tu rostro. Realzamos tus facciones con un diseño acorde a la forma de tu cara y la técnica que más te favorezca. Nuestro equipo se asegura de que tus cejas luzcan perfectas y armoniosas, complementando tu belleza natural.</p>
          </div>
          <div class="card">
            <br>
              <img style="width: 70px;height: 50px;" src="/resources/img/home/servicios/PESTAÑA_TARJETA.png" alt="Pestañas">
              <br>
              <br>
              <h3>Pestañas</h3>
              <p>En Pestañas, nos especializamos en diversas técnicas de extensión y embellecimiento para realzar tu mirada. Nuestro equipo de expertos utiliza productos de alta calidad para asegurar resultados duraderos y personalizados, adaptándose a tus preferencias y necesidades individuales.</p>
          </div>
      </div>
      </section>
      <!-- IMAGEN SEPARADORA -->
      <section class="image-section">
        <div class="overlay">
          <img src="/resources/img/home/imagenejemplo4.jpeg" alt="Imagen separadora">
          <div class="dark-overlay"></div>
          <div class="overlay-text">
            <h2>Nos caracterizamos por ofrecer un servicio altamente profesional y confiable</h2>
            <p>Nuestra meta es poder ofrecerte tratamientos de calidad con precios accesibles.</p>
            <p>Nos comprometemos a llevar tu tratamiento de principio a fin con la mejor asesoría por parte de nuestros especialistas altamente capacitados.</p>
            <button class="btn btn-primary">Reservar cita</button>
          </div>
        </div>
      </section>
      <!-- CURSOS -->
      <section id="cursos">
        <p class="text-uppercase text-center" style="font-size: 50px;">Cursos</p>
        <div class="container">
          <div class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/imagenejemplo.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Domina el arte de realzar miradas con nuestro curso avanzado de Micropigmentación en Pestañas. Aprende técnicas innovadoras para destacar la belleza natural de cada ojo.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/imagenejemplo2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Domina el arte de realzar miradas con nuestro curso avanzado de Micropigmentación en Pestañas. Aprende técnicas innovadoras para destacar la belleza natural de cada ojo.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/imagenejemplo2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Domina el arte de realzar miradas con nuestro curso avanzado de Micropigmentación en Pestañas. Aprende técnicas innovadoras para destacar la belleza natural de cada ojo.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Galeria-->
      <section id="galeria">
        <p class="text-uppercase text-center" style="font-size: 50px;">Galería</p>
        <div class="container">
          <div class="text-center row justify-content-center">
            <div class="col-md-3 mb-4">
              <img src="/resources/img/home/imagenejemplo.jpeg" class="rounded img-galeria" alt="...">
            </div>
            <div class="col-md-3 mb-4">
              <img src="/resources/img/home/imagenejemplo.jpeg" class="rounded img-galeria" alt="...">
            </div>
            <div class="col-md-3 mb-4">
              <img src="/resources/img/home/imagenejemplo.jpeg" class="rounded img-galeria" alt="...">
            </div>
            <div class="col-md-3 mb-4">
              <img src="/resources/img/home/imagenejemplo.jpeg" class="rounded img-galeria" alt="...">
            </div>
            <div class="col-md-3 mb-4">
              <img src="/resources/img/home/imagenejemplo.jpeg" class="rounded img-galeria" alt="...">
            </div>
            <div class="col-md-3 mb-4">
              <img src="/resources/img/home/imagenejemplo.jpeg" class="rounded img-galeria" alt="...">
            </div>
            <div class="col-md-3 mb-4">
              <img src="/resources/img/home/imagenejemplo.jpeg" class="rounded img-galeria" alt="...">
            </div>
            <div class="col-md-3 mb-4">
              <img src="/resources/img/home/imagenejemplo.jpeg" class="rounded img-galeria" alt="...">
            </div>
          </div>
        </div>
      </section>
      
      

      <!-- GOOGLE MAPS -->
      <section class="Pink_background_for_services_section" style="padding: 0px;">
        <div class="row">
          <img class="img-fluid" src="/resources/img/home/api.jpg" alt="">
        </div>
        <div class="row">
          <p class="text-uppercase text-center" style="font-size: 50px; margin-top: 20px;">DONDE NOS UBICAMOS</p>
          <p class="text-uppercase text-center" style="font-size: 20px; margin-top: 30px;">CALLE DEL PUERTO #262 VILLAS DE LA HACIENDA 27272</p>
        </div>
        <br><br><br><br><br><br>
      </section>


      <!-- PA QUE CARGUE MAS LENTO AKSDJFGBNDKFJ -->
      <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=thrAV_zaAoLEPzdh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=thrAV_zaAoLEPzdh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=thrAV_zaAoLEPzdh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=thrAV_zaAoLEPzdh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=thrAV_zaAoLEPzdh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->


            <!-- BOTÓN RESERVAR -->
            <button  id="reservarBtn" type="button" class="btn btn-dark" style="border-radius: 40px; position: fixed; bottom: 4%; left: 3%; font-size: 32px; font-weight:400;">Reservar ahora</button>

      <!-- FOOTER -->
      <footer id="contacto" class="footer">
        <div style="background-color: #1e1b1b;"class="container-fluid">
            <div  class="row text-center text-md-left">
              <br><br><br>
                <div class="col-md-4 text-center">
                    <img style="width: 400px;height: 100px;"src="/resources/img/dashboard-navbar/Letras Tutti.png" alt="Tutti Belli Studio" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <h5>Dirección</h5>
                    <p>adljbflñaisfjblñial<br>fuiajbofbasfjos</p>
                    <p>Teléfono: 874817238478</p>
                    <p>Email: aknfoanfs@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces</h5>
                    <ul class="links">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Iniciar sesión</a></li>
                        <li><a href="#">Cursos</a></li>
                    </ul>
                    <h5>Horario</h5>
                    <ul class="horario">
                        <li>Lunes a Viernes: 9:00-9:00</li>
                        <li>Sábado: 10:00-4:00</li>
                        <li>Domingo: 10:00-4:00</li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="icons">
                        <a href="#" class=""><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class=""><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class=""><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: black !important; margin-bottom: -30px;" class="col-12 text-center mt-2">
          <p style="margin-bottom: 30px;">&copy;Copyright Tutti Belli Studio. Todos los derechos reservados
          <br>Diseñada y desarrollada by Deiters</p>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

      <script>

$(document).ready(function(){
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
