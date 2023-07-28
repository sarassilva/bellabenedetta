<?php get_header() ?>

<main class="woocommerce wc-products products-main" role="main">

	<div class="container">	
		<?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?>

		<h1><?php woocommerce_page_title(); ?></h1>
		<?php if ( woocommerce_product_loop() ) {
			do_action( 'woocommerce_before_shop_loop' ); ?>

			<div class="content">
				<div class="filter">
					<?php if(is_active_sidebar('wdg5')){ dynamic_sidebar('wdg5'); } ?>
				</div>

				<div class="woocommerce columns-3" id="products">
					<?php woocommerce_product_loop_start();
						if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();
								do_action( 'woocommerce_shop_loop' );
								wc_get_template_part( 'content', 'product' );
							}
						}

						woocommerce_product_loop_end();
						do_action( 'woocommerce_after_shop_loop' );

						} else {
							do_action( 'woocommerce_no_products_found' );
						}

						do_action( 'woocommerce_after_main_content' ); ?>
				</div>
			</div>

	</div>
</main>

<?php get_footer(); ?>