<?php
//session_start();

use App\Services\App, App\Services\Router;

require_once __DIR__ . "/../../vendor/autoload.php";
App::start();
require_once __DIR__ . "/../../router/routes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title>Dashboard &mdash; Stisla</title>

    <link rel="stylesheet" href="../../admin-code/dist/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../admin-code/dist/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../../admin-code/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="../../admin-code/dist/modules/summernote/summernote-lite.css">
    <link rel="stylesheet" href="../../admin-code/dist/modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../admin-code/dist/css/demo.css">
    <link rel="stylesheet" href="../../admin-code/dist/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
</head>

<body>
<?php include("navbar.php");?>