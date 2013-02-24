<?php
/**
 * Elgg header contents
 * This file holds the header output that a user will see
 *
 * @package Elgg
 * @subpackage Core
 * @link  http://satheesh.anushaktinagar.net
 **/

?>

<div id="page_container">
<div id="page_wrapper">

<div id="layout_header">
<div id="wrapper_header">
	<!-- display the page title -->
	<h1><a href="<?php echo $vars['url']; ?>"><?php echo $vars['config']->sitename; ?></a></h1>
</div><!-- /#wrapper_header -->
</div><!-- /#layout_header -->

<?php
	if(get_plugin_setting("display_topadvt", "advt") != "no")
	{
include "ads-top.php";
	}

?>
