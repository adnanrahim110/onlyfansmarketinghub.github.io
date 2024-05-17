<?php
$activePage = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>

<nav class="<?php echo $navClass; ?> navbar-expand-lg col-lg-12" id="bottomNav">
    <div class="container-fluid">
        <div class="mob-logo">
            <a class="navbar-brand" href="index"><img src="assets/images/Logo-02.png" alt="" /></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-1">
                <li class="nav-item">
                    <a class="nav-link <?= $activePage == "index.php" ? 'active' : '' ?>" href="index">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link 
                    <?php
                    if ($activePage == "brandingandidentity.php") {
                        echo 'active';
                    }
                    if ($activePage == "onlyfansmanagement.php") {
                        echo 'active';
                    }
                    if ($activePage == "socialmediamarketing.php") {
                        echo 'active';
                    }
                    if ($activePage == "contentstrategy.php") {
                        echo 'active';
                    } else {
                        echo '';
                    }
                    ?>
                    " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?= $activePage == "brandingandidentity.php" ? 'active' : '' ?>" href="brandingandidentity">Branding & Identity</a></li>
                        <li><a class="dropdown-item <?= $activePage == "onlyfansmanagement.php" ? 'active' : '' ?>" href="onlyfansmanagement">Onlyfans Management</a></li>
                        <li><a class="dropdown-item <?= $activePage == "socialmediamarketing.php" ? 'active' : '' ?>" href="socialmediamarketing">Social Media Marketing</a></li>
                        <li><a class="dropdown-item <?= $activePage == "contentstrategy.php" ? 'active' : '' ?>" href="contentstrategy">Content Creation & Strategy</a></li>
                        <span class="drop-arrow"><ion-icon name="caret-down-outline" class="drop-ico"></ion-icon></span>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $activePage == "about-us.php" ? 'active' : '' ?>" href="about-us">About Us</a>
                </li>
            </ul>
            <div class="web-logo">
                <a class="navbar-brand" href="index"><img src="assets/images/footer-logo.png" alt="" /></a>
            </div>
            <ul class="navbar-nav nav-2">
                <li class="nav-item">
                    <a class="nav-link" href="index?#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $activePage == "faq.php" ? 'active' : '' ?>" href="faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $activePage == "contact.php" ? 'active' : '' ?>" href="contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Mob Navbar -->
<aside class="sidebar">
    <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
        </a>
    </div>
    <div class="side-inner">
        <div class="profile">
            <a href="index"><img src="assets/images/Logo-02.png" alt="Image" class="img-fluid" /></a>
        </div>

        <div class="nav-menu">
            <ul>
                <li class="<?= $activePage == "index.php" ? 'active' : '' ?>">
                    <a href="index"><span class="icon-home mr-3"></span>Home</a>
                </li>
                <li class="dropdown">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="icon-notifications mr-3"></span>
                        our Services
                    </a>
                    <ul class="dropdown-menu">
                        <li class="<?= $activePage == "brandingandidentity.php" ? 'active' : '' ?>">
                            <a href="brandingandidentity">Branding & Identity</a>
                        </li>
                        <li class="<?= $activePage == "onlyfansmanagement.php" ? 'active' : '' ?>">
                            <a href="onlyfansmanagement">Onlyfans Management</a>
                        </li>
                        <li class="<?= $activePage == "socialmediamarketing.php" ? 'active' : '' ?>">
                            <a href="socialmediamarketing">Social Media Marketing</a>
                        </li>
                        <li class="<?= $activePage == "contentstrategy.php" ? 'active' : '' ?>">
                            <a href="contentstrategy">Content Creation & Strategy</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?#testimonials"><span class="icon-location-arrow mr-3"></span>Testimonials</a>
                </li>
                <li class="<?= $activePage == "about-us.php" ? 'active' : '' ?>">
                    <a href="about-us"><span class="icon-pie-chart mr-3"></span>About Us</a>
                </li>
                <li class="<?= $activePage == "contact.php" ? 'active' : '' ?>">
                    <a href="contact"><span class="icon-pie-chart mr-3"></span>Contact Us</a>
                </li>
                <li class="<?= $activePage == "faq.php" ? 'active' : '' ?>">
                    <a href="faq"><span class="icon-sign-out mr-3"></span>F A Q</a>
                </li>
            </ul>
        </div>
    </div>
</aside>
<nav class="mob-navbar" id="mobNav">
    <div class="mnb-logo">
        <img src="assets/images/footer-logo.png" alt="">
    </div>
</nav>
<!-- Social Links Header *** -->
<div class="<?php echo $socialClass; ?>" id="social">
    <ul class="social row">
        <li class="social-item col-4">
            <a class="social-link insta" href="https://twitter.com/Of_marketingHub" target="_blank">
                <i class="bi bi-twitter-x"></i>
            </a>
        </li>
        <li class="social-item col-4">
            <a class="social-link mail" href="mailto:info@onlyfansmarketinghub.com">
                <i class="bi bi-envelope"></i>
            </a>
        </li>
        <li class="social-item col-4">
            <a class="social-link call" href="tel:+13464694462">
                <i class="bi bi-telephone"></i>
            </a>
        </li>
    </ul>
</div>