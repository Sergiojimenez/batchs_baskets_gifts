<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _mbbasetheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<div id="SIDEBAR"></div>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
