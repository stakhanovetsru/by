<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stakhanovets
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'position-relative' ); ?>>
<?php wp_body_open(); ?>

<!-- Preloader -->
<?php get_template_part( 'template-parts/content', 'load' ); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#primary"><?php esc_html_e( 'Skip to content', 'stakhanovets' ); ?></a>

    <header id="masthead" class="site-header bg-white shadow-sm sticky-top py-3 py-lg-4 ">
        <div class="container">
            <p class="m-0 me-2 text-end"><a href="tel:+74991106410" class="text-dark text-decoration-none">+7 (499)
                    110-64-10</a></p>
            <div class="row align-items-center">
                <div class="col-auto d-none d-lg-block col-xxl-3">
					<?php
					the_custom_logo();
					?>
                </div><!-- .site-logo -->
                <div class="col-12 col-xl col-xxl-9 d-flex justify-content-end">
                    <nav class="navbar navbar-expand-lg float-end float-xl-none bg-body w-100">
                        <div class="d-inline-block d-lg-none w-auto float-start">
							<?php
							the_custom_logo();
							?>
                        </div>

                        <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                                data-bs-target="#stkh-navigation" aria-controls="stkh-navigation" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'menu-1',
								'menu_id'         => 'primary-menu',
								'menu_class'      => 'navbar-nav w-100 d-flex justify-content-between',
								'container'       => 'div',
								'container_class' => 'collapse navbar-collapse ps-5 ps-lg-0',
								'container_id'    => 'stkh-navigation',
							)
						);
						?>

                    </nav>
                    <!-- #site-navigation -->
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
