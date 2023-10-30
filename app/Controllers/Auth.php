<?php

namespace App\Controllers;

use App\Services\Router;
use App\Services\App;

class Auth
{
    public function auth($data): void
    {
        $email = $data['email'];
        $password = $data['password'];

        $db = App::getDbConnection();

        if ($db) {
            $query = "SELECT * FROM `users` WHERE email = ?";
            $stmt = $db->prepare($query);

            if ($stmt) {
                    session_start();
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                $user = $result->fetch_assoc();
                $stmt->close();

                if ($user && password_verify($password, $user['password'])) {
                    $_SESSION['user'] = [
                    "id" => $user['id'],
                        "fname" => $user['fname'],
                        "lname" => $user['lname'],
                        "email" => $user['email'],
                        "image" => $user['image'],
                        "role_as" => $user['role_as'],
                    ];

                    if ($user['role_as'] == 1) {
                        header('Location: /admin');
                        die();
                    } else {
                        Router::redirect('/home');
                        die();
                    }

                }
            }
        }

        Router::redirect('/login', ['error' => 'Invalid credentials']);
    }

    public function register($data, $files): void
    {
        $validationErrors = $this->validateRegistrationData($data, $files);

        if (!empty($validationErrors)) {
            Router::redirect('/register', ['errors' => $validationErrors]);
            return;
        }

        $imagePath = $this->moveUploadedFile($files['image'], "/../../images/users/");

        if ($imagePath) {
            $result = $this->saveUserData($data, $imagePath);

            if ($result) {
                Router::redirect('/login');
                die();
            } else {
                Router::error("500");
                die();
            }
        } else {
            Router::error("500");
            die();
        }
    }

    private function validateRegistrationData($data, $files)
    {
        $validationErrors = [];

        if (empty($data['first_name']) || empty($data['last_name']) || empty($data['email']) || empty($data['password']) || empty($data['password-confirm'])) {
            $validationErrors[] = "All fields are required.";
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $validationErrors[] = "Invalid email format.";
        }

        if ($data['password'] !== $data['password-confirm']) {
            $validationErrors[] = "Passwords do not match.";
        }

        return $validationErrors;
    }

    private function moveUploadedFile($image, $dir)
    {
        $filename = time() . "_" . $image['name'];

        if (move_uploaded_file($image['tmp_name'], __DIR__ . $dir . $filename)) {
            return $filename;
        } else {
            return false;
        }
    }

    public function saveUserData($data, $imagePath)
    {
        $firstName = $data['first_name'];
        $lastName = $data['last_name'];
        $email = $data['email'];
        $password = password_hash($data['password'], PASSWORD_BCRYPT);

        $db = App::getDbConnection();

        if ($db) {
            $query = "INSERT INTO `users` (fname, lname, email, password, image) VALUES (?, ?, ?, ?, ?)";
            $stmt = $db->prepare($query);

            if ($stmt) {
                $stmt->bind_param("sssss", $firstName, $lastName, $email, $password, $imagePath);
                $result = $stmt->execute();
                $stmt->close();

                return $result;
            }
        }

        return false;
    }

    public function getRecordCount($tableName): int
    {
        $db = App::getDbConnection();

        if ($db) {
            $query = "SELECT COUNT(*) as record_count FROM `$tableName`";
            $stmt = $db->prepare($query);

            if ($stmt) {
                $stmt->execute();
                $result = $stmt->get_result();

                $recordCount = 0;

                if ($row = $result->fetch_assoc()) {
                    $recordCount = $row['record_count'];
                }

                $stmt->close();

                return $recordCount;
            }
        }

        return 0;
    }


    public function logout(){
        session_unset();
        session_destroy();
        Router::redirect('/login');
    }

    public function post_add($data, $files)
    {

        $name = filter_var($data['name'], FILTER_SANITIZE_STRING);
        $slug = filter_var($data['slug'], FILTER_SANITIZE_STRING);
        $description = filter_var($data['description'], FILTER_SANITIZE_STRING);
        $metaTitle = filter_var($data['meta_title'], FILTER_SANITIZE_STRING);
        $metaDescription = filter_var($data['meta_description'], FILTER_SANITIZE_STRING);
        $metaKeyword = filter_var($data['meta_keyword'], FILTER_SANITIZE_STRING);
        $status = isset($data['status']) ? 1 : 0;

        $_SESSION['post'] = [
            'post_title' =>$data['name'],
            'post_slug' => $data['slug'],
            'post_description' => $data['description'],
            'post_image' => $data['image'],
            'post_created_at' => $data['created_at']
        ];
//        $_SESSION['post_title'] = $data['name'];
//        $_SESSION['post_slug'] = $data['slug'];
//        $_SESSION['post_description'] = $data['description'];
//        $_SESSION['post_image'] = $data['image'];
//        $_SESSION['post_meta_title'] = $data['meta_title'];
//        $_SESSION['post_meta_description'] = $data['meta_description'];
//        $_SESSION['post_meta_keyword'] = $data['meta_keyword'];
//        $_SESSION['post_status'] = $data['status'];

        // Validate the uploaded image file
        if (empty($files['image']['name'])) {
            Router::redirect('/admin/post-add', ['error' => 'Please select an image']);
            die();
        }

        $imagePath = $this->moveUploadedFile($files['image'], "/../../images/posts/");

        if (!$imagePath) {
            Router::redirect('/admin/post-add', ['error' => 'Failed to upload the image']);
            die();
        }

        $result = $this->savePostData($name, $slug, $description, $imagePath, $metaTitle, $metaDescription, $metaKeyword, $status);

        if ($result) {
            Router::redirect('/admin', ['success' => 'Post added successfully']);
            die();
        } else {
            Router::redirect('/admin/post-add', ['error' => 'Failed to save the post']);
            die();
        }
    }

    public function savePostData($name, $slug, $description, $imagePath, $metaTitle, $metaDescription, $metaKeyword, $status)
    {
        $db = App::getDbConnection();

        if ($db) {
            $query = "INSERT INTO `posts` (name, slug, description, image, meta_title, meta_description, meta_keyword, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $db->prepare($query);

            if ($stmt) {
                $stmt->bind_param("sssssssi", $name, $slug, $description, $imagePath, $metaTitle, $metaDescription, $metaKeyword, $status);
                $result = $stmt->execute();
                $stmt->close();

                return $result;
            }
        }

        return false;
    }

}

