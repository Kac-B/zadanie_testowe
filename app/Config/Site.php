<?php

namespace App\Config;

class Site
{
    public const SITE_LANG = 'pl';
    public const SITE_NAME = 'HomeController.php';

    public static function getParameters(): array
    {
        return [
            'lang' => self::SITE_LANG,
            'site_title' => self::SITE_NAME
        ];
    }
}