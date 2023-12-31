<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Electro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'sidebar-shop' ) ) : ?>

<div id="sidebar" class="sidebar" role="complementary">
    <?php
    if ( is_active_sidebar( 'shop-sidebar-widgets' ) ) {

        if ( is_product() && apply_filters( 'electro_enable_single_product_sidebar', false ) ) {
            $sidebar_id = 'single-product-sidebar-widgets';
        } else {
            $sidebar_id = 'shop-sidebar-widgets';
        }

        dynamic_sidebar( $sidebar_id );

	} else {

		do_action( 'electro_default_shop_sidebar_widgets' );
	} ?>
    <div class="custom-products-widget"> 
    <h3 class="widget-title">Products</h3>
    <?php echo do_shortcode( '[products limit="10" ids="6095,6092,6094,6097"]' ); ?>
    </div>
</div><!-- /.sidebar-shop -->

<?php endif; ?>