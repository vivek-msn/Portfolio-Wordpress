<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Landing Page</title>

    <!-- FAVICON -->
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <?php wp_head(); ?>
   </head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90">

    <!-- Navbar section  -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <?php if( has_custom_logo() ): ?>
                    <?php the_custom_logo(); ?>
                  <?php else: ?>
                    <p class="site-title"><?php bloginfo( 'title' ); ?></p>
                    <span><?php bloginfo( 'description' ); ?></span>
                  <?php endif; ?>
                </a>
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <?php
											wp_nav_menu( array(
												'theme_location'    => 'portfolio_main_menu',
												'depth'             => 3,
												'container'         => 'div',
												'container_class'   => 'collapse navbar-collapse',
												'container_id'      => 'bs-example-navbar-collapse-1',
												'menu_class'        => 'nav navbar-nav ms-auto',
												'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
												'walker'            => new WP_Bootstrap_Navwalker(),
											) );
							?>
            </div>
          </nav>
    </header>

    <!-- Navbar section exit  -->
