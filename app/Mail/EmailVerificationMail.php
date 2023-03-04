<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerificationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $get_user_name;
    public $get_user_email;
    public $validToken;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($get_user_email, $validToken)
    {
        $this->get_user_email = $get_user_email;
        // $this->get_user_name = $get_user_name;
        $this->validToken = $validToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verification')->with([
            'user_email' => $this->get_user_email,
        ]);
    }
}
