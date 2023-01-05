<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCodeMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $vCode;
    public $muser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vCode, $muser)
    {
        $this->vCode = $vCode;
        $this->muser = $muser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('GDC FROM CODE')
            ->markdown('emails.code')
            ->with([
                'userName'=> $this->muser->name,
                'promoCode'=> $this->vCode,
            ]);
    }
}
