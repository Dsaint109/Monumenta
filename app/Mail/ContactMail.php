<?php

namespace App\Mail;

use App\Mailer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * The mail instance;
     *
     *@var mail
     */
    protected $mail;


    /**
     * Create a new message instance.
     *
     * This would find in the mail table
     * the instance with highest id and
     * contact set to true.
     *
     * @return void
     */
    public function __construct(Mailer $mail)
    {
        //
        $this->mail = $mail->where('contact', true)->orderBy('id', 'desc')->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mails  = $this->mail;
        return $this->from($mails->email)
                    ->view('mails.contact-mail', compact('mails'));
    }
}
