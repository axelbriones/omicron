<?php
/**
 * Template Name: Products Alphabetical Page
 *
 * @package Omicron
 */

get_header(); ?>

<main class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="<?php echo esc_url( home_url( '/#productos' ) ); ?>" class="inline-flex items-center text-blue-600 hover:text-blue-700 mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            Volver al inicio
        </a>

        <div class="text-center mb-16">
            <h1 class="text-4xl font-light text-gray-900 mb-4">
                Productos Alfabéticamente
            </h1>
            <p class="text-gray-600 text-lg">
                Lista completa de productos ordenados alfabéticamente
            </p>
        </div>

        <!-- Buscador y Navegación directa -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Buscador -->
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-3 h-4 w-4 text-gray-400"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input type="text" id="product-search" placeholder="Buscar productos..." class="pl-10 w-full p-2 border rounded">
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <table id="products-table" class="w-full">
                <thead class="bg-blue-50">
                    <tr>
                        <th class="p-4 font-semibold text-blue-900 text-left cursor-pointer" data-sort="producto">
                            <span class="flex items-center gap-2 hover:text-blue-700">
                                Producto
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m3 16 4 4 4-4"/><path d="M7 20V4"/><path d="m21 8-4-4-4 4"/><path d="M17 4v16"/></svg>
                            </span>
                        </th>
                        <th class="p-4 font-semibold text-blue-900 text-left cursor-pointer" data-sort="principioActivo">
                            <span class="flex items-center gap-2 hover:text-blue-700">
                                Principio Activo
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m3 16 4 4 4-4"/><path d="M7 20V4"/><path d="m21 8-4-4-4 4"/><path d="M17 4v16"/></svg>
                            </span>
                        </th>
                        <th class="p-4 font-semibold text-blue-900 text-left cursor-pointer" data-sort="presentacion">
                            <span class="flex items-center gap-2 hover:text-blue-700">
                                Presentación
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m3 16 4 4 4-4"/><path d="M7 20V4"/><path d="m21 8-4-4-4 4"/><path d="M17 4v16"/></svg>
                            </span>
                        </th>
                        <th class="p-4 font-semibold text-blue-900 text-left cursor-pointer" data-sort="venta">
                            <span class="flex items-center gap-2 hover:text-blue-700">
                                Venta
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m3 16 4 4 4-4"/><path d="M7 20V4"/><path d="m21 8-4-4-4 4"/><path d="M17 4v16"/></svg>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => -1,
                        'orderby'        => 'title',
                        'order'          => 'ASC',
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post();
                            global $product;
                            ?>
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-medium text-gray-900">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </td>
                                <td class="p-4 text-gray-700"><?php echo $product->get_attribute( 'principio-activo' ); ?></td>
                                <td class="p-4 text-gray-700"><?php echo $product->get_attribute( 'presentacion' ); ?></td>
                                <td class="p-4">
                                    <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium <?php echo ( $product->get_attribute( 'condicion-de-venta' ) === 'Venta libre' ) ? 'bg-green-100 text-green-800' : 'bg-orange-100 text-orange-800'; ?>">
                                        <?php echo $product->get_attribute( 'condicion-de-venta' ); ?>
                                    </span>
                                </td>
                            </tr>
                        <?php
                        endwhile;
                    } else {
                        echo '<tr><td colspan="4">No products found</td></tr>';
                    }
                    wp_reset_postdata();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php get_footer(); ?>
