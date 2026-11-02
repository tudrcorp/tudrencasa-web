<?php

namespace App\Jobs;

use App\Models\Formulario;
use App\Services\WhatsAppService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NotifyCotizacionSolicitud implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public function __construct(public Formulario $formulario) {}

    public function handle(WhatsAppService $whatsApp): void
    {
        $telefonos = config('parametros.TELEFONOS', []);
        $body = $whatsApp->buildCotizacionMessage($this->formulario);

        if (! is_array($telefonos) || $telefonos === []) {
            throw new \RuntimeException('No hay teléfonos configurados para WhatsApp.');
        }

        $enviados = 0;

        foreach ($telefonos as $telefono) {
            if ($whatsApp->sendChat((string) $telefono, $body)) {
                $enviados++;
            }
        }

        if ($enviados === 0) {
            throw new \RuntimeException('No se pudo enviar la notificación de WhatsApp a ningún destinatario.');
        }
    }
}
