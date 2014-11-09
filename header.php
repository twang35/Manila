<head>
    <title>Manila - <?php session_start(); $Title=$_SESSION['Title']; echo $Title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>

    <!-- libraries -->
    <link href="css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="css/lib/morris.css" type="text/css" rel="stylesheet" />
    <link href='css/lib/fullcalendar.css' rel='stylesheet' />
    <link href='css/lib/fullcalendar.print.css' rel='stylesheet' media='print' />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="css/compiled/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/compiled/user-profile.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/compiled/calendar.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!-- lato font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="img/Logo - Trans - White - 40px.png" alt="logo" height="26px" />
                <!-- Manila -->
            </a>
        </div>
        <ul class="nav navbar-nav pull-right hidden-xs">
            <li class="hidden-xs hidden-sm">
                <input class="search" type="text" />
            </li>
            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="#" class="trigger">
                    <i class="icon-warning-sign"></i>
                    <span class="count">8</span>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign" color="#9ba3ad"></i></a>
                        <div class="notifications">
                            <h3>You have 6 new notifications</h3>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 18 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-envelope-alt"></i> New message from Alejandra
                                <span class="time"><i class="icon-time"></i> 28 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 49 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-download-alt"></i> New order placed
                                <span class="time"><i class="icon-time"></i> 1 day.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="#" class="trigger">
                    <i class="icon-envelope"></i>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="messages">
                            <a href="#" class="item">
                                <img src="img/contact-img.png" class="display" alt="user" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <img src="img/contact-img2.png" class="display" alt="user" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 26 min.</span>
                            </a>
                            <a href="#" class="item last">
                                <img src="img/contact-img.png" class="display" alt="user" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 48 min.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">
                    Your account
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="personal-info.html">Personal info</a></li>
                    <li><a href="#">Account settings</a></li>
                    <li><a href="#">Billing</a></li>
                    <li><a href="#">Export your data</a></li>
                    <li><a href="#">Send feedback</a></li>
                </ul>
            </li>
            <li class="settings hidden-xs hidden-sm">
                <a href="personal-info.html" role="button">
                    <i class="icon-cog"></i>
                </a>
            </li>
            <li class="settings hidden-xs hidden-sm">
                <a href="signin.html" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
        <!-- <?php if($Title == "Home"):  ?> -->
            <!-- <li class="active"> -->
                <!-- <div class="pointer"> -->
                    <!-- <div class="arrow"></div> -->
                    <!-- <div class="arrow_border"></div> -->
                <!-- </div> -->
        <!-- <?php else : ?> -->
            <!-- <li> -->
        <!-- <?php endif; ?> -->
                <!-- <a href="index.php"> -->
                    <!-- <i class="icon-home"></i> -->
                    <!-- <span>Home</span> -->
                <!-- </a> -->
            <!-- </li>             -->
        <?php if($Title == "Appcology" || $Title == "Econ 121" || $Title == "Eng 181"):  ?>
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="index.php">
                    <i class="icon-signal"></i>
                    <span>Classes</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="active submenu">
        <?php else : ?>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-signal"></i>
                    <span>Classes</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
        <?php endif; ?>
                    <li><a href="class-1.php" <?php if($Title == "Appcology"): Echo "class=\"active\""; endif?>>Appcology-001</a></li>
                    <li><a href="class-2.php" <?php if($Title == "Econ 121"): Echo "class=\"active\""; endif?>>Econ 121-000</a></li>
                    <li><a href="class-3.php" <?php if($Title == "Eng 181"): Echo "class=\"active\""; endif?>>Eng 181-004</a></li>
                </ul>
            </li>
        <?php if($Title == "Class History"):  ?>
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
        <?php else : ?>
            <li>
        <?php endif; ?>
                <a href="class_history.php">
                    <i class="icon-group"></i>
                    <span>Friends</span>
                </a>
            </li>
        <?php if($Title == "Instructors"):  ?>
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
        <?php else : ?>
            <li>
        <?php endif; ?>
            <li>
                <a href="instructors.php">
                    <i class="icon-star"></i>
                    <span>Instructors</span>
                </a>
            </li>
        <!-- <?php if($Title == "Gradelytics"):  ?> -->
            <!-- <li class="active"> -->
                <!-- <div class="pointer"> -->
                    <!-- <div class="arrow"></div> -->
                    <!-- <div class="arrow_border"></div> -->
                <!-- </div> -->
        <!-- <?php else : ?> -->
            <!-- <li> -->
        <!-- <?php endif; ?> -->
                <!-- <a href="Gradelytics.php"> -->
                    <!-- <i class="icon-picture"></i> -->
                    <!-- <span>TooDoo</span> -->
                <!-- </a> -->
            <!-- </li> -->
            <?php if($Title == "TooDoo"):  ?>
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
            <?php else : ?>
                <li>
            <?php endif; ?>
                <a href="calendar.php">
                    <i class="icon-calendar-empty"></i>
                    <span>TooDoo</span>
                </a>
            </li>
        <!-- <?php if($Title == "Profile"):  ?> -->
            <!-- <li class="active"> -->
                <!-- <div class="pointer"> -->
                    <!-- <div class="arrow"></div> -->
                    <!-- <div class="arrow_border"></div> -->
                <!-- </div> -->
        <!-- <?php else : ?> -->
            <!-- <li> -->
        <!-- <?php endif; ?> -->
                <!-- <a href="user-profile.php"> -->
                    <!-- <i class="icon-user"></i> -->
                    <!-- <span>Profile</span> -->
                <!-- </a> -->
            <!-- </li> -->
            <li>
                <a href="chart-showcase.html">
                    <i class="icon-cog"></i>
                    <span>Template</span>
                </a>
            </li>
            <!-- <li> -->
                <!-- <a href="signup.html"> -->
                    <!-- <i class="icon-edit"></i> -->
                    <!-- <span>Sign Up Page</span> -->
                <!-- </a> -->
            <!-- </li> -->
        </ul>
    </div>
    <!-- end sidebar -->
