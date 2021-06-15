<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderDetails extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $carts;
    public function __construct($carts)
    {
      
       $this->orders=$carts; 
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('backend.email')->with([
            'orderdata'=>$this->orders,
            
        ]);
    }
}
