<?php

namespace app;

class DBController
{
    protected $host = "localhost",
            $username = "mysql",
            $password = "mysql",
            $database = "magnews";

    public $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Fail " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection(): void
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}
