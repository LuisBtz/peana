<?php 

//Template Name: Template Home

get_header(); 

$background_color = get_field('background_color');

?>
      <div class="container" id="home">
        <style>
          body {
            background-color: <?php echo $background_color; ?>;
          
          }
          nav {
            background-color: <?php echo $background_color; ?>;
          }
        </style>
        <?php
          if( have_rows('slider_home') ):
          // loop through the rows of data
        ?>
          <div class="slider-home owl-carousel owl-theme">
            <?php 
              while ( have_rows('slider_home') ) : the_row();
              //vars
              $background_image = get_sub_field('background_image');
              $title = get_sub_field('title');
              $artist = get_sub_field('artist');
              $date = get_sub_field('date');
              $post_link = get_sub_field('post_link');
            ?>
              <div class="slide" style="background-image: url(<?php echo $background_image['url']; ?>)">
                <a class="info-lead" href="<?php echo $post_link['url']; ?>">
                  <h2><?php echo $title; ?></h2>
                  <b><?php echo $artist; ?></b>
                  <p><?php echo $date; ?></p>
                </a>
              </div>
            <?php endwhile; ?>
          </div>
        <?php else : // no rows found
        endif; ?>
      </div>
<?php get_footer(); ?>