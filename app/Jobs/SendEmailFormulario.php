<?php

namespace App\Jobs;

use App\Models\Formulario;
use App\Mail\MailSolicitud;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendEmailFormulario implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;

    public $email;
    public $name;

    /**
     * Create a new job instance.
     */
    public function __construct($email, $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {

            //Consulto el ultimo registro en la tabla de formularios
            $formulario = Formulario::latest()->first();
            

            //Envio del email y la notificacion por whatsapp
            $envio = Mail::to($this->email)->send(new MailSolicitud($formulario));
            dd($envio);
            /**
             * Notificacion por Whatsapp
             */

            $body = <<<HTML

                Hola, buenas tardes. 👋
                Le informamos que el Sr. $formulario->name_completo ha realizado una solicitud de cotizacion para seguro de viaje. 😊
                
                *Detalle de la solicitud:*
                
                *Nombre Completo:* $formulario->nombre_completo
                *Email:* $formulario->email
                *Plan:* $formulario->plan
                *Destino:* $formulario->destino
                *Fecha Salida:* $formulario->fecha_salida
                *Fecha Retorno:* $formulario->fecha_retorno
                *Adultos:* $formulario->adultos
                *Menores:* $formulario->menores
                *Mayores:* $formulario->mayores

                Equipo Integracorp-TDC
                📱 WhatsApp: (+58) 424 222 00 56
                ✉️ Email: comercial@tudrencasa.com 
 
            HTML;

            $params = array(
                'token' => config('parametros.TOKEN'),
                // 'to' => config('parametros.TELEFONO'),
                'to' => '+584127018390',
                'body' => $body
            );
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL =>  config('parametros.CURLOPT_URL'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => http_build_query($params),
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $res = json_decode($response, true);

            if ($err) {
                Log::error($err);
            }

            curl_close($curl);

            //code...
        } catch (\Throwable $th) {
            report($th);
        }
        
    }
}