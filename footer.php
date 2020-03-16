<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lasheville-v1
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-wrap">
			<div class="footer-info">
				<p>
					<a href="https://www.vagaro.com/lasheville" class="button">Book Now</a>
				</p>
				<p class="m-0">
					<?php echo date('Y'); ?> Copyright Lasheville, All Rights Reserved.
				</p>
				<p class="m-0">
					Website Design by <a href="https://longlivesimple.com">Long Live Simple.</a>
				</p>
			</div>
			<div class="footer-nav">
				<ul class="footer-nav-left font-style-heading text-uppercase">
					<li><a href="<?php echo get_site_url() ?>">Home</a></li>
					<li><a href="<?php echo get_site_url() ?>/services-for-eyelash-extensions">Services</a></li>
					<li><a href="<?php echo get_site_url() ?>/about">About</a></li>
				</ul>
				<ul class="footer-nav-right font-style-heading text-uppercase">
					<li><a href="<?php echo get_site_url() ?>/facts-and-information-on-eyelash-extensions">FAQ</a></li>
					<li><a href="<?php echo get_site_url() ?>/contact">Contact</a></li>
					<li><a href="<?php echo get_site_url() ?>/testimonials">Testimonials</a></li>
				</ul>
			</div>
			<div class="footer-social">
				<h5 class="mt-0">
					Let's get Social:
				</h5>
				<ul>
					<li><a href="https://www.instagram.com/lashevilleextensions/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/instagram-icon.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/Lasheville?fref=ts"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/facebook-icon.svg" alt="Facebook"></a></li>
					<li><a href="https://www.pinterest.com/umamojo1/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/pinterest-icon.svg" alt="Pinterest"></a></li>
				</ul>
			</div>
		</div>
		<div class="footer-back-top">
			<button class="back-top-button">Back To Top</button>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
