<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailer;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class CodeMail extends Mailable
{
    public $code;
    public $name;

    public function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    public function build()
    {
        return $this->view('emails.code')
                    ->with([
                        'code' => $this->code,
                        'name' => $this->name,
                    ])
                    ->subject('Code Mail'); // تنظیم مستقیم سابجکت در متد build
    }

    /**
     * Get the message envelope.
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Code Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content()
    {
        return new Content(
            view: 'emails.code', // Correct view path
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments()
    {
        return [];
    }
}