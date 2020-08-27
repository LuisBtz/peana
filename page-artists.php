<?php

// Template Name: Template Artists

get_header();

$artists_text = get_field('artists_text');
$exhibited_artists_text = get_field('exhibited_artists_text');

?>
<div id="artists">
  <div class="container top">
    <h3 class="title-sec"><b><?php echo $artists_text; ?></b></h3>
  <ul>
    <?php
       $args = array(
           'post_type' => 'artists',
           'post_status' => 'publish',
           'posts_per_page' => '-1',
           'order' => 'ASC'
       );
       $products_loop = new WP_Query( $args );
       if ( $products_loop->have_posts() ) :
           while ( $products_loop->have_posts() ) : $products_loop->the_post();

               // Set variables
               $artist = get_field('artist');
               $date = get_field('date');
               $gallery = get_field('gallery');

               $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

               // Output

               ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><img src="<?php echo $url; ?>" alt="Peana"></li>
               <?php
               endwhile;
           wp_reset_postdata();
       endif;
   ?>
  </ul>
 </div>
        <div class="container">
          <div class="info-text">
            <hr>
          </div>
        </div>
        <div class="linksection" id="ex">
          <h3 class="title-sec"><b><?php echo $exhibited_artists_text; ?></b></h3>






          <?php
          if( have_rows('exhibited_artists') ):
          // loop through the rows of data
        ?>
          <div class="loop-links">
            <?php 
              while ( have_rows('exhibited_artists') ) : the_row();
              //vars
              $artist = get_sub_field('artist');
            ?>
              <div class="item">
                <p><?php echo $artist; ?></p>
              </div>
            <?php endwhile; ?>
          </div>
        <?php else : // no rows found
        endif; ?>
       </div>
     </div>
<?php get_footer(); ?>