<?php

namespace App\Core;

class Request
{
    private string $type;
    private array $parameters = [];

    public function __construct()
    {
        $this->type = $_SERVER['REQUEST_METHOD'];
        $this->parameters = [
            'get' => filter_input_array(INPUT_GET),
            'post' => filter_input_array(INPUT_POST),
        ];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function get($value)
    {
        return $this->parameters['get'][$value] ?? null;
    }

    public function post($value)
    {
        return $this->parameters['post'][$value] ?? null;
    }

    public function postAll(): array
    {
        return $this->parameters['post'] ?? [];
    }
}