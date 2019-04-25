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
	<div class="container footer ">
	<ul class="gallery gallery-columns-5">
			<div class="">
				<ul class="gallery-item">
					<a href="https://www.megafashion.vn/"><img src="https://www.megafashion.vn/uploads/gallerys/02_logo.png" alt="mega logo footer"></a>
				</ul>
					<div class="contact-megafashion">
						<ul class="gallery-item">
							<div style="color: #fff;font-size: 10px;text-transform: uppercase;">Tại <b style="font-size: 16px;letter-spacing: 1px;margin-left: 10px;">Tp.Hà Nội</b></div>
							<h3><i>❶</i> <span>Cửa hàng</span> Quận - Hai Bà Trưng - HN</h3>
							<li style="font-weight: 400; width: 280px; text-transform: uppercase;">Số <b style="font-size: 20px;letter-spacing: 1px;">337</b> PHỐ HUẾ - HAI BÀ TRƯNG - <b>Tp.HN</b></li>
							<li class="hotline-mega"><i>☏</i> → Hotline : (024) 625 33 337 / 0946 296 234</li>
						</ul>
						<ul  class="gallery-item">

							<h3>Chính sách Đại Lý và Bán Sỉ</h3>
							<li>+ Điều khoản và điều kiện</li>
							<li>+ Thanh toán <b>Thời Gian</b> và đổi trả</li>
						</ul>
						<ul class="megafashion-support gallery-item">
							<h3>Về Megafashion</h3>
							<li>- <a href="https://www.megafashion.vn/detail/news/dieu-khoan-va-dieu-kien-su-dung-khi-truy-cap-hay-mua-hang-tai--megafashion/8">Điều khoản sử dụng</a></li>
							<li>- <a href="https://www.megafashion.vn//detail/news/chinh-sach-bao-mat-thong-tin-tai-megafashion-id6">Chính sách bảo mật thông tin</a></li><a href="https://www.megafashion.vn//detail/news/chinh-sach-bao-mat-thong-tin-tai-megafashion-id6">
							</a><li><a href="https://www.megafashion.vn//detail/news/chinh-sach-bao-mat-thong-tin-tai-megafashion-id6">- </a><a href="https://www.megafashion.vn/detail/news/chinh-sach-van-chuyen-hang-hoa-cua-megafashion/7">Chính sách vận chuyển</a></li>
							<li>- <a href="https://www.megafashion.vn/detail/news/chinh-sach-bao-hanh-san-pham-khi-mua-hang-tai-megafashion/9">Bảo hành và đổi trả Sản phẩm</a></li>
							
						</ul>
						
					</div>

					
				<div class="all_systems"><h3>MegaFashion - The World of Fashion</h3></div>
			<div class="footer-center">
			<ul class="fashion-social">
							<h3>Social Page</h3>
								<a target="_BLANK" href="https://m.me/megafashionofficial"><img class="facebook" src="https://www.megafashion.vn/publics/theme/images/facebook-icon.png" alt="facebook"></a>
								<a target="_BLANK" href="#"><img class="zalo" src="https://www.megafashion.vn/publics/theme/images/zalo-ft.png" alt="zalo"></a>
								<a target="_BLANK" href="https://www.youtube.com/channel/UC9vQHSsnDJLrY0_E1117b_g"><img class="youtube" src="https://www.megafashion.vn/publics/theme/images/youtube-icon.png" alt="youtube"></a>
								<a target="_BLANK" href="https://plus.google.com/u/0/116519535208090899541/"><img class="google-plus" src="https://www.megafashion.vn/publics/theme/images/google-plus.png" alt="google-plus"></a>

								
						</ul>
				<ul style="clear: both;">
					
					<li>Copyrigh 2015 megafashion.vn All Right Reserved</li>
					<li>Trụ sở: Số 337 Phố Huế - Quận Hai Bà Trưng - TP. Hà Nội</li>
					</ul>
			</div>
			</ul>
</div>
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
