<?php
/**
 * Checkout terms and conditions checkbox
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( wc_get_page_id( 'terms' ) > 0 && apply_filters( 'woocommerce_checkout_show_terms', true ) ) : ?>
<div id="important-note-2">
	<p><?php _e('Important!', 'woocommerce')?></p>
	<p><?php _e('safe2choose helps provide access to abortion pills by working with distribution centers that use different mailing service companies. Once a distribution center sends a package, safe2choose does not have control over the delivery process.', 'woocommerce'); ?></p>
	<p><?php _e('When the package has arrived at its destination, your local postal service is in charge of distributing it. This process will depend on local law and practices.', 'woocommerce'); ?></p>
</div>

	<?php do_action( 'woocommerce_checkout_before_terms_and_conditions' ); ?>
	<p class="form-row terms wc-terms-and-conditions">
		<input type="checkbox" class="input-checkbox" name="terms" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) ), true ); ?> id="terms" />
		<label for="terms" class="checkbox"><?php printf( __( 'I&rsquo;ve read and accept the <a href="%s" target="_blank">terms &amp; conditions</a>', 'woocommerce' ), esc_url( wc_get_page_permalink( 'terms' ) ) ); ?> <span class="required">*</span></label>
		<input type="hidden" name="terms-field" value="1" />
	</p>
	<?php do_action( 'woocommerce_checkout_after_terms_and_conditions' ); ?>
<?php endif; ?>
