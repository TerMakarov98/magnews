<?php
namespace app;

use App\DBController;

class RegistrationController {
    private $db;

    public function __construct() {
        $this->db = new DBController();
    }

    public function registerUser($firstName, $lastName, $email, $password, $passwordConfirm, $image): void
    {
        $errors = $this->validateRegistration($firstName, $lastName, $email, $password, $passwordConfirm);

        if (empty($errors)) {
            $image_extension = pathinfo($image, PATHINFO_EXTENSION);
            $filename = $this->generateUniqueFilename($image_extension);

            move_uploaded_file($_FILES['image']['tmp_name'], '../images/users/' . $filename);

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `image`) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->db->con->prepare($query);
            $stmt->bind_param("sssss", $firstName, $lastName, $email, $passwordHash, $filename);

            if ($stmt->execute()) {
                header('Location: login.php');
            } else {
                echo "Registration failed: " . $stmt->error;
            }

            $stmt->close();
        } else {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }
    }

    private function validateRegistration($firstName, $lastName, $email, $password, $passwordConfirm): array
    {
        $errors = [];

        if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($passwordConfirm)) {
            $errors[] = "All fields are required.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if ($password !== $passwordConfirm) {
            $errors[] = "Passwords do not match.";
        }

        return $errors;
    }

    public function generateUniqueFilename($extension) {
        $uuid = uniqid();
        return $uuid . '.' . $extension;
    }
}



