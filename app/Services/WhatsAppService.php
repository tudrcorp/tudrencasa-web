<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class WhatsAppService
{
    /**
     * Envía un mensaje de texto por UltraMsg (mismo patrón cURL que Integracorp).
     */
    public function sendChat(string $phone, string $body): bool
    {
        $token = (string) config('parametros.TOKEN');
        $url = (string) config('parametros.CURLOPT_URL');

        if ($token === '' || $url === '' || $phone === '') {
            Log::warning('WhatsApp no configurado: faltan TOKEN, CURLOPT_URL o teléfono destino.');

            return false;
        }

        try {
            $params = [
                'token' => $token,
                'to' => $phone,
                'body' => $body,
            ];

            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => http_build_query($params),
                CURLOPT_HTTPHEADER => [
                    'content-type: application/x-www-form-urlencoded',
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $httpCode = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($err) {
                Log::error('WhatsApp cURL error', [
                    'error' => $err,
                    'to' => $phone,
                ]);

                return false;
            }

            $payload = json_decode((string) $response, true);

            if ($httpCode >= 400 || (is_array($payload) && isset($payload['error']))) {
                Log::error('WhatsApp UltraMsg API error', [
                    'status' => $httpCode,
                    'error' => is_array($payload) ? ($payload['error'] ?? $response) : $response,
                    'to' => $phone,
                ]);

                return false;
            }

            Log::info('WhatsApp enviado correctamente', [
                'to' => $phone,
                'response' => is_array($payload) ? $payload : mb_substr((string) $response, 0, 500),
            ]);

            return true;
        } catch (\Throwable $e) {
            Log::error('WhatsApp excepción: '.$e->getMessage(), [
                'to' => $phone,
            ]);

            return false;
        }
    }

    public function buildCotizacionMessage(object $formulario): string
    {
        return <<<TEXT
*TuDrEnViajes · Nueva cotización de viaje* ✈️

Hola, buenas tardes. 👋
El Sr(a). *{$formulario->nombre_completo}* solicitó una cotización de seguro de viaje.

*Detalle de la solicitud:*
• *Nombre:* {$formulario->nombre_completo}
• *Email:* {$formulario->email}
• *Teléfono:* {$formulario->telefono}
• *Plan:* {$formulario->plan}
• *Destino:* {$formulario->destino}
• *Fecha salida:* {$formulario->fecha_salida}
• *Fecha retorno:* {$formulario->fecha_retorno}
• *Adultos (18+):* {$formulario->adultos}
• *Menores (0-17):* {$formulario->menores}
• *Mayores (65+):* {$formulario->mayores}

Equipo TuDrEnViajes
TEXT;
    }
}
