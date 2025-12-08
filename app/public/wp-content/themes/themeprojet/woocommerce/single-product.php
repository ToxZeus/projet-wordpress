<?php
// Template produit WooCommerce personnalisé
get_header();
if (have_posts()) :
	while (have_posts()) : the_post();
		global $product;
		echo '<section class="product-detail">';
		echo '<h2>' . get_the_title() . '</h2>';
		echo '<div class="product-image">';
		woocommerce_show_product_images();
		echo '</div>';
		echo '<div class="product-info">';
		echo '<p class="price">' . $product->get_price_html() . '</p>';
		woocommerce_template_single_add_to_cart();
		echo '<div class="description">' . apply_filters('the_content', get_the_content()) . '</div>';
		echo '</div>';
		echo '</section>';
	endwhile;
endif;
get_footer();
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

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

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

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
