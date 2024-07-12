<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>

/* ========================= Dashboard ========================= */

/* Google Font Import - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

:root{
    /* ===== Colores ===== */
    --body-color: #FFF;
    --sidebar-color: #E4E9F7;;
    --primary-color: #ffcade;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #707070;

    /* ===== Transition ===== */
    --tran-02: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.4s ease;
    --tran-05: all 0.5s ease;
}

body{
    height: 100vh;
    background: var(--body-color);
}


/* ===== Sidebar ===== */

.sidebar{
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

.sidebar.close{
    width: 90px;   
}

.dashboard-container{
    font-family: "Poppins", sans-serif;
}

/* ===== Resuable CSSS ===== */

.sidebar .text{
    font-size: 16px;
    font-weight: 500;
    color: var(--text-color);
    transition: var(--tran-03);
    white-space: nowrap;
    opacity: 1;
}

.sidebar.close .text{
    opacity: 0;
}

.sidebar .image{
    min-width: 60px;
    margin-right: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar li{
    height: 50px;
    margin-top: 10px;
    list-style: none;
    display: flex;
    align-items: center;
}

.sidebar li .icon{
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 60px;
    font-size: 18px;
}

.sidebar li .icon,
.sidebar li .text{
    color: var(--text-color);
    transition: var(--tran-02);
}

.sidebar header{
    position: relative;
}

.sidebar .menu{
    margin-top: 45px;
}

.sidebar .image-text img{
    width: 48px;
    border-radius: 8px;
}

.sidebar header .image-text{
    display: flex;
    align-items: center;
}

header .image-text .header-text{
    display: flex;
    flex-direction: column;
}

header{
    margin-bottom: 20px;
}

.header-text .name{
    font-weight: 600;
}

.header-text .rol{
    margin-top: -2px;
}

.sidebar header .toggle{
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

.sidebar.close header .toggle{
    transform: translateY(-50%);
}

.sidebar li a{
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 8px;
    transition: var(--tran-04);
}

.sidebar li a:hover{
    background: var(--primary-color);
}

.sidebar li a:hover .icon,
.sidebar li a:hover .text{
    color: var(--sidebar-color);
}

.sidebar .menu-bar{
    height: calc(100% - 110px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.home{
    position: relative;
    height: 100vh;
    left: 255px;
    width: calc(100% - 255px);
    background: var(--body-color);
    transition: var(--tran-05);
}

.sidebar.close ~ .home{
    left: 95px;
    width: calc(100% - 95px);
} 

    </style>
    @yield('styles')
</head>
<body>
    
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="/resources/img/dashboard-navbar/furina.jpg" alt="">
                </span>

                <div class="text header-text">
                    {{-- Cambiar nombre --}}
                    <span class="name">anyelo</span>
                    <span class="rol">Empleado</span>
                </div>
            </div>

            <i class="fa-solid fa-angle-right toggle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-solid fa-house icon"></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-regular fa-calendar icon"></i>
                            <span class="text nav-text">Citas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-solid fa-clipboard icon"></i>
                            <span class="text nav-text">Servicios</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-solid fa-pencil icon"></i>
                            <span class="text nav-text">Cursos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-solid fa-bag-shopping icon"></i>
                            <span class="text nav-text">Productos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-solid fa-box icon"></i>
                            <span class="text nav-text">Inventario</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-solid fa-sack-dollar icon"></i>
                            <span class="text nav-text">Descuentos</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                        <span class="text nav-text">Cerrar sesión</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    @yield('body')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>
    <script>

    const body = document.querySelector("body"),
    sidebar = body.querySelector(".sidebar"),
    toggle = body.querySelector(".toggle");

    toggle.addEventListener("click", () =>{
        sidebar.classList.toggle("close");
    })

    </script>
    @yield('js')
</body>
</html>