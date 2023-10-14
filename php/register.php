<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Examples &rsaquo; Register &mdash; Stisla</title>

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
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              Register
            </div>

            <div class="card card-primary">

              <div class="card-body">
                <form method="POST" action="user-register.php">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>
                    <div class="form-group col-6" >
                        <label for="image" class="d-block">Profile Image</label>
                        <div class="custom-file">
                            <input style="cursor: pointer" type="file" class="custom-file-input" id="image" name="image">
                            <label style="cursor: pointer" class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="register-btn" class="btn btn-primary btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
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
  <script src="../admin/dist/modules/moment.min.js"></script>
  <script src="../admin/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../admin/dist/js/sa-functions.js"></script>
  
  <script src="../admin/dist/js/scripts.js"></script>
  <script src="../admin/dist/js/custom.js"></script>
  <script src="../admin/dist/js/demo.js"></script>
</body>
</html>