<?php

declare(strict_types=1);

namespace App\Core;

class RedirectResponse
{
    public static function redirect(string $url, $status = 302): void
    {
        header('Location: '. $url, true, $status);
        exit();
    }
}