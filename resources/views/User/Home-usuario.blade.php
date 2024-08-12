<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutti Belli Studio</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Yaldevi:wght@700&display=swap" rel="stylesheet">
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8VQ4y5rYuOOG3LOJGlgU8KnJ9UXr83Eo&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Varela&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');

      #navbar{
  font-family: "Josefin Sans", sans-serif !important;  
}

    body, html {
    margin: 0;
    padding: 0;
    background-image: url('/resources/img/home/low-poly-grid-haikei.svg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    overflow-x: hidden; 
}
.fonts3{
  font-family: "Josefin Sans", sans-serif !important; 
  /* letra principal */
}
gmp-map {
        height: 100%;
        width: 100%;
        height: 500px; /* Puedes ajustar la altura según tus necesidades */
        border-radius: 10px;
      }

h1, h2, h3, h4, h5 ,a, li, p{
  font-family: "Josefin Sans", sans-serif !important;
}

.hiddenX, .home{
    overflow-x: hidden;
}
/* BOTON PARA RESERVAR CITA MEJORADO ESTE ES EL BOTON PRINCIPAL */
.reserve-button {
    background-color: #212121; /* Negro mate */
    color: #e0e0e0; /* Gris claro */
    border: 2px solid #e0e0e0; /* Borde gris claro */
    padding: 10px 20px;
    font-size: 18px;
    font-weight: 400;
    text-transform: uppercase;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: fixed;
    bottom: 4%;
    left: 3%;
    z-index: 10;
    display: inline-block;
  }

  .reserve-button::before {
    content: '';
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    transition: all 0.3s ease;
  }

  .reserve-button:hover::before {
    left: 100%;
  }

  .reserve-button:hover {
    color: #fa3284; /* Cambia el color del texto a negro mate */
    background-color: #e0e0e0; /* Cambia el fondo a gris claro */
  }
  .btn-light:hover{
      background-color:#fa3284;
    }
    .btn-personalizado:hover{
      color:white;
      background-color:#fa3284;
      border:0;
    }
    .footer-pers{
      padding: 40px;
      margin-top:70px;
    }
  @media (max-width: 768px) {
    .reserve-button {
      font-size: 16px;
      padding: 8px 16px;
    }
  }

  @media (max-width: 480px) {
    .reserve-button {
      font-size: 14px;
      padding: 6px 12px;
    }
  }
/* Carrusel principal */

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
  background: rgba(0, 0, 0, 0.2);
  z-index: 1;
}
.p{
  font-family: "Merriweather", serif;
}
.h2{
  font-family: "Merriweather", serif;
}
.overlay-text {
  color:black;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  padding: 20px;
  z-index: 2;
}

.overlay-text h2 {
  font-family: "Varela", sans-serif;
  color: black;
  font-size: 1.5rem; /* Ajuste inicial para dispositivos pequeños */
  font-weight: bold;
  margin-bottom: 20px;
}

.overlay-text p {
  font-family: "Varela", sans-serif;
  color: black;
  font-size: 0.875rem; /* Ajuste inicial para dispositivos pequeños */
  margin-bottom: 10px;
}

.overlay-text .btn {
  font-size: 0.875rem; /* Ajuste inicial para dispositivos pequeños */
  font-weight: bold;
}

@media (min-width: 768px) {
  .overlay-text h2 {
    font-size: 1.75rem; /* Ajuste para dispositivos medianos */
  }

  .overlay-text p {
    font-size: 1rem; /* Ajuste para dispositivos medianos */
  }

  .overlay-text .btn {
    font-size: 1rem; /* Ajuste para dispositivos medianos */
  }
}

@media (min-width: 992px) {
  .overlay-text h2 {
    font-size: 2rem; /* Ajuste para dispositivos grandes */
  }

  .overlay-text p {
    font-size: 1.125rem; /* Ajuste para dispositivos grandes */
  }

  .overlay-text .btn {
    font-size: 1.125rem; /* Ajuste para dispositivos grandes */
  }
}

@media (min-width: 1200px) {
  .overlay-text h2 {
    font-size: 2.875rem; /* Aproximadamente 46px */
  }

  .overlay-text p {
    font-size: 1.25rem; /* Aproximadamente 20px */
  }

  .overlay-text .btn {
    font-size: 1.25rem; /* Aproximadamente 20px */
  }
}
  .img-horario{
    width: 450px;
    height: 600px;
    margin-top: 0 auto;
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
.btn-light:hover{
      background-color:#fa3284;
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
    width: 22%;
    padding: 35px;
    text-align: center;
    cursor: pointer;
    transition: transform 0.2s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-bottom: 20px; /* Espacio entre filas en caso de que se desborde en pantallas pequeñas */
  }

  .card:hover {
    transform: scale(1.05);
  }

  .card img {
    width: 80px;
    height: 80px;
    display: block;
    margin: 0 auto 10px;
  }

  .card h3 {
    margin: 10px 0;
  }

  .card p {
    text-align: center;
    text-justify: inter-word;
    flex-grow: 1; /* Para que los párrafos ocupen el espacio disponible */
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

/*Footer*/
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
    margin-bottom: 30px; /* Añade espacio entre las tarjetas */
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
.logo-img {
      height: auto;
      width: 0 auto;
      max-height: 90%;
      max-width: 90%;
      margin-bottom: 20px;
    }

    @media (max-width: 768px) {
      .logo-img {
        width: 50%;
      }
    }

    @media (max-width: 576px) {
      .logo-img {
        width: 70%;
      }
    }

    .section-divider {
      height: 7px;
      background: rgba(255, 255, 255, 0.8);
      width: 100%;
      margin: 0;
    }
    .fonts2{
      font-family: "Merriweather", serif;
    }

    .vertical-separator {
            display: inline-block;
            width: 1.5px;
            height: 30px;
            background-color: #000;
            margin: 3px 15px;
            vertical-align: middle;
    }
    @media (max-width: 480px) {
    .imgnavbar{
        width:200px;
        height: 30px;
    
    }
}

    </style>
</head>
<body class="hiddenX">

  <div id="contenedor_carga"></div>

  <section>
    <div data-aos="fade-up" data-aos-duration="1000" class="hero-image" style="position: relative; width: 100%; height: auto;">
      <img src="/resources/img/home/FONDOPRIN2.jpg" class="d-block w-100" alt="Promo image" style="object-fit: cover; height: 730px;">
      <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; color: white; background: rgba(0, 0, 0, 0.2);">
        <img src="/resources/img/home/_CON.png" alt="Logo" class="logo-img">
      </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000" class="section-divider"></div>
  </section>

<!-- NAVBAR / ENCABEZADO -->
<nav style="background: #f8d7da !important;" id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
  <div data-aos="fade-up" data-aos-duration="1000" class="container-fluid">
    <a class="navbar-brand" href="/Home-usuario">
      <img src="/resources/img/dashboard-navbar/Letras Tutti.png" alt="Tutti Belli Studio" class="imgnavbar" width="250" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div data-aos="fade-up" data-aos-duration="1000" class="collapse navbar-collapse" id="navbarSupportedContent">
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
        <a id="carrito" style="margin-right: 30px;" class="nav-link active texto1" aria-current="page" href="/Carrito-User" style="color: #000000;"><i class="fa-solid fa-cart-shopping"></i></a>
          <a href="/Reservacion-User" style="margin-right:20px;">
            <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
          </a>
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
        <div data-aos="fade-up" data-aos-duration="1000" class="container">
          <div data-aos="fade-up" data-aos-duration="1000" class="row">
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-6 mb-4">
              <img src="/resources/img/home/horariotutti.jpg" alt="Horarios" class="img-fluid img-horario">
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-6">
              <h2 class="fonts3">Conoce tu centro de micropigmentación</h2>
              <p class="fonts3">Micropigmentación Arte, surge de la necesidad en la región de un centro que fusione todo lo que una persona busca para el cuidado de su imagen, en un ambiente cómodo y profesional, todo en un solo lugar desde el 2020.</p>
              <br>
              <h3 class="fonts3">Profesionales</h3>
              <p class="fonts3">Ofrecemos un servicio profesional de excelente calidad, con el mejor reclutamiento de especialistas en la región. El profesionalismo de nuestros expertos y el alto nivel de nuestros productos y equipo caracterizan nuestro gran servicio al cliente.</p>
              <br>
              <h3 class="fonts3">Ahorra tiempo</h3>
              <p class="fonts3">Nuestro sistema de citas permite a nuestros clientes recibir su servicio en cuestión de minutos, maximizando el ahorro de tiempo en esta época en la que es tan valioso.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- SERVICIOS-->
      <section id="servicios"class="fonts3" >
        <p class="text-uppercase text-center" style="font-size: 50px;">Servicios</p>
        <div data-aos="fade-up" data-aos-duration="1000" class="container">
            <div data-aos="fade-up" data-aos-duration="1000" class="card" id="card1">
              <br>
                <img style="width: 80px;height: 80px;" src="/resources/img/home/servicios/LABIOS_TARJETA.png" alt="labios">
                <br>
                <h3 class="fonts3">Labios</h3>
                <p class="fonts3">En labios hacemos una pequeña limpieza para después anestesiarlos y aplicarles el color que gustes. Nuestro objetivo es dejarlos bellos y sensuales, realzando tu belleza natural con técnicas personalizadas y productos de alta calidad.</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="card" id="card2">
              <br>
                <img style="width: 80px;height: 80px;" src="/resources/img/home/servicios/OJOS_TARJETA.png" alt="Ojos">
                <br>
                <h3>Ojos</h3>
                <p>En ojos manejamos diferentes tipos de delineado, haciendo que tu mirada resalte aún más. Ofrecemos opciones permanentes y semipermanentes, adaptándonos a tus preferencias para lograr el look que deseas de manera segura y precisa.</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="card" id="card3">
              <br>
                <img style="width: 70px;height: 50px;" src="/resources/img/home/servicios/CEJA_TARJETA.png" alt="Ceja">
                <br>
                <br>
                <h3>Cejas</h3>
                <p>La ceja es el marco de tu rostro. Realzamos tus facciones con un diseño acorde a la forma de tu cara y la técnica que más te favorezca. Nuestro equipo se asegura de que tus cejas luzcan perfectas y armoniosas, complementando tu belleza natural.</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="card" id="card4">
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
      <section class="image-section" class="fonts3">
      <div data-aos="fade-up" data-aos-duration="1000" class="section-divider"></div>
        <div data-aos="fade-up" data-aos-duration="1000" class="overlay">
          <img src="/resources/img/home/FONDOPRIN2.jpg" class="d-block w-100" alt="Imagen separadora">
          <div class="dark-overlay"></div>
          <div class="overlay-text">
            <h2 class="fonts3">Nos caracterizamos por ofrecer un servicio altamente profesional y confiable</h2>
            <p class="fonts3">Nuestra meta es poder ofrecerte tratamientos de calidad con precios accesibles.</p>
            <p class="fonts3">Nos comprometemos a llevar tu tratamiento de principio a fin con la mejor asesoría por parte de nuestros especialistas altamente capacitados.</p>
            <a href="/Reservacion-User">
              <button onclick="" class="btn btn-dark btn-personalizado ">Reservar cita</button>
            </a>
          </div>
        </div> 
        <div class="section-divider"></div> 
      </section>
      <!-- CURSOS -->
      <section id="cursos" class="fonts3">
        <p class="text-uppercase text-center" style="font-size: 50px;">Cursos</p>
        <div data-aos="fade-up" data-aos-duration="1000" class="container">
          <div data-aos="fade-up" data-aos-duration="1000" class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/img1g.jpg" class="card-img-top" alt="...">
            <div style="margin-top: 20px;" data-aos="fade-up" data-aos-duration="1000" class="card-body">
              <p class="card-text">Nuestro curso te ayuda a especializarte con técnicas de cejas, enseñándote a crear diseños naturales y personalizados que realzan la belleza de cada rostro. Aprenderás desde el diseño inicial hasta el acabado perfecto, utilizando métodos avanzados y seguros.</p>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/img4g.jpg" class="card-img-top" alt="...">
            <div style="margin-top: 20px;" data-aos="fade-up" data-aos-duration="1000" class="card-body">
              <p class="card-text">Nuestro curso te ayuda a especializarte con técnicas de labios, enfocándote en la pigmentación y el contorno para lograr resultados duraderos y estéticamente agradables. Te enseñaremos a manejar diferentes tipos de pigmentos y técnicas para obtener un acabado impecable.</p>    
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/img3g.jpg" class="card-img-top" alt="...">
            <div style="margin-top: 20px;" class="card-body">
              <p class="card-text">Nuestro curso te ayuda a especializarte con técnicas de delineado de ojos, brindándote las habilidades necesarias para crear líneas precisas y elegantes que realzan la mirada. Aprenderás a aplicar distintos estilos de delineado, adaptándolos a las preferencias de cada cliente.</p>              
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/img2g.jpg" class="card-img-top" alt="...">
            <div style="margin-top: 20px;" class="card-body">
              <p class="card-text">Nuestro curso te ayuda a especializarte con técnicas de pestañas, enseñándote cómo aplicar extensiones y tratamientos que mejoran la longitud y el volumen de manera segura y profesional. Conocerás diferentes métodos y productos para ofrecer un servicio de alta calidad a tus clientes.</p>
            </div>
          </div>
        </div>
      </section>
      <section id="" class="fonts3">
        <div data-aos="fade-up" data-aos-duration="1000" class="container">
          <div data-aos="fade-up" data-aos-duration="1000" class="text-center row justify-content-center">
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-3 mb-4">
              <img src="/resources/img/home/ICUR3.jpg" class="rounded img-galeria" alt="...">
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-3 mb-4">
              <img src="/resources/img/home/ICUR0.jpg" class="rounded img-galeria" alt="...">
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-3 mb-4">
              <img src="/resources/img/home/ICUR2.jpg" class="rounded img-galeria" alt="...">
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-3 mb-4">
              <img src="/resources/img/home/ICUR1.jpg" class="rounded img-galeria" alt="...">
            </div>
          </div>
        </div>
      </section>
      <section class="text-center">
            <a href="/Cursos-User">
              <button onclick="" class="btn btn-dark btn-personalizado">Mas Informacion -></button>
            </a>
      </section>

      <!-- Galeria-->
      <section id="galeria" class="fonts3">
        <p class="text-uppercase text-center" style="font-size: 50px;">Galería</p>
        <div data-aos="fade-up" data-aos-duration="1000" class="container">
          <div data-aos="fade-up" data-aos-duration="1000" class="text-center row justify-content-center">
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-3 mb-4">
              <img src="/resources/img/home/img5g.jpg" class="rounded img-galeria" alt="...">
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-3 mb-4">
              <img src="/resources/img/home/img6g.jpg" class="rounded img-galeria" alt="...">
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-3 mb-4">
              <img src="/resources/img/home/img8g.jpg" class="rounded img-galeria" alt="...">
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="col-md-3 mb-4">
              <img src="/resources/img/home/img7g.jpg" class="rounded img-galeria" alt="...">
            </div>
          </div>
        </div>
      </section>
      
      

      <!-- GOOGLE MAPS -->
      <section class="fonts3" class="Pink_background_for_services_section" style="padding: 0px;">
      <div data-aos="fade-up" data-aos-duration="1000" class="section-divider"></div>
        <div data-aos="fade-up" data-aos-duration="1000" class="row">
              <gmp-map center="25.55710792541504,-103.3420181274414" zoom="14" map-id="DEMO_MAP_ID">
              <gmp-advanced-marker position="25.55710792541504,-103.3420181274414" title="My location"></gmp-advanced-marker>
              </gmp-map>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="section-divider"></div>
        <div data-aos="fade-up" data-aos-duration="1000" class="row">
          <p class="text-uppercase text-center" style="font-size: 50px; margin-top: 20px;">DONDE NOS UBICAMOS</p>
          <p class="text-uppercase text-center" style="font-size: 20px; margin-top: 30px;">Zafiro #67 Ex Hacienda La Joya 27086</p>
        </div>
        
        <br><br><br><br><br><br>
      </section>


            <!-- BOTÓN RESERVAR -->
            <a href="/Reservacion-User">
              <button  id="reservarBtn" type="button" class=" reserve-button btn-personalizado ">Reservar ahora</button>
            </a>

      <!-- FOOTER -->
      <footer id="contacto" class="footer" class="fonts3">
        <div style="background-color: black !important; margin-bottom: -30px;" class="col-12 text-center mt-2">
        <div class="icons">
                        <a href="https://www.facebook.com/profile.php?id=100066839301986" class=""><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/tutti_belli_trc_studio/" class=""><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/5218713826767" class=""><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
          <p style="margin-bottom: 30px;">&copy;Copyright Tutti Belli Studio. Todos los derechos reservados
          <br>Diseñada y desarrollada by Deiters</p>
      </div>
    </footer>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
      <script>
        AOS.init({
            offset: 200, // Desplazamiento desde el top de la página en px
            delay: 0, // Tiempo de espera antes de la animación en ms
            duration: 1000, // Duración de la animación en ms
            easing: 'ease-in-out', // Función de tiempo para la animación
            once: true, // Si la animación solo debería ocurrir una vez
        });

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


            // scripts aquí


          });


          // Pantalla de carga
          var loader = document.getElementById("contenedor_carga");
          var navbar = document.getElementById("navbar");
          window.addEventListener('load', function(){
              $('#navbar').css('visibility', 'visible');
              loader.style.display = "none";
          })
          //PARA LAS CARTAS POR QUE CON A JODE EL DISEÑO
          $('#card1').click(function() {
        window.location.href = "/Reservacion-User";
    });
    $('#card2').click(function() {
        window.location.href = "/Reservacion-User";
    });
    $('#card3').click(function() {
        window.location.href = "/Reservacion-User";
    });
    $('#card4').click(function() {
        window.location.href = "/Reservacion-User";
    });
      </script>
</body>
</html>
