<?php
/**
 * The javascript-based template for displayed javascript generated html code
 *
 * This template can be overridden by copying it to yourtheme/tm-extra-product-options/tc-js-templates.php
 *
 * NOTE that we may need to update template files and you
 * (the plugin or theme developer) will need to copy the new files
 * to your theme or plugin to maintain compatibility.
 *
 * @see 		https://codex.wordpress.org/Javascript_Reference/wp.template
 * @author 		themeComplete
 * @package 	WooCommerce Extra Product Options/Templates
 * @version     4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<script type="text/template" id="tmpl-tc-cart-options-popup">
    <div class='header'>
        <h3>{{{ data.title }}}</h3>
    </div>
    <div id='{{{ data.id }}}' class='float_editbox'>{{{ data.html }}}</div>
    <div class='footer'>
        <div class='inner'>
            <span class='tm-button button button-secondary button-large details_cancel'>{{{ data.close }}}</span>
        </div>
    </div>
</script>
<script type="text/template" id="tmpl-tc-lightbox">
    <div class="tc-lightbox-wrap">
        <span class="tc-lightbox-button tcfa tcfa-search tc-transition tcinit"></span>
    </div>
</script>
<script type="text/template" id="tmpl-tc-lightbox-zoom">
    <span class="tc-lightbox-button-close tcfa tcfa-close"></span>
    {{{ data.img }}}
</script>
<script type="text/template" id="tmpl-tc-final-totals">
    <dl class="tm-extra-product-options-totals tm-custom-price-totals">
        <# if (data.show_unit_price==true){ #><?php echo apply_filters('wc_epo_template_before_unit_price','');?>
            <dt class="tm-unit-price">{{{ data.unit_price }}}</dt>
            <dd class="tm-unit-price">
                <span class="price amount options">{{{ data.formatted_unit_price }}}</span>
            </dd><?php echo apply_filters('wc_epo_template_after_unit_price','');?>
        <# } #>
        <# if (data.show_options_total!==true){ #><?php echo apply_filters('wc_epo_template_before_option_total','');?>
            <dt class="tm-options-totals">{{{ data.options_total }}}</dt>
            <dd class="tm-options-totals">
                <span class="price amount options">{{{ data.formatted_options_total }}}</span>
            </dd><?php echo apply_filters('wc_epo_template_after_option_total','');?>
        <# } #>
        <# if (data.show_fees_total==true){ #><?php echo apply_filters('wc_epo_template_before_fee_total','');?>
            <dt class="tm-fee-totals">{{{ data.fees_total }}}</dt>
            <dd class="tm-fee-totals">
                <span class="price amount fees">{{{ data.formatted_fees_total }}}</span>
            </dd><?php echo apply_filters('wc_epo_template_after_fee_total','');?>
        <# } #>
        <# if (data.show_extra_fee==true){ #><?php echo apply_filters('wc_epo_template_before_extra_fee','');?>
            <dt class="tm-extra-fee">{{{ data.extra_fee }}}</dt>
            <dd class="tm-extra-fee">
                <span class="price amount options extra-fee">{{{ data.formatted_extra_fee }}}</span>
            </dd><?php echo apply_filters('wc_epo_template_after_extra_fee','');?>
        <# } #>
        <# if (data.show_final_total==true){ #><?php echo apply_filters('wc_epo_template_before_final_total','');?>
            <dt class="tm-final-totals"></dt>
            <dd class="tm-final-totals">
                <span class="price-total"><svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="10.000000pt" height="10.000000pt" viewBox="0 0 1230.000000 1280.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M11470 12790 c-599 -46 -909 -119 -1270 -300 -220 -110 -505 -292
-762 -487 -184 -140 -261 -215 -294 -288 -41 -94 -129 -214 -379 -515 -709
-855 -2058 -2659 -3166 -4235 -542 -770 -735 -1061 -930 -1396 -124 -215 -160
-271 -264 -409 -87 -116 -292 -423 -525 -785 -327 -509 -473 -719 -642 -920
-121 -144 -106 -140 -171 -43 -67 102 -106 180 -187 373 -205 490 -513 1142
-610 1289 -145 221 -291 284 -630 273 -265 -9 -475 -68 -770 -216 -384 -193
-699 -463 -810 -696 -122 -255 -69 -573 300 -1800 351 -1169 523 -1632 746
-2012 114 -195 257 -418 278 -436 56 -48 231 -96 507 -142 359 -59 701 -59
1056 1 298 49 498 128 596 234 146 157 391 499 934 1305 340 504 513 753 592
850 79 96 104 134 216 330 164 285 387 620 954 1430 1153 1649 2600 3623 2920
3985 102 115 125 145 326 435 227 326 340 476 443 587 145 157 341 398 737
908 321 414 601 760 755 935 318 362 738 975 834 1216 71 181 57 313 -42 414
-44 45 -134 89 -217 105 -78 15 -378 21 -525 10z"/>
</g>
</svg>  Tổng đơn hàng: </span>
                <span class="price amount final">{{{ data.formatted_final_total }}}</span>
            </dd><?php echo apply_filters('wc_epo_template_after_final_total','');?>
        <# } #>
        <# if (data.show_sign_up_fee==true){ #><?php echo apply_filters('wc_epo_template_before_sign_up_fee','');?>
            <dt class="tm-subscription-fee">{{{ data.sign_up_fee }}}</dt>
            <dd class="tm-subscription-fee">
                <span class="price amount subscription-fee">{{{ data.formatted_subscription_fee_total }}}</span>
            </dd><?php echo apply_filters('wc_epo_template_after_sign_up_fee','');?>
        <# } #>
    </dl>
</script>
<script type="text/template" id="tmpl-tc-price">
    <span class="amount">{{{ data.price.price }}}</span>
</script>
<script type="text/template" id="tmpl-tc-sale-price">
    <del>
        <span class="tc-original-price amount">{{{ data.price.original_price }}}</span>
    </del>
    <ins>
        <span class="amount">{{{ data.price.price }}}</span>
    </ins>
</script>
<script type="text/template" id="tmpl-tc-section-pop-link">
    <div id="tm-section-pop-up" class="tm-extra-product-options flasho tm_wrapper tm-section-pop-up single tm-animated appear">
        <div class='header'><h3>{{{ data.title }}}</h3></div>
        <div class="float_editbox" id="temp_for_floatbox_insert"></div>
        <div class='footer'>
            <div class='inner'>
                <span class='tm-button button button-secondary button-large details_cancel'>{{{ data.close }}}</span>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="tmpl-tc-floating-box-nks"><# if (data.values.length) {#>
    {{{ data.html_before }}}
    <div class="tc-row tm-fb-labels">
        <span class="tc-cell tc-col-3 tm-fb-title">{{{ data.option_label }}}</span>
        <span class="tc-cell tc-col-3 tm-fb-value">{{{ data.option_value }}}</span>
        <span class="tc-cell tc-col-3 tm-fb-quantity">{{{ data.option__qty }}}</span>
        <span class="tc-cell tc-col-3 tm-fb-price">{{{ data.option_lpric }}}</span>
    </div>
    <# for (var i = 0; i < data.values.length; i++) { #>
    <# if (data.values[i].label_show=='' || data.values[i].value_show=='') {#>
        <div class="tc-row">
            <# if (data.values[i].label_show=='') {#>
                <span class="tc-cell tc-col-3 tm-fb-title">{{{ data.values[i].title }}}</span>
                <# } #>
                    <# if (data.values[i].value_show=='') {#>
                        <span class="tc-cell tc-col-3 tm-fb-value">{{{ data.values[i].value }}}</span>
                        <# } #>
                            <span class="tc-cell tc-col-3 tm-fb-quantity">{{{ data.values[i].quantity }}}</span>
                            <span class="tc-cell tc-col-3 tm-fb-price">{{{ data.values[i].price }}}</span>
        </div>
        <# } #>
            <# } #>
                {{{ data.html_after }}}
                {{{ data.totals }}}
                <# }#></script>
<script type="text/template" id="tmpl-tc-floating-box"><# if (data.values.length) {#>
    {{{ data.html_before }}}
    <dl class="tm-fb">
        <# for (var i = 0; i < data.values.length; i++) { #>
        <# if (data.values[i].label_show=='') {#>
            <dt class="tm-fb-title">{{{ data.values[i].title }}}</dt>
            <# } #>
                <# if (data.values[i].value_show=='') {#>
                    <dd class="tm-fb-value">{{{ data.values[i].value }}}</dd>
                    <# } #>
                        <# } #>
    </dl>
    {{{ data.html_after }}}
    {{{ data.totals }}}
    <# }#></script>
<script type="text/template" id="tmpl-tc-chars-remanining">
    <span class="tc-chars">
		<span class="tc-chars-remanining">{{{ data.maxlength }}}</span>
		<span class="tc-remaining"> {{{ data.characters_remaining }}}</span>
	</span>
</script>
<script class="tm-hidden" type="text/template" id="tmpl-tc-formatted-price"><?php echo $formatted_price;?></script>
<script type="text/template" id="tmpl-tc-upload-messages">
    <div class="header">
        <h3>{{{ data.title }}}</h3>
    </div>
    <div class="float_editbox" id="temp_for_floatbox_insert">
        <div class="tc-upload-messages">
            <div class="tc-upload-message">{{{ data.message }}}</div>
            <# for (var i in data.files) {
                    if (data.files.hasOwnProperty(i)) {#>
                <div class="tc-upload-files">{{{ data.files[i] }}}</div>
                <# }
                        }#>
        </div>
    </div>
    <div class="footer">
        <div class="inner">
            &nbsp;
        </div>
    </div>
</script>