<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $title; ?></title>

        <!-- fav-icon -->
		<!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png"> -->
		<link rel="icon" href="assets/img/favicon.ico">

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="user-mangement.php">Smart Cargo</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="user-mangement.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                                User management
                            </a>
                            <a class="nav-link" href="truck-management.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck"></i></div>
                                truck management
                            </a>
                            <a class="nav-link" href="gps-management.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-map-pin"></i></div>
                                GPS management
                            </a>
                            <a class="nav-link" href="feedback-management.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope-open-text"></i></div>
                                Feedback management
                            </a>
                            <a class="nav-link" href="need-management.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck-loading"></i></div>
                                need management
                            </a>
                            <a class="nav-link" href="transaction-management.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>
                                transaction
                            </a>
                            <a class="nav-link" href="account-management.php">
                                <div class="sb-nav-link-icon"><i class="far fa-user"></i></div>
                                account
                            </a>
                            <a class="nav-link" href="record-list.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-clipboard"></i></div>
                                record List
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Smart Cargo
                    </div>
                </nav>
            </div>

