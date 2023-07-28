<?php wp_footer(); ?>

<footer>
	<?php if(is_front_page() || is_archive()) { ?>
		<div class="newsletter">
			<section class="container">
				<?php if(is_active_sidebar('wdg2')){ dynamic_sidebar('wdg2'); } ?>
			</section>
		</div>
	<?php } ?>

	<div class="instagram">
		<?php if(is_active_sidebar('wdg7')){ dynamic_sidebar('wdg7'); } ?>
	</div>

	<div class="footer">
		<section class="container">
			<?php if(is_active_sidebar('wdg6')){ dynamic_sidebar('wdg6'); } ?>

	    	<div class="copyright">
				<span>
					<strong>BELLA BENEDETTA</strong> CNPJ 01.234.567-0001-10 (c) Todos os direitos reservados  
				</span>
	       		<span>
	       			Desenvolvido por <a href="https://moveag.com" target="_blank" class="move">Move Agency</a>
	       		</span>
	    </div>
		</section>
	</div>
</footer>

<div class="side-mobile">
	<button name="Fechar navegação" onclick="toggleMenu()" class="close">x</button>
	<div class="user">
	<?php
		if ( is_user_logged_in() ) { 
			$current_user = wp_get_current_user();?>
		   <p><a href="<?php echo get_home_url(); ?>/minha-conta">Minha conta</a></p>
		<?php }  else { ?>
		    <p><a href="<?php echo get_home_url(); ?>/minha-conta">Login</a></p>
		<?php }
		?>
		<a href="<?php echo get_home_url(); ?>/wishlist" class="faves">
				Lista de desejos 
			</a>
	</div>
	<div class="title">Navegue</div>
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

	<div class="title" style="margin-top: 30px;">Ajuda</div>
	<?php wp_nav_menu( array('menu' => 'duvidas' )); ?>
</div>
<div class="overlay"></div>

<script  src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">

</body>
</html>