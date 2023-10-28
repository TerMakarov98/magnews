<?php
namespace App\Services;

class App
{
    private static $conn;

    public static function start(): void
    {
        // self::libs(); // You can include libraries if needed
        self::connectToDb();
    }

    public static function libs(): void
    {
        $config = include __DIR__ . "/../../config/app.php";

        foreach ($config["libs"] as $lib) {
            include __DIR__ . "/../../libs/" . $lib . ".php";
        }
    }

    public static function connectToDb(): void
    {
        $config = include __DIR__ . "/../../config/db.php";

        if ($config['enable']) {
            self::$conn = new \mysqli($config['host'], $config['username'], $config['password'], $config['database']);

            if (self::$conn->connect_error) {
                echo "Failed to connect to the database: " . self::$conn->connect_error;
            }
        }
    }
    public static function getDbConnection()
    {
        return self::$conn;
    }

    public static function fetchArticleData($articleId)
    {
        $conn = self::getDbConnection();

        if (!$conn) {
            return false;
        }

        $articleId = $conn->real_escape_string($articleId);

        $query = "SELECT * FROM `posts` WHERE id = '$articleId'";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            $articleData = $result->fetch_assoc();
            $result->close();
            return $articleData;
        } else {
            return false;
        }
    }
}
