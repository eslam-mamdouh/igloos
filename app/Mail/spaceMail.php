<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class spaceMail extends Mailable
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
        $address = 'droidk00@gmail.com';
 
        $name = 'Igloos';
    
        $subject = 'Working Space';
    
        return $this->view('code',['space'=>'dsaf'])
    
        ->from($address, $name)
    
        ->subject($subject);
    }
}
