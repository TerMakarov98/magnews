<?php
require_once __DIR__ . "/../admin-code/includes/header.php";
require_once __DIR__ . "/../admin-code/includes/sidebar.php";

if (!isset($_SESSION['user'])) {
    \App\Services\Router::redirect('/login');
    exit();
}

// Check the user's role
if ($_SESSION['user']['role_as'] == 0) {
    \App\Services\Router::redirect('/home');
    exit();
}
ob_end_flush();
?>
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            Dashboard
        </h1>
        <?php if (isset($_GET['errors'])): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($_GET['errors'] as $error): ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                    <div class="card-icon bg-primary">
                        <i class="ion ion-person"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Registered users</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            $auth = new \App\Controllers\Auth();
                            $userCount = $auth->getRecordCount('users');
                            echo $userCount;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                    <div class="card-icon bg-danger">
                        <i class="ion ion-ios-paper-outline"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>News</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            $auth = new \App\Controllers\Auth();
                            $postCount = $auth->getRecordCount('posts');
                            echo $postCount;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                    <div class="card-icon bg-warning">
                        <i class="ion ion-paper-airplane"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Messages</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                    <div class="card-icon bg-success">
                        <i class="ion ion-record"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Online Users</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<?php require_once __DIR__ . "/../admin-code/includes/footer.php"; ?>
