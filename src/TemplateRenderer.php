<?php

namespace App;

interface TemplateRenderer
{
    public function render(string $template, array $vars = []): string;
}
