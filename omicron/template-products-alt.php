<?php
/**
 * Template Name: Products Alt Page
 *
 * @package Omicron
 */

get_header(); ?>

<section class="py-20 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-light text-gray-900 mb-4">
                Nuestra Línea Premium
            </h2>
            <p class="text-gray-600 text-lg">
                Productos farmacéuticos de excelencia con la más alta calidad y eficacia comprobada.
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
                            $rating = $product->get_average_rating();
                            ?>
                            <div class="embla__slide pl-2 md:pl-4 md:basis-1/2 lg:basis-1/3 xl:basis-1/4">
                                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border-0 transform hover:-translate-y-2">
                                    <!-- Imagen con overlay gradient -->
                                    <div class="relative overflow-hidden h-64 bg-gradient-to-br from-blue-50 to-purple-50">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo woocommerce_get_product_thumbnail( 'woocommerce_thumbnail', array( 'class' => 'w-full h-full object-contain p-6 group-hover:scale-110 transition-transform duration-500' ) ); ?>
                                        </a>
                                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 fill-yellow-400 text-yellow-400"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            <span class="text-sm font-medium"><?php echo $rating; ?></span>
                                        </div>
                                    </div>

                                    <div class="p-6">
                                        <!-- Título del producto -->
                                        <h3 class="text-xl font-bold text-gray-900 mb-3 min-h-[3rem] flex items-center leading-tight">
                                            <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>

                                        <!-- Tags con nuevo diseño -->
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-3 mr-1"><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v2"/><path d="M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5"/><path d="M12 12v5"/><path d="M21 10H3"/></svg>
                                                <?php echo $product->get_attribute( 'presentacion' ); ?>
                                            </span>
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium <?php echo ( $product->get_attribute( 'tipo-de-venta' ) === 'Venta libre' ) ? 'bg-green-100 text-green-800' : 'bg-orange-100 text-orange-800'; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-3 mr-1"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                                                <?php echo $product->get_attribute( 'tipo-de-venta' ); ?>
                                            </span>
                                        </div>

                                        <!-- Botón con gradiente -->
                                        <a href="<?php the_permalink(); ?>" class="block w-full text-center text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 py-3 px-4 rounded-xl transition-all duration-300 text-sm font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
                                            Explorar Producto
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
