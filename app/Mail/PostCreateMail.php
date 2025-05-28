<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostCreateMail extends Mailable
{
    use Queueable, SerializesModels;
    public $post;

    /**
     * Create a new message instance.
     */
    public function __construct($post) //si voy a retornar el post, deberia recibirlo el mismo constructor
    {
        $this->post = $post; //y guardarlo en la variable propiedad del controlador, asi es posible acceder a el en la vista
    }

    /**
     * Permite especificar el asunto que aparece en el correo y quien envia el correo.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('admin@chubut.com', 'Aixa chubut'),
            subject: 'Creacion de nuevo post',
        );
    }

    /**
     * El contenido del correo electronico lo colocamos en una vista
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.post-created',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
