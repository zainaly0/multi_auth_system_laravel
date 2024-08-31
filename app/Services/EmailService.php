<?php

namespace App\Services;
use App\Interfaces\MessageSender;

class EmailService implements MessageSender
{
    public function send($recepient, $message) {
        echo "emial is sen to : $recepient: $message";
        return true;
    }
}
