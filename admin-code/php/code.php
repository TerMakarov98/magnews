<?php
require_once __DIR__ . '/../../vendor/autoload.php';
error_reporting(E_ALL);


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_add'])) {
    $db = new App\DBController();

    $name = htmlspecialchars($_POST['name']);
    $slug = htmlspecialchars($_POST['slug']);
    $description = $_POST['description']; // Since Summernote generates HTML

    $meta_title = htmlspecialchars($_POST['meta_title']);
    $meta_description = htmlspecialchars($_POST['meta_description']);
    $meta_keyword = htmlspecialchars($_POST['meta_keyword']);
    $status = isset($_POST['status']) ? 1 : 0;

    $imagePath = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/../../images/posts/';
        $imageName = basename($_FILES['image']['name']);
        $imagePath = $uploadDir . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }
        else {
            echo 'Failed to upload the image.';
            exit;
        }

    $insertQuery = "INSERT INTO posts (name, slug, description, meta_title, meta_description, meta_keyword, image, status)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $db->con->prepare($insertQuery);
    $stmt->bind_param("sssssssi", $name, $slug, $description, $meta_title, $meta_description, $meta_keyword, $imagePath, $status);

    if ($stmt->execute()) {
        header('Location: /php/post.php');
    } else {
        echo 'Failed to add the post. Error: ' . $stmt->error;
    }

    $stmt->close();
//    $db->closeConnection();
}
