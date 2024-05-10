<?php
$PageTitle = 'Service';
$navClass = 'navbar sticky';
$socialClass = 'social-box social-s';
$serviceName = 'Social Media Marketing';
$main_tag = '</main>';
include "includes/header.php";
?>
<main id="our-services">
    <main id="service-home">
        <!-- HERO SECTION  -->
        <div class="social-banner  banners d-flex flex-column justify-content-center align-items-center">
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
                            <img src="assets/images/socialmedia.jpg" alt="" class="w-100" />
                        </div>
                        <div>
                            <h2 class="text-black">Unlock OnlyFans Success with Expert Guidance</h2>
                            <h5 class="mt-3 text-dark">Let Us Be Your OnlyFans Management Dream Team</h5>
                            <div class="pt-2">
                                <p>
                                    In today's fast-paced digital landscape, where online presence is synonymous
                                    with influence, we understand the pivotal role that strategic social media
                                    marketing plays in shaping your digital footprint. With an unwavering
                                    commitment to your success, our Social Media Marketing Services are
                                    meticulously crafted to harness the expansive reach and engagement
                                    capabilities of platforms such as Reddit, Instagram, Twitter, TikTok,
                                    and beyond.
                                </p>
                                <p>
                                    Within this dynamic ecosystem, we recognize the nuanced intricacies of each
                                    platform and leverage them to their fullest potential. Whether it's the
                                    visually immersive realm of Instagram, the real-time discourse of Twitter,
                                    or the viral sensation of Reddit & TikTok, our strategies are intricately
                                    tailored to capitalize on the unique strengths of each platform, ensuring
                                    maximum impact and resonance with your target audience.
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
                        <h4 class="pb-2 mb-2 pb-md-0 text-capitalize">
                            Elevate your profile, boost earnings, and cultivate loyalty with our expert solutions.
                        </h4>
                        <ul class="list-unstyled m-0 pt-2 text-justify pe-3">
                            <li class="d-flex py-2">
                                <i class="text-primary bi-check-circle-fill"></i>
                                <span class="col ps-3">
                                    <strong>Platform Powerhouse—</strong> We'll expertly manage your social media
                                    accounts on platforms like Twitter and Instagram, crafting strategic posts that
                                    showcase your OnlyFans content and build anticipation and excitement for your
                                    brand.
                                </span>
                            </li>
                            <li class="d-flex py-2">
                                <i class="text-primary bi-check-circle-fill"></i>
                                <span class="col ps-3">
                                    <strong>Community Catalyst—</strong> Building a loyal fanbase is all about
                                    interaction. We'll help you respond to comments and messages, fostering a sense
                                    of
                                    community and keeping your fans engaged.
                                </span>
                            </li>
                            <li class="d-flex py-2">
                                <i class="text-primary bi-check-circle-fill"></i>
                                <span class="col ps-3">
                                    <strong>Contests & Giveaways—</strong> Who doesn't love a good giveaway? We can
                                    help
                                    you run exciting contests and giveaways on social media, a surefire way
                                    to attract
                                    new fans and spread the word about your OnlyFans page.
                                </span>
                            </li>
                            <li class="d-flex py-2">
                                <i class="text-primary bi-check-circle-fill"></i>
                                <span class="col ps-3">
                                    <strong>Paid Advertising Precision—</strong> Targeted social media advertising
                                    is a
                                    powerful tool for reaching new audiences. We'll help you develop and
                                    manage targeted
                                    ad campaigns that laser-focus on your ideal subscribers, propelling your
                                    discoverability and subscriber growth.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 my-3 p-5 pt-0 pe-0">
                        <div>
                            <img class="rounded-3 w-75 ms-5" src="assets/images/why-ussm.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <?php include 'includes/contact-form.php'; ?>
    </main>

    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>