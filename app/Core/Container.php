<?php

namespace App\Core;

class Container implements ContainerInterface
{
    protected array $services;
    protected array $serviceStore;

    public function __construct(array $services = [])
    {
        $this->services = $services;
        $this->serviceStore = [];
    }

    public function get(string $name): object
    {
        if (!$this->services[$name]) {
            throw new \Exception('Service not found: '.$name);
        }

        if (!isset($this->serviceStore[$name])) {
            $this->serviceStore[$name] = $this->createService($name);
        }

        return $this->serviceStore[$name];
    }

    private function createService($name): object
    {
        $entry = &$this->services[$name];

        $reflector = new \ReflectionClass($entry['class']);
        $service = $reflector->newInstanceArgs($entry['arguments'] ?? []);

        return $service;
    }
}