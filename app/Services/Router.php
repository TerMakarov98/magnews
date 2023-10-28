<?php

namespace App\Services;

class Router
{
    private static array $list = [];

    public static function page($uri, $page_path): void
    {
        self::$list[$uri] = [
            "uri" => $uri,
            "page" => $page_path,
            "post" => false
        ];
    }

    public static function post($uri, $class, $method, $form_data = false, $files = false): void
    {
        self::$list[] = [
            "uri" => $uri,
            "class" => $class,
            "method" => $method,
            "post" => true,
            "form_data" => $form_data,
            "files" => $files
        ];
    }

    public static function enable(): void
    {
        $query = $_GET['q'];
        $query = rtrim($query, '/');

        foreach (self::$list as $route) {
            if ($route['uri'] == "/" . $query) {
                if ($route['post'] === true && $_SERVER['REQUEST_METHOD'] == "POST") {
                    $action = new $route['class'];
                    $method = $route['method'];

                    if ($route["form_data"] && $route["files"]) {
                        $action->$method($_POST, $_FILES);
                    } elseif ($route["form_data"]) {
                        $action->$method($_POST);
                    } else {
                        $action->$method();
                    }

                    die();
                } else {
                    $pagePath = $route['page'];

                    if (self::includePage($pagePath, [
                        __DIR__ . "/../../php/",
                        __DIR__ . "/../../",
                    ])) {
                        die();
                    }
                }
            }
        }

        self::error("404");
    }

    public static function error($error): void
    {
        include __DIR__ . "/../../php/" . $error . ".php";
        die();
    }

    private static function includePage(string $pagePath, array $directories): bool
    {
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


    public static function redirect($url, $data = [])
    {
        $query = http_build_query($data);
        if (!empty($query)) {
            $url .= '?' . $query;
        }
        header("Location: $url");
        die();
    }
}
