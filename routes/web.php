<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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

// Test