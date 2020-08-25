<?php get_header(); 

$artist = get_field('artist');
$date = get_field('date');
$gallery = get_field('gallery');


?>
      <div id="exhibition">
        <div class="container">
          <section class="title">
            <h2><?php the_title(); ?></h2><b><?php echo $artist; ?></b>
            <p><?php echo $date; ?></p>
          </section>
          <div class="nav-ex">
            <ul>
              <li><a href="#text">Text</a></li>
              <li><a href="#artist">Artist</a></li>
              <li><a href="#ex">Exhibitions</a></li>
              <li><a href="#press">Press</a></li>
            </ul>
          </div>
        </div>


        <?php
          if( have_rows('carrusel') ):
          // loop through the rows of data
        ?>
          <div class="slideex owl-carousel owl-theme" id="artist">
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
        
        <div class="container" id="text">
          <div class="info-text">
            <p><b>Fusce dapibus,</b> tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, <b>dapibus</b> ac facilisis in, egestas eget quam. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p><br><br>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla. <b>Nullam quis risus eget urna mollis ornare vel eu leo.</b></p><br><br><br>
            <hr>
          </div>
        </div>
        <div class="linksection" id="ex">
          <h3 class="title-sec"><b>Exhibitions</b></h3>
          <div class="loop-links">
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
          </div>
        </div>
        <div class="container">
          <div class="info-text">
            <hr>
          </div>
        </div>
        <div class="linksection" id="press">
          <h3 class="title-sec"><b>Press</b></h3>
          <div class="loop-links">
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
            <div class="item"><a href="exhibition.html">
                <h2>Cold Pleasure, Warm Touch</h2>
                <h2><b>Group Exhibition PEANA</b></h2>
                <p>11.07.2018 — 02.14.2019</p></a></div>
          </div>
        </div>
      </div>
      <?php get_footer(); ?>