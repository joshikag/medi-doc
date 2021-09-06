<?php

session_start();
if(!isset($_SESSION['user'])) {
    header('location: Login-Admin.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>MediDoc</title>
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <span class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                            <span><img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> </span>
                         <span><strong class="heading">MEDIDOC</strong></span> </a>
                    </span>
                <span><em class="heading">Admin</em></span>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="Admin-Dashboard.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="profile-admin.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="patient-record-view.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">View Patient History</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="patient-record-modify.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Modify Patient Record</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                <a href="Login-Admin.php" class="link" data-toggle="tooltip" title="Logout"><i class="fa fa-power-off"></i></a> 
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> <img src="https://www.naukrigulf.com/career-tips/wp-content/uploads/2018/02/Administrative-Assistant-Job.jpg" class="img-circle" width="200" />
                                    <h4 class="card-title m-t-10">Admin</h4>
                                    <!-- <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div> -->
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label for="example-aid" class="col-md-12">Admin ID</label>
                                        <div class="col-md-12">
                                            <p class="form-control form-control-line" id="Aid"><?php echo"<font color='gray'>". $_SESSION['user']."</font>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <p class="form-control form-control-line" id="password">***</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 update">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        © 2019 MediDoc
    </footer>
    <script src="profile.js"></script>
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>
</body>

</html>
