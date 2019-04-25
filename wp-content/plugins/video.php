<?php
/*
Plugin Name: Video Widget
Plugin URI: http://google.com
Description: video trang home.
Author: quangtuandev
Version: 1.0
Author URI: http://google.com
*/

/**
 * Tạo class Video_Widget
 */
class Video_Widget extends WP_Widget {
	
	/**
	 * Thiết lập widget: đặt tên, base ID
	 */
	function Video_Widget() {
		$tpwidget_options = array(
			'classname' => 'video_widget_class', //ID của widget
			'description' => 'video trang home'
		);
		$this->WP_Widget('video_widget_id', 'Video Widget', $tpwidget_options);
	}
	
	/**
	 * Tạo form option cho widget
	 */
	function form( $instance ) {
		
		//Biến tạo các giá trị mặc định trong form
		$default = array(
            'link_1' => 'https://youtu.be/QCdckwT8aiQ',
            'link_2' => 'https://youtu.be/J4XhvcS_pCE',
		);
		
		//Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
		$instance = wp_parse_args( (array) $instance, $default);
		
		//Tạo biến riêng cho giá trị mặc định trong mảng $default
		$link_2 = esc_attr( $instance['link_2'] );
		$link_1 = esc_attr( $instance['link_1'] );
		
		//Hiển thị form trong option của widget
        echo "<p>Link youtube <input type='text' class='widefat' name='".$this->get_field_name('link_1')."' value='".$link_1."' /></p>";
		echo "<p>Link youtube <input type='text' class='widefat' name='".$this->get_field_name('link_2')."' value='".$link_2."' /></p>";        
		
		
	}
	
	/**
	 * save widget form
	 */
	
	function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
        $instance['link_1'] = strip_tags($new_instance['link_1']);
		$instance['link_2'] = strip_tags($new_instance['link_2']);
        
		return $instance;
	}
	
	/**
	 * Show widget
	 */
	
	function widget( $args, $instance ) {
		
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo $before_widget;
		
		//In tiêu đề widget
		echo $before_title.$title.$after_title;
		
        // Nội dung trong widget
        ?>
		<div class="video_home">
				<h3><a href="http://megafashion.vn/category/thoi-trang-nu-id50">VIDEO Megafashion Collection</a></h3>
		<iframe width="592" height="333" src="https://www.youtube.com/embed/QCdckwT8aiQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<iframe style="float: right;" width="592" height="333" src="https://www.youtube.com/embed/J4XhvcS_pCE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
<?php
		
		// Kết thúc nội dung trong widget
		
		echo $after_widget;
	}
	
}

/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_video_widget' );
function create_video_widget() {
	register_widget('Video_Widget');
}