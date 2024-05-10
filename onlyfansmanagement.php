<?php
$PageTitle = 'Service';
$navClass = 'navbar sticky';
$socialClass = 'social-box social-s';
$serviceName = 'OnlyFans Management';
$main_tag = '</main>';
include "includes/header.php";
?>
    <main id="our-services">
        <main id="service-home">
            <!-- HERO SECTION  -->
            <div class="of-banner banners d-flex flex-column justify-content-center align-items-center">
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
                                <img src="assets/images/ofmanage.jpg" alt="" class="w-100" />
                            </div>
                            <div>
                                <h2 class="text-black">Unlock OnlyFans Success with Expert Guidance</h2>
                                <h5 class="mt-3 text-dark">Let Us Be Your OnlyFans Management Dream Team</h5>
                                <div class="pt-2">
                                    <p>
                                        Running a successful OnlyFans page entails more than just posting content;
                                        it's about strategic management and optimization. At OnlyFans Management,
                                        we understand the complexities of building a thriving presence on the
                                        platform. Our expert team is dedicated to helping content creators like
                                        you navigate the nuances of profile optimization, fan engagement, and revenue
                                        maximization. We're here to be your trusted partner in elevating your OnlyFans
                                        journey to new heights.
                                    </p>
                                    <p>
                                        With our tailored management solutions, you can focus on what you do best –
                                        creating captivating content – while we handle the rest. From fine-tuning
                                        your profile for maximum visibility to implementing effective engagement
                                        strategies, we've got you covered every step of the way. Join forces with
                                        our OnlyFans management dream team and let's turn your passion into profit,
                                        together.
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
                                        <strong>Profile Perfection— </strong>First impressions matter! We'll help
                                        you create an eye-catching profile picture and captivating bio that draws
                                        fans in and showcases your unique personality.
                                    </span>
                                </li>
                                <li class="d-flex py-2">
                                    <i class="text-primary bi-check-circle-fill"></i>
                                    <span class="col ps-3">
                                        <strong>Pricing Powerhouse—</strong> Setting the right price point is crucial.
                                        We'll guide you in developing a strategic pricing strategy that maximizes
                                        your income while remaining attractive to your target audience.
                                    </span>
                                </li>
                                <li class="d-flex py-2">
                                    <i class="text-primary bi-check-circle-fill"></i>
                                    <span class="col ps-3">
                                        <strong>Unlocking OnlyFans Features—</strong> OnlyFans offers a treasure trove
                                        of tools to engage your audience. We'll help you leverage features like PPV
                                        (pay-per-view) posts and customized content tiers to cater to different fan
                                        preferences and boost your earnings.
                                    </span>
                                </li>
                                <li class="d-flex py-2">
                                    <i class="text-primary bi-check-circle-fill"></i>
                                    <span class="col ps-3">
                                        <strong>Fan First Customer Service—</strong> Building solid relationships
                                        with your fans is essential. We can provide responsive customer service,
                                        handle fan inquiries, and manage direct messages on OnlyFans, ensuring your
                                        audience feels valued and supported.
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 my-3 p-5 pt-0 pe-0">
                            <div>
                                <img class="rounded-3 w-75" src="assets/images/why-usof.jpg" alt="" />
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