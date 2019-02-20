<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<form action="" method="POST" class="form email-subscription-form">
<div class="input-group">
                         
	 <input type="email" class="form-control" placeholder="आफ्नो इमेल प्रविष्ट गर्नुहोस्" name="subscription-email">
                          <span class="input-group-btn">
                           
							    <?php wp_nonce_field( 'email_subscription', 'email_subscription_nonce' ); ?>
                <input type="submit" class="btn btn-default" name="subscribe" value="पठाउनु होस् !" />
                          </span>
                        </div><!-- /input-group -->
   </form>