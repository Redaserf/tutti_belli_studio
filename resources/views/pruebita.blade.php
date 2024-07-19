<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Select as Checkbox with jQuery</title>
  <style>
    .multiselect-container {
      display: flex;
      flex-direction: column;
    }
    .multiselect-option {
      cursor: pointer;
      padding: 5px;
    }
    .multiselect-option:hover {
      background-color: #f8f9fa;
    }
    .multiselect-option.selected {
      background-color: #0d6efd;
      color: white;
    }
  </style>
</head>
<body>

<div class="container mt-4">
  <form id="serviceForm">
    <div class="mb-3">
      <label for="services" class="form-label">Selecciona servicios:</label>
      <div id="services" class="form-control multiselect-container">
        <div class="multiselect-option" data-value="service1">Servicio 1</div>
        <div class="multiselect-option" data-value="service2">Servicio 2</div>
        <div class="multiselect-option" data-value="service3">Servicio 3</div>
        <div class="multiselect-option" data-value="service4">Servicio 4</div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Reservar</button>
  </form>
</div>

<script>
  $(document).ready(function() {
    $('.multiselect-option').on('click', function() {
      $(this).toggleClass('selected');
    });

    $('#serviceForm').on('submit', function(e) {
      e.preventDefault();
      const selectedServices = [];
      $('.multiselect-option.selected').each(function() {
        selectedServices.push($(this).data('value'));
      });
      console.log(selectedServices);
      // Aquí puedes manejar los valores seleccionados, por ejemplo, enviarlos a un servidor
    });
  });
</script>

</body>
</html>
