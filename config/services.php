<?php

return [
    'template' => [
        'class' => \App\Core\Template::class,
        'arguments' => [TEMPLATE_DIR, App\Config\Site::getParameters()]
    ],
    'delegation.repository' => [
        'class' => \App\Repository\DelegationRepository::class,
        'arguments' => [new \App\Config\Database()]
    ],
    'contractor.repository' => [
        'class' => \App\Repository\ContractorRepository::class,
        'arguments' => [new \App\Config\Database()]
    ],
];