<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar técnica</title>
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

        .form-floating textarea,
        .form-floating select,
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
                        <H2>Agregar técnica</H2>
                    </div>
                    <div class="col-md-6">
                        
                        
                        <div class="image-label">
                            <!-- AL dar clic a la imagen dejara agregar imagenes de los productos  -->
                             <!-- La imagen por defecto seria por ejemplo una imagen gris con el texto "PULSA PARA AGREGAR IMAGEN DEL PRODUCTO" -->
                            <img src="https://via.placeholder.com/300" class="img-fluid" alt="Imagen del producto">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select name="" class="form-control" id="TecnicService">
                                <option value="" disabled selected>Servicios</option>

                                <!-- Servicios que aparecerán con back-end -->

                            </select>
                            <label for="TecnicService">Servicio al que pertenece la técnica</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="AddTecnicName" placeholder="nombre de la técnica">
                            <label for="AddTecnicName">Nombre de la técnica</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="AddTecnicPrice" placeholder="precio de la técnica">
                            <label for="AddTecnicPrice">Precio de la técnica</label>
                        </div>
                        <div class="mb-3">
                            <label for="AddTecnicDescription">Descripción de la técnica</label>
                            <textarea class="form-control" id="AddTecnicDescription" rows="7" style="resize: none;"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-dark btn-block w-100" style="margin-bottom: 20px;">Agregar técnica</button>
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