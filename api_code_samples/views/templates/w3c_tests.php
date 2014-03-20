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
 * Spaceship API's sub-View for the first generation's w3c badge(s)
 *
 */
?>
<!-- W3C badges -->
<div style="width: 415px; ">

<!--
<div style="">
<small>
This site meets W3C Standards for valid XHTML + CSS <br />
Click each badge to see the specific validation results for this page:<br />
</small>
</div>
-->

<div style="float: left; padding: 0px 20px 0px 0px ;  ">
<!-- xhtml text badge -->
<a href="http://validator.w3.org/check?verbose=1&amp;uri=<?php print $pages['URL']; ?>" target="_blank" title="Valid XHTML"><img src="http://spaceshipapi.com/images/common/w3c/80_w3c_xhtml_1_0.png" alt="Valid XHTML" /></a>
</div>

<?php /* 
<div style="float: left; padding: 0px 20px 0px 0px ;  ">
<!-- css text badge -->
<a href="http://jigsaw.w3.org/css-validator/validator?profile=css2&amp;warning=2&amp;uri=<?php print $pages['URL']; ?>" target="_blank" title="Valid CSS"><img src="http://spaceshipapi.com/images/common/w3c/80_w3c_css.png" alt="Valid CSS" /></a>
</div>
*/ ?>

<div class="clearfix"></div>

<br />
</div>
<!-- end W3C badge wrap -->


