<?php

declare(strict_types=1);

namespace App\Controllers;

class InvoiceController extends Controller
{
    public function index(): string
    {
        $invoices = [
            [
                'id' => 1,
                'name' => 'Produkt A',
                'mpk' => 'MPK',
                'price' => 20,
                'count' => 20
            ],
            [
                'id' => 2,
                'name' => 'Produkt B',
                'mpk' => 'MPK',
                'price' => 125,
                'count' => 60
            ],
            [
                'id' => 3,
                'name' => 'Produkt C',
                'mpk' => 'MPK',
                'price' => 5,
                'count' => 18
            ],
            [
                'id' => 4,
                'name' => 'Produkt D',
                'mpk' => 'MPK',
                'price' => 335,
                'count' => 10
            ],
            [
                'id' => 5,
                'name' => 'Produkt E',
                'mpk' => 'MPK',
                'price' => 15,
                'count' => 56
            ],
        ];

        return $this->getTemplate()->render('invoice', compact('invoices'));
    }
}
