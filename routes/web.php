<?php

use Illuminate\Support\Facades\Route;

// Home

Route::get('/', function () {
    return view('Home.Home-administrador');
});

Route::get('/Usuario', function () {
    return view('Home.Home-usuario');
});

Route::get('/Empleado', function () {
    return view('Home.Home-empleado');
});


// Login y registro de usuarios

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Registro', function () {
    return view('Registro');
});


// Registrar nuevas cosas

Route::get('/AgregarProducto', function () {
    return view('Agregar-Producto');
});

Route::get('/AgregarCurso', function () {
    return view('Agregar-Curso');
});

Route::get('/AgregarTecnica', function () {
    return view('Agregar-Tecnica');
});


// Templates

Route::get('/Cliente', function () {
    return view('templates.navbars.ClienteNavbar');
});

Route::get('/Visitante', function () {
    return view('templates.navbars.VisitanteNavbar');
});

Route::get('/Empleado', function () {
    return view('templates.dashboards.EmpleadoDashboard');
});

Route::get('/Administrador', function () {
    return view('templates.dashboards.AdministradorDashboard');
});