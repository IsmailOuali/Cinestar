<?php

namespace App\Services;

use App\Mail\TicketMail;
use Illuminate\Support\Facades\Mail;

/**
 * Class SendMailService.
 */
class SendMailService
{
    public function index(){
        $object = "hello world";
        $body = "fuck the world";
        Mail::to("elmainiaymane03@gmail.com")->send(new TicketMail( $object, $body ));
    }
}
