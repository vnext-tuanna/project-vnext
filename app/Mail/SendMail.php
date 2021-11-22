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
    public $status;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $sub, $status)
    {
        $this->request = $request;
        $this->sub = $sub;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->status == 1) {
            return $this->subject('Yêu cầu [' . $this->sub . '] đã được chấp nhận!')
                ->view('admin.emails.test');
        } else {
            return $this->subject('Yêu cầu [' . $this->sub . '] đã bị từ chối!')
                ->view('admin.emails.test');
        }
    }
}
