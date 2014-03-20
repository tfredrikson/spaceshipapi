 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 *
 * The Spaceship API uses the CodeIgnitor Framework  
 * Copyright (c) 2008 - 2011, EllisLab, Inc. All rights reserved.
 *
 */

// no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Spaceship API's sub-View for the mail chimp mailing list signup
 *
 */
?>

<!-- Begin MailChimp Signup Form -->
<!--<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">-->
<div id="mc_embed_signup">
	<form action="http://tjinteractive.us7.list-manage.com/subscribe/post?u=f6c3f5dac6291ab785d1ad860&amp;id=0052373f0f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
		<label for="mce-EMAIL">Want updates? Join the Mailing List:</label>
		<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required />
		<input type="hidden" value="<?php print $site_domain; ?>" name="REFERRER" id="mce-REFERRER" />
		<input type="submit" value="GO!" name="subscribe" id="mc-embedded-subscribe" class="button" style="height: 33px; margin-bottom: 12px;" />
	</form>
</div>

<!--End mc_embed_signup-->
