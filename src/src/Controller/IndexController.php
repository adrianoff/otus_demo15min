<?php

namespace App\Controller;

use App\Service\GiftSender;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{

    #[Route('/', name: 'index')]
    public function indexAction(Request $request, GiftSender $giftSender): Response
    {
        //$this->giftSender->sendGift('John Doe');

        return new Response('<h1>Hello World!</h1>');
    }
}
