<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestNotification extends Mailable
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
        $url = url('/request/'.$this->token);
        return $this->view('client.mail.index')->with(['modal' => $this->request, 'url' => $url]);
    }
}
