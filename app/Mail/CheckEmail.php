<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = null;
        return $this->markdown('mails.check-email',['url' => $this->url]);
    }
}
