<?php

namespace Obaid\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
	public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name)
    {
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with([
		'message'=>$this->message, 'name'=>$this->name]);
    }
}
