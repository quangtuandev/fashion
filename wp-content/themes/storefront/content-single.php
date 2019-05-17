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

		<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						<li>
				<a class="image-other-news" href="<?php the_permalink() ?>">
				<?php echo get_the_post_thumbnail( $post_id,'thumbnail', array( 'class' => 'attachment-woocommerce_thumbnail size-woocommerce_thumbnail' ) ); ?>
				
				<!-- <img alt="Mách nhỏ bạn 8 phong cách đồ len chất lừ mùa đông 2017" title="Mách nhỏ bạn 8 phong cách đồ len chất lừ mùa đông 2017" src="https://www.megafashion.vn/caches/thumbs/news/400_400_bo-suu-tap-len-2017-copy.jpg"> -->
				</a>
				<a class="name-other-news" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</li>


					<?php 
			endwhile;
			wp_reset_postdata();
			?>
		  	 </ul>
	   </div>
	</div>
			</div>
		</div>


</div>
	</div>
</div>

