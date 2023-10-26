<?php

namespace App\Services;

class App
{

    /**
     * Connects to the database using the configuration settings.
     *
     * @return void
     */
    public static function connectToDb(): void
    {
        $config = include __DIR__ . "/../../config/db.php";
        $con = null;

        if ($config['enable']) {
            $con = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);

            if ($con->connect_error) {
                echo "Failed to connect to the database: " . $con->connect_error;
            }
        }
    }
}