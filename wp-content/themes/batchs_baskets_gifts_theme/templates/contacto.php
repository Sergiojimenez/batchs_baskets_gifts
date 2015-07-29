<?php
/**
 * Template Name: Contacto
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>
<?php get_header(); ?>

<div class="container">
	<?php
		$type = 'Contacto';
		$args=array(
		  'post_type' => $type,
		  'post_status' => 'publish',
		  'posts_per_page' => -1,
		  'caller_get_posts'=> 1
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			  	<div class="form-text">
					<?php
						$text = get_field('texto_contacto');
						echo $text;
					?>
				</div>
				<div class='form-page'>
  					<?php get_template_part( 'form' );  ?>
				</div>

			    <?php
			  endwhile;
		}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
</div>