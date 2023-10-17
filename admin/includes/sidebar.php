<?php

use App\DBController;
require_once __DIR__ . "/../../vendor/autoload.php";


$db = new DBController();
$query = "SELECT fname, lname, image FROM users";
$result = $db->con->query($query);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $image = "../images/users/" . $row['image'];
            $fullName = $row['fname'] . " " . $row['lname'];
        }
    }
} else {
    echo "Connection error: " . $db->con->error;
}
?>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="../../admin/index.php">Admin Dashboard</a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src=<?=$image;?>>
            </div>
            <div class="sidebar-user-details">
                <div class="user-name"><?=$fullName;?></div>
                <div class="user-role">
                    Administrator
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
                <a href="index.php"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Components</li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Components</span></a>
                <ul class="menu-dropdown">
                    <li><a href="../general.html"><i class="ion ion-ios-circle-outline"></i> Basic</a></li>
                    <li><a href="../components.html"><i class="ion ion-ios-circle-outline"></i> Main Components</a></li>
                </ul>
            </li>
            <li>
                <a href="../php/post-add.php" class=""><i class="ion ion-ios-book"></i><span>Add Post</span></a>
            </li>

            <li class="menu-header">More</li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
                <ul class="menu-dropdown">
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                    <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
                        <ul class="menu-dropdown">
                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                            <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
                                <ul class="menu-dropdown">
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>