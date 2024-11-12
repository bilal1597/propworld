<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMial extends Mailable
{
    use Queueable, SerializesModels;
    public $subject, $body;
    public function __construct($subject, $body)
    {
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     *  message envelope k liye
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     *  content definition k liye
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.contact_link',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
