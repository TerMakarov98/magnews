<?php
session_start();

require_once(__DIR__ . '/../vendor/autoload.php');

if (isset($_POST['register-btn'])) {
    $registrationController = new App\RegistrationController();
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password-confirm'];
    $image = $_FILES['image']['name'];

    $registrationController->registerUser($firstName, $lastName, $email, $password, $passwordConfirm, $image);
}


//if (isset($_POST['register-btn'])) {
//    $db = new app\DBController();
//
//    $errors = [];
//
//    $firstName = $_POST['frist_name'];
//    $lastName = $_POST['last_name'];
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//    $passwordConfirm = $_POST['password-confirm'];
//    $image = $_FILES['image']['name'];
//    $imagePath = '../images/users/' . $image;
//
//    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($passwordConfirm)) {
//        $errors[] = "All fields are required.";
//    }
//
//    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $errors[] = "Invalid email format.";
//    }
//
//    if ($password !== $passwordConfirm) {
//        $errors[] = "Passwords do not match.";
//    }
//
//
//    if (empty($errors)) {
//        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
//
//        $query = "INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `image`) VALUES (?, ?, ?, ?, ?)";
//        $stmt = $db->con->prepare($query);
//        $stmt->bind_param("sssss", $firstName, $lastName, $email, $passwordHash, $image);
//
//        if ($stmt->execute()) {
//            header('Location: login.php');
//        } else {
//
//            echo "Registration failed: " . $stmt->error;
//        }
//
//        $stmt->close();
//    } else {
//        foreach ($errors as $error) {
//            echo $error . "<br>";
//        }
//    }
//}



