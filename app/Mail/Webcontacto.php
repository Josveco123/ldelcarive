<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class Webcontacto extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('webcontacto@laboratoriodelcaribe.com', 'Pagina web LDC'),
            subject: 'Contacto a travez de la web',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.plantillamail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
        //   Attachment::fromPath('images/pdf/pdf1.pdf')
         //           ->as('distribuidor.pdf')
         //           ->withMime('application/pdf'),
        ];
    }
}
