<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\MailSolicitud;
use App\Jobs\SendEmailFormulario;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Formulario as FormularioSolicitud;

class Formulario extends Component
{
    public $plan;
    public $destino;
    public $fecha_salida;
    public $fecha_retorno;
    public $adultos;
    public $menores;
    public $mayores;
    public $nombre_completo;
    public $email;
    public $telefono;

    public $hiddenFormulario = 'block';
    public $hiddenNotificacion = 'hidden';

    public function guardarSolicitud()
    {

        try {
            dd('this->destino');

            //Almaceno la informacion en la base de datos
            $formulario = new FormularioSolicitud();
            $formulario->plan = $this->plan;
            $formulario->destino = $this->destino;
            $formulario->fecha_salida = $this->fecha_salida;
            $formulario->fecha_retorno = $this->fecha_retorno;
            $formulario->adultos = $this->adultos;
            $formulario->menores = $this->menores;
            $formulario->mayores = $this->mayores;
            $formulario->nombre_completo = $this->nombre_completo;
            $formulario->email = $this->email;
            $formulario->telefono = $this->telefono;
            $formulario->save();

            /** Envio del email */
            Mail::to(config('parametros.CORREO'))->send(new MailSolicitud($formulario));

            /** Notificacion por Whatsapp */
            $body = <<<HTML

                Hola, buenas tardes. 👋
                Le informamos que el Sr. $formulario->name_completo 
                ha realizado una solicitud de cotizacion 
                para seguro de viaje. 😊
                
                *Detalle de la solicitud:*
                
                *Nombre Completo:* $formulario->nombre_completo
                *Email:* $formulario->email
                *Telefono:* $formulario->telefono
                *Plan:* $formulario->plan
                *Destino:* $formulario->destino
                *Fecha Salida:* $formulario->fecha_salida
                *Fecha Retorno:* $formulario->fecha_retorno
                *Adultos(18+):* $formulario->adultos
                *Menores(0-17):* $formulario->menores
                *Mayores(65+):* $formulario->mayores
 
            HTML;

            $params = array(
                'token' => config('parametros.TOKEN'),
                'to' => config('parametros.TELEFONO'),
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
            
            $this->reset();

            $this->hiddenFormulario = 'hidden';
            $this->hiddenNotificacion = 'block';

        } catch (\Throwable $th) {
            dd($th);
            report($th);
        }
    
    }
    
    
    public function render()
    {
        return view('livewire.formulario');
    }
}