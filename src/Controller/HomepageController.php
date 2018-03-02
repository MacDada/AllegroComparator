<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController
{
    /**
     * @return Response
     *
     * @Route("/")
     */
    public function index()
    {
        return new Response(trim('
            <!DOCTYPE html>
            <html lang="pl">
                <head>
                    <meta charset="utf-8" />
                    <title>AllegroComparator</title>
                </head>
                <body>
                    <h1>AllegroComparator</h1>
                    <p>Hello World!</p>
                </body>
            </html>
        '));
    }
}
