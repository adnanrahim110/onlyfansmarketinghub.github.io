<?php
$PageTitle = 'Contact';
$navClass = 'navbar sticky';
$socialClass = 'social-box social-s';
$main_tag = '';
include "includes/header.php";
?>
<main id="contact-home">
    <!-- HERO SECTION  -->
    <div class="contact-banner banners d-flex flex-column justify-content-center align-items-center">
        <!-- Header *** -->
        <div class="container">
            <div class="contact-main col-md-12 mt-5">
                <div class="content">
                    <div class="text">
                        <h1>Contact us</h1>
                        <div class="breadcrumb">
                            <a href="index.html">Home</a>
                            <span class="mx-2">/</span>
                            <span class="breadcrumb-item">Contact us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar *** -->
        <?php include "includes/navbar.php"; ?>
    </div>

    <!-- CONTACT SECTION -->
    <?php include "includes/contact-form.php"; ?>
</main>

<!-- FOOTER -->
<?php include "includes/footer.php"; ?>