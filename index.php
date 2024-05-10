<?php
$PageTitle = 'HOME';
$navClass = 'navbar';
$socialClass = 'social-box';
$main_tag = '';
include "includes/header.php";
?>
<main id="home">
  <!-- HERO SECTION -->
  <div class="home-banner vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="main">
      <div class="slider-outer">
        <div class="slider">
          <div class="slide-item">
            <span class="slide-image" id="hb-slide1">
            </span>
          </div>
          <div class="slide-item">
            <span class="slide-image" id="hb-slide2">
            </span>
          </div>
          <div class="slide-item">
            <span class="slide-image" id="hb-slide3">
            </span>
          </div>
          <div class="slide-item">
            <span class="slide-image" id="hb-slide4">
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Header *** -->
    <div class="container position-absolute">
      <div class="main-text col-md-7">
        <div class="content">
          <div class="text">
            <h2>OnlyFans Marketing Hub</h2>
            <p class="col-md-10">
              Empowering creators to discover their ideal audience within their niche,
              unlocking new opportunities for engagement, growth, and success on the platform.
            </p>
          </div>
          <div class="start-btns">
            <a href="contact.php#contactForm">
              <button class="custom-btn btn1">Get Started</button>
            </a>
            <a href="tel:+13464694462">
              <button class="custom-btn btn2">Book a Call</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar *** -->
    <?php include("includes/navbar.php"); ?>
  </div>
  <!-- HIW SECTION -->
  <section class="hiw">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-12 hiw-text">
          <div class="hiw-title">
            <h2>How does it works</h2>
          </div>
          <p>
            We will delve into various aspects, including but not limited to your existing audience demographics,
            content style, and desired branding direction. Additionally, we will explore potential avenues for
            growth and diversification, considering factors such as account size, niche specialization
            (e.g., gaming, lifestyle, adult content), and supplementary services (e.g., social media
            amplification, and cross-platform promotion).
          </p>
          <p>
            Drawing upon our extensive experience and expertise in talent scouting and content development,
            our dedicated team is committed to identifying the optimal opportunities tailored specifically to
            your profile and objectives. Whether you identify as a gamer, lifestyle influencer, adult content
            creator, or fitness enthusiast, we possess the insight and resources to guide you toward realizing
            your full potential within the vibrant landscape of online content creation.
          </p>
          <p>
            We recognize the importance of fostering a collaborative and supportive environment, wherein your
            goals and aspirations are placed at the forefront of our strategic endeavors. With our proven
            track record of success and unwavering dedication to client satisfaction, we are confident in our
            ability to empower you to thrive as a prominent presence within the dynamic world of digital media.
          </p>
          <a href="contact.php#contactForm">
            <button class="custom-btn">get started</button>
          </a>
        </div>
        <div class="col-md-6 col-12 px-0 overflow-hidden">
          <div class="hiw-video">
            <video autoplay loop muted src="assets/videos/girl.mp4"></video>
            <span class="hiw-lock">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415" style="color: #fff;" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- TS SECTION -->
  <div class="ts" id="testimonials">
    <div class="ts-overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div id="testimonial-slider" class="owl-carousel">
            <div class="testimonial">
              <div class="pic">
                <img src="assets/images/testimonial/1.jpg" alt="" />
              </div>
              <p class="description">
                <span class="ts-qoute">&#8220;</span>
                Working with OnlyFans Marketing Hub has been a game-changer for my OnlyFans account.
                Their strategic marketing approach helped me double my subscriber count in just a few months.
                Highly recommend!
                <span class="ts-qoute">&#8221;</span>
              </p>
              <h3 class="title">Sarah M. - Fitness Influencer</h3>
            </div>

            <div class="testimonial">
              <div class="pic">
                <img src="assets/images/testimonial/2.jpg" alt="" />
              </div>
              <p class="description">
                <span class="ts-qoute">&#8220;</span>
                I was skeptical at first, but Onlyfans Marketing Hub delivered beyond my expectations.
                Their team knows the ins and outs of OnlyFans promotion, and it shows in the results.
                My revenue has never been higher!
                <span class="ts-qoute">&#8221;</span>
              </p>
              <h3 class="title">John D. - Adult Content Creator</h3>
            </div>

            <div class="testimonial">
              <div class="pic">
                <img src="assets/images/testimonial/3.jpg" alt="" />
              </div>
              <p class="description">
                <span class="ts-qoute">&#8220;</span>
                I struggled to gain traction on OnlyFans until I found OnlyFans Marketing Hub.
                Their tailored marketing strategies helped me connect with my target audience and grow my
                subscriber base significantly. Thank you!
                <span class="ts-qoute">&#8221;</span>
              </p>
              <h3 class="title">Emily R. - Beauty Guru</h3>
            </div>

            <div class="testimonial">
              <div class="pic">
                <img src="assets/images/testimonial/4.jpg" alt="" />
              </div>
              <p class="description">
                <span class="ts-qoute">&#8220;</span>
                As a busy model, I needed someone to handle my OnlyFans marketing efficiently and effectively.
                Onlyfans Marketing Hub exceeded my expectations with their personalized approach and attention
                to detail. The results speak for themselves!
                <span class="ts-qoute">&#8221;</span>
              </p>
              <h3 class="title">Jessica T. - Fashion Model</h3>
            </div>

            <div class="testimonial">
              <div class="pic">
                <img src="assets/images/testimonial/5.jpg" alt="" />
              </div>
              <p class="description">
                <span class="ts-qoute">&#8220;</span>
                From day one, Onlyfans Marketing Hub has been a valuable partner in my OnlyFans journey.
                Their expertise and dedication to client success are unmatched, and I'm grateful for the
                impact they've had on my business.
                <span class="ts-qoute">&#8221;</span>
              </p>
              <h3 class="title">Sophia L. - Lifestyle Influencer</h3>
            </div>

            <div class="testimonial">
              <div class="pic">
                <img src="assets/images/testimonial/6.jpg" alt="" />
              </div>
              <p class="description">
                <span class="ts-qoute">&#8220;</span>
                I've tried other marketing agencies in the past, but none compare to Onlyfans Marketing Hub.
                Their team truly understands the nuances of the OnlyFans platform and knows how to drive
                meaningful results. Worth every penny!
                <span class="ts-qoute">&#8221;</span>
              </p>
              <h3 class="title">David H. - Adult Entertainer</h3>
            </div>

            <div class="testimonial">
              <div class="pic">
                <img src="assets/images/testimonial/7.jpg" alt="" />
              </div>
              <p class="description">
                <span class="ts-qoute">&#8220;</span>
                I couldn't be happier with the results Onlyfans Marketing Hub has delivered for my OnlyFans
                account. They go above and beyond to ensure their clients' success, and it's evident in the
                growth I've experienced. Highly recommend!
                <span class="ts-qoute">&#8221;</span>
              </p>
              <h3 class="title">Alex P. - Content Creator</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SERVICES SECTION -->
  <?php include 'includes/services_section.php'; ?>
  <!-- JSO SECTION -->
  <section class="jso">
    <div class="jso-img jso-i1">
      <a type="button" data-bs-toggle="modal" data-bs-target="#Modal">
        <div class="jso-overlay jso-overlay1"></div>
        <img class="reveal" src="assets/images/chart1.jpg" alt="" />
      </a>
      <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img class="position-static shadow-none w-100 h-100 border-0 m-0" src="assets/images/chart1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="jso-img jso-i2">
      <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="jso-overlay jso-overlay2"></div>
        <img class="reveal" src="assets/images/chart2.jpg" alt="" />
      </a>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img class="position-static shadow-none w-100 h-100 border-0 m-0" src="assets/images/chart2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-12">
      <div class="jso-text">
        <h2>Just Starting Out? That’s Ok</h2>
        <p>
          By managing every step of the interaction that your fans have with
          your brand, an OnlyFans Management Agency is able to help you grow
          even if you’re just starting off.
        </p>
        <p>
          See the case study on how one of our partners took a new client
          from $1K to $10K profit per month in 30 days by particularly
          focusing on tips and messages, to increase the revenues from
          existing fans, and on TikTok for growth.
        </p>
      </div>
    </div>
  </section>
  <!-- EWG SECTION -->
  <section class="ewg">
    <div class="container">
      <h2>Experienced And Want To Grow?</h2>
      <p>
        We work with the best agencies in the industry who have experience
        creating and managing the top 0.01%.
      </p>
      <div class="ewg-img">
        <a type="button" data-bs-toggle="modal" data-bs-target="#example2Modal">
          <div class="ewg-overlay"></div>
        </a>
      </div>
      <div class="modal fade" id="example2Modal" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img class="position-static shadow-none w-100 h-100 border-0 m-0" src="assets/images/OF_dashboard1_em.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CTA / QBB SECTION -->
  <section class="qbb">
    <div class="container-fluid d-flex align-items-center justify-content-center">
      <div class="row my-md-4 py-md-4">
        <div class="col-md-8 pe-md-4">
          <h3>
            It takes some time to get your account verified, use our direct
            link to create your OnlyFans account now.
          </h3>
        </div>
        <div class="col-md-4 d-flex align-items-start justify-content-center ps-0 pe-md-4">
          <a class="btn-cta" href="contact.php?#contactForm">
            <span class="span">start onlyfans</span>
            <span class="second">
              <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                </g>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- PORTFOLIO SECTION -->
  <section class="pps">
    <div class="container-fluid">
      <div class="wwd-title3 container-fluid">
        <h2>
          Innovative Designs, Unmatched Impact: <span>Our Portfolio</span>
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="pps-wrapper">
        <div class="pps-item pps-i1">
          <div class="pps-overlay"></div>
        </div>
        <div class="pps-item pps-i2">
          <div class="pps-overlay"></div>
        </div>
        <div class="pps-item pps-i3">
          <div class="pps-overlay"></div>
        </div>
        <div class="pps-item pps-i4">
          <div class="pps-overlay"></div>
        </div>
        <div class="pps-item pps-i5">
          <div class="pps-overlay"></div>
        </div>
        <div class="pps-item pps-i6">
          <div class="pps-overlay"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTACT SECTION -->
  <?php include "includes/contact-form.php" ?>
</main>
<!-- FOOTER -->
<script>
  const header = document.getElementById("bottomNav");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 460) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  });

  const social = document.getElementById("social");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 460) {
      social.classList.add("social-s");
    } else {
      social.classList.remove("social-s");
    }
  });
</script>
<?php include "includes/footer.php" ?>