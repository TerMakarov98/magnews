<?php

namespace App\Services;

class Router
{
    private static array $list = [];

    public static function page($uri, $page_path): void
    {
        self::$list[$uri] = [
            "uri" => $uri,
            "page" => $page_path
        ];
    }

    public static function enable(): void
    {
        $query = $_GET['q'];

        foreach (self::$list as $route) {
            if ($route['uri'] == "/" . $query) {
                $pagePath = $route['page'];
                if (self::includePage($pagePath)) {
                    die();
                }
            }
        }

        self::not_found_page();
    }

    private static function not_found_page(): void
    {
        include __DIR__ . "/../../php/404.php";
        die();
    }

    private static function includePage($pagePath): bool
    {
        $directories = [
            __DIR__ . "/../../php/",
            __DIR__ . "/../../"
        ];

        $pathParts = explode('/', $pagePath);
        $file = end($pathParts);

        foreach ($directories as $directory) {
            $filePath = $directory . $file . ".php";
            if (file_exists($filePath)) {
                include $filePath;
                return true;
            }
        }

        return false;
    }
}
