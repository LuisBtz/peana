<?php get_header(); 

$artist = get_field('artist');
$date = get_field('date');
$gallery = get_field('gallery');

$link_1 = get_field('link_1');
$link_2 = get_field('link_2');
$link_3 = get_field('link_3');
$link_4 = get_field('link_4');

$description = get_field('description');

$exhibitions_title = get_field('exhibitions_title');

$press_title = get_field('press_title');


?>
      <div id="exhibition">
        <div class="container">
          <section class="title">
            <h2><?php the_title(); ?></h2><b><?php echo $artist; ?></b>
            <p><?php echo $date; ?></p>
          </section>
          <div class="nav-ex">
            <ul>
              <li><a href="#<?php echo $link_1; ?>"><?php echo $link_1; ?></a></li>
              <li><a href="#<?php echo $link_2; ?>"><?php echo $link_2; ?></a></li>
              <li><a href="#<?php echo $link_3; ?>"><?php echo $link_3; ?></a></li>
              <li><a href="#<?php echo $link_4; ?>"><?php echo $link_4; ?></a></li>
            </ul>
          </div>
        </div>


        <?php
          if( have_rows('carrusel') ):
          // loop through the rows of data
        ?>
          <div class="slideex owl-carousel owl-theme" id="<?php echo $link_2; ?>">
            <?php 
              while ( have_rows('carrusel') ) : the_row();
              //vars
              $image = get_sub_field('image');
            ?>

              <?php echo $image; ?>

            <?php endwhile; ?>
            
          </div>
        <?php else : // no rows found
        endif; ?>
        
        <div class="container" id="<?php echo $link_1; ?>">
          <div class="info-text">
            <?php echo $description; ?>
            <hr>
          </div>
        </div>
        <div class="linksection" id="<?php echo $link_3; ?>">
          <h3 class="title-sec"><b><?php echo $exhibitions_title; ?></b></h3>
          <?php
                    if( have_rows('exhibitions') ):
                    // loop through the rows of data
                  ?>
                    <div class="loop-links">
                      <?php 
                        while ( have_rows('exhibitions') ) : the_row();
                        //vars
                        $link = get_sub_field('link');
                        $title = get_sub_field('title');
                        $author = get_sub_field('author');
                        $date = get_sub_field('date');
                      ?>

                        <div class="item"><a href="<?php echo $link['url']; ?>">
                          <h2><?php echo $title; ?></h2>
                          <h2><b><?php echo $author; ?></b></h2>
                          <p><?php echo $date; ?></p></a>
                        </div>

                      <?php endwhile; ?>
                      
                    </div>
                  <?php else : // no rows found
          endif; ?>

        </div>
        <div class="container">
          <div class="info-text">
            <hr>
          </div>
        </div>
        <div class="linksection" id="<?php echo $link_4; ?>">
          <h3 class="title-sec"><b><?php echo $press_title; ?></b></h3>



          <?php
                    if( have_rows('press') ):
                    // loop through the rows of data
                  ?>
          <div class="loop-links">
                      <?php 
                        while ( have_rows('press') ) : the_row();
                        //vars
                        $link = get_sub_field('link');
                        $title = get_sub_field('title');
                        $author = get_sub_field('author');
                        $date = get_sub_field('date');
                      ?>

                        <div class="item"><a href="<?php echo $link['url']; ?>">
                          <h2><?php echo $title; ?></h2>
                          <h2><b><?php echo $author; ?></b></h2>
                          <p><?php echo $date; ?></p></a>
                        </div>

                      <?php endwhile; ?>
                      
                    </div>
                  <?php else : // no rows found
          endif; ?>

        </div>
      </div>
      <?php get_footer(); ?>
      <script>
      jQuery(document).ready(function( $ ) {
        $(".slideex.owl-carousel.owl-theme").owlCarousel({
            loop: true,
            nav: true,
            items: 3,
            margin: 20,
            autoplay: true,
            dots: false,
        });
      });

      </script>