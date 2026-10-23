<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


// class NotifyEmail extends Mailable
// {
//     use Queueable, SerializesModels;

//     /**
//      * Create a new message instance.
//      */
//     public function __construct(public string $name, public string $message)
//     {
//         //
//     }

//     /**
//      * Get the message envelope.
//      */ //same as build function in old laravel
//     public function envelope(): Envelope
//     {
//         return new Envelope(
//             subject: 'Notify Email',
//         );
//     }

//     /**
//      * Get the message content definition passing data view to here
//      */
//     public function content(): Content
//     {
//         return new Content(
//             view: 'resources/views/emails/MailUser.blade.php',
//         );
//     }

//     /**
//      * Get the attachments for the message.
//      *
//      * @return array<int, Attachment>
//      */
//     public function attachments(): array
//     {
//         return [];
//     }
// }
class NotifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $details; //array
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        // data come from notify event scheduler
        $this->details = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.MailUser');
    }
}
