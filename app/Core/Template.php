<?php

declare(strict_types=1);

namespace App\Core;

class Template
{
    private string $path;

    private array $parameters = [];

    public function __construct(string $path, array $parameters = [])
    {
        $this->path = rtrim($path, '/').'/';
        $this->parameters = $parameters;
    }

    public function render(string $view, array $context = []): string
    {
        if (!file_exists($file = $this->path.$view.'.php')) {
            throw new \Exception(sprintf('Template %s could not be found.', $view));
        }

        extract(array_merge($context, ['template' => $this]));

        ob_start();

        include ($file);

        return ob_get_clean();
    }

    public function get(string $key)
    {
        return $this->parameters[$key] ?? null;
    }
}