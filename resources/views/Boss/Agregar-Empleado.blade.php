<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
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
<body>
    <div class="col-12">
        <div class="container container-div">
            <div class="container full-height d-flex justify-content-center align-items-center">
                <div class="row w-100">
                    <div class="row">
                        <h2>Agregar Empleado</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="employeeName" placeholder="Nombre">
                            <label for="employeeName">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="employeeAge" placeholder="Edad">
                            <label for="employeeAge">Edad</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="employeeEmail" placeholder="Correo electrónico">
                            <label for="employeeEmail">Correo electrónico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="employeeGender" placeholder="Sexo">
                                <option value="" disabled selected>-- Seleccione el sexo --</option>
                                <option value="male">Masculino</option>
                                <option value="female">Femenino</option>
                                <option value="other">Otro</option>
                            </select>
                            <label for="employeeGender">Sexo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="employeePhone" placeholder="Número telefónico">
                            <label for="employeePhone">Número telefónico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="employeeStartDate" placeholder="Fecha de inicio">
                            <label for="employeeStartDate">Fecha de inicio</label>
                        </div>
                        <div class="mb-3">
                            <label for="employeeDescription">Descripción</label>
                            <textarea class="form-control" id="employeeDescription" rows="7" style="resize: none;" placeholder="Descripción"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-dark btn-block w-100">Agregar Empleado</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
