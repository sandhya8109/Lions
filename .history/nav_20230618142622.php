<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lions Club International </title>
    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body id="section_1">

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Kathmandu, Nepal
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            325m@lionsclubs.org.np
                        </a>
                    </p>
                    &nbsp; &nbsp;
                    <p class="d-flex mb-0">
                        <i class="bi bi-telephone-inbound"></i>
                        &nbsp; &nbsp;
                        <a href="tel:+9779898989898">
                            +977 9898989898
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" class="logo img-fluid">
                <span>
                    Lions Club
                    <small>District 325 M, Nepal</small>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">
                        <a class="nav-link click-scroll" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item <?php echo ($currentPage === 'about') ? 'active' : ''; ?>">
                        <a class="nav-link click-scroll" href="./about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll <?php echo ($currentPage === 'club') ? 'active' : ''; ?>"
                            href="./about.php">Club</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="./donate.php"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Donors</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="news.php">PMJF</a></li>

                            <li><a class="dropdown-item" href="news-detail.php">MJF</a></li>
                            <li><a class="dropdown-item" href="news-detail.php">Campaign 100</a></li>
                            <li><a class="dropdown-item" href="news-detail.php">Cam 100</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">District Officers</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="news.php">Governor Team</a></li>

                            <li><a class="dropdown-item" href="news-detail.php">Advisor Council</a></li>
                            <li><a class="dropdown-item" href="news-detail.php">Coordinators</a></li>
                            <li><a class="dropdown-item" href="news-detail.php">District Committee</a></li>
                            <li><a class="dropdown-item" href="news-detail.php">CC/AC/RC/ZC/DC</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="./program.php">Programme/Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="./news.php">News&Events</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="donate.php">Donate</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>