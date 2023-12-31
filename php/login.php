<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Examples &rsaquo; Login &mdash; Stisla</title>

  <link rel="stylesheet" href="../admin/dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../admin/dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../admin/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../admin/dist/css/demo.css">
  <link rel="stylesheet" href="../admin/dist/css/style.css">
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
                <form method="POST" action="user-login.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="d-block">Password
                    </label>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>



                  <div class="form-group">
                    <button type="submit" name="login-btn" class="btn btn-primary btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
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

  <script src="../admin/dist/modules/jquery.min.js"></script>
  <script src="../admin/dist/modules/popper.js"></script>
  <script src="../admin/dist/modules/tooltip.js"></script>
  <script src="../admin/dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../admin/dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
<!--  <script src="../admin/dist/modules/moment.min.js"></script>-->
  <script src="../admin/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../admin/dist/js/sa-functions.js"></script>
  
  <script src="../admin/dist/js/scripts.js"></script>
  <script src="../admin/dist/js/custom.js"></script>
  <script src="../admin/dist/js/demo.js"></script>
</body>
</html>