<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class CodeMail extends Mailable
{
use Queueable, SerializesModels;

public $code;

/**
* Create a new message instance.
*/
public function __construct($code)
{
$this->code = $code;
}

public function build()
{
return $this->view('emails.code')
->with(['code' => $this->code]);
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