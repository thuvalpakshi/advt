<?php
/**
 * Elgg spotlight
 * The spotlight area that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 * @link  http://satheesh.anushaktinagar.net
 */
?>

<div id="layout_spotlight">
<div id="wrapper_spotlight">

<div class="collapsable_box no_space_after">
	<div class="collapsable_box_header">
<h1>Our Sponsors</h1>
	</div>
	<div class="collapsable_box_content">
<center>
<?php

$top_content = get_plugin_setting('top_content','advt');
	    echo $top_content;
            
?>
</center>
</div><!-- /.collapsable_box_content -->  
</div><!-- /.collapsable_box -->
</div><!-- /#wrapper_spotlight -->
</div><!-- /#layout_spotlight -->