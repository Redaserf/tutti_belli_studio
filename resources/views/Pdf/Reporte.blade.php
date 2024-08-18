<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@php
    $total = 0;
@endphp
<h1>REPORTE DE VENTAS</h1>
<label id="mostrarTotal"> </label>
<table class="">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Fecha de Venta</th>
        <th>Empleado</th>
        <th>Cantidad</th>
    </tr>
    </thead>
    <tbody id="">
    @foreach($ventas as $venta)
        <tr>
            <td>{{$venta['tipoVenta']}}</td>
            <td>{{$venta['fechaVenta']}}</td>
            <td>{{$venta['empleadoNombre']}}</td>
            <td>{{$venta['total']}}</td>
        </tr>

        @php
            $total += $venta['total'];
        @endphp
    @endforeach
    </tbody>
</table>
<h2>Total de Ventas: {{$total}}</h2>
</body>
</html>
