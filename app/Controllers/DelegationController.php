<?php

declare(strict_types=1);

namespace App\Controllers;

class DelegationController extends Controller
{
    public function index(): string
    {
        $delegations = $this->container->get('delegation.repository')->findAll();

        return $this->getTemplate()->render('delegation', compact("delegations"));
    }
}
