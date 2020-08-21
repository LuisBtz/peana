<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php wp_head(); ?>
  </head>
  <body class="animsition">
    <div class="app">
      <header>
        <nav>
          <a class="logo disable" href="<?php echo home_url(); ?>">Peana</a>
          <?php if( has_nav_menu( 'primary' ) ) {
              wp_nav_menu(array(
              'theme_location'                        =>   'primary',
              'container'                             =>   false,
              'menu_class'                            =>   'nav'
                      ));
              }       
          ?>
          <div class="lang"><a href="#">Eng /</a><a href="#">Esp</a></div>
          <div class="ham">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </nav>
      </header>