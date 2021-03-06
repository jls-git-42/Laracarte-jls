<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageCreated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /*public $nom;
    public $email;*/
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    //public function __construct($nom,$email,$msg)
    public function __construct(Message $msg)
    {
       /*$this->nom = $nom;
        $this->email = $email;*/
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->msg->email,$this->msg->nom)
                    ->markdown('emails.message.created');
    }
}
