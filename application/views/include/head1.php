<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />

      <!-- Site Title -->
      <title><?= $title ?> - Digital Agency</title>

      <!-- Place favicon.ico in the root directory -->
      <link rel="apple-touch-icon" href="assets/images/fav.svg" />
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg" />

      <!-- CSS here -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome-pro.min.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.min.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/css/flaticon_webency.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/css/odometer.min.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/css/swiper.min.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/css/meanmenu.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css" />
   </head>

   <body>
      <!-- start: Preloader -->
      <div class="preloader" id="preloader">
         <div class="preloader-inner">
            <div class="lines">
               <span class="line line-1"></span>
               <span class="line line-2"></span>
               <span class="line line-3"></span>
               <span class="line line-4"></span>
               <span class="line line-5"></span>
               <span class="line line-6"></span>
               <span class="line line-7"></span>
               <span class="line line-8"></span>
               <span class="line line-9"></span>
            </div>
            <div class="text">Loading</div>
         </div>
         <button class="tj-cancel-btn">Cancel Preloader</button>
      </div>
      <!-- end: Preloader -->

      <!-- start: Mobile Menu -->
      <div id="tj-overlay-bg2" class="tj-overlay-canvas d-lg-none"></div>
      <div class="tj-offcanvas-area d-lg-none">
         <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
               <a href="<?=base_url()?>/"><img src="assets/images/logo/white-logo.png" alt="Logo" /></a>
            </div>
            <div class="offcanvas-icon">
               <a id="canva_close" href="<?=base_url()?>#">
                  <i class="fa-light fa-xmark"></i>
               </a>
            </div>
         </div>
         <div class="tj-search-box">
            <form action="#">
               <input type="text" name="search" id="search" placeholder="Search" />
               <a href="<?=base_url()?>#"> <i class="fal fa-search"></i></a>
            </form>
         </div>
         <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
         <div class="mobile-contact">
            <div class="contact-menu">
               <ul class="dot-style">
                  <li>
                     <span><i class="fa-sharp fa-regular fa-envelope"></i></span>
                     <a href="mailto:info@apnacoder.com">info@apnacoder.com</a>
                  </li>
                  <li>
                     <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                     <a href="#">Greater Noida , India</a>
                  </li>
                  <li>
                     <span><i class="fa-solid fa-phone-volume"></i></span>
                     <a href="tel:+917007564392">+91 7007564392</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="mobile-share">
            <ul class="dot-style">
               <li>
                  <a href="https://www.instagram.com/apnaofficialcoder"><i class="fa-brands fa-instagram"></i></a>
               </li>
               <li>
                  <a href="https://twitter.com/apnacoder">
                     <i class="fa-brands fa-twitter"></i>
                  </a>
               </li>
               <li>
                  <a href="https://wa.me/+917007564392"><i class="fa-brands fa-whatsapp"></i></a>
               </li>
               <li>
                  <a href="https://www.facebook.com/apnaofficialcoder"><i class="fa-brands fa-facebook-f"></i></a>
               </li>
            </ul>
         </div>
         <div class="header-button">
            <a class="btn tj-black-btn" href="<?=base_url()?>contact">Contact Us</a>
         </div>
      </div>
      <!-- end: Mobile Menu -->

      <!-- start: Header Area -->
      <header class="tj-header-area header-sticky">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12">
                  <div class="header-content-area">
                     <div class="logo-area">
                        <div class="logo">
                           <a href="<?=base_url()?>/"><img src="assets/images/logo/white-logo.png" alt="Logo" /></a>
                        </div>
                     </div>
                     <div class="tj-menu-area d-lg-block d-none" id="main-menu">
                        <nav id="mobile-menu">
                           <ul>
                              <li class="has-dropdown">
                                 <a href="<?=base_url()?>/">Home</a>
                              </li>
                              <li>
                                 <a class="<?= ($title == "About Us") ? 'active' : '' ?>" href="<?=base_url()?>about">About Us</a>
                              </li>
                              <li class="has-dropdown">
                                 <a href="<?=base_url()?>service" class="<?= ($title == "Services") ? 'active' : '' ?>">Services</a>
                              </li>
                              
                              <li class="has-dropdown">
                                 <a href="<?=base_url()?>blog" class="<?= ($title == "Blog") ? 'active' : '' ?>">Blog</a>
                              </li>
                              <li><a href="<?=base_url()?>Portfolio" class="<?= ($title == "Portfolio") ? 'active' : '' ?>">Portfolio</a></li>
                           </ul>
                        </nav>
                     </div>
                     <div class="header-button d-none d-lg-block">
                        <a href="<?=base_url()?>contact" class="tj-secondary-btn btn-border"><span>Contact Us</span></a>
                     </div>
                     <div class="tj-canva-icon d-lg-none">
                        <a class="canva_expander nav-menu-link menu-button" href="<?=base_url()?>#">
                           <span class="dot1"></span>
                           <span class="dot2"></span>
                           <span class="dot3"></span>
                           <span class="dot4"></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end: Header Area -->