<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<!-- <footer id="colophon" class="site-footer" role="contentinfo"> -->
	

	<footer style="background-image: url(http://localhost/fashion/wp-content/uploads/2019/04/cropped-bg_pc.png); ">
	<div class="gallery gallery-columns-4">
		<div class="gallery-item">
			<a href="/">
				<img src="http://localhost/fashion/wp-content/uploads/2019/04/cropped-39146088_436894700153631_6815407783517618176_n.jpg" alt="mega logo footer">
			</a>
		</div>
		<div class="gallery-item">

		</div>
		<div class="gallery-item">

		</div>
		<div class="gallery-item">

		</div>
	</div>

	</footer>









		<div class="col-full">
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			// do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	<!-- </footer> -->
	<!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
