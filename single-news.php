<?php 
get_header();

$artist = get_field('artist');
$date = get_field('date');
?>
      <div id="new">
        <section class="title">
          <h2><?php the_title(); ?></h2><b><?php echo $artist; ?></b>
          <p><?php echo $date; ?></p>
        </section>
        <div class="info-text">
          <?php while (have_posts()) : the_post();/* Start loop */ ?>
            <?php the_content(); ?>
          <?php endwhile; /* End loop */ ?>
        </div>
        <div class="nav-art">
          <div class="prev"><a href="<?php echo esc_url( get_page_link( 15 ) ); ?>">Return</a></div>
          <div class="next"><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>">Share</a></div>
        </div>
      </div>
<?php get_footer(); ?>