<?php

declare(strict_types=1);

namespace App\Core;

class Route
{
    protected static ?ContainerInterface $container = null;
    protected static array $routes = [];

    public static function make($url, $callback, $action): void
    {
        if (!self::$container) {
            self::$container = self::getContainers();
        }

        $url = trim($url, '/');
        $class = new $callback(self::$container);

        $args = [
            'class' => $class,
            'action' => $action,
        ];
        self::$routes[$url] = $args;
    }

    public static function dispatch($action, $parameters = []): void
    {
        $action = explode("?", trim($action, '/'), 2)[0];

        if (array_key_exists($action, self::$routes)) {
            $request = new Request();
            $controller = self::$routes[$action];
            echo $controller['class']->{$controller['action']}($request, ...array_values($parameters));
        }
    }

    private static function getContainers(): ContainerInterface
    {
        return new Container(
            self::getConfigServices()
        );
    }

    private static function getConfigServices(): array
    {
        return require PROJECT_DIR . '/config/services.php';
    }
}
