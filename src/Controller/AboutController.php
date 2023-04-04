<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController
{
    #[Route('/about')]
    public function about(): Response
    {
        return new Response(
            'Crée par moi même !'
        );

    }
    #[Route('/date')]
    public function date(): Response
    {
        return new Response(
            date('l d-m-Y H:i:s')
        );
    }
}
