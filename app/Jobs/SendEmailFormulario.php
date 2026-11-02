<?php

namespace App\Jobs;

use App\Models\Formulario;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * @deprecated Usa NotifyCotizacionSolicitud.
 */
class SendEmailFormulario implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Formulario $formulario) {}

    public function handle(): void
    {
        NotifyCotizacionSolicitud::dispatchSync($this->formulario);
    }
}
