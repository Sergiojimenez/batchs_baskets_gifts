<?php
/**
 * Template Name: Lotes
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>
<?php get_header(); ?>
        <div id="container" class="listProducts">
            <div id="content" class="listProductsGrid">
<?php
$type = 'Lotes';
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
  <div class="card">
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <div class="image">
    <?php 
    	$image = get_field('Imagen_parrilla');
    	if( !empty($image) ): ?>
    		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    	<?php endif; ?>
    </div>
    <div class="action">
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </div>
  </a>
  </div>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>

            </div><!-- #content -->
        </div><!-- #container -->
<div class='form'>
  <?php get_template_part( 'form' );  ?>
</div>
