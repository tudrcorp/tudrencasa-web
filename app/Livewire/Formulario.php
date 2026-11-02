<?php

namespace App\Livewire;

use App\Jobs\NotifyCotizacionSolicitud;
use App\Models\Formulario as FormularioSolicitud;
use Livewire\Component;

class Formulario extends Component
{
    public $plan = '';
    public $destino = '';
    public $fecha_salida = '';
    public $fecha_retorno = '';
    public $adultos = '1';
    public $menores = '0';
    public $mayores = '0';
    public $nombre_completo = '';
    public $email = '';
    public $telefono = '';

    public $hiddenFormulario = 'block';
    public $hiddenNotificacion = 'hidden';

    protected function rules(): array
    {
        return [
            'plan' => 'required|string|in:Plan Mundial,Europa Low Cost,Plan Local',
            'destino' => 'required|string|in:América del Norte,América del Sur,Europa,Asia,África,Oceanía',
            'fecha_salida' => 'required|date',
            'fecha_retorno' => 'required|date|after_or_equal:fecha_salida',
            'adultos' => 'required|integer|min:0|max:10',
            'menores' => 'required|integer|min:0|max:10',
            'mayores' => 'required|integer|min:0|max:10',
            'nombre_completo' => 'required|string|min:3|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|min:7|max:30',
        ];
    }

    protected function messages(): array
    {
        return [
            'plan.required' => 'Selecciona un plan.',
            'plan.in' => 'Selecciona un plan válido.',
            'destino.required' => 'Selecciona un destino.',
            'destino.in' => 'Selecciona un destino válido.',
            'fecha_salida.required' => 'Indica la fecha de salida.',
            'fecha_retorno.required' => 'Indica la fecha de regreso.',
            'fecha_retorno.after_or_equal' => 'La fecha de regreso debe ser igual o posterior a la de salida.',
            'nombre_completo.required' => 'Indica tu nombre completo.',
            'email.required' => 'Indica tu correo electrónico.',
            'email.email' => 'El correo electrónico no es válido.',
            'telefono.required' => 'Indica tu teléfono.',
        ];
    }

    public function guardarSolicitud()
    {
        $datos = $this->validate();

        try {
            $formulario = FormularioSolicitud::create([
                'plan' => $datos['plan'],
                'destino' => $datos['destino'],
                'fecha_salida' => $datos['fecha_salida'],
                'fecha_retorno' => $datos['fecha_retorno'],
                'adultos' => (int) $datos['adultos'],
                'menores' => (int) $datos['menores'],
                'mayores' => (int) $datos['mayores'],
                'nombre_completo' => $datos['nombre_completo'],
                'email' => $datos['email'],
                'telefono' => $datos['telefono'],
            ]);

            // WhatsApp en cola (UltraMsg → 3 destinatarios).
            NotifyCotizacionSolicitud::dispatch($formulario)->afterCommit();

            $this->reset();
            $this->adultos = '1';
            $this->menores = '0';
            $this->mayores = '0';
            $this->hiddenFormulario = 'hidden';
            $this->hiddenNotificacion = 'block';
        } catch (\Throwable $th) {
            report($th);
            $this->addError('formulario', 'No pudimos enviar tu solicitud. Intenta de nuevo en unos minutos.');
        }
    }

    public function render()
    {
        return view('livewire.formulario');
    }
}
