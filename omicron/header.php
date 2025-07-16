<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'omicron' ); ?></a>

        <header id="masthead" class="site-header">
            <nav class="bg-white shadow-lg sticky top-0 z-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-20">
                        <div class="flex items-center">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img
                                    src="https://omicron.bbrion.es/wp-content/uploads/2025/05/xlogo-laboratorio-omicron.webp.pagespeed.ic.vVG9wjRNjJ.webp"
                                    alt="Laboratorio Omicron"
                                    class="h-16 w-auto transition-transform duration-300 hover:scale-110"
                                />
                            </a>
                        </div>

                        <div class="hidden md:block">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_class'     => 'ml-10 flex items-baseline space-x-8',
                                    'container'      => false,
                                    'items_wrap'     => '<div id="%1$s" class="%2$s">%3$s</div>',
                                    'depth'          => 1,
                                    'walker'         => new Omicron_Nav_Walker(),
                                )
                            );
                            ?>
                        </div>

                        <div class="md:hidden">
                            <button id="mobile-menu-button" class="text-gray-900 hover:text-blue-600">
                                <svg id="mobile-menu-open-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                                <svg id="mobile-menu-close-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x hidden"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                            </button>
                        </div>
                    </div>

                    <div id="mobile-menu" class="md:hidden hidden">
                        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_class'     => 'space-y-1',
                                    'container'      => false,
                                    'items_wrap'     => '<div id="%1$s" class="%2$s">%3$s</div>',
                                    'depth'          => 1,
                                    'walker'         => new Omicron_Mobile_Nav_Walker(),
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header><!-- #masthead -->

        <div id="content" class="site-content">
