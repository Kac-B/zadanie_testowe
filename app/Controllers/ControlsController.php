<?php

declare(strict_types=1);

namespace App\Controllers;

class ControlsController extends Controller
{
    public function index(): string
    {
        return $this->getTemplate()->render('controls');
    }
}
