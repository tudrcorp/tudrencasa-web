<?php

namespace App\Mail;

use App\Models\Formulario;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailSolicitud extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Formulario $formulario) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(
                config('mail.from.address'),
                config('mail.from.name')
            ),
            subject: 'Nueva cotización de seguro de viaje — '.$this->formulario->nombre_completo,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.solicitud',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
