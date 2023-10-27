<?php require_once __DIR__ . "/admin/includes/header.php";?>
<?php require_once __DIR__ . "/admin/includes/sidebar.php";?>
<?php
session_start();
use App\Services\App, App\Controllers\Auth, App\Services\Router;

require_once __DIR__ . "/vendor/autoload.php";
App::start();
require_once __DIR__ . "/router/routes.php";


?>
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            Dashboard
        </h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                    <div class="card-icon bg-primary">
                        <i class="ion ion-person"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Admin</h4>
                        </div>
                        <div class="card-body">
                            10
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
                            42
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
                            <h4>Reports</h4>
                        </div>
                        <div class="card-body">
                            1,201
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
                            47
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<?php require_once __DIR__ . "/admin/includes/footer.php";?>
