<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Fecha y Hora Personalizado</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <style>
        .hidden { display: none; }
    </style>
</head>
<body>
    <label for="datePicker">Selecciona una fecha:</label>
    <input type="text" id="datePicker">

    <label for="timeSelect">Selecciona una hora:</label>
    <select id="timeSelect"></select>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(function() {
            // Inicializa el datepicker
            $("#datePicker").datepicker({
                dateFormat: 'yy-mm-dd',
                onSelect: function(dateText) {
                    updateTimeOptions(new Date(dateText));
                }
            });

            // Función para actualizar las opciones de tiempo basadas en la fecha seleccionada
            function updateTimeOptions(date) {
                const day = date.getDay(); // 0 = Domingo, 1 = Lunes, ..., 6 = Sábado
                const select = $('#timeSelect');
                select.empty(); // Limpia las opciones actuales

                let startHour, endHour;
                if (day >= 1 && day <= 5) { // Lunes a Viernes
                    startHour = 9;
                    endHour = 21;
                } else { // Sábados y Domingos
                    startHour = 10;
                    endHour = 16;
                }

                for (let hour = startHour; hour <= endHour; hour++) {
                    for (let minutes = 0; minutes < 60; minutes += 30) {
                        const timeValue = `${String(hour).padStart(2, '0')}:${String(minutes).padStart(2, '0')}`;
                        select.append(new Option(timeValue, timeValue));
                    }
                }
            }

            // Inicializa con la fecha actual
            updateTimeOptions(new Date());
        });
    </script>
</body>
</html>
