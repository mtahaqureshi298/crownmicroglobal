<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
</head>

<body>

    <!-- PRELOADER -->
    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->

    <!-- Header Start -->
    <header class="header">
        <div class="header-top">
            <a href="">
                <i class="fa-solid fa-phone me-2"></i>
                UAE: <span>+971 48839373</span>
            </a>
            <div class="header-top__lang">
                <img src="images/lang-icon1.png" alt="image" class="img-fluid">
                <select>
                    <option>English</option>
                </select>
            </div>
        </div>

        <nav class="header-main navbar navbar-expand-lg">
            <a class="navbar-brand header-main__logo" href="index.php">
                <img src="images/logo.png" alt="img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav header-main__nav">
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>"
                            href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>" href="#">
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>" href="#">
                            Media
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>" href="#">
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>" href="#">
                            Careers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>" href="#">
                            Countries
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>" href="#">
                            News and Blogs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>" href="#">
                            Support
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>" href="#">
                            Downloads
                        </a>
                    </li>
                </ul>
                <a href="" class="themeBtn">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </nav>
    </header>
    <!-- Header End -->