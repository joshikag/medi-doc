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
        <section class="Username" id="username">
            <div class="login">
                <form class="form-horizontal form-material" action="validation.php" method="POST">
                    <div class="form-group">
                        <label class="login2">Login</label>
                        <div>
                            <input type="text" placeholder="Enter username" class="form-control form-control-line" id="uname" name="adminuser">
                        </div>
                        <br>
                        <div>
                            <input type="password" placeholder="Enter password" class="form-control form-control-line" id="pass" name="adminpass">
                        </div>
                    </div>
                    <div class="btnlog">
                    <button class="btn btn-success btnl" type="submit" value="Login">Next</button>        <!--onclick="checkuseradmin()"-->
                    </div>
                </form>
            </div>
        </section>
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
