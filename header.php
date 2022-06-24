<?php wp_head() ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <?php wp_head(); ?>

   <title><?php bloginfo('name') ?></title>

</head>

<body>
   <header class="tm-header" id="tm-header">
      <div class="tm-header-wrapper">
         <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
         </button>
         <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
            <h1 class="text-center"><?php bloginfo('name') ?></h1>
         </div>
         <nav class="tm-nav" id="tm-nav">
            <ul>
  
 
               <li class="tm-nav-item active"><a href="<?php echo site_url('')?>" class="tm-nav-link">
                     <i class="fas fa-home"></i>
                     Blog Home
                  </a></li>
               <li class="tm-nav-item"><a href="<?php echo site_url('/privacy-policy/')?>" class="tm-nav-link">
                     <i class="fas fa-pen"></i>
                     Privacy Policy
                  </a></li>
               <li class="tm-nav-item"><a href="<?php echo site_url('/about-us')?>" class="tm-nav-link">
                     <i class="fas fa-users"></i>
                     About Xtra
                  </a></li>
              
               

            </ul>
         </nav>
         <div class="tm-mb-65">
            <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
               <i class="fab fa-facebook tm-social-icon"></i>
            </a>
            <a href="https://twitter.com" class="tm-social-link">
               <i class="fab fa-twitter tm-social-icon"></i>
            </a>
            <a href="https://instagram.com" class="tm-social-link">
               <i class="fab fa-instagram tm-social-icon"></i>
            </a>
            <a href="https://linkedin.com" class="tm-social-link">
               <i class="fab fa-linkedin tm-social-icon"></i>
            </a>
         </div>
         <p class="tm-mb-80 pr-5 text-white">
            Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
         </p>
      </div>
   </header>
   <div class="container-fluid">
      <main class="tm-main">
         <!-- Search form -->
         <div class="row tm-row">
            <div class="col-12">
               <form action="<?php echo home_url( '/' ); ?>" method="GET" class="form-inline tm-mb-80 tm-search-form">
                  <input class="form-control tm-search-input" 
                  value="<?php echo get_search_query() ?>"   name="query" type="text" placeholder="Search..." aria-label="Search">
                  <button class="tm-search-button" type="submit">
                     <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                  </button>
               </form>
            </div>
         </div>