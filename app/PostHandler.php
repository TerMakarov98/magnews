<?php

namespace App;

use App\DBController;


class PostHandler
{
    public function displayPost($title)
    {
        include __DIR__ . "/../includes/header.php";

        $db = new DBController();
        $slug = $db->con->real_escape_string($title);

        $query = "SELECT name, description, image, created_at FROM posts WHERE slug='$slug'";
        $result = $db->con->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $image = "../images/posts/" . $row['image'];
                    $title = $row['name'];
                    $description = $row['description'];
                    $date = $row['created_at'];

                }
            } else {
                echo "<h4>No such post found</h4>";
            }
        } else {
            echo "Connection error: " . $db->con->error;
        }
    }



}

