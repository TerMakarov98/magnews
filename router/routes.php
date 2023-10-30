<?php

use App\Controllers\Auth;
use App\Services\Router;

Router::page("/login", "login");
Router::page("/register", "register");
Router::page("/home", "index");
Router::page("/admin", "admin");
Router::page("/news/post", "post");
Router::page("/admin/post-add", "post-add");

Router::post("/auth/register", Auth::class, "register", true, true);
Router::post("/auth/login", Auth::class, "auth", true);
Router::post("/auth/logout", Auth::class, "logout");
Router::post("/auth/post", Auth::class, "post_add", true, true);

Router::enable();
