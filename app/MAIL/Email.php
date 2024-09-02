<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */ 
    public $data;
    public $emailType;
    public $title;

    public function __construct($data, $title, $emailType)
    {   
        $this->data = $data;
        $this->emailType = $emailType;
        $this->title = $title;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Feedback For New Swati Carriers',
            from: new Address(env('MAIL_FROM_ADDRESS'), 'New Swati Carriers')
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {

        return new Content(
            view: 'frontend.common.email',
            with: [
                'data'=>$this->data,
                'emailType'=>$this->emailType,
                'logo'=>url('img/log0/logo.png')
            ]
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
