<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lasheville-v1
 */

if ( ! is_active_sidebar( 'topbanner-1' ) ) {
	return;
}
?>

<aside id="topBanner" class="widget-area top-banner">
	<?php dynamic_sidebar( 'topbanner-1' ); ?>
</aside><!-- #secondary -->
