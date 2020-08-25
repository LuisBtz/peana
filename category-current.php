<?php

get_header();

?>
<div class="container m-top" id="exhibitions">
    <div class="nav-cat">

        <?php if( has_nav_menu( 'secondary' ) ) {
                wp_nav_menu(array(
                'theme_location'                        =>   'secondary',
                'container'                             =>   false,
                    )); 
                }       
            ?>


        <!-- <ul>
        <li><a class="active-link" href="current.html">Current</a></li>
        <li><a href="upcoming.html">Upcoming</a></li>
        <li><a href="archive.html">Archive</a></li>
        </ul> -->
    </div>
    <section class="current-grid ajustado">







    <?php
        $args = array(
            'post_type' => 'exhibitions',
            'post_status' => 'publish',
            'category_name'  => 'current',
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

                <article>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>" alt="Peana">
                        <div class="info-ex">
                            <h3><?php the_title(); ?></h3><b><?php echo $artist; ?></b>
                            <p><?php echo $date; ?></p><span><?php echo $gallery; ?></span>
                        </div>
                    </a>
                </article>

                <?php
                endwhile;
            wp_reset_postdata();
        endif;

    ?>







        
    </section>
</div>
<?php get_footer(); ?>