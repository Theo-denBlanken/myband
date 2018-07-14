<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search (Does not work)"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="admin.php?data=logout">
                    <i class="fa fa-sign-out"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php?page=home" class="brand-link">
            <img src="{$settings['site_icon']}" alt="Website Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">{$language['site_title']}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{$user['userpicture']}" class="img-circle elevation-2" alt="PF">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{$user['username']}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-header">ANALYTICS, POSTS AND EVENTS</li>
                    <li class="nav-item">
                        <a href="admin.php?page=dashboard" class="nav-link">
                            <i class="fa fa-home nav-icon"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin.php?page=analytics" class="nav-link">
                            <i class="fa fa-line-chart nav-icon"></i>
                            <p>Analytics</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin.php?page=posts" class="nav-link">
                            <i class="fa fa-newspaper-o nav-icon"></i>
                            <p>Posts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin.php?page=events" class="nav-link">
                            <i class="fa fa-calendar nav-icon"></i>
                            <p>Events</p>
                        </a>
                    </li>
                    <li class="nav-header">MESSAGES</li>
                    <li class="nav-item">
                        <a href="admin.php?page=mail" class="nav-link">
                            <i class="fa fa-envelope-o nav-icon"></i>
                            <p>Messages</p>
                            <span class="badge bg-primary float-right">{$missedmessages}</span>
                        </a>
                    </li>
                    <li class="nav-header">SETTINGS</li>
                    <li class="nav-item">
                        <a href="admin.php?page=users" class="nav-link">
                            <i class="fa fa-users nav-icon"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin.php?page=langsettings" class="nav-link">
                            <i class="fa fa-cogs nav-icon"></i>
                            <p>Language settings</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin.php?page=sitesettings" class="nav-link">
                            <i class="fa fa-cogs nav-icon"></i>
                            <p>Site settings</p>
                        </a>
                    </li>
                </ul>
                </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>