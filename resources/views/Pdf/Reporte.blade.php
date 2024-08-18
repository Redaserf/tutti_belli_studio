<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Ventas</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 40px;
            background-color: #fff;
            color: #333;
        }
        h1, h2 {
            text-align: center;
            font-weight: bold;
            color: #000;
            font-size: 36px;
            font-family: 'Georgia', serif; 
        }
        .logo {
            text-align: center;
            margin-bottom: 40px;
        }
        .logo img {
            max-width: 120px;
        }
        .sales-report table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .sales-report th, .sales-report td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        .sales-report th {
            background-color: #000; /* Fondo negro para los encabezados */
            color: white; /* Texto blanco para los encabezados */
            font-size: 16px;
            text-transform: uppercase; /* Texto en mayúsculas para los encabezados */
        }

        .sales-report tr:nth-child(even) {
            background-color: #f9f9f9; /* Fila de fondo gris claro para alternar */
        }

        .sales-report tr:hover {
            background-color: #f1f1f1; /* Fila que se ilumina al pasar el cursor */
        }

        .sales-report td {
            color: #000; /* Texto negro para las celdas */
            background-color: white; /* Fondo blanco para las celdas */
        }
        .total-sales {
            margin-top: 30px;
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 12px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
@php
    $total  = 0;
@endphp

<div class="logo">
    <h1>Tutti Belli Studio</h1>
</div>

<div class="sales-report">
    <h1>Reporte de Ventas</h1>

    <table>
        <thead>
        <tr>
            <th>Servicio</th>
            <th>Fecha de Venta</th>
            <th>Empleado</th>
            <th>Cantidad</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{$venta['tipoVenta']}}</td>
                <td>{{$venta['fechaVenta']}}</td>
                <td>{{$venta['empleadoNombre']}}</td>
                <td>$ {{$venta['total']}}</td>
            </tr>
            @php
                $total += $venta['total'];
            @endphp
        @endforeach
        </tbody>
    </table>

    <div class="total-sales">
        Total de Ventas:  ${{$total}}
    </div>
</div>

<div class="footer">
    <p>Este reporte ha sido generado automáticamente por el sistema de ventas.</p>
    <p>&copy; 2024 Tutti Belli Studio. Todos los derechos reservados.</p>
</div>

</body>
</html>
