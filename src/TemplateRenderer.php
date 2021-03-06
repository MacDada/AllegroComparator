<?php

declare(strict_types=1);

namespace App;

interface TemplateRenderer
{
    public function render(string $template, array $vars = []): string;
}
