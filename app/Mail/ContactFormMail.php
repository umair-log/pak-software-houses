<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /** @var array<string,string> */
    public $data;

    /**
     * Build a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'New Contact Form Submission');
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact'
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
