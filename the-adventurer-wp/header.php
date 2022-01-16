<?php 
/*
*
* // This is the header that will display on all pages and post of the theme
*
*
*/ 


;?>

<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;1,100;1,400&display=swap");
    </style>
    <!-- Fonts -->
    <link rel="stylesheet" href="./style.css" />
    <!-- <title>WM Theme</title> -->
    <!-- Call Header -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>
    <header>
      <!-- Header -->


<!-- -------------------- -->
    <!-- Custom Navbar -->
      <header>
      <div class="container">
        <nav class="navbar">
          <div class="toggle-menu">
            <span class="bar bar-1"></span>
            <span class="bar bar-2"></span>
            <span class="bar bar-3"></span>
          </div>
          <div class="top-nav-menu-right">
            <?php wp_nav_menu(
              array(
                'theme_location' => 'main_menu',
                // Extra Code
                'depth' => '1',
                'container' => 'div',
                'container' => 'top-nav-menu-right',
                'fallback_cb'=>false
                )
              );?>
          </div>
          <!-- Custom Nav Toggle -->
          <div class="widget-area-nav">
            <?php 
            if(is_active_sidebar('widget-1')){
              dynamic_sidebar( 'widget-1');
            }else { ;?>
            <h4>Widget Area</h4>
            <?php }
          ;?>
          </div>
        </nav>
      </div>
    </header>
    <!-- Custom Navbar -->
    <!-- -------------------- -->


<!-- Search -->
<!-- Search -->
      <!-- Logo Section -->
      <section class="logo">
        <!-- Create Custom Color Selections for Each -->
        <a href="<?php echo site_url('/')?>"><h1 class="header-title"><?php bloginfo('title');?></h1></a>
        <a href="<?php echo site_url('/')?>"><p class="sub-title"><?php bloginfo('description');?></p></h1></a>
      </section>
      <nav class="main-menu">
          <?php 
            if(is_active_sidebar('widget-area-1')){
              dynamic_sidebar( 'widget-area-1');
            }
          ;?>
      </nav>
    </header>
    <!-- Header -->