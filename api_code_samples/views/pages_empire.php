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
 * Spaceship API's pages_empire View 
 *
 * This is the top level view for the main pages throughout the empire
 *
 */
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php print $pages['title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="<?php print $pages['keywords']; ?>" />
  <meta name="description" content="<?php print $pages['description']; ?>" />
  <meta name="author" content="Tamara Jean (TJ) Fredrikson AKA WEwiHaPaHE" />
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="<?php print base_url('common/'); ?>less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="<?php print base_url('common/'); ?>less/responsive.less" type="text/css" /-->
	<!--script src="<?php print base_url('common/'); ?>js/less-1.3.3.min.js"></script-->
	<!--append '#!watch' to the browser URL, then refresh the page. -->
	
	<link href="<?php print base_url('common/'); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php print base_url('common/'); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php print base_url('common/'); ?>css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <!--
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php print base_url('common/'); ?>img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print base_url('common/'); ?>img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print base_url('common/'); ?>img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php print base_url('common/'); ?>img/apple-touch-icon-57-precomposed.png">
  -->
  <link rel="shortcut icon" href="<?php print base_url('common/'); ?>images/favicon.ico">
  
	<script type="text/javascript" src="<?php print base_url('common/'); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php print base_url('common/'); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php print base_url('common/'); ?>js/scripts.js"></script>

	<script src="<?php print base_url('common/'); ?>js/video.js" type="text/javascript"></script>
</head>

<body style="background-color: #000;">
<div class="container-fluid" style="max-width: 1024px;">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container-fluid">
						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="#" class="brand"><?php print $pages['title']; ?></a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active">
									<a href="http://wewihapahe.com">The Empire</a>
								</li>
								<li>
									<a href="http://spaceshipapi.com">The Spaceship API</a>
								</li>
								<li>
									<a href="http://snazifier.com">The Snazifier</a>
								</li>
								<li>
									<a href="http://oneofthesethings.com">One of These Things</a>
								</li>
							</ul>
							<!--<a class="btn btn-primary" href="http://snazifier.com/app" target="_blank">login</a>-->
							<ul class="nav pull-right">
								<li>
									<a href="http://snazifier.com/app" target="_blank">Login</a>
								</li>
								<li class="divider-vertical">
								</li>
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">More<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<?php print $saga_links_divider; ?>
									</ul>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="page-header">
				<h1>
					<?php print $pages['headline']; ?> <small><?php print $pages['tagline1']; ?> <?php if(!empty($pages['tagline2'])): ?>.:. <?php print $pages['tagline2']; ?><?php endif; ?></small>
				</h1>
			</div>


			<div class="row-fluid">
				<div class="span12">
					
					<!-- Start EasyHtml5Video.com BODY section -->
					<div id="easyhtml5video" style="position:relative;width:1024px;height:576px;">
						<video id="video_1" autoplay="autoplay" poster="<?php print base_url('common/'); ?>videos/Rouven_copyrightdownloopscom.jpg" title="Rouven by DownLoops.com" loop="loop" onended="var v=this;setTimeout(function(){v.play()},300)">
							<source src="<?php print base_url('common/'); ?>videos/Rouven_copyrightdownloopscom.webm" type="video/webm" />
							<source src="<?php print base_url('common/'); ?>videos/Rouven_copyrightdownloopscom.ogg" type="video/ogg" />
							<source src="<?php print base_url('common/'); ?>videos/Rouven_copyrightdownloopscom.mp4" />
							<source src="<?php print base_url('common/'); ?>videos/html5video/Rouven_copyrightdownloopscom.m4v" type="video/mp4" />
							<object type="application/x-shockwave-flash" data="<?php print base_url('common/'); ?>videos/html5video/flashfox.swf" style="position:relative;">
								<param name="movie" value="<?php print base_url('common/'); ?>videos/html5video/flashfox.swf" />
								<param name="allowFullScreen" value="true" />
								<param name="flashVars" value="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=true&amp;poster=<?php print base_url('common/'); ?>videos/html5video/Rouven_copyrightdownloopscom.jpg&amp;src=Rouven_copyrightdownloopscom.m4v" />
								<embed src="<?php print base_url('common/'); ?>videos/html5video/flashfox.swf" style="position:relative;"  flashVars="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=true&amp;poster=<?php print base_url('common/'); ?>videos/html5video/Rouven_copyrightdownloopscom.jpg&amp;src=Rouven_copyrightdownloopscom.m4v"	allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en" />
								<img alt="Rouven_copyrightdownloopscom" src="<?php print base_url('common/'); ?>videos/Rouven_copyrightdownloopscom.jpg" style="position:absolute;left:0;" width="1024" height="576" title="Video playback is not supported by your browser" />
							</object>
						</video>
					</div>
					<script src="index.files/html5video/html5ext.js" type="text/javascript"></script>
					<!-- End EasyHtml5Video.com BODY section -->

					<div id="the_girls" style="position:relative; width:1024px; height:576px; margin-top: -576px;">

						<div style="width:372px; float: left; position:relative; z-index: 2;">
							<img src="<?php print base_url('common/'); ?>images/prestomanifesto_new.png" alt="Presto Manifesto" style="width:372px; height:576px;" />
						</div>

						<div style="width:575px; float: left; margin-left: -95px; position:relative; z-index: 1; ">
							<img src="<?php print base_url('common/'); ?>tagul/circle_576.png" alt="The Empire's Tagul" style="width:575px; height:576px;" />
						</div>

						<div style="width:285px; float: left; margin-left: -113px; position:relative; z-index: 2;">
							<img src="<?php print base_url('common/'); ?>images/wewihapahe_new.png" alt="WEwiHaPaHE" style="width:285px; height:576px;" />
						</div>

						<br style="clear: both;" />

					</div>

					<div style="width: 1024px; ">

						<div style="float: left; width: 25%; ">
						  word cloud created at <a href="http://tagul.com" target="_blank">tagul.com</a>
						</div>

						<div style="float: left; width: 50%; ">
							&nbsp;
						</div>

						<div style="float: left; width: 25%; text-align: right;">
							<div id="video-controls">
							  video background by <a href="http://downloops.com" target="_blank">downloops.com</a><br />
							  <!-- Video Controls -->
							  <button type="button" id="full-screen" style="font-size: .75em;">Show Video Full-Screen</button>
							</div>
						</div>

						<br style="clear: both;" />

					</div>

				</div>
			</div>
		</div>

<?php if(!empty($snippets)) : ?>
	<?php 
		$num_snippets = count($snippets);
		$current_count = 0;
		$snippet_array1 = Array();
		$snippet_array2 = Array();
		$snippet_array3 = Array();
		foreach($snippets as $snippet)
		{
			if( empty($snippet['snippet_text']) && !empty($snippet['name']) )
				$snippet['snippet_text'] = $snippet['name'];
			if($current_count < $num_snippets/3)
			{
				$snippet_array1[] = $snippet;
			}
			elseif($current_count < ($num_snippets/3)*2)
			{
				$snippet_array2[] = $snippet;
			}
			else
			{
				$snippet_array3[] = $snippet;
			}
			$current_count++;
		}
	?>

		<div class="row-fluid">
			<div class="span12">
				<div class="row-fluid">
					<div class="span12">
						<h2><?php print $snippets_title; ?></h2>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span4">
						<ul>
						<?php 
							foreach($snippet_array1 as $snippet)
							{
								print "<li>". $snippet['snippet_text'] . "</li>"; 
							}
						?>
						</ul>
					</div>
					<div class="span4">
						<ul>
						<?php 
							foreach($snippet_array2 as $snippet)
							{
								print "<li>".$snippet['snippet_text'] . "</li>"; 
							}
						?>
						</ul>
					</div>
					<div class="span4">
						<ul>
						<?php 
							foreach($snippet_array3 as $snippet)
							{
								print "<li>".$snippet['snippet_text'] . "</li>"; 
							}
						?>
						</ul>
					</div>
				</div>
			</div>
		</div>
<?php endif; ?>


		<div class="row-fluid">
			<div class="span8">
				<h4 class="top_rule">
					Introducing the WEwiHaPaHE Empire, featuring:
				</h4>
				<div class="row-fluid">
					<div class="span6">
						<h3 class="text-center">
							WEwiHaPaHE
							<a href="http://wewihapahe.com"><img alt="WEwiHaPaHE" src="<?php print base_url('common/'); ?>images/wewihapahe_240.jpeg" class="img-rounded"></a>
						</h3>
						<p class="text-left">
							<a href="http://wewihapahe.com">WEwiHaPaHE</a> (Web Engineer with Hair Past Her Elbows) is a RockStar, President, Astronaut, and Spaceship Captain who saves the human race in the first movie, Evacuation Earth.  Her spaceship is a used Army ship with a lead based hull.  It's an Entertainment ship and has the largest holodeck known to mankind.  And EVERYBODY knows: Tuesdays 2-4pm its California hour in the holodeck...
						</p>
					</div>
					<div class="span6">
						<h3 class="text-center">
							Presto Manifesto
							<a href="http://prestomanifesto.com"><img alt="Presto Manifesto" src="<?php print base_url('common/'); ?>images/presto_manifesto_240.jpeg" class="img-rounded"></a>
						</h3>
						<p class="text-left">
							<a href="http://prestomanifesto.com">Presto Manifesto</a> is WEwiHaPaHE's project manager.  She was mentioned during the first 3 movies, but had never been seen and people were starting to believe she was a figment of WEwiHaPaHE's imagination.  She makes her first appearance in the 4th movie, but she's awfully quiet - we're still awaiting her first words.
						</p>
					</div>
				</div>
				<h4>
					and the rest of the gang:
				</h4>
				<div class="row-fluid">
					<div class="span6">
						<ul>
							<li>
								<a href="http://superherojean.com/">Super Hearo Jean</a>
							</li>
							<li>
								<a href="http://bubetbobabowhobibibo.com/">BuBeTBoBaBoWhoBIBiBo</a>
							</li>
							<li>
								<a href="http://bubetbobabowhobibibo.com/violet">Violet the Butterfly</a>
							</li>
							<li>
								<a href="http://bubetbobabowhobibibo.com/seraphina">Seraphina the ShapeShifter</a>
							</li>
							<li>
								<a href="http://bubetbobabowhobibibo.com/samuel">Samuel the Great</a>
							</li>
						</ul>
					</div>
					<div class="span6">
						<ul>
							<li>
								<a href="http://samthestatistician.com/">Samantha the Statistician</a>
							</li>
							<li>
								<a href="http://samthestatistician.com/samson">Sam's Son Samson</a>
							</li>
							<li>
								<a href="http://ultimatumitizers.com">Ultimatumitizers</a>
							</li>
							<li>
								<a href="http://ultimatumitizers.com/mrandmrsultimatumer">Mr and Mrs Ultimatumer</a>
							</li>
							<li>
								<a href="http://ultimatumitizers.com/mrorwhatultimatum">Mr OrWhat Ultimatum</a>
							</li>
							<li>
								<a href="http://ultimatumitizers.com/littlemissultimatum">Little Miss Ultimatum</a>
							</li>
						</ul>
					</div>
				</div>
				<h5>
					new characters added regularly...
				</h5>
				<div class="row-fluid">
					<div class="span6">
						<h3>
							the saga:
						</h3>
						<ul>
							<?php print $saga_links; ?>
						</ul>
					</div>
					<div class="span6">
						<h3>
							and...
						</h3>
						<ul>
							<li>
								<a href="http://testingapparatus.org/">Testing Apparatus</a>
							</li>
							<li>
								<a href="http://imthekingoffootball.com/">I'm the King of Football</a>
							</li>
							<li>
								<a href="http://alexsmithrocks.com/">Alex Smith Rocks</a>
							</li>
							<li>
								<a href="http://alexsmithrules.com/">Alex Smith Rules</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class="row-fluid">
					<div class="span12">
						<h4  class="text-center top_rule">
							The Spaceship API
							<a href="http://spaceshipapi.com"><img alt="The Spaceship API" src="<?php print base_url('common/'); ?>images/spaceshipapi.jpg" class="img-rounded"></a>
						</h4>
						<p class="text-left">
							<a href="http://spaceshipapi.com">The Spaceship API</a> exposes the Empire's database.  The entire Empire is served up from a single code base and a single database - this makes the Empire scalable and super easy to maintain.  View the API documentation at
							<a href="http://docs.spaceshipapi.apiary.io/" target="_blank">docs.spaceshipapi.apiary.io</a>
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<h4  class="text-center top_rule">
							The Snazifier
							<a href="http://snazifier.com"><img alt="The Snazifier" src="<?php print base_url('common/'); ?>images/thesnazifier.jpg" class="img-rounded"></a>
						</h4>
						<p class="text-left">
							<a href="http://snazifier.com">The Snazifier</a> is where you go to get One of These Things&trade;.  The Snazifier is the back end, One of These Things is the front end.  Put your thinking cap on and Snazify your own One of These Things.
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<h4  class="text-center top_rule">
							One of These Things
							<a href="http://oneofthesethings.com"><img alt="One of These Things" src="<?php print base_url('common/'); ?>images/oneofthesethings.jpg" class="img-rounded"></a>
						</h4>
						<p class="text-left">
							Do you have <a href="http://oneofthesethings.com">One of These Things</a>?  The kids asked for it, so we built it.  Go to the <a href="http://snazifier.com">The Snazifier</a> and get your very own One of These Things!
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid" style="max-width: 1024px;">
			<div class="span12 top_rule" style="padding-bottom: -10px;">

				<div class="row-fluid">
					<div class="span6">
						<div id="mailchimp">
							<?php print $mailchimp;  ?>
						</div>
					</div>
					<div class="span6">
						<br />
						<blockquote class="pull-right">
							<p>
								Expect the Best.  Plan for the Worst.
							</p> <small>Unknown FEMA Employee <!--<cite>Source Title</cite>--></small>
						</blockquote>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span12 top_rule" style="margin-top: 0px;">
						<ul class="inline">
							<?php print $saga_links_divider; ?>
						</ul>

						<?php if($display_first_gen): ?>
						this site's past lives:
						<ul class="inline" style="display: inline; ">
							<li><a href="http://<?php print $site_domain; ?>/index.php/pages/first_generation/">1st generation</a></li>
							<?php /* <li><a href="<?php print base_url('index.php/pages/first_generation/'); ?>">1st generation</a></li> */ ?>
						</ul>
						<?php endif; ?>

						<br />
						<br />
						<ul class="inline" style="display: inline; ">
							<li><a href="https://wewihapahe.fogbugz.com/default.asp?pg=pgPublicEdit" target="_blank">report an issue</a></li>
						</ul>

						<div>
							<br />
							<?php print $production; ?>
						</div>

						<div id="copyright">
							<?php print $copyright;  ?>
							<br />
							<br />
						</div>

						<div class="text-right">
							<a href="http://validator.w3.org/check?verbose=1&amp;uri=<?php print "http://".$site_domain.$uri_of_this_page; ?>" target="_blank" title="Valid XHTML"><img src="<?php print $URL_to_site_files; ?>/images/common/w3c/html5_logo_1black_55.gif" alt="Valid XHTML" /></a>
							<br />
							<br />
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- load placement for account: tjinteractive, site: WEwiHaPaHE, size: 125x125 - Square Button -->
<div id="azk25183"></div>

<?php print $google_analytics;  ?>
</body>
</html>
