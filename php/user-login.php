<?php
use App\DBController;

require_once(__DIR__ . '/../vendor/autoload.php');

session_start();

if (isset($_POST['login-btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = new DBController();

    if ($db->con === false) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT `id`, `password`, `role_as` FROM `users` WHERE `email` = ?";
    $stmt = $db->con->prepare($query);

    if (!$stmt) {
        die("Prepare failed: " . $db->con->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($userId, $hashedPassword, $roleAs);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {

            $_SESSION['user_id'] = $userId;

            if ($roleAs == 1) {
                header('Location: ../admin/index.php');
            } else {
                header('Location: ../index.php');
            }
        } else {
            echo "Invalid password. Please try again.";
        }
    } else {
        echo "User not found. Please check your email.";
    }

    $stmt->close();
}
