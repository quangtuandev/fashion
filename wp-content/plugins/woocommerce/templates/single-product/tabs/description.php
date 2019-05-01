<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) ) );

?>

<?php if ( $heading ) : ?>
  <!-- <h2><?php echo $heading; ?></h2> -->
<?php endif; ?>

<?php the_content(); ?>

<img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" class="img-responsive" alt=""/>
<?php
global $product;

$attachment_ids = $product->get_gallery_attachment_ids();

foreach( $attachment_ids as $attachment_id ) {
    $image_link = wp_get_attachment_url( $attachment_id );
    ?>
    <img src="<?php echo $image_link;?>" class="img-des" alt="" srcset=""> 
    <?php
}
?>