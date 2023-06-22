<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head();?>
    <title>Document</title>
    
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <div class="inner">
            <div class="branding">
              <a href="<?php echo site_url('/') ?>"> BLOG</a>
            </div>
            <nav>
            <?php wp_nav_menu(array(
              'theme_location' => 'header-menu',
            ))?>
            </nav>
          </div>
          <button id="themeToggle"><i class="fas fa-sun"></i></button>
        </div>
      </div>
    </header>