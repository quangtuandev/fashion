<?php
/*
Plugin Name: three Widget
Plugin URI: https://thachpham.com
Description: Thực hành tạo widget item.
Author: Thach Pham
Version: 1.0
Author URI: http://google.com
*/
add_action( 'widgets_init', 'create_thachpham_widget' );
function create_thachpham_widget() {
        register_widget('Thachpham_Widget');
}
class Thachpham_Widget extends WP_Widget {
 
    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct() {
        parent::__construct (
            'thachpham_widget', // id của widget
            'ThachPham Widget', // tên của widget
       
            array(
                'description' => 'Mô tả của widget' // mô tả
            )
          );
    }


    function widget( $args, $instance ) {

        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 10,
            'orderby' =>'date',
            'order' => 'DESC'
        );
    
        $loop = new WP_Query( $args );
    
    ?>
    

    <div class="block_home">
		<div class="home_content">
			<div class="product-list">
				<ul>
					<h3>
						<a href="http://megafashion.vn/category/thoi-trang-nu-id50">Sản phẩm nổi bật</a>
					</h3>

					<div class="list-item">
					<?php 
						while ( $loop->have_posts() ) : $loop->the_post();
							global $product;
					?>
						<div class="item">
								<a href="<?php echo get_permalink() ;?>">
								<?php echo woocommerce_get_product_thumbnail() ;?>
									
								</a>
								<a href="<?php echo get_permalink() ;?>" class="item-big-name"><?php echo get_the_title(); ?></a>
								<span class="item-big-price"><b><?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?></b></span>
						</div>
					<?php
                		endwhile;
						wp_reset_query();
					?>
					</div>
				</ul>
			</div>
		</div>
	</div>
  
        <?php
    
    }

}
