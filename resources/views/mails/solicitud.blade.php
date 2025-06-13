<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            text-align: center;
            /* Centra todo el contenido */
        }


        .header {
            /* background-color: #00539C; */
            /* Azul oscuro */
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            margin-top: 20px;
            text-align: justify;
            /* Justifica el texto */
        }


        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 0.9em;
            color: #555;

        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .social-icons img {
            width: 40px;
            height: 40px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="https://app.piedy.com/images/BANER-GUSTAVO-1.png" alt="Logo Bancamiga" style="max-width: 100%;">
    </div>

    <div style="margin: auto; width: 600px; padding: 10px; text-align: center;">

        <p><span style="font-weight: bold; font-size: 1.2em;">¡Bienvenido(a) a TuDrEnCasa! 🌟</span> </p>

        <p>Le informamos que el Sr(a). {{ $formulario['nombre_completo'] }} ha realizado una solicitud de cotización para seguro de viaje. 😊</p>
        <br>
        <br>
    </div>

    <div class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Detalles de la solicitud:</h2>
        <ul class="space-y-2 text-sm text-gray-700">
            <li><strong>Nombre:</strong> {{ $formulario['nombre_completo'] }}</li>
            <li><strong>Correo:</strong> {{ $formulario['email'] }}</li>
            <li><strong>Telefono:</strong> {{ $formulario['telefono'] }}</li>
            <li><strong>Destino:</strong> {{ $formulario['destino'] }}</li>
            <li><strong>Fecha de salida:</strong> {{ $formulario['fecha_salida'] }}</li>
            <li><strong>Fecha de regreso:</strong> {{ $formulario['fecha_retorno'] }}</li>
            <li><strong>Adultos:</strong> {{ $formulario['adultos'] }}</li>
            <li><strong>Menores:</strong> {{ $formulario['menores'] }}</li>
            <li><strong>Mayores:</strong> {{ $formulario['mayores'] }}</li>

        </ul>
    </div>

    <p>Atentamente,</p>
    <p>TuDrEnCasa</p>

    <div class="footer">
        <img src="https://app.piedy.com/images/BANER-GUSTAVO-2.png" alt="Logo Tubanca" style="max-width: 100%;">
        <p style="font-size: 0.8em; font-style: italic;">Gracias por confiar en nosotros para gestionar las necesidades médicas de tu empresa</p>
    </div>
</body>
</html>

