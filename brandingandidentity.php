<?php
$PageTitle = 'Service';
$navClass = 'navbar sticky';
$socialClass = 'social-box social-s';
$serviceName = 'Branding and Identity';
$main_tag = '</main>';
include "includes/header.php";
?>
<main id="our-services">
    <main id="service-home">
        <!-- HERO SECTION  -->
        <div class="brand-banner banners d-flex flex-column justify-content-center align-items-center">
            <!-- Header *** -->
            <?php include 'includes/service-header.php'; include "includes/navbar.php"; ?>
        </div>
        <!-- SERVICE SECTION -->
        <section class="service-item pb-0">
            <div class="container small-serv-btns">
                <p>Services</p>
                <div class="row">
                    <div class="col-6">
                        <a class="d-flex justify-content-between align-items-center py-3 <?= $activePage == "brandingandidentity.php" ? 'active' : '' ?>" href="brandingandidentity.php">
                            <div class="serv-btn"><span>Branding & identity</span></div>
                            <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a class="d-flex justify-content-between align-items-center py-3 <?= $activePage == "onlyfansmanagement.php" ? 'active' : '' ?>" href="onlyfansmanagement.php">
                            <div class="serv-btn"><span>OnlyFans management</span></div>
                            <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a class="d-flex justify-content-between align-items-center py-3 <?= $activePage == "socialmediamarketing.php" ? 'active' : '' ?>" href="socialmediamarketing.php">
                            <div class="serv-btn"><span>Social Media Marketing</span></div>
                            <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a class="d-flex justify-content-between align-items-center py-3 <?= $activePage == "contentstrategy.php" ? 'active' : '' ?>" href="contentstrategy.php">
                            <div class="serv-btn"><span>Content Creation & Strategy</span></div>
                            <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-8 col-xl-9">
                        <div class="mb-4 serv-banner">
                            <img src="assets/images/branding.jpg" alt="" class="w-100">
                        </div>
                        <div>
                            <h2 class="text-black">Mastering the Art of OnlyFans</h2>
                            <h5 class="mt-3 text-dark">Attention all OnlyFans creators!</h5>
                            <div class="pt-2">
                                <p>
                                    Are you ready to take your content to the next level and cultivate a fanbase that raves about
                                    you? We get it building a thriving presence on OnlyFans takes time, dedication, and a
                                    strategic approach. That's where we come in.
                                </p>
                                <p>
                                    We're a passionate OnlyFans marketing agency dedicated to empowering creators like you
                                    to dominate the platform. We equip you with the tools and expertise to stand out from
                                    the crowd and attract a loyal following eager to support your work.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="services-btns">
                            <a class="d-flex justify-content-between align-items-center py-3 <?= $activePage == "brandingandidentity.php" ? 'active' : '' ?>" href="brandingandidentity.php">
                                <div class="serv-btn"><span>Branding & identity</span></div>
                                <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                            </a>
                            <a class="d-flex justify-content-between align-items-center py-3 <?= $activePage == "onlyfansmanagement.php" ? 'active' : '' ?>" href="onlyfansmanagement.php">
                                <div class="serv-btn"><span>OnlyFans management</span></div>
                                <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                            </a>
                            <a class="d-flex justify-content-between align-items-center py-3 <?= $activePage == "socialmediamarketing.php" ? 'active' : '' ?>" href="socialmediamarketing.php">
                                <div class="serv-btn"><span>Social Media Marketing</span></div>
                                <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                            </a>
                            <a class="d-flex justify-content-between align-items-center py-3 <?= $activePage == "contentstrategy.php" ? 'active' : '' ?>" href="contentstrategy.php">
                                <div class="serv-btn"><span>Content Creation & Strategy</span></div>
                                <div><ion-icon name="chevron-forward-outline"></ion-icon></div>
                            </a>
                        </div>
                        <div class="servCard card mt-5 border-0">
                            <div>
                                <img src="assets/images/support.jpg" alt="" class="card-img-top">
                            </div>
                            <div class="card-body p-4 position-relative">
                                <a href="tel:+13464694462" class="icon-lg text-white rounded-circle">
                                    <i class="bi-headphones"></i>
                                </a>
                                <h4 class="text-white mb-2">Need Help?</h4>
                                <p class="text-white text-opacity-85 mb-3">
                                    Speak with a human to filling out a form?
                                    call corporate office and we will connect you with a team member who can help.
                                </p>
                                <a href="tel:+13464694462">
                                    <p class="m-0 h4 fw-bolder text-white">+1 (346) 469 4462</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-4">

                <div class="row pt-3 pb-0">
                    <div class="col-md-7 my-3 ps-3">
                        <h3 class="pb-2 mb-2 pb-md-0 text-capitalize">how we transform your OnlyFans brand into a magnetic force?
                        </h3>
                        <ul class="list-unstyled m-0 pt-2 text-justify pe-3">
                            <li class="d-flex py-2">
                                <i class="text-primary bi-check-circle-fill"></i>
                                <span class="col ps-3">
                                    <strong>Website— </strong>We'll build a stunning website that's the perfect
                                    online home for your brand. It will showcase your services, highlight glowing
                                    client testimonials (when available), and present clear pricing packages that fit
                                    your needs. With an eye-catching design and seamless navigation, we'll ensure that
                                    visitors are captivated from the moment they land on your page.
                                </span>
                            </li>
                            <li class="d-flex py-2">
                                <i class="text-primary bi-check-circle-fill"></i>
                                <span class="col ps-3">
                                    <strong>Content is King (or Queen)—</strong> We don't just talk the talk. We walk
                                    the walk. We'll create engaging blog posts and captivating videos packed with proven
                                    OnlyFans marketing tips. This valuable content positions you as an authority and
                                    attracts potential subscribers hungry for your expertise.
                                </span>
                            </li>
                            <li class="d-flex py-2">
                                <i class="text-primary bi-check-circle-fill"></i>
                                <span class="col ps-3">
                                    <strong>Social Media Savvy—</strong> We know creators thrive where the fans are.
                                    That's why we'll help you establish a dynamic Reddit, Twitter, and Instagram presence.
                                    Our team will craft eye-catching posts and strategically engage with the OnlyFans
                                    community, fostering connections that turn into dedicated subscribers.
                                </span>
                            </li>
                            <li class="d-flex py-2">
                                <i class="text-primary bi-check-circle-fill"></i>
                                <span class="col ps-3">
                                    <strong>Networking Powerhouse—</strong> Industry events and online communities are
                                    prime hunting grounds for potential fans and collaborators. We'll help you network like
                                    a pro, connecting you with creators who can elevate your brand and industry leaders who
                                    can propel your success. By expanding your network and forming valuable relationships,
                                    you'll unlock new opportunities for growth and collaboration.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 my-3 p-5 pt-0">
                        <div><img class="rounded-3" src="assets/images/why-us.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <?php include 'includes/contact-form.php'; ?>
    </main>

    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>