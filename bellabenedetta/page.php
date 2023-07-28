<?php get_header(); ?>

<main id="main" class="site-main" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="page-content">

			<div class="container">			
				<h1><?php the_title(); ?></h1>	
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>

