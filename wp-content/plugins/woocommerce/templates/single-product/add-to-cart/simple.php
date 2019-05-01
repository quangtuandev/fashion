<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>
<!-- <button id="myBtn">MUA NGAY
</button> -->
<div class="reshoping tab_top">
	<ul class="policysale HCM" style="margin-bottom: 0px;background: #edd47b;padding-bottom: 5px;background-size: 129% auto;">
		<h3>Mua hàng tại Tp.HCM</h3>
		<li class="shopping_addr_1" style="margin-top: 25px;line-height: 25px;"><span>Add 1</span><strong>Số 26 Hồ Văn Huê </strong> - Quận Phú Nhuận - <b>Tp.HCM</b></li>
		<li style=""><i class="icon-poltick"></i>Hotline <strong>0938.228.365</strong></li>
	</ul>
</div>

<div id="myBtn" class="ui-btn button-add-to-cart" >
	<img src="https://www.megafashion.vn/images/add-to-cart-white.png" alt="add to cart icon">
		Mua ngay
		<span>Đặt mua và nhận hàng (COD) tại nhà</span>
</div>

<a target="_blank" href="https://m.me/olgafashionvn">
<div class="shopping_GH">
	<img style="width: 33px;float: left;margin-top: 10px;margin-left: 10px;margin-bottom: 0px;border-radius: 3px;" src="https://www.megafashion.vn/images/icon-fb-chat-des.png">
	<b style="float: left;width: 190px;font-size: 12px;margin-left: 9px;margin-top: 10px;text-align: left;">Chat Qua Facebook</b>
	<p style="float: left;font-size: 10px;text-transform: none;width: 190px;margin-top: 3px;margin-bottom: 10px;letter-spacing: 1px;text-align: left;margin-left: 10px;">	Hỗ trợ trực tuyến Olgafashion</p>
</div>
</a>


	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>THÔNG TIN ĐẶT HÀNG CỦA BẠN</h2>
    </div>
    <div class="modal-body">
		<div class="modal-body-inf">
		<img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" class="img-popup" alt=""/>
		<div class="popup">
		<span class="pop-title"><?php echo get_the_title($loop->post->ID); ?>

				
		</span>
		<span class="pop-price"><?php echo $product->get_price(); ?> đ</span>
		
		</div>
		
		</div>

	<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<?php
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input( array(
			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
			'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
		) );

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>
    </div>
    <!-- <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div> -->
  </div>

</div>
	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
