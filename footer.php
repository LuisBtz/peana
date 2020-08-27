<footer>
        <hr>
        <div class="footer-container">
          <div><p><?php the_field('description', 'option'); ?></p></div>
          <div><p><?php the_field('address', 'option'); ?></p></div>
          <div>
            <p><b>New York <br>NY</b><br><?php the_field('new_york', 'option'); ?></p>
        </div>
    
    <?php if( have_rows('social', 'option') ): ?>

    <div>
    <ul>

    <?php while( have_rows('social', 'option') ): the_row(); 
      $social_link = get_sub_field('social_link');
    ?>


        <li><a href="<?php echo $social_link['url']; ?>"><?php echo $social_link['title']; ?></a></li>

    <?php endwhile; ?>

    </ul>
    </div>

<?php endif; ?>


          <div>
            <p class="newsletter-button">Newsletter</p>
          </div>
        </div>
      </footer>
    </div>
    <!-- Scripts-->
    <?php wp_footer(); ?>
  </body>
</html>