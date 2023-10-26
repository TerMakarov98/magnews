<?php
use App\Services\Router;

Router::page("/login", "login");
Router::page("/home", "index");
Router::enable();
