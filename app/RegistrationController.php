<?php

namespace app;

class RegistrationController {
    private $db;

    public function __construct() {
        $this->db = new DBController();
    }

    public function registerUser($firstName, $lastName, $email, $password, $passwordConfirm, $image): void
    {
        $errors = $this->validateRegistration($firstName, $lastName, $email, $password, $passwordConfirm);

        if (empty($errors)) {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $imagePath = '../images/users/' . $image;

            $query = "INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `image`) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->db->con->prepare($query);
            $stmt->bind_param("sssss", $firstName, $lastName, $email, $passwordHash, $image);

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
}


