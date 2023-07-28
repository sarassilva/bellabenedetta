<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" class="no-ie" <?php language_attributes(); ?>>
<head>
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
	<section class="container header">
		<button id="mobile-menu" onclick="toggleMenu()" name="Menu de navegação">Abrir</button>

		<a class="header-logo" title="Bella Benedetta" href="<?php echo get_home_url(); ?>" rel="Home">Bella Benedetta</a>

		<div class="main-menu desktop">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</div>

		<div class="options">
			<div class="user">
			<?php
				if ( is_user_logged_in() ) { 
					$current_user = wp_get_current_user();?>
				   <p><a href="<?php echo get_home_url(); ?>/minha-conta">Minha conta</a></p>
				<?php }  else { ?>
				    <p><a href="<?php echo get_home_url(); ?>/minha-conta">Login</a></p>
				<?php }
				?>
			</div>

			<?php echo do_shortcode('[fibosearch]'); ?>

			<a href="<?php echo get_home_url(); ?>/wishlist" class="faves">
				Lista de desejos 
			</a>

			<a href="<?php echo wc_get_cart_url() ?>" class="cart xoo-wsc-cart-trigger">
				Carrinho <div class="number"><?php echo WC()->cart->get_cart_contents_count() ?></div>
			</a>

		</div>
	</section>

	<div class="main-menu mobile">
		<section class="container">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</section>
	</div>
</header>

