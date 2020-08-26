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

                
              <?php endif; ?>
          <?php endwhile; ?>
      <?php endif; ?>










      <div class="container image-text">
        <div class="info-text">
          <div class="image"><img src="assets/images/split.jpg" alt=""></div>
          <div class="text">
            <h6>Nulla vitae elit libero, a dis pharetra augue. Vestibulum id ligula porta felis euismod  non mi porta semper. </h6>
          </div>
        </div>
      </div>
      <div class="container video"><div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/67449472?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script></div>
      <div class="container cuadros">
        <div class="info-text">
          <div class="cuadro">
            <div class="img"><img src="assets/images/cuadro1.jpg" alt=""></div>
            <div class="info-cuadro">
              <p>ASMA</p>
              <p><b>Soft wax night, 2019</b></p>
              <p>White paraffin wax, encaustic paint</p>
              <p>53 x 40 x 5 cm</p>
              <p>20.9 x 15.7 x 1.9 in</p>
            </div>
          </div>
          <div class="cuadro">
            <div class="img"><img src="assets/images/cuadro1.jpg" alt=""></div>
            <div class="info-cuadro">
              <p>ASMA</p>
              <p><b>Soft wax night, 2019</b></p>
              <p>White paraffin wax, encaustic paint</p>
              <p>53 x 40 x 5 cm</p>
              <p>20.9 x 15.7 x 1.9 in</p>
            </div>
          </div>
          <div class="cuadro">
            <div class="img"><img src="assets/images/cuadro1.jpg" alt=""></div>
            <div class="info-cuadro">
              <p>ASMA</p>
              <p><b>Soft wax night, 2019</b></p>
              <p>White paraffin wax, encaustic paint</p>
              <p>53 x 40 x 5 cm</p>
              <p>20.9 x 15.7 x 1.9 in</p>
            </div>
          </div>
          <div class="cuadro">
            <div class="img"><img src="assets/images/cuadro1.jpg" alt=""></div>
            <div class="info-cuadro">
              <p>ASMA</p>
              <p><b>Soft wax night, 2019</b></p>
              <p>White paraffin wax, encaustic paint</p>
              <p>53 x 40 x 5 cm</p>
              <p>20.9 x 15.7 x 1.9 in</p>
            </div>
          </div>
        </div>
      </div>
      <div class="info-text container">
        <p>Employing an adaptable curatorial model, <b>PEANA maintains a permanent gallery</b> in Monterrey, Mexico, <b>while also organizing "off-site" exhibitions</b> in the United States and Europe.</p><br><br>
        <p>In 2018, <b>PEANA</b> started a <b>residency exchange program between Mexico and New York</b> made possible thanks to the support of Rockefeller Brothers Fund and Residency Unlimited. Starting Fall 2018, this program will run parallel to <b>PEANA</b> as an independent non-profit organization called <b>Persona.</b></p><br><br><br><br><br><br><br><br><br>
      </div>
      <div class="slideex owl-carousel owl-theme">
        <div class="slider-01"><img src="assets/images/slide1.jpg" alt=""><img src="assets/images/slide2.jpg" alt=""><img src="assets/images/slide3.jpg" alt=""><img src="assets/images/slide4.jpg" alt=""></div>
      </div>
      <div class="space"></div>
<?php get_footer(); ?>