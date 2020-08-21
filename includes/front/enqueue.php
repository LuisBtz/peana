<?php

function pl_enqueue(){
    
    wp_register_style( 'pl_anim', get_template_directory_uri() . '/assets/assets/css/animsition.min.css' );
    wp_register_style( 'pl_style', get_template_directory_uri() . '/assets/assets/css/styles.css' );

    wp_enqueue_style( 'pl_style' );
    wp_enqueue_style( 'pl_anim' );

    


    wp_register_script( 'pl_jquery', get_template_directory_uri() . '/assets/assets/js/jquery.min.js', array(), false, true );
    wp_register_script( 'pl_anim', get_template_directory_uri() . '/assets/assets/js/animsition.min.js', array(), false, true );
    wp_register_script( 'pl_owl', get_template_directory_uri() . '/assets/assets/js/owl.carousel.min.js', array(), false, true );
    wp_register_script( 'pl_action', get_template_directory_uri() . '/assets/assets/js/scripts.js', array(), false, true );



    wp_enqueue_script( 'pl_jquery' );
    wp_enqueue_script( 'pl_anim' );
    wp_enqueue_script( 'pl_owl' );
    wp_enqueue_script( 'pl_action' );

}