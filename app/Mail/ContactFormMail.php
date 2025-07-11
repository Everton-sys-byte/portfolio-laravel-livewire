<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $messageContent; 

    public function __construct($name, $email, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageContent = $messageContent;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nova mensagem do portfólio',
        );
    }

    public function build()
    {
        return $this->subject('Nova mensagem de contato')
            ->html(
                "
                <h1>Nova mensagem</h1>
                <p><strong>Nome:</strong>{$this->name}</p>
                <p><strong>Email:</strong>{$this->email}</p>
                <p><strong>Mensagem:</strong></p>
                <p>{$this->messageContent}</p>
            "
            );
    }
}
