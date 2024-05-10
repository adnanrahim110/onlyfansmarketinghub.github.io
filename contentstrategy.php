<?php
$PageTitle = 'Service';
$navClass = 'navbar sticky';
$socialClass = 'social-box social-s';
$serviceName = 'Content Creation & Strategy';
$main_tag = '</main>';
include "includes/header.php";
?>
    <main id="our-services">
        <main id="service-home">
            <!-- HERO SECTION  -->
            <div class="content-banner banners d-flex flex-column justify-content-center align-items-center">
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
                                <img src="assets/images/content.jpg" alt="" class="w-100" />
                            </div>
                            <div>
                                <h2 class="text-black">Unlock OnlyFans Success with Expert Guidance</h2>
                                <h5 class="mt-3 text-dark">Let Us Be Your OnlyFans Management Dream Team</h5>
                                <div class="pt-2">
                                    <p>
                                        Even the most captivating creator needs more than just charisma to keep their
                                        audience engaged and loyal. Crafting a strategic roadmap tailored to your unique
                                        brand and audience is essential to maintaining a compelling online presence. At
                                        Onlyfans Marketing Hub, we understand the intricacies of content creation in the
                                        digital age, and we're here to be your guiding light through the ever-evolving
                                        landscape of online engagement.
                                    </p>
                                    <p>
                                        Our content creation expertise isn't just about producing visually stunning
                                        imagery or catchy captions—it's about weaving a narrative that resonates deeply
                                        with your audience, evoking emotion, sparking conversation, and ultimately,
                                        fostering lasting connections. With our team of seasoned content creators, we'll
                                        work hand in hand with you to develop a winning content strategy that captivates
                                        attention and transforms casual viewers into dedicated subscribers.
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
                                        <strong>Finding Your Niche Tribe—</strong> Not all fans are created equal. We'll
                                        help you identify your ideal audience, who will genuinely resonate with your
                                        unique style and content. Understanding your niche allows you to tailor your
                                        content to their desires, fostering a deeper connection and building a community
                                        of dedicated fans.
                                    </span>
                                </li>
                                <li class="d-flex py-2">
                                    <i class="text-primary bi-check-circle-fill"></i>
                                    <span class="col ps-3">
                                        <strong>Content Consistency is Key—</strong> Keeping your fans engaged
                                        requires regular, high-quality content. We'll help you create a strategic
                                        content calendar, ensuring a steady stream of photos, videos, and other engaging
                                        content to keep your audience coming back for more.
                                    </span>
                                </li>
                                <li class="d-flex py-2">
                                    <i class="text-primary bi-check-circle-fill"></i>
                                    <span class="col ps-3">
                                        <strong>Brainstorming Bonanza—</strong> Sometimes, even the most creative minds
                                        hit a snag. No worries! Our team will join you in brainstorming sessions
                                        with fresh ideas to keep your content innovative and exciting. We'll also help
                                        craft compelling captions that draw viewers in and make them crave more.
                                    </span>
                                </li>
                                <li class="d-flex py-2">
                                    <i class="text-primary bi-check-circle-fill"></i>
                                    <span class="col ps-3">
                                        <strong>Picture Perfect Polish—</strong> Presentation matters! We can assist
                                        with editing photos and videos (within legal boundaries) to ensure your content
                                        is visually stunning and leaves a lasting impression.
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 my-3 p-5 pt-0 pe-0">
                            <div>
                                <img class="rounded-3 w-75 ms-5" src="assets/images/why-uscs.jpg" alt="" />
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