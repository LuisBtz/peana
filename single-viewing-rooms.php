<?php 

get_header();

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

$viewing_room_text = get_field('viewing_room_text');

?>
      <div class="container" id="virtual-single">
        <div class="top-bg" style="background-image: url(<?php echo $url; ?>">
          <div class="info-lead">
            <h1><?php the_title(); ?></h1><b>ASMA</b>
            <p><?php echo $viewing_room_text; ?></p>
          </div>
        </div>
      </div>


      <?php if( have_rows('flex_cont') ): ?>
          <?php while( have_rows('flex_cont') ): the_row(); ?>
          
            <?php if( get_row_layout() == 'text' ): 
              $description_text = get_sub_field('description_text');
              ?>

                <div class="info-text container">
                  <?php echo $description_text; ?>
                </div>
            <?php elseif( get_row_layout() == 'slider_section' ): ?>
                <?php
                    if( have_rows('slider') ):
                    // loop through the rows of data
                  ?>
                        <div class="slideex owl-carousel owl-theme">
                          <div class="slider-01">
                      <?php 
                        while ( have_rows('slider') ) : the_row();
                        //vars
                      ?>
                        <?php the_sub_field('image'); ?>                     
                      <?php endwhile; ?>
                        </div>
                      </div>
                  <?php else : // no rows found
                  endif; ?>
            <?php elseif( get_row_layout() == 'i_and_t' ): 
              $image_of_text = get_sub_field('image_of_text');
              $text_from_image = get_sub_field('text_from_image');
              ?>
              <div class="container image-text">
                <div class="info-text">
                  <div class="image">
                    <?php echo $image_of_text; ?>
                  </div>
                  <div class="text">
                    <h6><?php echo $text_from_image; ?></h6>
                  </div>
                </div>
              </div>
            <?php elseif( get_row_layout() == 'full_cont' ): 
              $code_or_image = get_sub_field('code_or_image');
            ?>
              <div class="container video"><?php echo $code_or_image; ?></div>
            <?php elseif( get_row_layout() == 'rep_work' ): ?>
              <?php
                    if( have_rows('repeater') ):
                    // loop through the rows of data
                  ?>
                    <div class="container cuadros">
                      <div class="info-text">
                      <?php 
                        while ( have_rows('repeater') ) : the_row();
                        //vars
                        $work_image = get_sub_field('work_image');
                        $info = get_sub_field('info');
                      ?>
                        <div class="cuadro">
                          <div class="img">
                            <?php echo $work_image; ?>
                          </div>
                          <div class="info-cuadro">
                            <?php echo $info; ?>
                          </div>
                        </div>  

                      <?php endwhile; ?>

                        </div>
                      </div>

                  <?php else : // no rows found
                  endif; ?>

              <?php endif; ?>
          <?php endwhile; ?>
      <?php endif; ?>
  <div class="space"></div>
<?php get_footer(); ?>