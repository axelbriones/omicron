<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<main class="py-20">
				<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center text-blue-600 hover:text-blue-700 mb-8">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
						Volver al inicio
					</a>

					<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
						<div class="relative">
							<?php echo woocommerce_get_product_thumbnail( 'full', array( 'class' => 'w-full h-96 object-contain bg-gray-50 rounded-lg p-8' ) ); ?>
						</div>

						<div>
							<h1 class="text-4xl font-light text-gray-900 mb-4"><?php the_title(); ?></h1>

							<div class="flex items-center space-x-6 mb-6">
								<div class="flex items-center text-gray-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 text-blue-500"><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v2"/><path d="M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5"/><path d="M12 12v5"/><path d="M21 10H3"/></svg>
									<span><?php echo $product->get_attribute( 'presentacion' ); ?></span>
								</div>
								<div class="flex items-center text-gray-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 text-green-500"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
									<span><?php echo $product->get_attribute( 'condicion-de-venta' ); ?></span>
								</div>
							</div>

							<div class="mb-6">
								<p class="text-lg text-gray-700 leading-relaxed"><?php echo $product->get_short_description(); ?></p>
							</div>

							<div class="mb-6">
								<div class="flex items-center text-gray-600 mb-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2Z"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
									<span class="font-medium">SKU:</span>
								</div>
								<p class="text-gray-600"><?php echo $product->get_sku(); ?></p>
							</div>

							<div class="mb-8">
								<h3 class="font-medium text-gray-900 mb-2">Categorías:</h3>
								<div class="flex flex-wrap gap-2">
									<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm hover:bg-blue-200 transition-colors">', '</span>' ); ?>
								</div>
							</div>

							<div class="prose max-w-none">
								<h3 class="text-xl font-semibold text-gray-900 mb-4">Descripción</h3>
								<div class="text-gray-700 whitespace-pre-line leading-relaxed">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>

					<?php
					$terms = get_the_terms( $product->get_id(), 'product_cat' );
					if ( ! empty( $terms ) ) {
						$category_ids = wp_list_pluck( $terms, 'term_id' );
						$related_products_args = array(
							'post_type'      => 'product',
							'posts_per_page' => 5,
							'post__not_in'   => array( $product->get_id() ),
							'tax_query'      => array(
								array(
									'taxonomy' => 'product_cat',
									'field'    => 'term_id',
									'terms'    => $category_ids,
								),
							),
						);
						$related_products = new WP_Query( $related_products_args );
						if ( $related_products->have_posts() ) :
							?>
							<div class="mt-16">
								<h3 class="text-2xl font-light text-gray-900 mb-4">
									Más productos de <?php echo esc_html( $terms[0]->name ); ?>
								</h3>
								<div class="bg-white rounded-lg shadow-sm overflow-hidden">
									<table class="w-full">
										<thead class="bg-blue-50">
											<tr>
												<th class="p-4 font-semibold text-blue-900 text-left">Producto</th>
												<th class="p-4 font-semibold text-blue-900 text-left">Principio Activo</th>
												<th class="p-4 font-semibold text-blue-900 text-left">Presentación</th>
												<th class="p-4 font-semibold text-blue-900 text-left">Venta</th>
											</tr>
										</thead>
										<tbody>
											<?php
											while ( $related_products->have_posts() ) :
												$related_products->the_post();
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
											<?php endwhile; ?>
										</tbody>
									</table>
								</div>
							</div>
							<?php
						endif;
						wp_reset_postdata();
					}
					?>
				</div>
			</main>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag to avoid "headers already sent" issues. */
