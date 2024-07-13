<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }
        .container-div {
            height: 100vh;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .image-label img {
            padding-bottom: 20px;
            border-radius: 15px;

        }

        .form-floating input,
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
                    <div class="row ">
                        <H2>Agregar Descuento Producto</H2>
                    </div>
                    <div class="form-floating mb-3">
                            <select class="form-control" id="selecService" placeholder="Servicio">
                                <option value="" disabled selected>-- Seleccione la Categoria--</option>
                                <option value="male">S1</option>
                                <option value="female">S2</option>
                                <option value="other">Otro</option>
                            </select>
                            <label for="employeeGender">Categoria</label>
                    </div>
                    <div class="form-floating mb-3">
                            <select class="form-control" id="selectecnica" placeholder="Tecnica">
                                <option value="" disabled selected>-- Seleccione El producto --</option>
                                <option value="male">tec1</option>
                                <option value="female">tec2</option>
                                <option value="other">Otro</option>
                            </select>
                            <label for="employeeGender">Producto</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="porc" placeholder="%">
                            <label for="porcentaje">Porcentaje de Descuento</label>
                    </div>
                    <div>
                            <button type="submit" class="btn btn-dark btn-block w-100">Agregar Descuento</button>
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