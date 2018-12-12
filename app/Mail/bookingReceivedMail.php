<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class bookingReceivedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $bookingData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($bookingData)
    {   
        //
        $this->bookingData = $bookingData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.tableBooking')->with('bookingData',$this->bookingData);
    }
}
