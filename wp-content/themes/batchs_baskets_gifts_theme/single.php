<?php
/**
 * The template for displaying all single posts.
 *
 * @package _mbbasetheme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="product">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
				<ul>
					<?php
						$field = get_field_object('bebida');
						$colors = get_field('bebida');

						foreach($colors as $key => $val) {
				    		$label = $colors[$key];
				    		echo '<li>This is your label: '. $field['choices'][$label].'</li>';
					}?>
				</ul>
			<?php _mbbasetheme_post_nav(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
