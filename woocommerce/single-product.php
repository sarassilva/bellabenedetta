<?php get_header() ?>

<main class="wc-single-product" id="single-product" role="single">
	<section class="container">

		<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		
		<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
			<?php do_action( 'woocommerce_before_single_product_summary' ); ?>
			<div class="summary entry-summary">				
				<?php do_action( 'woocommerce_single_product_summary' ); ?>
			</div>	
			<?php do_action( 'woocommerce_after_single_product_summary' );	?>
			<?php do_action( 'woocommerce_after_single_product' ); ?>
			<?php endwhile;  ?>
			<?php do_action( 'woocommerce_after_main_content' );?>
		</div>	

	</section>
</main>


<?php get_footer(); ?>