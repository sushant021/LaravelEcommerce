<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class franchisingReceivedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $franchiseeData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($franchiseeData)
    {
        //
        $this->franchiseeData = $franchiseeData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.franchisingRequest')->with('franchiseeData',$this->franchiseeData);
    }
}
