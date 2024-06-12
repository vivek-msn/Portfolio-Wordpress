<?php 
 
/**
 * Portfolio Functions and definations
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package portfolio theme
 */

    // Enqueue scripts and styles 

    function portfolio_scripts() {

        wp_enqueue_style('mainstyle',get_template_directory_uri(  ) . '/style.css', array(), 1, 'all');
        wp_enqueue_style('responsive-style',get_template_directory_uri(  ) . '/assets/css/responsive-style.css', array(), 1, 'all');
        wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome-css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
        wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js');
        wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.j');
        wp_enqueue_script('custom-js,',get_template_directory_uri(  ) . '/assets/js/main.js', array(), 1, 'all');        
    }

    add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );


    function portfolio_config_setup(){
        add_theme_support('custom-logo',array(
            'height'        => 100,
            'width'         => 400,
            'flex-height'   => true,
            'flex-width'    => true,
        )  );
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        // This Theme Uses wp_nav_menu() 
        register_nav_menus(
            array(
                'portfolio_main_menu' => esc_html__( 'Portfolio Main Menu', 'portfolio theme'),
            )
        );
    }

    add_action('after_setup_theme', 'portfolio_config_setup');

    // Register Custom Navigation Walker 
     require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    ?>
