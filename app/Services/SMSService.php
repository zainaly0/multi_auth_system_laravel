<?php

namespace App\Services;
use App\Interfaces\MessageSender;

class SMSService implements MessageSender
{
    public function send($recepient, $message) {
        echo "sms is sen to : $recepient: $message";
        return true;
    }
}
