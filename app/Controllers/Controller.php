<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Template;
use App\Core\ContainerInterface;

class Controller
{
    protected ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getTemplate(): Template
    {
        return $this->container->get('template');
    }
}