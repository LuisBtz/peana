<?php

//Template Name: Template About

get_header();

$about_text = get_field('about_text');

?>
      <div class="container" id="about">
        <div class="description">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>    
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <hr>
        <div class="info-text">
            <?php echo $about_text; ?>
        </div>
      </div>
      <?php get_footer(); ?>