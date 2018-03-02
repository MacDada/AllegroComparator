<?php

declare(strict_types=1);

namespace App;

use Twig\Environment as Twig;

class TwigTemplateRenderer implements TemplateRenderer
{
    /**
     * @var Twig
     */
    private $twig;

    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }

    public function render(string $template, array $vars = []): string
    {
        return $this->twig->render($template, $vars);
    }
}
