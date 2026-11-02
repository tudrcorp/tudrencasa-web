<?php

return [
    /*
    |--------------------------------------------------------------------------
    | UltraMsg (WhatsApp) — mismo enfoque que Integracorp
    |--------------------------------------------------------------------------
    */
    'TOKEN' => env('ULTRAMSG_TOKEN', 'yuvh9eq5kn8bt666'),
    'CURLOPT_URL' => env(
        'ULTRAMSG_CHAT_URL',
        'https://api.ultramsg.com/instance117518/messages/chat'
    ),

    /*
    | Destinatarios de cotizaciones (separados por coma en .env).
    */
    'TELEFONOS' => array_values(array_filter(array_map(
        static fn (string $phone): string => trim($phone),
        explode(',', (string) env(
            'WHATSAPP_NOTIFY_PHONES',
            '+584142073145,+584242220056,+584242271498'
        ))
    ))),
];
