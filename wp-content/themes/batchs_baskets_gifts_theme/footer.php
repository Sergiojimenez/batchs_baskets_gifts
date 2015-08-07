<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footerMenu">
			<h2 class="footerMenu-title">Mapa web</h2>
			<ul class="footerMenu-list">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</ul>
		</div>
		<div class="footerMenu">
			<h2 class="footerMenu-title">Otros enlaces</h2>
			<ul class="footerMenu-list">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</ul>
		</div>
		<div class="footerMenu">
			<h2 class="footerMenu-title">Contacto</h2>
			<ul class="footerMenu-list">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</ul>
		</div>
		<div class="contact-enterprise">
		</div>
		<div class="site-branding">
			<h1 class="branding-image">
  				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
  				</a>
			</h1>
		</div>
<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
