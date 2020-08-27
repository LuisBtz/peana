<?php 

// Template Name: Template Contact

get_header();

?>
      <div class="container" id="contact">
        <style>
          body {
            background-color: #EBE4D0;
          
          }
          nav {
            background-color: #EBE4D0;
          }
        </style>
        <div class="nav-cont">
          <ul>
            <li> <a href=""><b>Monterrey, MX</b></a></li>
            <li><a href=""><b>New York, NY</b></a></li>
            <li> <a href=""><b>General Inquiries</b></a></li>
            <li><a href="<?php the_field('job_opportunities_mail', 'option'); ?>"><b>Job Opportunities</b></a></li>
          </ul>
        </div>
        <div class="nav-cont big">
          <ul>
            <li><?php the_field('address', 'option'); ?></li>
            <li><?php the_field('new_york', 'option'); ?></li>
            <li><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></li>
            <li><b>PEANA</b> Monterrey</li>
          </ul>
        </div>
        <div class="container">
          <hr>
          <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14384.770573601743!2d-100.3738296!3d25.664908!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51b70f15e25d176b!2sPeana!5e0!3m2!1ses!2smx!4v1597266630771!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        </div>
      </div>
<?php get_footer(); ?>