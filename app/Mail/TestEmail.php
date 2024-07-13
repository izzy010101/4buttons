<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public string $content;


    public function __construct($content)
    {
        $this->content = $content;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ivy sending email to admin',
        );
    }
    public function content() : Content
    {
        return new Content(
            view: 'emails.test',
            with: ['content' => $this->content],
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

