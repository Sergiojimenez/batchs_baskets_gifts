<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _mbbasetheme
 */

get_header(); ?>
	<!-- We add the main modular menu -->
	<nav class="mainmenu">
		<?php get_template_part( 'mainmenu' );  ?>
	</nav>

	<!-- We add the "about us" modul -->
	<section class="aboutus">
		<?php get_template_part( 'aboutus' );  ?>
	</section>

	<!-- We add the "conditions" modul -->
	<section class="info-modules">
		<article class="conditions">
			<?php get_template_part( 'conditions' );  ?>
		</article>

		<!-- We add the "contact" modul -->
		<article class="contact">
			<?php get_template_part( 'contact' );  ?>
		</article>

		<!-- We add the "download" modul -->
		<article class="download">
			<?php get_template_part( 'download' );  ?>
		</article>

		<!-- We add the "customers" modul -->
		<article class="customers">
			<?php get_template_part( 'customers' );  ?>
		</article>
	</section>

<?php get_footer(); ?>
