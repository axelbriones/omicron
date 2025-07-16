<?php
/**
 * Template Name: Products Alt 2 Page
 *
 * @package Omicron
 */

get_header(); ?>

<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-light text-gray-900 mb-4">
                Productos Recomendados
            </h2>
            <p class="text-gray-600 text-lg">
                Descubre nuestra selección especial de productos con imágenes destacadas y información detallada.
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
                            <div class="embla__slide pl-2 md:pl-4 md:basis-1/2 lg:basis-1/3">
                                <div class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group">
                                    <!-- Imagen a full width con cover -->
                                    <div class="relative overflow-hidden h-80 bg-gray-100">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo woocommerce_get_product_thumbnail( 'woocommerce_single', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-700' ) ); ?>
                                        </a>
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                                        <!-- Badge flotante -->
                                        <div class="absolute top-4 left-4">
                                            <span class="px-3 py-2 rounded-full text-xs font-bold <?php echo ( $product->get_attribute( 'tipo-de-venta' ) === 'Venta libre' ) ? 'bg-green-500 text-white' : 'bg-red-500 text-white'; ?> shadow-lg">
                                                <?php echo $product->get_attribute( 'tipo-de-venta' ); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="p-8">
                                        <!-- Presentación -->
                                        <div class="flex items-center mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2 text-blue-600"><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v2"/><path d="M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5"/><path d="M12 12v5"/><path d="M21 10H3"/></svg>
                                            <span class="text-sm font-medium text-blue-600 uppercase tracking-wide">
                                                <?php echo $product->get_attribute( 'presentacion' ); ?>
                                            </span>
                                        </div>

                                        <!-- Título del producto -->
                                        <h3 class="text-2xl font-bold text-gray-900 mb-3 leading-tight">
                                            <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>

                                        <!-- Descripción -->
                                        <p class="text-gray-600 mb-6 leading-relaxed">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>

                                        <!-- Botón minimalista con flecha -->
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold transition-colors duration-200 group">
                                            Ver detalles
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
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
