<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutti Belli Studio</title>
    <link rel="icon" href="/resources/img/home/_CON.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8VQ4y5rYuOOG3LOJGlgU8KnJ9UXr83Eo&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Varela&display=swap');
      /* Google Font Import - Poppins */
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

    body, html {
    margin: 0;
    padding: 0;
    background-image: url('/resources/img/home/low-poly-grid-haikei.svg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
      }
      gmp-map {
        height: 100%;
        width: 100%;
        height: 500px; /* Puedes ajustar la altura según tus necesidades */
        border-radius: 10px;
      }

  
 /* ==========[ Dashboard ]========= */


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


        #contenedor_carga {
            background: #ffffff url(/resources/img/home/preloader.gif) no-repeat center center;
            background-size: 20%;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 300000;
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

        .sidebarOverlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 98;
            display: none;
        }

    .sidebar.close .header-text {
    display: none;
    }


 /* ==========[ Home ]========= */

 .fonts3{
  font-family: "Josefin Sans", sans-serif !important; 
}

 .p{
  font-family: "Merriweather", serif;
}
.h2{
  font-family: "Merriweather", serif;
}

.fonts2{
  font-family: "Merriweather", serif;
}


 .home{
      background-image: url('/resources/img/home/low-poly-grid-haikei.svg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      min-height: 100vh;
}


.hiddenX{
    overflow-x: hidden;
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
    width: 350px;
    height: 500px;
    margin-left: 0 auto;
  }



footer {
    margin: 0;
    padding: 0;
  }
  

section{
    padding: 20px 0;
}


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

    </style>
</head>
<body class="hiddenX">

  <div id="contenedor_carga"></div>
  <div class="sidebarOverlay"></div>



        {{-- Sidebar --}}
    
        <nav class="dashboard-container sidebar close">
          <header>
              <div class="image-text">
                  <span class="image">
                      <img src="/resources/img/dashboard-navbar/furina.jpg" alt="">
                  </span>
                  <div class="text header-text">
                    <a style="text-decoration:none; color: #707070;" href="/Perfil-Admin">
                            <span class="name">{{ Auth::user()->name }}<i style="margin-left:6px;" class="fa-solid fa-pen-to-square"></i></span>
                        </a>
                      <span class="rol">Administrador</span>
                  </div>
              </div>
              <i class="fa-solid fa-angle-right toggle"></i>
          </header>
  
          <div class="menu-bar">
              <div class="menu">
                  <ul class="menu-links">
                      <li class="nav-link">
                          <a href="/Home-administrador">
                              <i class="fa-solid fa-house icon"></i>
                              <span class="text nav-text">Inicio</span>
                          </a>
                      </li>
                      <li class="nav-link">
                          <a href="/Ver-Citas">
                              <i class="fa-regular fa-calendar icon"></i>
                              <span class="text nav-text">Citas</span>
                          </a>
                      </li>
                      <li class="nav-link">
                          <a href="/Ver-Servicios">
                              <i class="fa-solid fa-scissors icon"></i>
                              <span class="text nav-text">Servicios</span>
                          </a>
                      </li>
                      <li class="nav-link">
                          <a href="/Ver-Cursos">
                              <i class="fa-solid fa-pencil icon"></i>
                              <span class="text nav-text">Cursos</span>
                          </a>
                      </li>
                      <li class="nav-link">
                          <a href="/Ver-Productos">
                              <i class="fa-solid fa-basket-shopping icon"></i>
                              <span class="text nav-text">Productos</span>
                          </a>
                      </li>
                      <li class="nav-link">
                          <a href="/Ver-Inventario">
                              <i class="fa-solid fa-box icon"></i>
                              <span class="text nav-text">Inventario</span>
                          </a>
                      </li>
                      <li class="nav-link">
                          <a href="/Ver-Descuentos">
                              <i class="fa-solid fa-percent icon"></i>
                              <span class="text nav-text">Descuentos</span>
                          </a>
                      </li>
                      <li class="nav-link">
                          <a href="/Ver-Empleados">
                              <i class="fa-solid fa-user-tie icon"></i>
                            <span class="text nav-text">Empleados</span>
                          </a>
                      </li>
                      <li class="nav-link">
                          <a href="/Ver-Ventas">
                              <i class="fa-solid fa-money-bill-trend-up icon"></i>
                            <span class="text nav-text">Ventas</span>
                          </a>
                      </li>
                      </ul>
                    </div>
                    <div class="bottom-content">
                      <li class="">
                          <a href="/Logout">
                              <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                              <span class="text nav-text">Cerrar sesión</span>
                          </a>
                      </li>
                  </div>
              </div>
          </nav>
              
          {{-- Fin Sidebar --}}



<div class="home">

  
  <section>
    <div data-aos="fade-up" data-aos-duration="1000" class="hero-image" style="position: relative; width: 100%; height: auto;">
      <img src="/resources/img/home/FONDOPRIN2.jpg" class="d-block w-100" alt="Promo image" style="object-fit: cover; height: 500px;">
      <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; color: white; background: rgba(0, 0, 0, 0.1);">
        <img src="/resources/img/home/_CON.png" alt="Logo" class="logo-img">
      </div>
    </div>
    <div class="section-divider"></div>
  </section>

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
            <div data-aos="fade-up" data-aos-duration="1000"  class="card">
              <br>
                <img style="width: 80px;height: 80px;" src="/resources/img/home/servicios/LABIOS_TARJETA.png" alt="labios">
                <br>
                <h3 class="fonts3">Labios</h3>
                <p class="fonts3">En labios hacemos una pequeña limpieza para después anestesiarlos y aplicarles el color que gustes. Nuestro objetivo es dejarlos bellos y sensuales, realzando tu belleza natural con técnicas personalizadas y productos de alta calidad.</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="card">
              <br>
                <img style="width: 80px;height: 80px;" src="/resources/img/home/servicios/OJOS_TARJETA.png" alt="Ojos">
                <br>
                <h3>Ojos</h3>
                <p>En ojos manejamos diferentes tipos de delineado, haciendo que tu mirada resalte aún más. Ofrecemos opciones permanentes y semipermanentes, adaptándonos a tus preferencias para lograr el look que deseas de manera segura y precisa.</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="card">
              <br>
                <img style="width: 70px;height: 50px;" src="/resources/img/home/servicios/CEJA_TARJETA.png" alt="Ceja">
                <br>
                <br>
                <h3>Cejas</h3>
                <p>La ceja es el marco de tu rostro. Realzamos tus facciones con un diseño acorde a la forma de tu cara y la técnica que más te favorezca. Nuestro equipo se asegura de que tus cejas luzcan perfectas y armoniosas, complementando tu belleza natural.</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="card">
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
          <div  class="dark-overlay"></div>
          <div class="overlay-text">
            <h2 class="fonts3">Nos caracterizamos por ofrecer un servicio altamente profesional y confiable</h2>
            <p class="fonts3">Nuestra meta es poder ofrecerte tratamientos de calidad con precios accesibles.</p>
            <p class="fonts3">Nos comprometemos a llevar tu tratamiento de principio a fin con la mejor asesoría por parte de nuestros especialistas altamente capacitados.</p>
            <a href="/Agregar-cita">
              <button onclick="" class="btn btn-dark">Reservar cita</button>
            </a>
          </div>
        </div> 
        <div data-aos="fade-up" data-aos-duration="1000" class="section-divider"></div> 
      </section>
      <!-- CURSOS -->
      <section id="cursos" class="fonts3">
        <p class="text-uppercase text-center" style="font-size: 50px;">Cursos</p>
        <div data-aos="fade-up" data-aos-duration="1000" class="container">
          <div data-aos="fade-up" data-aos-duration="1000" class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/img1g.jpg" class="card-img-top" alt="...">
            <div style="margin-top: 20px;" data-aos="fade-up" data-aos-duration="1000" class="card-body">
              <h5 class="card-title">Tutti Belli Studio</h5>
              <p class="card-text">Nuestro curso te ayuda a especializarte con técnicas de cejas, enseñándote a crear diseños naturales y personalizados que realzan la belleza de cada rostro. Aprenderás desde el diseño inicial hasta el acabado perfecto, utilizando métodos avanzados y seguros.</p>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/img4g.jpg" class="card-img-top" alt="...">
            <div style="margin-top: 20px;" data-aos="fade-up" data-aos-duration="1000" class="card-body">
              <h5 class="card-title">Tutti Belli Studio</h5>
              <p class="card-text">Nuestro curso te ayuda a especializarte con técnicas de labios, enfocándote en la pigmentación y el contorno para lograr resultados duraderos y estéticamente agradables. Te enseñaremos a manejar diferentes tipos de pigmentos y técnicas para obtener un acabado impecable.</p>    
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/img3g.jpg" class="card-img-top" alt="...">
            <div style="margin-top: 20px;" class="card-body">
              <h5 class="card-title">Tutti Belli Studio</h5>
              <p class="card-text">Nuestro curso te ayuda a especializarte con técnicas de delineado de ojos, brindándote las habilidades necesarias para crear líneas precisas y elegantes que realzan la mirada. Aprenderás a aplicar distintos estilos de delineado, adaptándolos a las preferencias de cada cliente.</p>              
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="card-2" style="width: 18rem;">
            <img src="/resources/img/home/img2g.jpg" class="card-img-top" alt="...">
            <div style="margin-top: 20px;" class="card-body">
              <h5 class="card-title">Tutti Belli Studio</h5>
              <p class="card-text">Nuestro curso te ayuda a especializarte con técnicas de pestañas, enseñándote cómo aplicar extensiones y tratamientos que mejoran la longitud y el volumen de manera segura y profesional. Conocerás diferentes métodos y productos para ofrecer un servicio de alta calidad a tus clientes.</p>
            </div>
          </div>
        </div>
      </section>
      <section id="" class="fonts3">
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
      <section class="text-center">
            <a href="/Cursos-User">
              <button onclick="" class="btn btn-dark">Mas Informacion -></button>
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


      <!-- FOOTER -->
      <footer id="contacto" class="footer" class="fonts3">
        <div style="background-color: #1e1b1b;"class="container-fluid">
            <div  class="row text-center text-md-left">
              <br><br><br>
                <div class="col-md-4 text-center">
                    <img style="width: 400px;height: 100px;"src="/resources/img/dashboard-navbar/tuttibelli.png" alt="Tutti Belli Studio" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <h5>Dirección</h5>
                    <p>Torreon,Coahuila<br>Ex Hacienda la joya zafiro #67</p>
                    <p>Teléfono: +52 871 382 6767</p>
                    <p>Email: tuttibellistudiotrc@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces</h5>
                    <ul class="links">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#cursos">Cursos</a></li>
                        <li><a href="/Logout">Cerrar sesión</a></li>
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
                        <a href="https://www.facebook.com/profile.php?id=100066839301986" class=""><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/tutti_belli_trc_studio/" class=""><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/5218713826767" class=""><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: black !important; margin-bottom: -30px;" class="col-12 text-center mt-2">
          <p style="margin-bottom: 30px;">&copy;Copyright Tutti Belli Studio. Todos los derechos reservados
          <br>Diseñada y desarrollada by Deiters</p>
      </div>
    </footer>
    
      
    </div>


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

        // Pantalla de carga
        var loader = document.getElementById("contenedor_carga");
        var navbar = document.getElementById("navbar");
        window.addEventListener('load', function(){
            $('#navbar').css('visibility', 'visible');
            loader.style.display = "none";
        });

    $(document).ready(function(){

        // Dashboard toggle
        const body = document.querySelector("body"),
              sidebar = body.querySelector(".sidebar"),
              toggle = body.querySelector(".toggle"),
              sidebarOverlay = body.querySelector(".sidebarOverlay");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if (!sidebar.classList.contains("close")) {
                sidebarOverlay.style.display = "block";
            } else {
                sidebarOverlay.style.display = "none";
            }
        });

        sidebarOverlay.addEventListener("click", () => {
            sidebar.classList.add("close");
            sidebarOverlay.style.display = "none";
        });
    });
    
</script>
</body>
</html>
