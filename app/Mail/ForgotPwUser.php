<?php

namespace DLG\Mail;

use Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgotPwUser extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

        public function build()
    {
        $address = 'natetealexandre10@gmail.com';
        $subject = 'Request for Password Reset';
        $name = 'AMS Admin';

        return $this->view('enduser.sendtoken')
                    ->from($address, $name)
                    ->replyTo('natetealexandre10@gmail.com', $name)
                    ->subject($subject);
    }
}
