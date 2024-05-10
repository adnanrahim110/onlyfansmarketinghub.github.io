<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title><?php echo $PageTitle; ?> - Only Fans Marketing Club</title>
  <!-- Primary Meta Tags -->
  <meta name="description" content="Discover expert tips and strategies to maximize your presence on OnlyFans. From marketing tactics to audience engagement, elevate your OnlyFans profile with OnlyFans Marketing Hub." />
  <meta name="author" content="OnlyFans Marketing Hub" />
  <meta name="robots" content="index, follow" />
  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="OnlyFans Marketing Hub - Boost Your Online Presence" />
  <meta property="og:description" content="Discover expert tips and strategies to maximize your presence on OnlyFans. From marketing tactics to audience engagement, elevate your OnlyFans profile with OnlyFans Marketing Hub." />
  <meta property="og:url" content="https://www.onlyfansmarketinghub.com" />
  <meta property="og:image" content="https://www.onlyfansmarketinghub.com/assets/images/favicon/og-image.jpg" />
  <meta property="og:type" content="https://www.onlyfansmarketinghub.com" />
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@yourtwitterhandle" />
  <meta name="twitter:title" content="OnlyFans Marketing Hub - Boost Your Online Presence" />
  <meta name="twitter:description" content="Discover expert tips and strategies to maximize your presence on OnlyFans. From marketing tactics to audience engagement, elevate your OnlyFans profile with OnlyFans Marketing Hub." />
  <meta name="twitter:image" content="https://www.onlyfansmarketinghub.com/images/favicon/twwiter-card.jpg" />
  <!-- Linkedin -->
  <meta property="og:title" content="OnlyFans Marketing Hub - Boost Your Online Presence" />
  <meta property="og:description" content="Discover expert tips and strategies to maximize your presence on OnlyFans. From marketing tactics to audience engagement, elevate your OnlyFans profile with OnlyFans Marketing Hub." />
  <meta property="og:image" content="https://www.onlyfansmarketinghub.com/assets/images/favicon/og-image.jpg" />
  <meta property="og:url" content="https://www.onlyfansmarketinghub.com" />
  <meta property="og:type" content="https://www.onlyfansmarketinghub.com" />

  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/twwiter-card.jpg">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css" />
  <!-- Animations Purpose -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/aos.css" />
  <!-- Owl Carousel/Sliders/other -->
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/owl.transitions.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css" />
  <!-- MAIN CSS FILE -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
  <!-- START LOADER -->
  </script>
  <section id="loader">
    <svg style="left: 50%;
        top: 50%;
        position: absolute;
        transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 187.3 93.7" height="300px" width="400px">
      <path d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 				c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" stroke-width="4" fill="none" id="outline" stroke="#14b7e3"></path>
      <path d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 				c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" stroke-width="4" stroke="#14b7e3" fill="none" opacity="0.05" id="outline-bg"></path>
    </svg>
  </section>
  <!-- END LOADER -->
  
  <?php
  if (isset($_SESSION['message']) && ($_SESSION['topheading'])) {
  ?>
    <style>
      .alert {
        margin: auto;
        z-index: 2147483647;
        position: fixed;
        margin-top: 20px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        background-color: #fff;
        box-shadow: 0 0 400px 500px rgba(0, 0, 0, 0.5);
        max-width: 350px;
      }

      .btn-close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        border-radius: 0;
        opacity: 1;
      }
      .alert p {
        font-size: .9rem;
      }
    </style>
      <div class="text-center alert alert-dismissable" role="alert">
        <h4 class="alert-heading text-primary"><?= $_SESSION['topheading']; ?></h4>
        <p class="py-5 fw-bold"><?= $_SESSION['message']; ?></p>
        <button type="button" class="btn-close btn-close-danger" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
    unset($_SESSION['topheading']);
    unset($_SESSION['message']);
  }
  ?>