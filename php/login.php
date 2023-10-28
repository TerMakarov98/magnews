<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['role_as'] == 1) {
        header('Location: /admin');
    } else {
        header('Location: /home');
    }
        die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
          name="viewport">
    <title>Examples &rsaquo; Login &mdash; Stisla</title>

    <link rel="stylesheet" href="../admin-code/dist/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin-code/dist/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../admin-code/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="../admin-code/dist/css/demo.css">
    <link rel="stylesheet" href="../admin-code/dist/css/style.css">
</head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        Login
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>Login</h4></div>

                        <div class="card-body">
                            <form method="POST" action="/auth/login" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                           required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="d-block">Password
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password"
                                           tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button type="submit" name="login-btn" class="btn btn-primary btn-block"
                                            tabindex="4">
                                        Login
                                    </button>
                                </div>
                                <?php if (isset($_GET['errors'])): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php foreach ($_GET['errors'] as $error): ?>
                                                <li><?= $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                    <!--            <div class="mt-5 text-muted text-center">-->
                    <!--              Don't have an account? <a href="#">Create One</a>-->
                    <!--            </div>-->
                    <div class="simple-footer">
                        Copyright &copy; Magnews 2023
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="../admin-code/dist/modules/jquery.min.js"></script>
<script src="../admin-code/dist/modules/popper.js"></script>
<script src="../admin-code/dist/modules/tooltip.js"></script>
<script src="../admin-code/dist/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="../admin-code/dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../admin-code/dist/modules/moment.min.js"></script>
<script src="../admin-code/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
<script src="../admin-code/dist/js/sa-functions.js"></script>

<script src="../admin-code/dist/js/scripts.js"></script>
<script src="../admin-code/dist/js/custom.js"></script>
<script src="../admin-code/dist/js/demo.js"></script>
</body>
</html>