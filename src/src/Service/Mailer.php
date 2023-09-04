<?php

namespace App\Service;

class Mailer
{
    public function send(string $body): void
    {
        echo "Sending email: $body";
    }
}