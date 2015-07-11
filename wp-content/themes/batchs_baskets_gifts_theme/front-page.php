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
	<?php get_template_part( 'mainmenu' );  ?>
	<!-- We add the "about us" modul -->
	<?php get_template_part( 'aboutus' );  ?>

<?php get_footer(); ?>
