<?php

namespace App\Controller;

use App\TemplateRenderer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController
{
    /**
     * @var TemplateRenderer
     */
    private $renderer;

    public function __construct(TemplateRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * @Route("/")
     * @Method("GET")
     */
    public function homepage(): Response
    {
        return new Response($this->renderer->render('homepage.html.twig'));
    }
}
