<?php
/**
 * Template Name: Vademecum Page
 *
 * @package Omicron
 */

get_header(); ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <aside class="lg:col-span-1">
            <div class="w-64 space-y-6">
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">Filtros</h3>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Subcategorías
                            </label>
                            <select id="product-category-filter" class="w-full p-2 border rounded">
                                <option value="">Todas las categorías</option>
                                <?php
                                $categories = get_terms( 'product_cat' );
                                foreach ( $categories as $category ) {
                                    echo '<option value="' . $category->slug . '">' . $category->name . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">
                                Presentación
                            </label>
                            <div class="space-y-2">
                                <?php
                                $presentations = get_terms( 'pa_presentacion' );
                                foreach ( $presentations as $presentation ) {
                                    echo '<div class="flex items-center space-x-2">';
                                    echo '<input type="checkbox" id="' . $presentation->slug . '" value="' . $presentation->slug . '" class="product-filter">';
                                    echo '<label for="' . $presentation->slug . '" class="text-sm text-gray-600">' . $presentation->name . '</label>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">
                                Condición de Venta
                            </label>
                            <div class="space-y-2">
                                <?php
                                $sale_conditions = get_terms( 'pa_condicion-de-venta' );
                                foreach ( $sale_conditions as $condition ) {
                                    echo '<div class="flex items-center space-x-2">';
                                    echo '<input type="checkbox" id="' . $condition->slug . '" value="' . $condition->slug . '" class="product-filter">';
                                    echo '<label for="' . $condition->slug . '" class="text-sm text-gray-600">' . $condition->name . '</label>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <main class="lg:col-span-3">
            <div id="products-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Products will be loaded here via AJAX -->
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>
