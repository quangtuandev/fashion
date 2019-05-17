<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */

?>

<!-- <article id="post-<?php the_ID(); ?> hihi" <?php post_class(); ?>> -->

	<?php
	// do_action( 'storefront_single_post_top' );

	/**
	 * Functions hooked into storefront_single_post add_action
	 *
	 * @hooked storefront_post_header          - 10
	 * @hooked storefront_post_content         - 30
	 */
	// do_action( 'storefront_single_post' );

	/**
	 * Functions hooked in to storefront_single_post_bottom action
	 *
	 * @hooked storefront_post_nav         - 10
	 * @hooked storefront_display_comments - 20
	 */
	// do_action( 'storefront_single_post_bottom' );
	?>

<!-- </article> -->
<!-- #post-## -->

<div class="category-news-all">
	<div class="top-cat">
		<span style="margin-top: 20px;width: 85px;border-bottom: 1px solid #000;float: left;"></span>
		<h3>News Detail</h3>
		<span style="margin-top: 20px;width: 85px;border-bottom: 1px solid #000;float: left;"></span>
	</div>
						<div class="category_news">
					<ul style="float: left;width: 100%;margin-top: 40px;">
										</ul>
				</div>
				</div>
<div class="new-main-content">
    <div class="left-news-clod">
    	<p class="a-author__byline-prefix"><b>By</b> <a class="a-author__byline-name"><?php echo get_the_author(); ?></a></p>
    	<p class="a-author__article-date"><?php echo get_the_date(); ?></p>
	    
	</div>
	<div class="news content"> 
    	<h1 class="titleBar"><?php the_title()?></h1>
	   <h2></h2> 
		<?php the_content(); ?>
	</div> 
<div class="new-bl-right">
	<div class="baner-ads-right-detail detail-news-R1 ">
					<a target="_BLANK" href="/collections/ao-khoac-nu-id23"><img src="https://www.megafashion.vn/uploads/gallerys/20190130_1548790766_ao-khoac-nu.jpg" alt="áo khoác nữ"/></a>
					<a target="_BLANK" href="/category/vay-dam-id57"><img src="https://www.megafashion.vn/uploads/gallerys/20190130_1548791208_vay-dam-dep.jpg" alt="váy đầm đẹp"/></a>
					<a target="_BLANK" href="https://www.megafashion.vn/detail/lookbook/xu-huong-vay-dam-mua-he-2019-cung-mau-vay-dam-dep-nhat-mua-he-2019-id57"><img src="https://www.megafashion.vn/uploads/gallerys/20190302_1551529863_240x400.jpg" alt="đầm mùa hè 2019"/></a>
			</div>
<div class="most-view-news">
	<!---<ul>
				
	</ul>--->
	<div class="hot-pd-new-detail detail-news-R2">
			</div>
</div>
</div>
 	<div class="other_news">
	   <ul>
		<h3 class="title-other">View More Other News</h3>
		<div class="news-other-content" >
	   					<li>
				<a class="image-other-news" href="https://www.megafashion.vn/detail/news/megafashion-su-khac-biet-tu-cong-nghe-may-mac/7"><img alt="Megafashion sự khác biệt từ công nghệ may mặc" title="Megafashion sự khác biệt từ công nghệ may mặc" src="https://www.megafashion.vn/caches/thumbs/news/400_400_megafashioncongnghemaychuan.png"></a>
				<a class="name-other-news" href="https://www.megafashion.vn/detail/news/megafashion-su-khac-biet-tu-cong-nghe-may-mac/7">Megafashion sự khác biệt từ công nghệ may mặc</a>
			</li>
						<li>
				<a class="image-other-news" href="https://www.megafashion.vn/detail/news/mach-nho-ban-8-phong-cach-do-len-chat-lu-mua-dong-2017/6"><img alt="Mách nhỏ bạn 8 phong cách đồ len chất lừ mùa đông 2017" title="Mách nhỏ bạn 8 phong cách đồ len chất lừ mùa đông 2017" src="https://www.megafashion.vn/caches/thumbs/news/400_400_bo-suu-tap-len-2017-copy.jpg"></a>
				<a class="name-other-news" href="https://www.megafashion.vn/detail/news/mach-nho-ban-8-phong-cach-do-len-chat-lu-mua-dong-2017/6">Mách nhỏ bạn 8 phong cách đồ len chất lừ mùa đông 2017</a>
			</li>
						<li>
				<a class="image-other-news" href="https://www.megafashion.vn/detail/news/hai-mau-dong-ho-thong-minh-khong-the-thieu-trong-bo-suu-tap-phu-kien/5"><img alt="Hai mẫu đồng hồ thông minh không thể thiếu trong bộ sưu tập phụ kiện" title="Hai mẫu đồng hồ thông minh không thể thiếu trong bộ sưu tập phụ kiện" src="https://www.megafashion.vn/caches/thumbs/news/400_400_apple-watch-series-3-nike-sport-anh1-copy-12-copy0-1.jpg"></a>
				<a class="name-other-news" href="https://www.megafashion.vn/detail/news/hai-mau-dong-ho-thong-minh-khong-the-thieu-trong-bo-suu-tap-phu-kien/5">Hai mẫu đồng hồ thông minh không thể thiếu trong bộ sưu tập phụ kiện</a>
			</li>
						<li>
				<a class="image-other-news" href="https://www.megafashion.vn/detail/news/nhung-mau-tui-xach-dep-tao-nen-xu-huong-thoi-trang-2017/4"><img alt="Những mẫu túi xách đẹp tạo nên xu hướng thời trang 2017" title="Những mẫu túi xách đẹp tạo nên xu hướng thời trang 2017" src="https://www.megafashion.vn/caches/thumbs/news/400_400_anh-dai-dien.jpg"></a>
				<a class="name-other-news" href="https://www.megafashion.vn/detail/news/nhung-mau-tui-xach-dep-tao-nen-xu-huong-thoi-trang-2017/4">Những mẫu túi xách đẹp tạo nên xu hướng thời trang 2017</a>
			</li>
						<li>
				<a class="image-other-news" href="https://www.megafashion.vn/detail/news/goi-y-nhung-bo-dam-mua-thu-2017-tuyet-dep-tai-megafashion/3"><img alt="Gợi ý những bộ đầm mùa thu 2017 tuyệt đẹp tại Megafashion" title="Gợi ý những bộ đầm mùa thu 2017 tuyệt đẹp tại Megafashion" src="https://www.megafashion.vn/caches/thumbs/news/400_400_dai-dien.jpg"></a>
				<a class="name-other-news" href="https://www.megafashion.vn/detail/news/goi-y-nhung-bo-dam-mua-thu-2017-tuyet-dep-tai-megafashion/3">Gợi ý những bộ đầm mùa thu 2017 tuyệt đẹp tại Megafashion</a>
			</li>
						<li>
				<a class="image-other-news" href="https://www.megafashion.vn/detail/news/goi-y-4-phong-cach-thoi-trang-vay-xu-huong-2017-can-co-trong-tu-do-cua-ban./2"><img alt="Gợi ý 4 phong cách thời trang váy xu hướng 2017 cần có trong tủ đồ của bạn." title="Gợi ý 4 phong cách thời trang váy xu hướng 2017 cần có trong tủ đồ của bạn." src="https://www.megafashion.vn/caches/thumbs/news/400_400_anh-nen.jpg"></a>
				<a class="name-other-news" href="https://www.megafashion.vn/detail/news/goi-y-4-phong-cach-thoi-trang-vay-xu-huong-2017-can-co-trong-tu-do-cua-ban./2">Gợi ý 4 phong cách thời trang váy xu hướng 2017 cần có trong tủ đồ của bạn.</a>
			</li>
						<li>
				<a class="image-other-news" href="https://www.megafashion.vn/detail/news/6-gam-mau-khong-the-thieu-trong-tu-do-thoi-trang-cua-ban/1"><img alt="6 gam màu không thể thiếu trong tủ đồ thời trang của bạn" title="6 gam màu không thể thiếu trong tủ đồ thời trang của bạn" src="https://www.megafashion.vn/caches/thumbs/news/400_400_02_thoi-trang-megafashion-copy-1.png"></a>
				<a class="name-other-news" href="https://www.megafashion.vn/detail/news/6-gam-mau-khong-the-thieu-trong-tu-do-thoi-trang-cua-ban/1">6 gam màu không thể thiếu trong tủ đồ thời trang của bạn</a>
			</li>
				  	 </ul>
	   </div>
	</div>
			</div>
		</div>


</div>
	</div>
</div>
