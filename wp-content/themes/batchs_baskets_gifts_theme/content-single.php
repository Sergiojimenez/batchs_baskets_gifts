<?php
/**
 * @package _mbbasetheme
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-products">
		<h3 class="entry-products-heading">Bebidas</h3>
		<ul class="entry-products-list">
			<?php
				$link = get_field('bebidas');
				for($n=0; $n<count($link); $n++){
					echo '<li class="entry-products-item">';
					echo $link[$n];
					echo '</li>';
				}
			?>
		</ul>
		<h3 class="entry-products-heading">Conservas y frutos secos</h3>
		<ul class="entry-products-list">
		<?php
			$link = get_field('conservas_y_frutos_secos');
			for($n=0; $n<count($link); $n++){
				echo '<li class="entry-products-item">';
				echo $link[$n];
				echo '</li>';
			}
		?>
		</ul>
		<h3 class="entry-products-heading">Turrones y dulces</h3>
		<ul class="entry-products-list">
		<?php
			$link = get_field('turrones_dulces');
			for($n=0; $n<count($link); $n++){
				echo '<li class="entry-products-item">';
				echo $link[$n];
				echo '</li>';
			}
		?>
		</ul>
		<h3 class="entry-products-heading">Otros</h3>
		<ul class="entry-products-list">
		<?php
			$link = get_field('otros');
			for($n=0; $n<count($link); $n++){
				echo '<li class="entry-products-item">';
				echo $link[$n];
				echo '</li>';
			}
		?>
		</ul>
	</div>
</article><!-- #post-## -->
