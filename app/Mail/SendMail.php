<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $request;
    public $sub;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $sub)
    {
        $this->request = $request;
        $this->sub = $sub;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Yêu cầu ['.$this->sub.'] đã được chấp nhận!')
                    ->view('admin.emails.test');
    }
}
