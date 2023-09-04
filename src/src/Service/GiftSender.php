<?php

namespace App\Service;

class GiftSender
{
    private Mailer $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendGift(string $user): void
    {
        $gift = rand(1, 10);
        $body = "Sending gift to $user: $gift";

        $this->mailer->send($body);
    }
}