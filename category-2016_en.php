<?php

get_header();

//Template Name: Template News

?>
<div class="container m-top" id="exhibitions">
    <div class="nav-cat">

        <?php if( has_nav_menu( 'terciary' ) ) {
                wp_nav_menu(array(
                'theme_location'                        =>   'terciary',
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
    <section class="archive-grid ajustado">







    <?php
        $args = array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'category_name'  => '2016_en',
            'posts_per_page' => '-1',
            'order' => 'ASC'
        );
        $products_loop = new WP_Query( $args );
        if ( $products_loop->have_posts() ) :
            while ( $products_loop->have_posts() ) : $products_loop->the_post();

                // Set variables
                $artist = get_field('artist');
                $date = get_field('date');
                $link = get_field('link');
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

                // Output

                ?>

                <article>
                    <a href="<?php echo $link['url']; ?>"><img src="<?php echo $url; ?>" alt="Peana">
                        <div class="info-ex">
                            <h3><?php the_title(); ?></h3><b><?php echo $artist; ?></b>
                            <p><?php echo $date; ?></p>
                        </div>
                    </a>
                </article>

                <?php
                endwhile;
            wp_reset_postdata();
               else: ?>


<?php
        endif;

    ?>







        
    </section>
</div>
<?php get_footer(); ?>