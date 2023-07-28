<?php 
/* Template Name: Home */ 
?>

<?php get_header(); ?>

<main>
	<?php echo do_shortcode('[smartslider3 slider="4"]'); ?>

	<div class="vantagens">
		<section class="container">
			<?php if(is_active_sidebar('wdg3')){ dynamic_sidebar('wdg3'); } ?>
		</section>
	</div>

	<div class="wc-products">
		<section class="container">
	    	<h2 class="title">Os queridinhos</h2>
	    	<h3 class="subtitle">Mais vendidos</h3>
	    	<?php echo do_shortcode('[products limit="8" columns="4" orderby="id" order="DESC" visibility="visible"]'); ?>
	    	<div class="more-link">
	    		<a href="<?php echo esc_url( get_page_link(6)); ?>">Ver mais novidades</a>
	    	</div>
		</section>
	</div>

	<div class="banners">
		<section class="container">
			<?php if(is_active_sidebar('wdg4')){ dynamic_sidebar('wdg4'); } ?>
		</section>
	</div>

</main>

<?php get_footer(); ?>