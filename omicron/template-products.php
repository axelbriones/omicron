<?php
/**
 * Template Name: Products Page
 *
 * @package Omicron
 */

get_header(); ?>

<section id="productos" class="py-20 bg-gray-50" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-light text-gray-900 mb-4">
                Productos Destacados
            </h2>
            <p class="text-gray-600 text-lg">
                Descubre nuestra selección de productos farmacéuticos de alta calidad, desarrollados con los más altos estándares para el cuidado de tu salud y bienestar.
            </p>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
            <div class="embla w-full">
                <div class="embla__container -ml-2 md:-ml-4">
                    <?php
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 12,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post();
                            global $product;
                            ?>
                            <div class="embla__slide pl-2 md:pl-4 md:basis-1/2 lg:basis-1/3 xl:basis-1/4">
                                <div class="bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden border border-gray-100">
                                    <!-- Imagen del producto -->
                                    <div class="relative overflow-hidden h-48 bg-gray-50">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo woocommerce_get_product_thumbnail( 'woocommerce_thumbnail', array( 'class' => 'w-full h-full object-contain p-4 hover:scale-105 transition-transform duration-300' ) ); ?>
                                        </a>
                                    </div>

                                    <div class="p-6">
                                        <!-- Presentación y tipo de venta -->
                                        <div class="flex justify-between items-center mb-4">
                                            <div class="flex items-center text-sm text-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2 text-blue-500"><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v2"/><path d="M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5"/><path d="M12 12v5"/><path d="M21 10H3"/></svg>
                                                <span><?php echo $product->get_attribute( 'presentacion' ); ?></span>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2 text-green-500"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                                                <span><?php echo $product->get_attribute( 'tipo-de-venta' ); ?></span>
                                            </div>
                                        </div>

                                        <!-- Título del producto -->
                                        <h3 class="text-lg font-semibold text-gray-900 mb-4 min-h-[3rem] flex items-center">
                                            <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>

                                        <!-- Botón minimalista -->
                                        <a href="<?php the_permalink(); ?>" class="block w-full text-center text-blue-600 border border-blue-600 py-2 px-4 rounded-md hover:bg-blue-600 hover:text-white transition-colors duration-200 text-sm font-medium">
                                            Ver más
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    } else {
                        echo __( 'No products found' );
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
