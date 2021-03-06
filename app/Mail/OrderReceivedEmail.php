<?php

namespace App\Mail;

use Cart;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderReceivedEmail extends Mailable
{
    use Queueable, SerializesModels;

    

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
        
        $cart_content = Cart::content();
        return $this->view('emails.orderReceived')->with('cart_content',$cart_content);
    }
}
