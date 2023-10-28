<?php ob_start(); ?>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/admin">Admin Dashboard</a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <?php if (isset($_SESSION['user'])) { ?>
                    <img src="/images/users/<?=$_SESSION['user']['image'];?>" alt="User Image">
                <?php } else { ?>
                    <img src="/images/users/1.png" alt="User Image">
                <?php } ?>
            </div>
            <div class="sidebar-user-details">
                <?php if (isset($_SESSION['user'])) { ?>
                    <div class="user-name"><?=$_SESSION['user']['fname'] . " " . $_SESSION['user']['lname'];?></div>
                <?php }
                ?>
                <div class="user-role">
                    Administrator
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
                <a href="/admin"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
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
                <a href="/admin/post-add" class=""><i class="ion ion-ios-book"></i><span>Add Post</span></a>
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