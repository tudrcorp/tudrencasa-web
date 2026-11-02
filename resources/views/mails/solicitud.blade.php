<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva cotización</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #1f2937;
            background: #f3f4f6;
        }
        .wrapper {
            max-width: 640px;
            margin: 24px auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }
        .header {
            background: #0b3d5c;
            color: #ffffff;
            padding: 24px;
            text-align: center;
        }
        .content {
            padding: 28px 32px;
        }
        .details {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
        }
        .details th,
        .details td {
            text-align: left;
            padding: 10px 12px;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: top;
        }
        .details th {
            width: 40%;
            color: #4b5563;
            font-weight: 600;
        }
        .footer {
            padding: 20px 32px 28px;
            font-size: 13px;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1 style="margin: 0; font-size: 22px;">Nueva solicitud de cotización</h1>
            <p style="margin: 8px 0 0;">Seguro de viaje — TuDrEnCasa</p>
        </div>

        <div class="content">
            <p>Hola, equipo comercial:</p>
            <p>
                El Sr(a). <strong>{{ $formulario->nombre_completo }}</strong> ha solicitado una cotización
                de seguro de viaje desde el sitio web.
            </p>

            <table class="details">
                <tr>
                    <th>Nombre</th>
                    <td>{{ $formulario->nombre_completo }}</td>
                </tr>
                <tr>
                    <th>Correo</th>
                    <td>{{ $formulario->email }}</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td>{{ $formulario->telefono }}</td>
                </tr>
                <tr>
                    <th>Plan</th>
                    <td>{{ $formulario->plan }}</td>
                </tr>
                <tr>
                    <th>Destino</th>
                    <td>{{ $formulario->destino }}</td>
                </tr>
                <tr>
                    <th>Fecha de salida</th>
                    <td>{{ $formulario->fecha_salida }}</td>
                </tr>
                <tr>
                    <th>Fecha de regreso</th>
                    <td>{{ $formulario->fecha_retorno }}</td>
                </tr>
                <tr>
                    <th>Adultos</th>
                    <td>{{ $formulario->adultos }}</td>
                </tr>
                <tr>
                    <th>Menores</th>
                    <td>{{ $formulario->menores }}</td>
                </tr>
                <tr>
                    <th>Mayores</th>
                    <td>{{ $formulario->mayores }}</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            Notificación automática generada por tudrencasa-web.
        </div>
    </div>
</body>
</html>
