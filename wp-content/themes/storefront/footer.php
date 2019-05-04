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
	<div class="site-main">
	<section class="storefront-product-section storefront-on-sale-products" id="lookbook" aria-label="On Sale Products">
		<div class="col-full">
		
		<h2 class="section-title pemission">NEWS LOOKBOOK & STYLE</h2>
		<div class="woocommerce columns-4 ">
			<ul class="products news-lookbook columns-4">
			<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<li class="product type-product post-113 status-publish instock product_cat-set-thun has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
					<a href="<?php the_permalink() ?>" class="woocommerce-LoopProduct-link scale-fix woocommerce-loop-product__link">
					<?php echo get_the_post_thumbnail( $post_id,'woocommerce_thumbnail', array( 'class' => 'attachment-woocommerce_thumbnail size-woocommerce_thumbnail' ) ); ?>
						<!-- <img width="324" height="432" src="" alt=""> -->
						</a>
						<h2 class="title-post"><?php the_title(); ?></h2>
						<div class="des-post">
							<i>by</i>
							<span class="author-post"><?php echo get_author_name(); ?></span>
							<i>time</i>
							<span class="time-post"><?php echo get_the_date(); ?></span>
						</div>
					</a>
				</li>
			<?php 
			endwhile;
			wp_reset_postdata();
			?>
			</ul>
		</div>
		</div>
	</section>
	</div><!-- site-main -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<!-- <footer id="colophon" class="site-footer" role="contentinfo"> -->
	

	<footer style="
	color:#fff;
	background:#161415  url(https://olgafashion.vn/wp-content/uploads/2019/04/bg_pc.png) repeat;background-size: cover;">
	<div class="col-full">
	<div class="gallery gallery-columns-4">
		<div class="gallery-item">
			<a href="/">
				<img src="https://olgafashion.vn/wp-content/uploads/2019/05/olgafashion.png" alt="olga logo footer">
			</a>
		</div>
		<div class="gallery-item contact-megafashion">
			<ul style="">
				<div style="color: #fff;font-size: 10px;text-transform: uppercase;">Tại <b style="font-size: 16px;letter-spacing: 1px;margin-left: 10px;">Tp.Hồ Chí Minh</b></div>
				<h3 style="width: 280px;"><i>❶</i> <span>Cửa hàng</span> Hồ Văn Huê - Tp.HCM</h3>
				<li style="font-weight: 400; width: 280px; text-transform: uppercase;line-height: 20px;">Số <b style="font-size: 20px;letter-spacing: 1px;">26</b>  Hồ Văn Huê - Phường 9 <br> Quận Phú Nhuận <b>Tp.HCM</b></li>
				<li class="hotline-mega"><i>☏</i> → Hotline: 0938.228.365 (Call/Zalo)</li>
			</ul>
		</div>
		<div class="gallery-item">
		<ul class="megafashion-support">
			<h3>Về Olgafashion</h3>
			<li>- <a href="https://www.megafashion.vn/detail/news/dieu-khoan-va-dieu-kien-su-dung-khi-truy-cap-hay-mua-hang-tai--megafashion/8">Điều khoản sử dụng</a>
			</li>
			<li>- <a href="https://www.megafashion.vn//detail/news/chinh-sach-bao-mat-thong-tin-tai-megafashion-id6">Chính sách bảo mật thông tin</a>
			</li><a href="https://www.megafashion.vn//detail/news/chinh-sach-bao-mat-thong-tin-tai-megafashion-id6">
			</a><li><a href="https://www.megafashion.vn//detail/news/chinh-sach-bao-mat-thong-tin-tai-megafashion-id6">- </a><a href="https://www.megafashion.vn/detail/news/chinh-sach-van-chuyen-hang-hoa-cua-megafashion/7">Chính sách vận chuyển</a>
			</li>
			<li>- <a href="https://www.megafashion.vn/detail/news/chinh-sach-bao-hanh-san-pham-khi-mua-hang-tai-megafashion/9">Bảo hành và đổi trả Sản phẩm</a>
			</li>
			<li>→ <a href="https://www.megafashion.vn/tuyen-dung">Tuyển dụng <b>Nhiều vị trí</b></a>
			</li>
		</ul>
		</div>
		<div class="gallery-item">
		<ul class="fashion-social">
			<h3>Social Page</h3>
				<a target="_BLANK" href="https://m.me/megafashionhcm"><img class="facebook" src="https://www.megafashion.vn/publics/theme/images/facebook-icon.png" alt="facebook"></a>
				<a target="_BLANK" href="#"><img class="zalo" src="https://www.megafashion.vn/publics/theme/images/zalo-ft.png" alt="zalo"></a>
				<a target="_BLANK" href="https://www.youtube.com/channel/UC9vQHSsnDJLrY0_E1117b_g"><img class="youtube" src="https://www.megafashion.vn/publics/theme/images/youtube-icon.png" alt="youtube"></a>
				<a target="_BLANK" href="https://plus.google.com/u/0/116519535208090899541/"><img class="google-plus" src="https://www.megafashion.vn/publics/theme/images/google-plus.png" alt="google-plus"></a>
		</ul>
		</div>
	</div>
	
	<div class="all_systems"><h3>OlgaFashion - The World of Fashion</h3></div>
	<div class="footer-center">
		<ul>
			<li>Copyrigh 2019 OlgaFashion.vn All Right Reserved</li>
			<li>Trụ sở: Số 26 Hồ Văn Huê - Phường 9 - Quận Phú Nhuận - Tp HCM.</li>

		</ul>
	</div>
	</div><!-- .col-full -->

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

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
