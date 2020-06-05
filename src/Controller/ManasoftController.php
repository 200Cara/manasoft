<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManasoftController
{
    /**
     * @Route("/manasoft", name="manasoft")
     */

    public function index()
    {
        return new Response ('<html>
            <body>
                <h1>
                ManaSoft
                </h1>
            </body>
        </html>');
    
    }
}
