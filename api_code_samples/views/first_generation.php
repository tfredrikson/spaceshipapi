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
 * Spaceship API's first_generation View 
 *
 * This is the top level view for the first_generation pages
 *
 */
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php print $pages['title']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="<?php print base_url('common/'); ?>css/style.css" rel="stylesheet" />
	<link href="<?php print $style_url; ?>" rel="stylesheet" type="text/css" />
	<meta name="keywords" content="<?php print $pages['keywords']; ?>" />
	<meta name="description" content="<?php print $pages['description']; ?>" />
	<meta name="author" content="Tamara Jean (TJ) Fredrikson AKA WEwiHaPaHE" />
    <link rel="shortcut icon" href="<?php print base_url('common/'); ?>images/favicon.ico" />
</head>
<body>
<div id="outerWrap">
<div id="innerWrap">

	<div id="main_graphic">
	</div>
	<div id="content">
	
		<div id="contentTop">
			<br />
			<br />
		</div>

		<div id="contentMid">

			this is the first generation of this site
			<br />
			for the latest version go to <a href="http://<?php print $site_domain; ?>"><?php print $site_domain; ?></a></em>
			<br />


			<h1><?php print $pages['headline']; ?> <br />
			<span class="explanation"><em><?php print $pages['tagline1']; ?></em></span>
			</h1>
			
			<em><?php print $pages['tagline2']; ?></em>


			<br />

			
			<img id="wordle_img" src="<?php print $wordle_url; ?>" alt="Wordle graphic with words: <?php print $pages['keywords']; ?>" />

			<div style="font-weight: bold;">
				wordle created at <a href="http://www.wordle.net/" target="_blank">wordle.net</a>
			</div>


			<br />
			<br />

			<?php print $production; ?>

			<br />
			
			<div id="copyright">
				<?php print $copyright;  ?>
			</div>

			<br />
			<br />

		</div>

	</div>
	<br style="clear: both;" />


	<div>
		<div id="wordle_words">
			Factoids relevant to this site:<br /><br /> 
			<?php print $wordle_html; ?>
		</div>
		<div id="see_also">
			<?php print $the_links; ?>
		</div>
		<br style="clear: both;" />
	</div>

	<div id="w3cWrap" style="">


			this is the first generation of this site
			<br />
			for the latest version go to <a href="http://<?php print $site_domain; ?>"><?php print $site_domain; ?></a></em>
			<br />


		<br />
		<br />
		<div id="mailchimp" style="font-size: .8em;">
			<?php print $mailchimp;  ?>
		</div>


		<br />
		<br />

	<?php print $w3c_tests; ?>



		<br />
		<br />



	</div><!-- end w3c wrap -->


	<!--<p class="footer"><small>Page rendered in <strong>{elapsed_time}</strong> seconds</small></p>-->

</div>
</div>
<?php print $google_analytics;  ?>
</body>
</html>