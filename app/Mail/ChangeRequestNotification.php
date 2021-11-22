<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChangeRequestNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $request;
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $token)
    {
        $this->request = $request;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('client.mail.edit')->with(['modal' => $this->request, 'token' => $this->token]);
    }
}
